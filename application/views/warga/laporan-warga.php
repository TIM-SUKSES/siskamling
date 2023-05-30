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
    <?= $this->session->flashdata('message2'); ?>
      <div class="report-container">
        <div class="image-container">
          <img src="<?php echo base_url('assets/'); ?>img/icon/laporan-icon.png" alt="Report Image">
        </div>
        <div class="form-container">
          <h2 class="text-white">Ruang Laporan Warga</h2>
          <form action="<?php echo site_url('warga/LaporanWarga/DataLaporan'); ?>" method="post" enctype="multipart/form-data" >
            <label for="nama" class="text-white">Nama</label>
            <input type="text" id="nama_warga" name="nama_warga" placeholder="masukkan nama anda">

            <label for="alamat" class="text-white">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="masukkan alamat rumah anda">

            <label for="pesan" class="text-white">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" placeholder="isi laporan anda"></textarea>

            <label for="file" class="text-white">Foto Lampiran</label>
            <input type="file" accept="image/*;capture=gallery" id="file" name="file">
            <?= $this->session->flashdata('message'); ?>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Laporan Section End -->