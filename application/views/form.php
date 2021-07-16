<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->		   
		 <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">Pariwisata di Bandar Lampung</h1>
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                			<button type="button" class="btn btn-success" data-toggle="modal"
                				data-target="#exampleModal">
                				Input Data
                			</button>
                		</div>
                		<div class="card-body">
                			<div class="table-responsive">
                				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Nama</th>
                							<th>Cord</th>
                                            <th>Jam Buka</th>
                                            <th>Harga Tiket Masuk</th>
                                            <th>No. telp</th>
                							<th>Alamat</th>
                							<th>Gambar</th>
                							<th>Aksi</th>
                						</tr>
                					</thead>
                					<tbody>
                					<?php 
                        $no =1;
                        foreach ($wisata as $r) : ?>
                						<tr>
                							<td><?= $no++; ?></td>
                							<td><?= $r['nama'];?></td>
                							<td><?= $r['cord'];?></td>
                							<td><?= $r['jam'];?></td>
                							<td><?= $r['harga'];?></td>
                							<td><?= $r['telp'];?></td>
                							<td><?= $r['alamat'];?></td>											
											<td><img src="<?= base_url('gambar/') . $r['gambar'];?>" style="widht:100px;height:100px;"></td>
                							<td>
                								<button type="button" class="btn-circle btn-sm btn-warning" data-toggle="modal"
                									data-target="#editmodal<?= $r['id']?>"><i
                										class="fas fa-pencil-alt"></i></a>
                								
                								</button>
                								<a href="<?= base_url();?>Tampilan/hapus_data/<?= $r['id']; ?>"
                									class="btn-circle btn-sm btn-danger"><i
                										class="fas fa-trash-alt"></i></a>
                							</td>
                						</tr>
										<?php endforeach ?>
                					</tbody>
                				</table>

                			</div>
                		</div>
                	</div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

				  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


                <!-- Modal Tambah Data -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                	aria-labelledby="exampleModalLabel" aria-hidden="true">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<?= form_open_multipart('Tampilan/tambah_data');?>
                				</div>
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
                					<div class="col">
                						<input type="text" class="form-control" id="nama" name="nama"
                							placeholder="Masukkan nama wisata" required>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="cord" class="col-sm-2 col-form-label">Cord</label>
                					<div class="col">
                						<input type="text" class="form-control" id="cord" name="cord"
                							placeholder="Masukkan titik kordinat" required>
                					</div>
                				</div>
                                <div class="form-group row">
                					<label for="jam" class="col-sm-2 col-form-label">Jam Buka</label>
                					<div class="col">
                						<input type="text" class="form-control" id="cord" name="jam"
											placeholder="Masukkan jam buka wisata" required>
                					</div>              
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Harga</label>
                					<div class="col">
                						<input type="text" class="form-control" id="harga" name="harga"
                							placeholder="Masukkan harga tiket masuk wisata" required>
                					</div>
                				</div>
                                <div class="form-group row">
                					<label for="telp" class="col-sm-2 col-form-label">No. Telp</label>
                					<div class="col">
                						<input type="text" class="form-control" id="telp" name="telp"
                							placeholder="Masukkan nomor telpon wisata" required>
                					</div>
								</div>
                				<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                					<div class="col">
                						<input type="text" class="form-control" id="alamat" name="alamat"
                							placeholder="Masukkan alamat wisata" required>
                					</div>
                				</div>
							<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label">Gambar</label>
                					<div class="col">
                						<input type="file" class="form-control" id="userfile" name="userfile"
                							size="20" required>
                				</div>
							</div>
                			<div class="modal-footer">
                				<button type="submit" class="btn btn-success">Submit</button>
                				<?= form_close();?>
                			</div>
                		</div>
                	</div>
                </div>
                <!-- Akhir Modal Tambah Data -->



				<?php
				$no = 0;
				foreach ($wisata as $d) : $no++?>
                <!-- Modal Edit Data -->
                <!-- Modal -->
                <div class="modal fade" id="editmodal<?=$d['id'];?>"" tabindex="-1" role="dialog"
                	aria-labelledby="exampleModalLabel" aria-hidden="true">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<form action="<?=base_url('Tampilan/proses_edit_data');?>" method="post" enctype='multipart/form-data'>
                				<div class="form-group row">
                					<div class="col">
									<input hidden name="id" type="text" value="<?=$d['id'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
                					<div class="col">
                						<input type="text" class="form-control" id="nama" name="nama" value="<?=$d['nama']?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="cord" class="col-sm-2 col-form-label">Cord</label>
                					<div class="col">
                						<input type="text" class="form-control" id="cord" name="cord" value="<?=$d['cord']?>">
                					</div>
                				</div>
                                <div class="form-group row">
                					<label for="jam" class="col-sm-2 col-form-label">Jam Buka</label>
                					<div class="col">
                						<input type="text" class="form-control" id="cord" name="jam" value="<?=$d['jam']?>">
                					</div>              
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Harga</label>
                					<div class="col">
                						<input type="text" class="form-control" id="harga" name="harga" value="<?=$d['harga']?>">
                					</div>
                				</div>
                                <div class="form-group row">
                					<label for="telp" class="col-sm-2 col-form-label">No. Telp</label>
                					<div class="col">
                						<input type="text" class="form-control" id="telp" name="telp" value="<?=$d['telp']?>">
                					</div>
								</div>
                				<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                					<div class="col">
                						<input type="text" class="form-control" id="alamat" name="alamat" value="<?=$d['alamat']?>">
                					</div>
                				</div>
								<div class="form-group row">
										<label for="userfile" class="col-sm-2 col-form-label">Gambar</label>
										<div class="col">
											<input type="file" class="form-control" id="userfile" name="userfile"
												size="20">
									</div>
								</div>
								<div class="form-group row">
										<label for="foto" class="col-sm-2 col-form-label"></label>
										<div class="col">
											<img src="<?=base_url('gambar/') . $d['gambar']; ?>" alt="<?= $d['nama'];?>" style="width:100px;height:100px;">
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Update</button>
									
								</div>
						</form>
							</div>
                		</div>
                	</div>
                </div>
                <!-- Akhir Modal Tambah Data -->
				<?php endforeach; ?>

