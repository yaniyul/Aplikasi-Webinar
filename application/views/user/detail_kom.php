
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
					<h1>Detail Kegiatan Komunitas (Unit Kegiatan Mahasiswa)<small></small></h1>
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
						

					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
							
							</div>
							
							<div class="tools">								
								<a >
								</a>
							</div>
						</div>
						<div class="portlet-body">
							

                            <?php
                            foreach ($komunitasArr as $kom){ ?>
							
                                            
														
														<form>
															<div class="modal-body">
																
																		<div class="row">
																			<div>
																				<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $kom['lampiran'];?> " alt="Lampiran" style="width:40% ">
																			</div>
																			<table id="detailkom" class="table table-bordered table-striped">
																				<tbody>
																					<p>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Kegiatan
																						</td>
																						<td style="width:5%">
																							<input type="hidden" name="id_daftar" id="id_daftar">
																							<input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username']?>">
																							<input type="hidden" name="nama" id="nama" value="<?php echo $_SESSION['nama']?>">
																							<input type="hidden" name="prodi" id="prodi" value="<?php echo $_SESSION['prodi']?>">
																							<input type="hidden" name="email" id="email" value="<?php echo $_SESSION['email']?>">
																							<input type="hidden" name="id_kegiatan" id="id_kegiatan" value="<?php echo ($kom['id_kegiatan']) ?>">
																							
																							<input type="hidden" name="nama_kegiatan" id="nama_kegiatan" value="<?php echo ($kom['nama_kegiatan']) ?>">
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
																							<input type="hidden" name="nama_ukm" id="nama_ukm" value="<?php echo $kom['nama_ukm'] ?>">
																							
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Tanggal Pelaksanaan
																						</td>
																						<td style="width:5%">
																							<?php echo date($kom['tgl_pelaksanaan']) ?> </a>
																						</td>
																							<input type="hidden" name="tgl_pelaksanaan" id="tgl_pelaksanaan" value="<?php echo date($kom['tgl_pelaksanaan']) ?>">
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Batas Pendaftaran
																						</td>
																						<td style="width:5%">
																							<?php echo date($kom['batas']) ?> </a>
																						</td>
																							<input type="hidden" name="batas" id="batas" value="<?php echo date($kom['batas']) ?>">
																						</td>
																					</tr>
																				</tbody>
																			</table>

															<div class="modal-footer">
																<a href="<?php echo base_url('komunitas')?>" type="button" data-dismiss="modal" class="btn default">Kembali</a>
																<input type="hidden" name="waktu_daftar" id="waktu_daftar">
																
																<a href="#daftar_kom" id="daftarButton" data-toggle="modal" class="btn blue">Daftar</a>
																<div id="popUpContainer" style="display:none;">
																	<div id="popUpContent"></div>
																	<button id="closePopUp">Tutup</div>
																</div>


															</div>
														</form>

											<div id="daftar_kom" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Daftar</h2>
														</div>
														
														<?php echo form_open_multipart('daftar_kom');?>
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<input type="hidden" name="tgl_pelaksanaan" id="tgl_pelaksanaan" value="<?php echo date($kom['tgl_pelaksanaan']) ?>">
																		<input type="hidden" name="batas" id="batas" value="<?php echo date($kom['batas']) ?>">
																		<input type="hidden" name="waktu_daftar" id="waktu_daftar">
																		<input type="hidden" name="id_kegiatan" id="id_kegiatan" value="<?php echo $kom['id_kegiatan'] ?>">
																		<input type="hidden" name="nama_kegiatan" id="nama_kegiatan" value="<?php echo $kom['nama_kegiatan'] ?>">
                                                                        <input type="hidden" name="nama_ukm" id="nama_ukm" value="<?php echo $kom['nama_ukm'] ?>">
																		
																		<div class="col-md-12">
																			<label for="username" class="form-label">NIM</label>
																			<p>
																			<input name="username" value="<?php echo $_SESSION['username']?>" type="text" class="form-control" name="username" id="username" 
																			placeholder="NIM" aria-describedby="usernameHelp", readonly>
																			
																		</div>
																		<div class="col-md-12">
																			<label for="nama" class="form-label">Nama Lengkap</label>
																			<p>
																			<input name="nama" value="<?php echo $_SESSION['nama']?>" type="text" class="form-control" name="nama" id="nama" 
																			placeholder="Nama" aria-describedby="namaHelp", readonly>
																			
																		</div>
																		<div class="col-md-12">
																			<label for="prodi" class="form-label">Program Studi</label>
																			<p>
																			<input name="prodi" value="<?php echo $_SESSION['prodi']?>" type="text" class="form-control" name="prodi" id="prodi" 
																			placeholder="prodi" aria-describedby="prodiHelp", readonly>
																			<!-- <select name="prodi" id="prodi" class="form-control" placeholder="Program Studi">
																				<option value="</option>
																				<option>Sistem Informasi</option>
																				<option>Teknik Informatika</option>
																			</select> -->
																			
																		</div>
																		<div class="col-md-12">
																			<label for="email" class="form-label">Email</label>
																			<p>
																			<input name="email" value="<?php echo $_SESSION['email']?>" type="text" class="form-control" name="email" id="email" 
																			placeholder="email" aria-describedby="emailHelp", readonly>
																			
																		</div>
																		<div class="col-md-12">
																			<label for="alasan" class="form-label">Alasan Mendaftar</label>
																			<p>
																			<textarea name="alasan" type="text" class="form-control" name="alasan" id="alasan"
																			placeholder="Alasan" aria-describedby="alasanHelp" rows="5" cols="100", required></textarea>
																		</div>
																	</div>
																</div>
															
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Batal</button>
																<button type="submit" class="btn btn-primary">Daftar</button>
															</div>
														</form>
														<?php echo form_close();?>
														</div>
													</div>
												</div>
											</div>
											
                            <?php }?>
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