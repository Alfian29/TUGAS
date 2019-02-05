<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['konten']="home";
        $this->load->view('template', $data);
	}
	public function page_login()
	{
		$this->load->view('page-login');
	}
	public function page_profile()
	{
		$this->load->view('page-profile');
	}
	public function typography()
	{
		$this->load->view('typography');
	}
	public function transaksi()
	{
		$this->load->view('transaksi');
	}
	public function barang()
	{
		$this->load->view('v_barang');
	}
	public function kategori()
	{
		$this->load->view('v_kategori');
	}
}
