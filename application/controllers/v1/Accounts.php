<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Accounts extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('accounts_model');
    }

	public function index_get($id = FALSE)
	{
        $array_query = $this->accounts_model->get_accounts($id);
		$this->response($array_query, 200);
	}

	public function index_post(){
       // Takes raw data from the request
		$json = file_get_contents('php://input');
		// Converts it into a PHP object
		$data = json_decode($json);

		$array_query = $this->accounts_model->insert_accounts($data);
		if (empty($array_query)){
			$this->response("Bad request", 400);
		}
		else{
			$this->response($array_query, 201);
		}

	}

	public function index_put(){
        echo 'hola';
	}

	public function index_delete(){
        echo 'hola';
	}
}