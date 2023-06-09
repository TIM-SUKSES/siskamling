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
    $this->db->insert('petugas', $data);
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
    $this->db->update('petugas', $data);
  }

  public function simpanAbsen()
  {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|heic|heif';
        $config['max_size']             = '10240';

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
            $fix = $this->input->post('id_jadwal');
            redirect('petugas/AbsenMasuk/index/' . $fix);
        }

        // date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_pengguna' => htmlspecialchars($this->input->post('nama_pengguna', true)),
            'persyaratan' => htmlspecialchars($this->input->post('persyaratan', true)),
            'waktu_absen' => date('Y-m-d H:i:s'),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'foto' => $fileName
        ];

        $this->db->insert('absen', $data);

        //update status jadwal
        $update = [
          'status' => 1
        ];

        $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
        return $this->db->update('jadwal', $update);
    }

    public function simpanIzin()
    {
      $config['upload_path']          = 'assets/img';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|heic|heif';
      $config['max_size']             = '10240';

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
          $fix = $this->input->post('id_jadwal');
          redirect('petugas/AbsenIzin/index/' . $fix);
      }

      // date_default_timezone_set("Asia/Jakarta");
      $data = [
          'nama_pengguna' => htmlspecialchars($this->input->post('nama_pengguna', true)),
          'alasan' => htmlspecialchars($this->input->post('alasan', true)),
          'waktu_izin' => date('Y-m-d H:i:s'),
          'status' => htmlspecialchars($this->input->post('status', true)),
          'foto' => $fileName
      ];

      $this->db->insert('izin', $data);

      //update status jadwal
      $update = [
        'status' => 1
      ];

      $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
      return $this->db->update('jadwal', $update);
    }


  }
