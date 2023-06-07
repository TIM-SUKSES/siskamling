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
                  <th>Status</th>
                  <th>Action</th>
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
                            <td> <div 
                            <?php if ($izin->status == "Diterima") {
                              echo "class='btn btn-sm btn-success'";
                            } elseif ($izin->status == "Ditolak") {
                              echo "class='btn btn-sm btn-danger'";
                            } else {
                              echo "class='btn btn-sm btn-warning'";
                            } ?>> <?= $izin->status; ?> </div> </td>

                            <td align="center">
                            <?php if ($izin->status == "Diterima" or $izin->status == "Ditolak") {
                              echo "<button class='btn btn-sm btn-success'><i class='fa fa-check'></i> Selesai</button>";
                            } else {
                              ?>

                              <a href="<?= base_url('admin/IzinPetugas/terima/') . $izin->id_izin; ?>"  
                                class="btn btn-sm btn-info"><i class="fa fa-check"></i> Terima</a>
                              <a href="<?= base_url('admin/IzinPetugas/tolak/') . $izin->id_izin; ?>" 
                                class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i> Tolak</a>
                              <?php
                            }
                            ?>
                                
                            </td>
 
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>