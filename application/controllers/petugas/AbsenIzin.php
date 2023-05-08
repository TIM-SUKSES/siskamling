<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class AbsenIzin extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Absen Izin';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/absen-izin', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

}

?>