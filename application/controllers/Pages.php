<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 정적 페이지 컨트롤러
 */
class Pages extends CI_Controller {
    public function view($page = 'main'){
        if(!file_exists(APPPATH . 'views/pages/' . $page . '.php')) show_404();
        $this->load->helper(['form', 'url']);

        $data['title'] = ucfirst($page);
        $data['brand_color'] = 'pink';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}
