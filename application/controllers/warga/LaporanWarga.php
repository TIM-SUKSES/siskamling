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

}

?>