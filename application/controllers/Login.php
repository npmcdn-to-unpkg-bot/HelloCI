<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 로그인 컨트롤러
 */
class Login extends CI_Controller {
	/**
	 * 로그인 컨트롤러: 계정 모델 불러오기
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('account_model', '', true);
	}

	/**
	 * 로그인 처리
	 */
	public function index(){
        $this->load->database();
        $this->load->helper(['form', 'url']);

		$this->load->library('session');
        $this->load->library('form_validation');

        $this->form_validation->set_rules([
            [
                'field' => 'id',
                'label' => 'ID',
                'rules' => 'trim|required|alpha'
            ], [
                'field' => 'password',
                'label' => '비밀번호',
                'rules' => 'trim|required|min_length[4]|callback_check_password'
            ]
        ]);

        if($this->form_validation->run()) redirect('home', 'refresh'); else{
            $data['title'] = "로그인";
            $data['parent'] = 'home';
            $data['brand_color'] = 'amber';

            $this->load->view('templates/header', $data);
            $this->load->view('login', $data);
            $this->load->view('templates/footer', $data);
        }
	}

	/**
	 * 로그인 처리: 비밀번호 확인
	 */
    public function check_password($password){
        $row = $this->account_model->login($this->input->post('id'), $password);
        if($row){
			$row->logged_in = true;
            $this->session->set_userdata('logged_in', $row);
            return true;
        }else{
            $this->form_validation->set_message('check_password', 'ID 또는 비밀번호를 잘못 입력하셨습니다.');
            return false;
        }
    }
}
