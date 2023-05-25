<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function index()
  {
    $data['title'] = 'SISKAMLING';
    $this->load->view('auth-header', $data);
    $this->load->view('auth', $data);
    $this->load->view('auth-footer', $data);
  }

  public function login()
  {
    $cek_user = $this->db->get_where('pengguna', ['email' => $this->input->post('email', true)])->row();
        if ($cek_user){
            if(password_verify($this->input->post('password'), $cek_user->password)){
                if ($cek_user->role == 'admin'){
                    $data_session = [
                         'id_pengguna' => $cek_user->id_pengguna,
                         'email' => $cek_user->email,
                         'password' => $cek_user->password,
                         'nama_pengguna' => $cek_user->nama_pengguna,
                         'role' => $cek_user->role
                     ];
                    $this->session->set_userdata($data_session);
                    redirect("admin/DataPetugas");
                } else {
                    $data_session = [
                         'id_pengguna' => $cek_user->id_pengguna,
                         'email' => $cek_user->email,
                         'password' => $cek_user->password,
                         'nama_pengguna' => $cek_user->nama_pengguna,
                         'role' => $cek_user->role
                    ];
                    $this->session->set_userdata($data_session);
                    redirect("petugas/HomePetugas");
                }

            }else { 
                echo "<script>
                alert('password anda salah!');
                window.location.href = `" . site_url('auth') . "`;
                </script>";
               }

        } else {
            echo "<script>
                alert('email anda tidak terdaftar!');
                window.location.href = `" . site_url('auth') . "`;
             </script>";
        }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
}
}
?>