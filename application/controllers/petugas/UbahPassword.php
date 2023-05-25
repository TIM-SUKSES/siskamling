<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class UbahPassword extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Ubah Password';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/ubah-password', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

}

?>