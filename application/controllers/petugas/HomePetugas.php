<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class HomePetugas extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/home-petugas', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

}

?>