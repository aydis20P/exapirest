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

            $query = $this->db->get_where('accounts', array('user_id' => $id)); //SELECT * FROM accounts WHERE 
            return $query->row_array();
        }
}