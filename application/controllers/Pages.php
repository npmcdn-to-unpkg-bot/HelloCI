<?php

class Pages extends CI_Controller {
    public function view($page = 'home'){
        if(!file_exists(APPPATH . 'views/pages/' . $page . '.php')) show_404();

        $data['title'] = ucfirst($page);
        $data['brand_color'] = 'pink';
        $data['footer_title'] = 'DIMIGOIN';
        $data['footer_description'] = '';
        $data['links'] = [
            '웹하드' => 'http://dimigo.hs.kr/1',
            'DIMI VOCA' => 'http://voca.0pe.kr'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page,   $data);
        $this->load->view('templates/footer', $data);
    }
}
