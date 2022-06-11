<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Berita extends CI_Controller
{
    public function index($id)
    {
        $this->load->view('template/header');
        $this->load->view('template/berita', $id);
        $this->load->view('template/footer');
    }
}
