<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class HomeWarga extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'warga'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('warga/templates/warga-header', $data);
    $this->load->view('warga/home-warga', $data);
    $this->load->view('warga/templates/warga-footer', $data);
  }

}

?>