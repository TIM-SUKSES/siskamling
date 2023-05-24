<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <!-- <= $this->session->flashdata('message'); ?> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Persyaratan</th>
                  <th>Foto</th>
                  <th>Tanggal Input</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <!-- <php $id_petugas = 1; foreach($tabel as $table) : ?> -->
                        <tr>
                            <td>1<!-- <php echo $id_petugas++ ?> --></td>
                            <td>Alvin Austin<!-- <php echo $table->nama_petugas ?> --></td>
                            <td>Foto Depan Pos Ronda<!-- <php echo $table->persyaratan ?> --></td>
                            <td>
                              <img src="<?php echo base_url('assets/img/foto-selfie.png'); ?>" width="100"><!-- <img src="<php echo base_url('assets/img/'.$table->foto_petugas); ?>" width="100"> -->
                            </td>
                            <td>2023-05-03<!-- <php echo $table->tanggal_absen ?> --></td>
                            <td><a href="#" class="btn btn-sm btn-warning">Menunggu Verifikasi</a></td>
                            <td align="center">
                                <a href="" 
                                class="btn btn-sm btn-info"><i class="fa fa-check"></i> Terima</a>
                                <a href="" 
                                class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i> Tolak</a>
                            </td>
                        </tr>
                    <!-- <php endforeach; ?> -->
                </tbody>
                </table>
            </div>
</div>
</script>