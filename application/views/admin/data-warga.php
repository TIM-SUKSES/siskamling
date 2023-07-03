<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <a href="<?php echo site_url('admin/DataWarga/tambahWarga'); ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Data Warga </i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Warga</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Jenis Kelamin</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_warga = 1; foreach($tabel as $warga) : ?> 
                        <tr>
                            <td><?php echo $id_warga++ ?></td>
                            <td><?php echo $warga->nama_warga ?></td>
                            <td><?php echo $warga->email ?></td>
                            <td><?php echo $warga->password ?></td>
                            <td><?php echo $warga->jenis_kelamin ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/DataWarga/editWarga/'. $warga->id_warga); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/DataWarga/hapus/'. $warga->id_warga); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>