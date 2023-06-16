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
                  <th>Alamat</th>
                  <th>Judul Laporan</th>
                  <th>Pesan</th>
                  <th>Foto Lampiran</th>
                  <th>Tanggal Input</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_laporan = 1; foreach($laporan_warga as $laporan) : ?>
                        <tr>
                            <td><?php echo $id_laporan++ ?></td>
                            <td><?php echo $laporan->nama_warga; ?></td>
                            <td><?php echo $laporan->alamat; ?></td>
                            <td><?php echo $laporan->judul_laporan; ?></td>
                            <td><?php echo $laporan->pesan; ?></td>
                            <td>
                              <img data-toggle="modal" data-target="#myModal<?= $laporan->id_laporan;?>" src="<?= base_url('assets/img/') . $laporan->file; ?>" width='80' height='80' class="img-thumbnail">
                            </td>
                            <td><?php echo $laporan->tanggal_input; ?></td>
                            <td> <div 
                            <?php if ($laporan->status == "Laporan Diterima") {
                              echo "class='btn btn-sm btn-success'";
                            } elseif ($laporan->status == "Laporan Ditolak") {
                              echo "class='btn btn-sm btn-danger'";
                            } else {
                              echo "class='btn btn-sm btn-warning'";
                            } ?>> <?= $laporan->status; ?> </div> </td>

                            <td align="center">
                            <?php if ($laporan->status == "Laporan Diterima" or $laporan->status == "Laporan Ditolak") {
                              echo "<button class='btn btn-sm btn-success'><i class='fa fa-check'></i> Selesai</button>";
                            } else {
                              ?>

                              <a href="<?= base_url('admin/LaporanWarga/terima/') . $laporan->id_laporan; ?>"  
                                class="btn btn-sm btn-info" onclick="return confirm('Apakah anda yakin izin diterima ?')"><i class="fa fa-check"></i> Terima</a>
                              <a href="<?= base_url('admin/LaporanWarga/tolak/') . $laporan->id_laporan; ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin izin ditolak ?')"><i class="bi bi-x-lg"></i> Tolak</a>
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


<!-- Modal -->
<?php foreach ($laporan_warga as $laporan) { ?>

<div class="modal fade" id="myModal<?= $laporan->id_laporan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title text-danger" id="myModalLabel"><b> <?= $laporan->file;?> </b></h4>
	      </div>
	      <div class="modal-body">
	      	<center>	
	        	<img src="<?= base_url('assets/img/') . $laporan->file; ?>" alt="" class="img-thumbnail">
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