<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class UbahPassword extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'petugas'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Ubah Password';

    $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Confirmation Password', 'required|trim|min_length[3]|matches[new_password1]');

    if($this->form_validation->run() == false){
      $this->load->view('petugas/templates/petugas-header', $data);
      $this->load->view('petugas/ubah-password', $data);
      $this->load->view('petugas/templates/petugas-footer', $data);
    } else{

      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');

      if (!password_verify($current_password, $data['pengguna']['password'])){
        $this->session->set_flashdata('message', '<div class="alert alert-danger"
        role="alert"> Password Lama Salah! </div>');
        redirect('petugas/UbahPassword');

      }else {
        if ($current_password == $new_password){

          $this->session->set_flashdata('message', '<div class="alert alert-danger"
          role="alert"> Password Baru  Tidak Boleh Sama! </div>');
          redirect('petugas/UbahPassword');

        } else {

          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
          
          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('pengguna');
  
          $this->session->set_flashdata('message', '<div class="alert alert-success"
          role="alert"> Password Berhasil di perbarui ! </div>');
          redirect('petugas/UbahPassword');
        }
      }
    }  


  }

}

?>