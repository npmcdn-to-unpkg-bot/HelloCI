<?php

class Pages extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function view($page = 'home'){
        $data['page'] = $page;
        $data['title'] = (strtolower($page) == 'home') ? 'DIMIGOIN' : ucfirst($page);
        $data['footer_title'] = 'DIMIGOIN';

        $data['links'] = [
            '웹하드' => 'http://dimigo.hs.kr/1',
            'DIMI VOCA' => 'http://voca.0pe.kr'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page,   $data);
        $this->load->view('templates/footer', $data);
    }
}
