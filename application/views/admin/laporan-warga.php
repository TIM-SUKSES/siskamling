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
                </tr>
                </thead>
                <tbody>
                    <?php $id_laporan = 1; foreach($laporan_warga as $laporan) : ?>
                        <tr>
                            <td><?php echo $id_laporan++ ?></td>
                            <td><?php echo $laporan->nama_warga ?></td>
                            <td><?php echo $laporan->alamat ?></td>
                            <td><?php echo $laporan->pesan ?></td>
                            <td>
                          <img src="<?php echo base_url('assets/img/'.$laporan->file); ?>" width="100">
                            </td>
                            <td><?php echo $laporan->tanggal_input ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>