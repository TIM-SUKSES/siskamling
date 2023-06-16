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

  public function hapus($id_laporan)
{
  $this->db->delete('laporan', ['id_laporan' => $id_laporan]);
  if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata('message', '
      <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-warning"></i> Laporan Telah Terhapus! </h4>
      </div>');
      redirect('warga/LaporanWarga/statusLaporan');
  }
}

}

?>