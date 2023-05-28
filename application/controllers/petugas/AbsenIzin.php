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

}

?>