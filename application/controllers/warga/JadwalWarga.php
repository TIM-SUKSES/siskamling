<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalWarga extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Jadwal';
    $this->load->view('warga/templates/warga-header', $data);
    $this->load->view('warga/jadwal-warga', $data);
    $this->load->view('warga/templates/warga-footer', $data);
  }

}

?>