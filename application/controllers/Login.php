<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/login');
        $this->load->view('template/footer');
    }

    function login_action()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->login_model->cek_login("user", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("admin"));
        } else {
            echo "<script>alert('Username atau password salah')
            document.location.href = '" . base_url('login') . "'
            </script>";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("Login"));
    }
    public function register()
    {
        $this->load->view('template/header');
        $this->load->view('template/register');
        $this->load->view('template/footer');
    }
    public function register_data()
    {
        $data = array(
            'id_user' => null,
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $data = $this->login_model->register('user', $data);
        if ($data > 0) {
            echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href = '" . base_url('login') . "';
            </script>";
        } else {
            echo "<script>alert('Username Sudah Pernah Dipakai')
            document.location.href = '" . base_url('login/register') . "';
            </script>";
        }
    }
}
