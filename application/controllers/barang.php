<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {
public function index()
{
$data['konten']="v_barang";
$this->load->model('kategori_model');
$data['data_kategori']=$this->kategori_model->get_kategori();
$this->load->model('barang_model');
$data{'data_barang'}=$this->barang_model->get_barang();
$this->load->view("template",$data);
}
public function simpan_barang()
{
$this->form_validation->set_rules('nama_barang', 'Nama Barang',
'trim|required', array('required' => 'Nama Barang harus diisi'));
$this->form_validation->set_rules('stok', 'Stok',
'trim|required', array('required' => 'Stok harus diisi'));
$this->form_validation->set_rules('id_kategori', 'Id Kategori',
'trim|required', array('required' => 'Id Kategori harus diisi'));
if ($this->form_validation->run() == TRUE)
{
$this->load->model('barang_model','bar');
$masuk=$this->bar->insert_barang();
if($masuk==true){
    $this->session->set_flashdata('pesan', 'Barang Sukses Ditambahkan');
} else {
$this->session->set_flashdata('pesan', 'Barang Gagal Ditambahkan');
}
redirect(base_url('index.php/barang'),'refresh');
} else {
$this->session->set_flashdata('pesan', validation_errors());
redirect(base_url('index.php/barang'),'refresh');
}
}
}