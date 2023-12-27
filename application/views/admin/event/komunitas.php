
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1><small></small></h1>
				</div>
				
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="flash-data" data-flashdata="<?=$this->session->flashdata('message');?>"></div>
					<?php if ($this->session->flashdata('message')):?>
						
					<?php endif; ?>
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Tabel Kegiatan Komunitas (Unit Kegiatan Mahasiswa)
							</div>
								
							<div class="tools">								
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
									</div>
									<div class="col-md-12">
										<div class="btn-group">
											<a class="btn success green" data-toggle="modal" href="#addkom">
												<i class="fa fa-plus"></i>
												<span class="hidden-480">Tambah</span>
											</a>
										</div>
									</div>

								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="table_kominar">
								<thead>
								<tr>
									<th>
										<center>No
									</th>
									<th>
										<center>ID Kegiatan
									</th>
									<th>
										<center>Nama Kegiatan
									</th>
									<th>
										<center>Nama UKM
									</th>
									<th>
										<center>Tanggal Pelaksanaan
									</th>
									<th>
										<center>Batas Pendaftaran
									</th>
									<th>
										<center>Aksi
									</th>
								</tr>
								</thead>
								<tbody>
									<?php
										$no=1;
										foreach ($komunitasArr as $kom){ ?>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$kom['id_kegiatan'] ?></td>
											<td><center><?=$kom['nama_kegiatan'] ?></td>
											<td><center><?=$kom['nama_ukm'] ?></td>
											<td><center><?=date($kom['tgl_pelaksanaan'])?></td>
											<td><center><?=date($kom['batas'])?></td>
											<td><center>
												<a class="fa fa-search-plus btn-sm btn-primary" data-toggle="modal" href="#detailkom<?= $no?>"></a>
												<a class="fa fa-edit btn-sm btn-warning" data-toggle="modal" href="#editkom<?= $no?>"></a>
												<a class="fa fa-trash-o btn-sm btn-danger tombol-hapus-komunitas" data-toggle="modal" href="<?php echo base_url('delete_kom/'.$kom['id_kegiatan']);?>"> </a>
											</center>

                                            <div id="addkom" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Tambah Kegiatan</h2>
														</div>
														<!--<form action=" echo base_url('save_kom/');?>" method="post">-->
														<?php echo form_open_multipart('save_kom');?>
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<div class="col-md-12">
																			<label for="id_kegiatan" class="form-label">ID Kegiatan</label>
																			<p>
																			<input name="id_kegiatan" type="text" class="form-control" name="id_kegiatan" id="id_kegiatan" 
																			placeholder="ID Kegiatan" aria-describedby="id_kegiatanmeHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
																			<p>
																			<input name="nama_kegiatan" type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" 
																			placeholder="Nama Kegiatan" aria-describedby="nama_kegiatanmeHelp", required>
																					
																		</div>
																		<div class="col-md-12">
																			<label for="nama_ukm" class="form-label">Nama UKM</label>
																			<p>
																				<select name="nama_ukm" id="nama_ukm" class="form-control">
                                                                                        <option value="">-- Pilih --</option>
                                                                                        <option>Badan Eksekutif Mahasiswa (BEM)</option>
                                                                                        <option>Futsal</option>
																						<option>Himpunan Mahasiswa Sistem Informasi</option>
                                                                                        <option>Himpunan Mahasiswa Teknik Informatika</option>
																						<option>Lembaga Dakwah Kampus As-Salaam</option>
                                                                                        <option>Silat</option>
																						<option>Volleyball</option>
																					</select>
																			</div>
																		<div class="col-md-12">
																			<label for="tgl_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
																			<p>
																			<input name="tgl_pelaksanaan" type="datetime-local" class="form-control" name="tgl_pelaksanaan" id="tgl_pelaksanaan"
																			placeholder="Tanggal Pelaksanaan" aria-describedby="tgl_pelaksanaanHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="batas" class="form-label">Batas Pendaftaran</label>
																			<p>
																			<input name="batas" type="datetime-local" class="form-control" name="batas" id="batas"
																			placeholder="Batas Pendaftaran" aria-describedby="batasHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="lampiran" class="form-label">Lampiran</label>
																			<p>
																			<input accept=".jpg, .png, .jpeg, .gif, .JPG, .JPEG, .PNG, .GIF" name="lampiran" type="file" class="form-control" id="lampiran"
																			placeholder="lampiran" aria-describedby="lampiranHelp" size="20", required>
																		</div>
																	</div>
																</div>
															
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Batal</button>
																<button type="submit" class="btn btn-success">Tambah</button>
															</div>
														</form>
														<?php echo form_close();?>
														</div>
													</div>
												</div>
											</div>

                                            <div id="detailkom<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Detail Kegiatan</h2>
														</div>
														<form>
															<div class="modal-body">
																
																		<div class="row">
																			<div class="polaroid">
																				<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $kom['lampiran'];?> " alt="Lampiran" style="width:50% ">
																			</div>
																			<table id="datailkom" class="table table-bordered table-striped">
																				<tbody>
																					<p>
								
																					<tr>
																						<td style="width:1%">
																							<b>ID Kegiatan
																						</td>
																						<td style="width:5%">
																							<?php echo $kom['id_kegiatan'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Kegiatan
																						</td>
																						<td style="width:5%">
																							<?php echo $kom['nama_kegiatan'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Nama UKM
																						</td>
																						<td style="width:5%">
																							<?php echo $kom['nama_ukm'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Tanggal Pelaksanaan
																						</td>
																						<td style="width:5%">
																							<?php echo date($kom['tgl_pelaksanaan']) ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Batas Pendaftaran
																						</td>
																						<td style="width:5%">
																							<?php echo date($kom['batas']) ?> </a>
																						</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Batal</button>
															</div>
														</form>
														</div>
													</div>
												</div>
											</div>

                                            <div id="editkom<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Edit Kegiatan</h2>
														</div>
														<form action="<?php echo base_url('update_kom/'.$kom['id_kegiatan']);?>" method="post" enctype="multipart/form-data">
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																	<input name="lampiranLama" value="<?php echo $kom['lampiran'];?>" type="hidden" name="userfile" id="userfile">
																		<div class="col-md-12">
																			<input name="lampiranLama" value="<?php echo $kom['lampiran'];?>" type="hidden" name="userfile" id="userfile", disabled>
																			
																			<label for="id_kegiatan" class="form-label">ID Kegiatan</label>
																			<p>
																			<input name="id_kegiatan" value="<?=$kom['id_kegiatan'] ?>" type="text" class="form-control" name="id_kegiatan" id="id_kegiatan" 
																			placeholder="ID Kegiatan" aria-describedby="id_kegiatanmeHelp", disabled>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
																			<p>
																			<input name="nama_kegiatan" value="<?=$kom['nama_kegiatan'] ?>" type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" 
																			placeholder="Nama Kegiatan" aria-describedby="nama_kegiatanmeHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_ukm" class="form-label">Nama UKM</label>
																			<p>
																				<select name="nama_ukm" id="nama_ukm" class="form-control", required>
                                                                                        <option value="<?=$kom['nama_ukm'] ?>"><?=$kom['nama_ukm'] ?></option>
                                                                                        <option>Badan Eksekutif Mahasiswa (BEM)</option>
                                                                                        <option>Futsal</option>
																						<option>Himpunan Mahasiswa Sistem Informasi</option>
                                                                                        <option>Himpunan Mahasiswa Teknik Informatika</option>
																						<option>Lembaga Dakwah Kampus As-Salaam</option>
                                                                                        <option>Silat</option>
																						<option>Volleyball</option>
																					</select>
																		</div>
																		<div class="col-md-12">
																			<label for="tgl_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
																			<p>
																			<input name="tgl_pelaksanaan" value="<?=date($kom['tgl_pelaksanaan']) ?>" type="datetime-local" class="form-control" name="tgl_pelaksanaan" id="tgl_pelaksanaan"
																			placeholder="Tanggal Pelaksanaan" aria-describedby="tgl_pelaksanaanHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="batas" class="form-label">Batas Pendaftaran</label>
																			<p>
																			<input name="batas" value="<?=date($kom['batas']) ?>" type="datetime-local" class="form-control" name="batas" id="batas"
																			placeholder="Batas Pendaftaran" aria-describedby="batasHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="lampiran" class="form-label">Lampiran</label>
																			
																				<div class="polaroid">
																					<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $kom['lampiran'];?> " style="width:50% ">
																				<p>
																				</div>
																			<p>
																			
																			<input accept=".jpg, .png, .jpeg, .gif" name="lampiran" value="" type="file" class="form-control" name="userfile" id="userfile"
																			placeholder="lampiran" aria-describedby="lampiranHelp">
																			<small>(Biarkan kosong jika tidak diganti)</small>
																		
																		</div>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Batal</button>
																<button type="submit" class="btn btn-warning">Edit</button>
															</div>
														</form>
														</div>
													</div>
												</div>
											</div>
											
											<?php $no ++; } ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->