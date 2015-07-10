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
			$tmp_file_path = "files/{$tmp_file_name}";

			move_uploaded_file($tmp_name, $tmp_file_path);

			return '1';
		}
		return '0';
	}

}
