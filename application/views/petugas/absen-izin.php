<!-- Button To Top Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <i class="fa-solid fa-arrow-up"></i>
</button>
<!-- Button To Top End -->

<!-- Absen Section Start -->
<section id="absen" class="section-absen" style="padding-bottom: 46px;">
  <div class="attendance-container">
    <h1>ABSEN PETUGAS</h1>
    <hr>
    <div class="card-form">
      <div class="absen-container">
        <div class="image-container">
          <img src="<?php echo base_url('assets/'); ?>img/icon/absen-icon.png" alt="Absen Image">
        </div>
        <div class="form-container">
          <h2 class="text-white">Ruang Izin Absen Petugas</h2>
          <form>
            <label for="alasan" class="text-white">Alasan Izin</label>
            <input type="text" id="alasan" name="alasan">

            <label for="camera" class="text-white">Bukti Lampiran</label>
            <input type="file" accept="image/*;capture=gallery" id="camera" name="camera">

            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Absen Section End -->