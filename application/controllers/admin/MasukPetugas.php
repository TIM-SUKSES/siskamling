<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MasukPetugas extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index(){
      $data['title'] = 'Absen Masuk Petugas';
      $data['absen_petugas'] = $this->db->get('absen')->result();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/masuk-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function terima($id) {
    $data = [
      'status' => "Hadir"
  ];

  $this->db->where('id_absen', $id);
  $this->db->update('absen', $data);
  redirect('admin/MasukPetugas');
  }

  public function tolak($id) {
    $data = [
      'status' => "Tidak Hadir"
  ];

  $this->db->where('id_absen', $id);
  $this->db->update('absen', $data);
  redirect('admin/MasukPetugas');
  }

}

?>