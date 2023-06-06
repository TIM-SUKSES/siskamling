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
      <?php
      $hariIni = new DateTime();
      foreach($jadwal as $pt) : ?>
      
      <div class="card-jadwal">
        <h3><?php echo $pt->hari ?></h3> <!-- Isi dengan database  -->
        <hr>
        <p align="center"><?php echo $pt->jam_masuk ?> - <?php echo $pt->jam_keluar ?></p>
        <hr>
        <div class="btn-jadwal">
          <?php if($pt->status == 0 && $hariIni->format('l') == $pt->hari) : ?>
          <a href="<?php echo base_url('petugas/AbsenMasuk/index/') . $pt->id_jadwal; ?>">
              <button class="btn btn-success"> Masuk </button>
          </a> <span style="width: 5px;"></span>
          <a href="<?php echo base_url('petugas/AbsenIzin/index/') . $pt->id_jadwal; ?>">
              <button class="btn btn-danger"> Izin Tidak Hadir </button>
          </a>
          <?php else: ?>
          <a href="#">
              <button class="btn btn-success" disabled> Masuk</button>
          </a> <span style="width: 5px;"></span>
          <a href="#">
              <button class="btn btn-danger" disabled> Izin Tidak Hadir </button>
          </a>
          <?php endif; ?>
          
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Jadwal Section End -->