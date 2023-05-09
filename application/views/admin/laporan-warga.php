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
                  <th>Alamat</th>
                  <td>Pesan</td>
                  <th>Foto Lampiran</th>
                  <th>Tanggal Input</th>
                  <th>Pukul</th>
                </tr>
                </thead>
                <tbody>
                    <!-- <php $id_petugas = 1; foreach($tabel as $table) : ?> -->
                        <tr>
                            <td>1<!-- <php echo $id_petugas++ ?> --></td>
                            <td>Alvin Austin<!-- <php echo $table->nama_petugas ?> --></td>
                            <td>Perum Pondok Melati, Blok F2/16 Dawuan Timur, Kec. Cikampek, Kab. Karawang<!-- <php echo $table->alamat ?> --></td>
                            <td>Tolong Rumah Saya dimaling<!-- <php echo $table->pesan ?> --></td>
                            <td>
                              <img src="<?php echo base_url('assets/img/maling.jpg'); ?>" width="100"><!-- <img src="<php echo base_url('assets/img/'.$table->foto_petugas); ?>" width="100"> -->
                            </td>
                            <td>2023-05-03<!-- <php echo $table->tanggal_input ?> --></td>
                            <td>04:30:55<!-- <php echo $table->waktu_input ?> --></td>
                        </tr>
                    <!-- <php endforeach; ?> -->
                </tbody>
                </table>
            </div>
</div>
</script>