<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalModel extends CI_Model
{

    public function getPetugas() 
    {
        return $this->db->get('pengguna');
    }
    
    public function getJadwalByPetugas() {
        $this->db->select('*, jadwal.id_jadwal as id_jadwal');
        $this->db->from('jadwal');
        $this->db->join('pengguna', 'pengguna.id_pengguna = jadwal.nama_pengguna');
        return $this->db->get();
    }

    public function simpanJadwal() {
        $data = [
            'nama_pengguna' => $this->input->post('nama_pengguna'),
            'hari' => $this->input->post('hari', true),
            'jam_masuk' => $this->input->post('jam_masuk', true),
            'jam_keluar' => $this->input->post('jam_keluar', true)
        ];
        
        $this->db->insert('jadwal', $data);
    }

    public function updateJadwal()
    {
        $data = [
            'nama_pengguna' => $this->input->post('nama_pengguna'),
            'hari' => $this->input->post('hari', true),
            'jam_masuk' => $this->input->post('jam_masuk', true),
            'jam_keluar' => $this->input->post('jam_keluar', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
        $this->db->update('jadwal', $data);
    }

    public function updateStatus()
    {
        $data = ['status' => 1];
        $this->db->where('id_jadwal', $this->input->post('nama_pengguna'));
        $this->db->update('jadwal', $data);
    }
}

?>