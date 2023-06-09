<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <!-- <= $this->session->flashdata('message'); ?> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Persyaratan</th>
                  <th>Foto</th>
                  <th>Tanggal Input</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
            $no = 1;
            foreach ($absen_petugas as $isi) { ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $isi->nama_pengguna; ?></td>
                            <td><?= $isi->persyaratan; ?></td>
                            <td>
                            <img data-toggle="modal" data-target="#myModal<?= $isi->id_absen;?>" src="<?= base_url('assets/img/') . $isi->foto; ?>" class="img-thumbnail" width='80' height='80'>
                            </td>
                            <td><?= $isi->waktu_absen; ?></td>
                            <td> <div 
                            <?php if ($isi->status == "Hadir") {
                              echo "class='btn btn-sm btn-success'";
                            } elseif ($isi->status == "Tidak Hadir") {
                              echo "class='btn btn-sm btn-danger'";
                            } else {
                              echo "class='btn btn-sm btn-warning'";
                            } ?>> <?= $isi->status; ?> </div> </td>

                            <td align="center">
                            <?php if ($isi->status == "Hadir" or $isi->status == "Tidak Hadir") {
                              echo "<button class='btn btn-sm btn-success'><i class='fa fa-check'></i> Selesai</button>";
                            } else {
                              ?>

                              <a href="<?= base_url('admin/MasukPetugas/terima/') . $isi->id_absen; ?>"  
                                class="btn btn-sm btn-info" onclick="return confirm('Apakah anda yakin absen diterima ?')"><i class="fa fa-check"></i> Terima</a>
                              <a href="<?= base_url('admin/MasukPetugas/tolak/') . $isi->id_absen; ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin absen ditolak ?')"><i class="bi bi-x-lg"></i> Tolak</a>
                              <?php
                            }
                            ?>
                                
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
                </table>
            </div>
</div>


<!-- Modal -->
<?php foreach ($absen_petugas as $isi) { ?>

<div class="modal fade" id="myModal<?= $isi->id_absen;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title text-danger" id="myModalLabel"><b> <?= $isi->foto ;?> </b></h4>
	      </div>
	      <div class="modal-body">
	      	<center>	
	        	<img src="<?= base_url('assets/img/') . $isi->foto; ?>" alt="" class="img-thumbnail">
	        </center>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>	
	      </div>
	    </div>
	  </div>
</div>

<?php } ?>

</script>