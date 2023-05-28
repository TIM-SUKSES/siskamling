<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class AbsenMasuk extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'petugas'){
        redirect('auth');
    }
}
  public function index()
  {
    $data['title'] = 'Absen Masuk';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/absen-masuk', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

  public function absenPetugas()
  {
    $this->load->model('ModelPetugas');
    $this->ModelPetugas->simpanAbsen();
    $this->session->set_flashdata(
			'message2',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Absen Berhasil Dilakukan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
    redirect('petugas/AbsenMasuk');
  }

}

?>