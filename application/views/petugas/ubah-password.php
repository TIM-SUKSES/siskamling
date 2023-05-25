<!-- Button To Top Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <i class="fa-solid fa-arrow-up"></i>
</button>
<!-- Button To Top End -->

<!-- Absen Section Start -->
<section id="ubahpassword" class="section-absen" style="padding-bottom: 46px;">
  <div class="attendance-container">
    <h1>UBAH PASSWORD</h1>
    <hr>
    <div class="card-form">
      <div class="absen-container">
        <div class="image-container">
          <img src="<?php echo base_url('assets/'); ?>img/icon/ubah-password.png" alt="Password Image">
        </div>
        <div class="form-container">
          <h2 class="text-white">Ubah Password Petugas</h2>
          <form>
            <label for="password" class="text-white">Password Lama</label>
            <input type="password" id="password" name="password">

            <label for="new_password1" class="text-white">Password Baru</label>
            <input type="password" id="new_password1" name="new_password1">

            <label for="new_password2" class="text-white">Konfirmasi Password</label>
            <input type="password" id="new_password2" name="new_password2">

            <button type="submit">Ganti Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Absen Section End -->