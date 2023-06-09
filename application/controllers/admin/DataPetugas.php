<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataPetugas extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('ModelPetugas');
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index()
  {
      $data['title'] = 'Data Petugas';
      $data['tabel'] = $this->db->get('petugas')->result();
      // $data['pengguna'] = $this->db->get_where('petugas',['id_pengguna' => $this->session->userdata('id_pengguna')])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar', $data);
      $this->load->view('admin/templates/admin-sidebar', $data);
      $this->load->view('admin/data-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function tambahPetugas()
  {
    $data['title'] = 'Tambah Data Petugas';
    $data['roles'] = $this->ModelPetugas->getRoles()->result_array();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/tambah-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function editPetugas($id_pengguna)
  {
    $data['title'] = 'Edit Data Petugas';
    $data['row'] = $this->db->get_where('petugas', ['id_pengguna' => $id_pengguna])->row();
    $data['roles'] = $this->ModelPetugas->getRoles()->result_array();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/edit-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function simpanPetugas()
  {
    $this->ModelPetugas->simpanPetugas();
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Data Telah disimpan! </h4>
        </div>');
        redirect('admin/DataPetugas');
    } 
}
 
public function update(){
  $this->ModelPetugas->update();
  if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata('message', '
      <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
      </div>');
      redirect('admin/DataPetugas/index');
  }
}

public function hapus($id_pengguna)
{
  $this->db->delete('petugas', ['id_pengguna' => $id_pengguna]);
  if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata('message', '
      <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
      </div>');
      redirect('admin/DataPetugas/index');
  }
}
}

?>