<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 계정 모델
 */
class Account_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    /**
	 * 데이터베이스에 저장된 비밀번호와 비교
	 */
    function login($id, $password){
        $this->db->select('id, name, password');
        $this->db->from('accounts');
        $this->db->limit(1);
        $this->db->where('id', $id);

        $query = $this->db->get();
        if($query->num_rows() != 1) return false;

        foreach($query->result() as $row){
            if(!password_verify($password, $row->password)) return false;
            else return $row;
        }
        return false;
    }
}
