<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class HomePetugas extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'petugas'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Home';
    $data['pengguna'] = $this->db->get_where('pengguna',['id_pengguna' => $this->session->userdata('id_pengguna')])->row();
    $this->load->view('petugas/templates/petugas-header', $data);
    $this->load->view('petugas/home-petugas', $data);
    $this->load->view('petugas/templates/petugas-footer', $data);
  }

}

?>