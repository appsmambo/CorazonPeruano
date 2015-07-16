<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		if (Agent::isMobile())
			return View::make('mobile');
		else
			return View::make('index');
	}
	
	public function postSubirVideo()
	{

		$res = '';
		$ie = Input::get('ie');
		
		if (isset($_FILES['archivo'])) {

			$file = $_FILES['archivo'];

			$name = $file['name'];
			$tmp_name = $file['tmp_name'];

			$extension = explode('.', $name);
			$extension = strtolower(end($extension));

			$key = md5(uniqid());
			$tmp_file_name = "{$key}.{$extension}";
			$tmp_file_path = "../uploads/{$tmp_file_name}";

			move_uploaded_file($tmp_name, $tmp_file_path);

			$videos = new Videos();
			$videos->dni		= trim(Input::get('dni'));
			$videos->archivo	= $key;
			$videos->extension	= $extension;
			$videos->ip			= Request::getClientIp(true);
			$videos->save();
			$res = '1';
			
		} else {
			$res = '0';
		}
		
		/*if (Agent::isMobile())
			return View::make('mensaje.mobile');
		if ($ie === '1') {
			return View::make('mensaje');
		} else {
			return $res;
		}*/

		if (Agent::isMobile())
			return View::make('mensajeMobile');
		else
			return View::make('mensaje');

	}
	
	public function postValidaTuDni()
	{
		$resultado = '';
		
		$dni = trim(Input::get('dni'));
		// validar si ya subió video
		$result = Videos::where('dni', $dni)->first();
		if ($result === null) {
			// validar si el dni esta en la base de datos
			$result = Dni::where('dni', $dni)->first();
			if ($result === null) {
				$resultado = 'error';
			} else {
				$resultado = 'ok';
			}
		} else {
			$resultado = 'gracias';
		}
		return $resultado;
	}

}
