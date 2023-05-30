<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanWarga extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Laporan';
    $this->load->view('warga/templates/warga-header', $data);
    $this->load->view('warga/laporan-warga', $data);
    $this->load->view('warga/templates/warga-footer', $data);
  }

  public function DataLaporan()
  {
    $this->load->model('ModelWarga');
    $this->ModelWarga->simpanLaporan();
    $this->session->set_flashdata(
			'message2',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Laporan Berhasil Terkirim!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
    redirect('warga/LaporanWarga');
  }

}

?>