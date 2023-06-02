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

  public function simpanAbsen()
  {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '2048';

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload("camera")) {
            $imageData = $this->upload->data();
            $fileName = $imageData['file_name']; 
        } else {
            //flashdata massage
            $x = $this->upload->display_errors();
            $this->session->set_flashdata(
                'message',
                '<div class="text-danger">
			           <strong> ' . $x . ' </strong> 
                 </div>'
            );
            redirect('petugas/AbsenMasuk');
        }

        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_pengguna' => htmlspecialchars($this->input->post('nama_pengguna', true)),
            'persyaratan' => htmlspecialchars($this->input->post('persyaratan', true)),
            'waktu_absen' => date('Y-m-d H:i:s'),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'foto' => $fileName
        ];

        $this->db->insert('absen', $data);
    }

    public function simpanIzin()
    {
      $config['upload_path']          = 'assets/img';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = '2048';

      $this->load->library('upload', $config); 

      if ($this->upload->do_upload("foto")) {
          $imageData = $this->upload->data();
          $fileName = $imageData['file_name']; 
      } else {
          //flashdata massage
          $x = $this->upload->display_errors();
          $this->session->set_flashdata(
              'message',
              '<div class="text-danger">
               <strong> ' . $x . ' </strong> 
               </div>'
          );
          redirect('petugas/AbzenIzin');
      }

      date_default_timezone_set("Asia/Jakarta");
      $data = [
          'nama_pengguna' => htmlspecialchars($this->input->post('nama_pengguna', true)),
          'alasan' => htmlspecialchars($this->input->post('alasan', true)),
          'foto' => $fileName,
          'tanggal_input' => date('Y-m-d H:i:s'),
          'status' => htmlspecialchars($this->input->post('status', true))
      ];

      $this->db->insert('izin', $data);
    }
  }
