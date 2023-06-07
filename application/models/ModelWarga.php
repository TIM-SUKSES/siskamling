<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelWarga extends CI_Model
{
    public function simpanLaporan()
    {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '2048';

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

        // date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_warga' => htmlspecialchars($this->input->post('nama_warga', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pesan' => htmlspecialchars($this->input->post('pesan', true)),
            'file' => $fileName,
            'tanggal_input' => date('Y-m-d H:i:s')
        ];

        $this->db->insert('laporan', $data);

    }
}

?>