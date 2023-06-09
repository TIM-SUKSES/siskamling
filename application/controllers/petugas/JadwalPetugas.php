<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalPetugas extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('JadwalModel');
    if ($this->session->userdata('role') != 'petugas'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Jadwal';
    $data['jadwal'] = $this->db->get_where('jadwal',['nama_pengguna' => $this->session->userdata('nama_pengguna')])->result();
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/jadwal-petugas', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }
  
  public function petugasAbsen()
  {
    $this->JadwalModel->updateStatus();
    $this->ModelPetugas->simpanAbsen();
    $this->ModelPetugas->simpanIzin();
    if($this->db->affected_rows() > 0)
    {
      $result = ['success' => true];
    } else {
      $result = ['success' => false];
    }

    echo json_encode($result);
  }

}

?>