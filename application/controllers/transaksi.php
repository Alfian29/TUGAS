<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        //Do your magic here
        $this->load->model('Transaksi_Model');
    }
    public function index()
    {
        if($this->session->userdata('logged_in') == TRUE){
            $data['AllDataTransaksi'] = $this->Transaksi_Model->getDataTransaksi();
            $data['konten'] = "DataTransaksi";
            $this->load->view('template', $data);

        }else{
            $this->load->view('Login');
        }
    }

    public function DataTransaksi()
    {
        if($this->session->userdata('logged_in') == TRUE){
            $data['AllDataTransaksi'] = $this->Transaksi_Model->getDataTransaksi();
            $data['konten'] = "DataTransaksi";
            $this->load->view('template', $data);
        }else{
            $this->load->view('login');
        }
    }

    public function TambahTransaksi()
    {
        if($this->session->userdata('logged_in') == TRUE){
            $data['konten'] = "TambahTransaksi";
            $this->load->view('template', $data);

        }else{
            $this->load->view('login');
        }
    }
    public function SendDataTransaksi()
    {
        if($this->session->userdata('logged_in') == TRUE){
            $this->form_validation->set_rules('IdBarang', 'IdBarang', 'trim|required');
            $this->form_validation->set_rules('NamaBarang', 'NamaBarang', 'trim|required');
            $this->form_validation->set_rules('Jumlah', 'Jumlah', 'trim|required|numeric');
            $this->form_validation->set_rules('TglMasuk', 'TglMasuk', 'trim|date');
            $this->form_validation->set_rules('TglKeluar', 'TglKeluar', 'trim|date');
            
            if ($this->form_validation->run() == TRUE) {
                if($this->Transaksi_Model->SaveDataTransaksi()) {
                    $this->session->set_flashdata('notif', "Berhasil Di Simpan");
                    redirect(base_url('index.php/Transaksi/TambahTransaksi'));
                }else {
                    $this->session->set_flashdata('notif', "Gagal Di Simpan");
                    redirect(base_url('index.php/Transaksi/TambahTransaksi'));
                }
            } else {
                $this->session->set_flashdata('notif', validation_errors());
                redirect(base_url('index.php/Transaksi/TambahTransaksi'));
            }
        }else{
            $this->load->view('login');
        }
    }

    public function SendUpdateDataTransaksi()
    {
        if($this->session->userdata('logged_in') == TRUE){
            $this->form_validation->set_rules('KodeTrans', 'KodeTrans', 'trim|required');
            $this->form_validation->set_rules('IdBarang', 'IdBarang', 'trim|required');
            $this->form_validation->set_rules('NamaBarang', 'NamaBarang', 'trim|required');
            $this->form_validation->set_rules('Jumlah', 'Jumlah', 'trim|required|numeric');
            $this->form_validation->set_rules('TglMasuk', 'TglMasuk', 'trim|date');
            $this->form_validation->set_rules('TglKeluar', 'TglKeluar', 'trim|date');
            
            if ($this->form_validation->run() == TRUE) {
                if($this->Transaksi_Model->UpdateDataTransaksi()) {
                    $this->session->set_flashdata('notif', "Berhasil Di Edit");
                    redirect(base_url('index.php/transaksi/DataTransaksi'));
                }else {
                    $this->session->set_flashdata('notif', "Gagal Di Edit");
                    redirect(base_url('index.php/transaksi/DataTransaksi'));
                }
            } else {
                $this->session->set_flashdata('notif', validation_errors());
                redirect(base_url('index.php/transaksi/DataTransaksi'));
            }
        }else{
            $this->load->view('login');
        }
    }

    public function HapusDataTransaksi($id)
	{
        if($this->session->userdata('logged_in') == TRUE){
            if($this->Transaksi_Model->DeleteDataTransaksi($id) == TRUE){
                $this->session->set_flashdata('notif', 'Transaksi Berhasil Dihapus');
                redirect(base_url('index.php/Transaksi/DataTransaksi'));
            } else {
                $this->session->set_flashdata('notif', 'Transaksi Gagal Dihapus');
                redirect(base_url('index.php/Transaksi/DataTransaksi'));
            }
        }else{
            $this->load->view('login');
        }
	}
}