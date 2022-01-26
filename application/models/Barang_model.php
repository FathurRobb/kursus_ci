<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function getById($kode_barang)
    {
        return $this->db->query("SELECT*FROM barang WHERE kode_barang='$kode_barang'")->row();
    }    

    public function tampil_barang()
    {
        $hasil = $this->db->query("SELECT*FROM barang");
        return $hasil;
    }

    public function simpan_barang($kode_barang,$nama_barang,$harga_barang,$deskripsi_barang,$foto_barang)
    {
        $hasil = $this->db->query("INSERT INTO barang(kode_barang,nama_barang,harga_barang,deskripsi_barang,foto_barang) VALUES ('$kode_barang','$nama_barang','$harga_barang','$deskripsi_barang','$foto_barang')");
        return $hasil;
    }

    public function edit_barang($kode_barang,$nama_barang,$harga_barang,$deskripsi_barang,$foto_barang)
    {
        $hasil = $this->db->query("UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', deskripsi_barang='$deskripsi_barang', foto_barang='$foto_barang' WHERE kode_barang='$kode_barang'");
        return $hasil;
    }

    public function hapus_barang($kode_barang)
    {
        $hasil = $this->db->query("DELETE FROM barang WHERE kode_barang='$kode_barang'");
        return $hasil;
    }
}

?>