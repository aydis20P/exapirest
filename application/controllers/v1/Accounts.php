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
        echo 'hola';
	}

	public function index_put(){
        echo 'hola';
	}

	public function index_delete(){
        echo 'hola';
	}
}