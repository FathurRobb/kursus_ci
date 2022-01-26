<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $data['title'] = "Halaman Register";
        $this->load->view('templates/header', $data);
        $this->load->view('v_register');
        $this->load->view('templates/footer');
    }

    public function proses()
    {
        $this->form_validation->set_rules('username','username','trim|required|min_length[1]|max_length[20]|is_unique[user.username]');
        $this->form_validation->set_rules('password','password','trim|required|min_length[1]|max_length[20]');
        $this->form_validation->set_rules('nama','nama','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $this->auth->register($username,$password,$nama);
            $this->session->set_flashdata('succes_register','Proses pendaftaran user berhasil');
            redirect('login');
        } else {
            $this->session->set_flashdata('error',validation_errors());
            redirect('register');
        }
    }    
}
?>