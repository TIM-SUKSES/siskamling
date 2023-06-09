<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanWarga extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index(){
      $data['title'] = 'Laporan Warga';
      $data['laporan_warga'] = $this->db->get('laporan')->result();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/laporan-warga', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function terima($id) {
    $data = [
      'status' => "Laporan Diterima"
  ];

  $this->db->where('id_laporan', $id);
  $this->db->update('laporan', $data);
  redirect('admin/LaporanWarga');
  }

  public function tolak($id) {
    $data = [
      'status' => "Laporan Ditolak"
  ];

  $this->db->where('id_laporan', $id);
  $this->db->update('laporan', $data);
  redirect('admin/LaporanWarga');
  }


}

?>