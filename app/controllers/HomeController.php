<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		if (Agent::isMobile())
			return View::make('mobile');
			//return View::make('mobile-iphone');
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
			$videos->archivo_original = $name;
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
	
	public function getlistaDeVideos()
	{
		return View::make('acceso');
	}
	
	public function postlistaDeVideos()
	{
		$clave = trim(Input::get('clave'));
		if ($clave === 'mdSMMoczVY') {
			$results = DB::select( DB::raw('select d.nombre, d.dni, v.id, v.extension from dni d, videos v where d.dni = v.dni and v.estado = 1 order by v.id') );
			return View::make('listado')->with('resultado', $results);
		} else {
			return View::make('acceso')->with('mensaje', 'Clave incorrecta.');
		}
	}
	
	public function getDescargaVideos($id, $item)
	{
		$video = Videos::find($id);
		$archivo = '/home/corazonperuano/uploads/' . $video->archivo . '.' . $video->extension;
		$itemArchivo = $item . '.' . $video->extension;
		if (file_exists($archivo)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($itemArchivo));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($archivo));
			readfile($archivo);
			exit;
		}
	}
	
	public function getVerVideos($id, $item)
	{
		$video = Videos::find($id);
		$archivo = '/home/corazonperuano/uploads/' . $video->archivo . '.' . $video->extension;
		$itemArchivo = $item . '.' . $video->extension;
		if (file_exists($archivo)) {
			$headers = array(
				'Content-type'			=> 'video/'.$video->extension,
				'Content-Disposition'	=> 'inline; filename='.$itemArchivo
			);
			return Response::make(file_get_contents($archivo), 200, $headers);
		}
	}

}
