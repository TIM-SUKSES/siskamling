<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanWarga extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'warga'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Laporan';
    $this->load->view('warga/templates/warga-header', $data);
    $this->load->view('warga/laporan-warga', $data);
    $this->load->view('warga/templates/warga-footer', $data);
  }

  public function DataLaporan()
  {
    $this->load->model('ModelWarga');
    $this->ModelWarga->simpanLaporan();
    $this->session->set_flashdata(
			'message2',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Laporan Berhasil Terkirim!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
    redirect('warga/LaporanWarga');
  }

  public function statusLaporan()
  {
    $this->load->model('ModelWarga');
    $this->ModelWarga->getDataLaporan();
    $data['title'] = 'Status Laporan Warga';
    $data['laporan'] = $this->db->get_where('laporan',['nama_warga' => $this->session->userdata('nama_warga')])->result();
    $this->load->view('warga/templates/warga-header', $data);
    $this->load->view('warga/status-laporan');
    $this->load->view('warga/templates/warga-footer', $data);
  }

  public function hapus($id_laporan)
  {
    $this->db->delete('laporan', ['id_laporan' => $id_laporan]);
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Laporan Telah Terhapus! </h4>
        </div>');
        redirect('warga/LaporanWarga/statusLaporan');
    }
  }

}

?>