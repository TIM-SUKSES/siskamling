<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MasukPetugas extends CI_Controller{

  public function index(){
      $data['title'] = 'Absen Masuk Petugas';
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/masuk-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

}

?>