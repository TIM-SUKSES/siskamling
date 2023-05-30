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
                  <th>Nama Petugas</th>
                  <th>Alasan Izin</th>
                  <th>Foto</th>
                  <th>Tanggal Input</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_izin = 1; foreach($izinpetugas as $izin) : ?>
                        <tr>
                            <td><?php echo $id_izin++ ?></td>
                            <td><?php echo $izin->nama_pengguna ?></td>
                            <td><?php echo $izin->alasan ?></td>
                            <td>
                              <img src="<?php echo base_url('assets/img/'.$izin->foto); ?>" width="100">
                            </td>
                            <td><?php echo $izin->tanggal_input ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>