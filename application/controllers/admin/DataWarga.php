<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataWarga extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('ModelWarga');
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index()
  {
      $data['title'] = 'Data Warga';
      $data['tabel'] = $this->db->get('warga')->result();
      // $data['pengguna'] = $this->db->get_where('warga',['id_warga' => $this->session->userdata('id_warga')])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar', $data);
      $this->load->view('admin/templates/admin-sidebar', $data);
      $this->load->view('admin/data-warga', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function tambahWarga()
  {
    $data['title'] = 'Tambah Data Warga';
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/tambah-warga', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function editWarga($id_warga)
  {
    $data['title'] = 'Edit Data Warga';
    $data['row'] = $this->db->get_where('warga', ['id_warga' => $id_warga])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/edit-warga', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function simpanWarga()
  {
    $this->ModelWarga->simpanWarga();
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Data Telah disimpan! </h4>
        </div>');
        redirect('admin/DataWarga');
    } 
}
 
public function updateWarga(){
  $this->ModelWarga->updateWarga();
  if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata('message', '
      <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
      </div>');
      redirect('admin/DataWarga/index');
  }
}

public function hapus($id_warga)
{
  $this->db->delete('warga', ['id_warga' => $id_warga]);
  if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata('message', '
      <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
      </div>');
      redirect('admin/DataWarga/index');
  }
}
}

?>