<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/DataWarga/updateWarga'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_warga" value="<?php echo $row->id_warga ?>">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama_warga">Nama Warga <span class="text-danger">*</span></label>
                <input type="text" name="nama_warga" id="nama_warga" class="form-control" placeholder="Masukkan Nama" required value="<?php echo $row->nama_warga ?>"><!-- Value diambil dari database -->
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
                <label for="Jenis Kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                <select name="jenis_kelamin" class="form-control form-control-user">
                    <option value="<?php echo "Laki-Laki" ?>" <?php if ($row->jenis_kelamin == 'Laki-Laki') {echo 'selected';} ?>>Laki-Laki</option>
                    <option value="<?php echo "Perempuan" ?>" <?php if ($row->jenis_kelamin == 'Perempuan') {echo 'selected';} ?>>Perempuan</option>
                </select>
              </div>
            </td>
          </tr>
        </table>

        <a href="<?php echo site_url('admin/DataWarga/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>