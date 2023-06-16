<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <i class="fa-solid fa-arrow-up"></i>
</button>
<!-- Button To Top End -->

<!-- Absen Section Start -->
<section id="ubahpassword" class="section-absen" style="padding-bottom: 46px;">
  <div class="attendance-container">
    <h1>STATUS LAPORAN ANDA</h1>
    <hr>
    <div class="card-form">
        <?= $this->session->flashdata('message2'); ?>
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-dark table-bordered">
                <thead>
                <tr>
                  <th>Judul Laporan</th>
                  <th>Foto Lampiran</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($laporan as $data) : ?>
                        <tr>
                            <td><?php echo $data->judul_laporan; ?></td>
                            <td>
                              <img data-toggle="modal" data-target="#myModal<?= $data->id_laporan;?>" src="<?= base_url('assets/img/') . $data->file; ?>" width='80' height='80' class="img-thumbnail">
                            </td>
                            <td> <div 
                            <?php if ($data->status == "Laporan Diterima") {
                              echo "class='btn btn-sm btn-success'";
                            } elseif ($data->status == "Laporan Ditolak") {
                              echo "class='btn btn-sm btn-danger'";
                            } else {
                              echo "class='btn btn-sm btn-warning'";
                            } ?>> <?= $data->status; ?> </div> </td>

                            <td align="center">
                            <?php if ($data->status == "Laporan Diterima" or $data->status == "Laporan Ditolak") {
                                ?>
                              <a href='<?= base_url('warga/LaporanWarga/hapus/'). $data->id_laporan; ?>' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i> Hapus Laporan</a>
                            <?php 
                            } else {
                              ?>
                              <a href="<?= base_url('admin/LaporanWarga/tolak/') ?>" 
                                class="btn btn-sm btn-danger disabled"><i class="fa fa-trash"></i> Hapus Laporan</a>
                              <?php
                            }
                            ?>
                                
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</section>
