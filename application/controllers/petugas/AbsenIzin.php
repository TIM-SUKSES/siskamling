<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class AbsenIzin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'petugas'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Absen Izin';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/absen-izin', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

  public function IzinPetugas()
  {
    $this->load->model('ModelPetugas');
    $this->ModelPetugas->simpanIzin();
    $this->session->set_flashdata(
			'message2',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Surat Izin Berhasil Terkirim!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
    redirect('petugas/AbsenIzin');
  }

}

?>