<?php
class Accounts_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_accounts($id = FALSE)
        {
            if ($id === FALSE)
            {
                    $query = $this->db->get('accounts'); //SELECT * FROM accoutns
                    return $query->result_array();
            }

            $query = $this->db->get_where('accounts', array('id' => $id)); //SELECT * FROM accounts WHERE 
            return $query->row_array();
        }

        public function insert_accounts($data = FALSE){
			if(!$data){
				return array();
			}
            $this->db->insert('accounts', $data);
            return $this->db->get_where('accounts', array('email' => $data->email))->row_array();

        }
}