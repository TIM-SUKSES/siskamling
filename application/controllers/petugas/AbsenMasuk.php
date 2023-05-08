<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class AbsenMasuk extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Absen Masuk';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/absen-masuk', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

}

?>