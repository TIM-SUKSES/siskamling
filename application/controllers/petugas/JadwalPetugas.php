<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalPetugas extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Jadwal';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/jadwal-petugas', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

}

?>