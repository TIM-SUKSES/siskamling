<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <!-- <= $this->session->flashdata('message'); ?> -->
      <a href="<?php echo site_url('admin/JadwalPetugas/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/JadwalPetugas/simpanJadwal'); ?>" method="post" enctype="multipart/form-data">
        <table id="table" width="30%">
          <tr>
            <td>
            <div class="form-group">
                <label for="nama_pengguna">ID Petugas <span class="text-danger">*</span></label>
                <select name="nama_pengguna" class="form-control form-control-user" required>
                  <?php foreach ($pengguna as $r) { ?>
                  <option value="<?php echo $r['nama_pengguna']; ?>"> <?php echo $r['nama_pengguna']; ?> </option>
                  <?php } ?>
                </select>
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="hari">Hari <span class="text-danger">*</span></label>
                <input type="text" name="hari" id="hari" class="form-control" placeholder="Masukkan Hari" required>
              </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-group">
                <label for="jam_masuk">Jam Masuk <span class="text-danger">*</span></label>
                <input type="text" name="jam_masuk" id="jam_masuk" class="form-control" placeholder="Masukkan Jam Masuk Petugas" required>
              </div>
            </td>
          </tr>
          <tr>
            <td>
            <div class="form-group">
                <label for="jam_keluar">Jam Keluar <span class="text-danger">*</span></label>
                <input type="text" name="jam_keluar" id="jam_keluar" class="form-control" placeholder="Masukkan Jam Keluar Petugas" required>
              </div>
            </td>
          </tr>
        </table>
        <button type="reset" class="btn"><i class="fa fa-refresh"></i> Reset</button>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-save"></i> Simpan</button>
      </form>
    </div>
  </div>
</section>