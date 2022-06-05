<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/home');
        $this->load->view('template/footer');
    }
    public function about()
    {
        $this->load->view('template/header');
        $this->load->view('template/about');
        $this->load->view('template/footer');
    }
}
