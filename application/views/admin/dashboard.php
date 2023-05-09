<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <a href="" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Data Petugas </i></a>
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
                  <th>Tanggal Input</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <!-- <php $id_pertugas = 1; foreach($tabel as $table) : ?> --> 
                        <tr>
                            <td>1</td>
                            <td>Alvin Austin</td>
                            <td>alvinaustin123@gmail.com</td>
                            <td>$2y$10$kkAUZwTdHjWWfn.O/EqFUueuCeVvKqzz65Li5d7r7yE10mPjxuNVq	2022-12-2</td>
                            <td>2023-05-03</td>
                            <td>Petugas</td>
                            <td>
                                <a href="" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <!-- <php endforeach; ?> -->
                </tbody>
                </table>
            </div>
</div>
</script>