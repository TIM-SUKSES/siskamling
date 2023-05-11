<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataPetugas extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index()
  {
      $data['title'] = 'Data Petugas';
      $data['pengguna'] = $this->db->get_where('pengguna',['id_pengguna' => $this->session->userdata('id_pengguna')])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar', $data);
      $this->load->view('admin/templates/admin-sidebar', $data);
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