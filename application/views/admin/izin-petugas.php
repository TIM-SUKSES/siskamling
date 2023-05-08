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
                  <th>Alasan Izin</th>
                  <th>Foto</th>
                  <th>Tanggal Input</th>
                </tr>
                </thead>
                <tbody>
                    <!-- <php $id_petugas = 1; foreach($tabel as $table) : ?> -->
                        <tr>
                            <td>1<!-- <php echo $id_petugas++ ?> --></td>
                            <td>Alvin Austin<!-- <php echo $table->nama_petugas ?> --></td>
                            <td>Izin Karena Sakit<!-- <php echo $table->persyaratan ?> --></td>
                            <td>
                              <img src="<?php echo base_url('assets/img/surat-keterangan-dokter.jpg'); ?>" width="100"><!-- <img src="<php echo base_url('assets/img/'.$table->foto_petugas); ?>" width="100"> -->
                            </td>
                            <td>2023-05-03<!-- <php echo $table->tanggal_absen ?> --></td>
                        </tr>
                    <!-- <php endforeach; ?> -->
                </tbody>
                </table>
            </div>
</div>
</script>