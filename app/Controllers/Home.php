<?php namespace App\Controllers;
	use App\Models\Usuarios;

class Home extends BaseController
{
	public function index()
	{

		$mensaje = session('mensaje');
		return view('login',["mensaje" => $mensaje]);

	}

	
	public function inicio(){
		
		$Crud = new GastosDiarios();
		$datos = $Crud->listarGastos();
		$mensaje = session('mensaje');
		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('inicio', $data);
	}

	public function login(){
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

		$Usuario = new Usuarios();
		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {

			$data =[

				"nombre" => $datosUsuario[0]['nombre'],
				"a_paterno" => $datosUsuario[0]['a_paterno'],
				"email" => $datosUsuario[0]['email'],
				"usuario" => $datosUsuario[0]['usuario'],
				"type" => $datosUsuario[0]['type']

			];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/inicio'))->with('mensaje','1');

		}
		else{
			return redirect()->to(base_url('/'))->with('mensaje','0');
		}
	}

	public function salir(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'))->with('mensaje','0');
	}

	public function crear(){
		$datos = [
					"concepto" => $_POST['concepto'],
					"monto" => $_POST['monto'],
					"fecha" => $_POST['fecha']
				 ];

		$Crud = new GastosDiarios();
		$respuesta = $Crud->insertar($datos);

		if($respuesta > 0){
			return redirect()->to(base_url().'/inicio')->with('mensaje', '1');
		}else {
			return redirect()->to(base_url().'/inicio')->with('mensaje', '0');
		}
	}
	
}
