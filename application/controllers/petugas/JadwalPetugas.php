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
    $data['petugas'] = $this->db->get('jadwal',['nama_pengguna' => $this->session->userdata('id_pengguna')])->result();
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/jadwal-petugas', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }
  

}

?>