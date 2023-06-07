<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header" style="position: relative;">
                <a href="<?php echo site_url('admin/JadwalPetugas/tambahJadwal'); ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Jadwal Petugas </i></a>
                <a href="<?php echo site_url('admin/JadwalPetugas/resetJadwal'); ?>" class="btn btn-warning" style="position:absolute; right: 10px ;" onclick="return confirm('Apakah Anda Yakin Ingin Mereset Status ?')">Reset Status</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?= $this->session->flashdata('message'); ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Petugas</th>
                  <th>Hari</th>
                  <th>Jam Masuk</th>
                  <th>Jam Keluar</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_jadwal = 1; foreach($jadwal as $jdwl) : ?> 
                        <tr>
                            <td><?php echo $id_jadwal++ ?></td>
                            <td><?php echo $jdwl->nama_pengguna ?></td>
                            <td><?php echo $jdwl->hari ?></td>
                            <td><?php echo $jdwl->jam_masuk ?></td>
                            <td><?php echo $jdwl->jam_keluar ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/JadwalPetugas/editJadwal/'. $jdwl->id_jadwal); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/JadwalPetugas/hapus/'. $jdwl->id_jadwal); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>