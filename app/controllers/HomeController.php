<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function postSubirVideo()
	{
		if (isset($_FILES['archivo'])) {

			$file = $_FILES['archivo'];

			$name = $file['name'];
			$tmp_name = $file['tmp_name'];

			$extension = explode('.', $name);
			$extension = strtolower(end($extension));

			$key = md5(uniqid());
			$tmp_file_name = "{$key}.{$extension}";
			$tmp_file_path = "../uploads/{$tmp_file_name}";

			$return = move_uploaded_file($tmp_name, $tmp_file_path);

			if ($return) {
				$videos = new Videos();
				$videos->dni		= trim(Input::get('dni'));
				$videos->archivo	= $key;
				$videos->extension	= $extension;
				$videos->ip			= Request::getClientIp(true);
				$videos->save();
				return '1';
			} else {
				return 'error';
			}
		}
		return '0';
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
