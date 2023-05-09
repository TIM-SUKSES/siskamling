<!-- Button To Top Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <i class="fa-solid fa-arrow-up"></i>
</button>
<!-- Button To Top End -->

<!-- Laporan Section Start -->
<section id="laporan" class="section-laporan" style="padding-bottom: 46px;">
  <div class="laporan-container">
    <h1>LAPORAN WARGA</h1>
    <hr>
    <div class="card-form"> <!-- Untuk Styling Form css terdapat di header -->
      <div class="report-container">
        <div class="image-container">
          <img src="<?php echo base_url('assets/'); ?>img/icon/laporan-icon.png" alt="Report Image">
        </div>
        <div class="form-container">
          <h2 class="text-white">Ruang Laporan Warga</h2>
          <form>
            <label for="nama" class="text-white">Nama</label>
            <input type="text" id="nama" name="nama">

            <label for="alamat" class="text-white">Alamat</label>
            <input type="text" id="alamat" name="alamat">

            <label for="pesan" class="text-white">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5"></textarea>

            <label for="foto" class="text-white">Foto Lampiran</label>
            <input type="file" accept="image/*;capture=gallery" id="foto" name="foto">

            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Laporan Section End -->