<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Welcome extends RestController {
	public function index_get()
	{
		$this->response(array('foo'=>'bar',
							'this'=>5), 200);
	}
}
