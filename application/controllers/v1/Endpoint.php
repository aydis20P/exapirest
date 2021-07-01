<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Endpoint extends RestController {
	public function index_get($param1=0, $param2=-1)
	{
		$this->response(array('foo'=>'version 1',
							'param1'=>$param1,
							'param2'=>$param2), 200);
	}

	public function index_post(){
		// Takes raw data from the request
		$string = file_get_contents('php://input');
		// Converts it into a PHP object
		$data = json_decode($string);
		var_dump($data);
	}

	public function index_put(){
		$method = "PUT";
		echo "\nhola" . " " . "mundo ", $method, "\n";
	}

	public function index_delete(){
		$method = "DELETE";
		echo "\nhola" . " " . "mundo ", $method, "\n";
	}
}