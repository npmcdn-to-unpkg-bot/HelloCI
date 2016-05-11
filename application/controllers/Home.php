<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 홈페이지 메인
 */
class Home extends CI_Controller {
    public function index(){
        $this->load->library('session');
        $this->load->helper(['form', 'url']);

        $target = 'home';
        $data['title'] = "디미고인";
        $data['brand_color'] = 'pink';

        if($this->session->userdata('logged_in')){
            $session = $this->session->userdata('logged_in');
            $target = 'home_logged_in';

            $data['id'] = $session->id;
            $data['name'] = $session->name;
            $data['title'] = "안녕하세요, " . $data['name'] . "님!";
            $data['brand_color'] = 'blue';
        }

        $this->load->view('templates/header', $data);
        $this->load->view($target, $data);
        $this->load->view('templates/footer', $data);
    }

    function logout(){
        $this->load->library('session');
        $this->session->unset_userdata('logged_in');
        session_destroy();

        $this->load->helper(['url']);
        redirect('home', 'refresh');
    }
}
