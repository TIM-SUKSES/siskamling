<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <a href="<?php echo site_url('admin/DataPetugas/tambahPetugas'); ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Data Petugas </i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_pengguna = 1; foreach($tabel as $table) : ?> 
                        <tr>
                            <td><?php echo $id_pengguna++ ?></td>
                            <td><?php echo $table->nama_pengguna ?></td>
                            <td><?php echo $table->email ?></td>
                            <td><?php echo $table->password ?></td>
                            <td><?php echo $table->role ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/DataPetugas/editPetugas/'. $table->id_pengguna); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/DataPetugas/hapus/'. $table->id_pengguna); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>