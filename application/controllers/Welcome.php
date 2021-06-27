<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Welcome extends RestController {
	public function index_get()
	{
		$this->response(array('foo'=>'bar',
							'this'=>5), 200);
	}

	public function index_post(){
		// Takes raw data from the request
		$json = file_get_contents('php://input');
		// Converts it into a PHP object
		$data = json_decode($json);
		var_dump($data);
	}
}