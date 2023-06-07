<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalPetugas extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('JadwalModel');
        if ($this->session->userdata('role') != 'admin'){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Jadwal Petugas';
        $data['jadwal'] = $this->db->get('jadwal')->result();
        $data['pengguna'] = $this->JadwalModel->getPetugas()->result_array();
        $this->load->view('admin/templates/admin-header', $data);
        $this->load->view('admin/templates/admin-topbar');
        $this->load->view('admin/templates/admin-sidebar');
        $this->load->view('admin/jadwal-petugas', $data);
        $this->load->view('admin/templates/admin-footer');
    }

    public function tambahJadwal()
    {
        $data['title'] = 'Tambah Jadwal';
        $data['pengguna'] = $this->JadwalModel->getPetugas()->result_array();
        $this->load->view('admin/templates/admin-header', $data);
        $this->load->view('admin/templates/admin-topbar');
        $this->load->view('admin/templates/admin-sidebar');
        $this->load->view('admin/tambah-jadwal', $data);
        $this->load->view('admin/templates/admin-footer');
    }

    public function resetJadwal()
    {
        $this->load->model('JadwalModel');
        $this->JadwalModel->resetStatus();
        $this->session->set_flashdata('message', '
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Status Telah Direset! </h4>
          </div>');
        redirect('admin/JadwalPetugas');
    }

    public function editJadwal($id_jadwal)
    {
      $data['title'] = 'Edit Data Petugas';
      $data['baris'] = $this->db->get_where('jadwal', ['id_jadwal' => $id_jadwal])->row();
      $data['pengguna'] = $this->JadwalModel->getPetugas()->result_array();
        $this->load->view('admin/templates/admin-header', $data);
        $this->load->view('admin/templates/admin-topbar');
        $this->load->view('admin/templates/admin-sidebar');
        $this->load->view('admin/edit-jadwal', $data);
        $this->load->view('admin/templates/admin-footer');
    }
  

    public function simpanJadwal()
    {
      $this->JadwalModel->simpanJadwal();
      if ($this->db->affected_rows() > 0){
          $this->session->set_flashdata('message', '
          <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Data Telah disimpan! </h4>
          </div>');
        } 
        redirect('admin/JadwalPetugas');
  }

  public function updateJadwal(){
    $this->JadwalModel->updateJadwal();
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
        </div>');
    }
    redirect('admin/JadwalPetugas/');
  }
  
  public function hapus($id_jadwal)
  {
    $this->db->delete('jadwal', ['id_jadwal' => $id_jadwal]);
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
        </div>');
        redirect('admin/JadwalPetugas/index');
    }
  }
}


?>