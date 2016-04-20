<?php

class News extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['page'] = 'news';
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';
        $data['layers'] = ['DIMIGOIN' => 'home'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL){
        $data['news_item'] = $this->news_model->get_news($slug);
        if(empty($data['news_item'])) show_404();

        $data['page'] = 'news-item';
        $data['title'] = $data['news_item']['title'];
        $data['layers'] = [
            'DIMIGOIN' => 'home',
            'news archive' => 'news'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);
    }
}
