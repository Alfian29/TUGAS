<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_Model extends CI_Model {

	public function SaveDataTransaksi()
    {
        $data = array(
            "kode_trans"    => $this->input->post('KodeTrans'),
            "id_barang"     => $this->input->post('IdBarang'),
            "nama_barang"   => $this->input->post('NamaBarang'),
            "jumlah"        => $this->input->post('Jumlah'),
            "tgl_masuk"     => $this->input->post('TglMasuk'),
            "tgl_keluar"    => $this->input->post('TglKeluar'),
        );
        $this->db->insert('transaksi', $data);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function getDataTransaksi()
    {
        return $this->db->order_by('kode_trans', 'asc')
                        ->get('transaksi')
                        ->result();
    }
    public function UpdateDataTransaksi()
    {
        $id = $this->input->post('KodeTrans');
        $data = array(
            "kode_trans"    => $this->input->post('KodeTrans'),
            "id_barang"     => $this->input->post('IdBarang'),
            "nama_barang"   => $this->input->post('NamaBarang'),
            "jumlah"        => $this->input->post('Jumlah'),
            "tgl_masuk"     => $this->input->post('TglMasuk'),
            "tgl_keluar"    => $this->input->post('TglKeluar'),
        );
        $this->db->where('kode_trans', $id)
                 ->update('transaksi', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function DeleteDataTransaksi($id)
    {
        $this->db->where('kode_trans', $id)
                 ->delete('transaksi');

        if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}         