<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelWarga extends CI_Model
{

    public function getDataLaporan()
    {
      return $this->db->get('laporan');
    }
    
    public function simpanWarga($data = null)
    {
      $data = [
        'nama_warga' => $this->input->post('nama_warga', true),
        'email' => $this->input->post('email', true),
        'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
        'jenis_kelamin' => $this->input->post('jenis_kelamin', true)
      ];
      $this->db->insert('warga', $data);
    }
    
    public function updateWarga()
    {
      $data = [
        'nama_warga' => $this->input->post('nama_warga', true),
        'email' => $this->input->post('email', true),
        'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
        'jenis_kelamin' => $this->input->post('jenis_kelamin', true)
      ];
      $this->db->where('id_warga', $this->input->post('id_warga'));
      $this->db->update('warga', $data);
    }
  

    public function simpanLaporan()
    {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|heic|heif';
        $config['max_size']             = '10240';

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload("file")) {
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
            redirect('warga/LaporanWarga');
        }

        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'id_warga' => htmlspecialchars($this->input->post('id_warga', true)),
            'nama_warga' => htmlspecialchars($this->input->post('nama_warga', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'judul_laporan' => htmlspecialchars($this->input->post('judul_laporan', true)),
            'pesan' => htmlspecialchars($this->input->post('pesan', true)),
            'file' => $fileName,
            'tanggal_input' => date('Y-m-d H:i:s'),
            'status' => htmlspecialchars($this->input->post('status', true)),
        ];

        $this->db->insert('laporan', $data);

    }
}

?>