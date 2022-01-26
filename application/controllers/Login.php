<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $data['title'] = "Halaman Login";
        $this->load->view('templates/header', $data);
        $this->load->view('v_login');
        $this->load->view('templates/footer');
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth->login_user($username,$password)) {
           redirect('barang');
        } else {
            $this->session->set_flashdata('error','Username & Password salah');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('is_login');
        redirect('login');
    }
}
?>