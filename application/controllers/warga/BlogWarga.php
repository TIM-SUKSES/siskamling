<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class BlogWarga extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Blog';
    $this->load->view('warga/templates/warga-header', $data);
    $this->load->view('warga/blog-warga', $data);
    $this->load->view('warga/templates/warga-footer', $data);
  }

}

?>