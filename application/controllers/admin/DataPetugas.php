<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataPetugas extends CI_Controller{

  public function index()
  {
      $data['title'] = 'Data Petugas';
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/data-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function tambahPetugas()
  {
    $data['title'] = 'Tambah Data Petugas';
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/tambah-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function editPetugas()
  {
    $data['title'] = 'Edit Data Petugas';
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/edit-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

}

?>