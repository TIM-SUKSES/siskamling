<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class IzinPetugas extends CI_Controller{

  public function index(){
      $data['title'] = 'Absen Izin Petugas';
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/izin-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

}

?>