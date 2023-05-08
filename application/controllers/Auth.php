<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function index()
  {
    $data['title'] = 'SISKAMLING';
    $this->load->view('auth-header', $data);
    $this->load->view('auth', $data);
    $this->load->view('auth-footer', $data);
  }

}
?>