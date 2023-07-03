<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/DataPetugas/update'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_pengguna" value="<?php echo $row->id_pengguna ?>">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama_pengguna">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama_pengguna" id="nama_pengguna" class="form-control" placeholder="Masukkan Nama" required value="<?php echo $row->nama_pengguna ?>"><!-- Value diambil dari database -->
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required value="<?php echo $row->email ?>"><!-- Value diambil dari database -->
              </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required value="siskamling2023"><!-- Value diambil dari database -->
                <input type="checkbox" onclick="myFunction()"> Lihat Password
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="role">Roles <span class="text-danger">*</span></label>
                <select name="role" class="form-control form-control-user">
                  <?php foreach ($roles as $r) { ?>
                  <option value="<?= $r['id_roles'];?>" <?php echo $row->role == $r['nama_roles'] ? 'selected' : '' ?>><?= $r['nama_roles'];?></option>
                  <?php } ?>
                </select>
              </div>
            </td>
          </tr>
        </table>

        <a href="<?php echo site_url('admin/DataPetugas/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>