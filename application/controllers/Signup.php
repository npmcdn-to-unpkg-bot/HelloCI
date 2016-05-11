<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 가입 컨트롤러
 */
class Signup extends CI_Controller {
	/**
	 * 가입 처리
	 */
	public function index(){
        $this->load->database();
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');

        $this->form_validation->set_rules([
            [
                'field' => 'id',
                'label' => 'ID',
                'rules' => 'trim|required|alpha|is_unique[accounts.id]'
            ],

            [
                'field' => 'name',
                'label' => '이름',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'password',
                'label' => '비밀번호',
                'rules' => 'trim|required|min_length[4]'
            ],

            [
                'field' => 'passconf',
                'label' => '비밀번호 확인',
                'rules' => 'trim|required|matches[password]'
            ],

            [
                'field' => 'email',
                'label' => '이메일',
                'rules' => 'trim|required|valid_email'
            ]
        ]);

        if(!$this->form_validation->run()){
            $data['title'] = "회원가입";
            $data['parent'] = 'home';
            $data['brand_color'] = 'amber';

            $this->load->view('templates/header', $data);
            $this->load->view('signup', $data);
            $this->load->view('templates/footer', $data);
        }else{
            $this->db->insert('accounts', [
                'id' => $this->input->post('id'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email')
            ]);

			redirect('home', 'refresh');
        }
	}
}
