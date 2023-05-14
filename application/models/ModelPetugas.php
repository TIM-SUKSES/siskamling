<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPetugas extends CI_Model {

  public function getRoles()
  {
    return $this->db->get('roles');
  }

  public function simpanPetugas($data = null)
  {
    $data = [
      'nama_pengguna' => $this->input->post('nama_pengguna', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'role' => $this->input->post('role', true)
    ];
    $this->db->insert('pengguna', $data);
  }
  
  public function update()
  {
    $data = [
      'nama_pengguna' => $this->input->post('nama_pengguna', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'role' => $this->input->post('role', true)
    ];
    $this->db->where('id_pengguna', $this->input->post('id_pengguna'));
    $this->db->update('pengguna', $data);
  }

}

?>