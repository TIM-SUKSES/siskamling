<!-- Login Section Start -->
<section id="login">
  <!-- Section Welcome -->
  <div id="beranda" class="section-login">
    <div class="login-container">
      <h1>SELAMAT DATANG</h1>
      <h3>DI WEBSITE SISKAMLING</h3>
      <div class="login-button">
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-login"><button class="bg-primary"><i class="fa fa-user-secret"> </i> MASUK SEBAGAI PETUGAS</button></a>
        <a href="<?php echo base_url('warga/HomeWarga'); ?>"><button class="bg-success"><i class="fa fa-users"> </i> MASUK SEBAGAI WARGA</button></a>
      </div>
    </div>
  </div>
</section>
<!-- Login Section End -->

<!-- Modal Login -->
<div class="modal fade" id="modal-login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-auth">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Masukkan Akun Anda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('auth/login'); ?>" method="post">
          <div class="form-group mb-3">
            <label for="email" class="text-secondary mb-3">EMAIL *</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" required>
          </div>
          <div class="form-group mb-3">
            <label for="password" class="text-secondary mb-3">PASSWORD *</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda"
              required>
          </div>
          <button onclick="peringatan()" type="submit" class="btn btn-primary"> <i class="fa fa-sign-in"></i> Login / Masuk
          </button>
          <script>
            function peringatan() {
              alert('Harap ubah password anda pada menu pengaturan!');
            }
          </script>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <p class="text-end mt-3">Password belum diganti? <br> Gunakan password 
        <b class="text-primary"><u>siskamling2023</u></b> </p>
      </div> -->
    </div>
  </div>
</div>