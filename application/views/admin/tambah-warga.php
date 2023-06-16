<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <!-- <= $this->session->flashdata('message'); ?> -->
      <a href="<?php echo site_url('admin/DataWarga/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/DataWarga/simpanWarga'); ?>" method="post" enctype="multipart/form-data">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama_warga">Nama Warga<span class="text-danger">*</span></label>
                <input type="text" name="nama_warga" id="nama" class="form-control" placeholder="Masukkan Nama" required>
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
              </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-group">
                <label for="password">PASSWORD <span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="jenis_kelamin">jenis_kelamin <span class="text-danger">*</span></label>
                <select name="jenis_kelamin" class="form-control form-control-user" required>
                  <option value="<?php echo "Laki-Laki" ?>">Laki-Laki</option>
                  <option value="<?php echo "Perempuan" ?>">Perempuan</option>
                </select>
              </div>
              <td>
                <input type="hidden" name="role" value="warga">
              </td>
            </td>
          </tr>
        </table>
        <button type="reset" class="btn"><i class="fa fa-refresh"></i> Reset</button>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-save"></i> Simpan</button>
      </form>
    </div>
  </div>
</section>