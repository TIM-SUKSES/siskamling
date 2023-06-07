<!-- Button To Top Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <i class="fa-solid fa-arrow-up"></i>
</button>
<!-- Button To Top End -->

<!-- Jadwal Section Start -->
<section id="jadwal" class="section-jadwal">
  <div class="jadwal-container">
    <h1>JADWAL SISKAMLING</h1>
    <hr>
    <?= $this->session->flashdata('message2'); ?>
    <?= $this->session->flashdata('message3'); ?>
    <div class="cards-jadwal">
      <?php foreach($petugas as $pt) : ?>
      <div class="card-jadwal">
        <h3><?php echo $pt->hari ?></h3> <!-- Isi dengan database  -->
        <hr>
        <p align="center"><?php echo $pt->jam_masuk ?> - <?php echo $pt->jam_keluar ?></p>
        <hr>
        <div class="btn-jadwal">
          <a href="<?php echo base_url('petugas/AbsenMasuk'); ?>">
            <?php if($pt->status == 0) : ?>
            <button class="bg-success" data-id_jadwal="<?php echo $this->session->userdata('id_pengguna'); ?>">
              Masuk
            </button>
          </a>
          <?php else: ?>
          <a href="<?php echo base_url('petugas/AbsenMasuk'); ?>">
            <button class="bg-success" disabled>
              Masuk
            </button>
          </a>
          <?php endif; ?>
          <a href="<?php echo base_url('petugas/AbsenIzin'); ?>">
            <button class="bg-danger">
              Izin Tidak Hadir
            </button>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Jadwal Section End -->