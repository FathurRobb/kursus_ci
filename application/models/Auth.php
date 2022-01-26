<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model
{
    public function register($username,$password,$nama)
    {
        $data_user = array(
            'username' => $username,
            'password' => password_hash($password,PASSWORD_DEFAULT),
            'nama' => $nama
        );
        $this->db->insert('user',$data_user);
    }

    public function login_user($username,$password)
    {
        $cek = $this->db->get_where('user',array('username'=>$username));
        if ($cek->num_rows() > 0) {
            $data_user = $cek->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('nama', $data_user->nama);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('login');
        }
    }
}
?>