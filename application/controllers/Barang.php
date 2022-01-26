<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->auth->cek_login();
        $this->load->model("Barang_model");
    }

    public function index()
    {
        $data['title'] = "Data Barang";
        $data['data_barang'] = $this->Barang_model->tampil_barang();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_barang()
    {
        $foto_barang = $this->uploadImage();
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $harga_barang = $this->input->post('harga_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $this->Barang_model->simpan_barang($kode_barang,$nama_barang,$harga_barang,$deskripsi_barang,$foto_barang);  
        redirect('/barang');     
    }

    public function edit_barang()
    {
        $foto_barang = $this->updateImage();
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $harga_barang = $this->input->post('harga_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $this->Barang_model->edit_barang($kode_barang,$nama_barang,$harga_barang,$deskripsi_barang,$foto_barang);  
        redirect('/barang');     
    }

    public function hapus_barang()
    {
        $kode_barang = $this->input->post('kode_barang');
        $this->deleteImage($kode_barang);
        $this->Barang_model->hapus_barang($kode_barang);
        redirect('/barang');
    }

    public function uploadImage()
    {
        $config['upload_path']      = './picture/';
        $config['allowed_types']    = 'jpg|png';
        $config['file_name']        = $this->input->post('kode_barang');
        $config['overwrite']        = true;
        $config['max_size']         = 2048; //2048 KB = 2 MB
        
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_barang')) {
            return $this->upload->data('file_name');
        } else {
            echo $this->upload->display_errors();
            die();
        }
    }
    
    public function updateImage()
    {
        $config['upload_path']      = './picture/';
        $config['allowed_types']    = 'jpg|png';
        $config['file_name']        = $this->input->post('kode_barang');
        $config['overwrite']        = true;
        $config['max_size']         = 2048; //2048 KB = 2 MB
        
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_barang')) {
            return $this->upload->data('file_name');
        } else if (!$this->upload->do_upload('foto_barang')) {
            return $this->input->post('old_foto_barang', true);
        } else {
            echo $this->upload->display_errors();
            die();
        }
    }

    public function deleteImage($kode_barang)
    {
        $barang = $this->Barang_model->getById($kode_barang);
        $filename = explode(".", $barang->foto_barang)[0];
        return array_map('unlink', glob(FCPATH."picture/$filename.*"));
    }
}
?>