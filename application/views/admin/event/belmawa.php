
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
								<i class="fa fa-edit"></i>Tabel Kegiatan Pembelajaran dan Kemahasiswaan (Belmawa)
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
											<a class="btn success green" data-toggle="modal" href="#addbel">
												<i class="fa fa-plus"></i>
												<span class="hidden-480">Tambah</span>
											</a>
										</div>
									</div>

								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="table_belinar">
								<thead>
								<tr>
									<th>
										<center>No
									</th>
									<th>
										<center>ID Belmawa
									</th>
									<th>
										<center>Nama Kegiatan
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
										foreach ($belmawaArr as $bel){ ?>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$bel['id_belmawa'] ?></td>
											<td><center><?=$bel['nama_belmawa'] ?></td>
											<td><center><?=date($bel['tgl_pelaksanaan'])?></td>
											<td><center><?=date($bel['batas'])?></td>
											<td><center>
												<a class="fa fa-search-plus btn-sm btn-primary" data-toggle="modal" href="#detailbel<?= $no?>"></a>
												<a class="fa fa-edit btn-sm btn-warning" data-toggle="modal" href="#editbel<?= $no?>"></a>
												<a class="fa fa-trash-o btn-sm btn-danger tombol-hapus-belmawa" data-toggle="modal" href="<?php echo base_url('delete_bel/'.$bel['id_belmawa']);?>"> </a>
											</center>

                                            <div id="addbel" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Tambah Belmawa</h2>
														</div>
														<!--<form action=" echo base_url('save_bel/');?>" method="post">-->
														<?php echo form_open_multipart('save_bel');?>
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<div class="col-md-12">
																			<label for="id_belmawa" class="form-label">ID Belmawa</label>
																			<p>
																				<!-- <span name="id_belmawa" id="id_belmawa" value=""></span></p> -->
																			<input name="id_belmawa" type="text" class="form-control" name="id_belmawa" id="id_belmawa" 
																			placeholder="ID Belmawa" aria-describedby="id_belmawameHelp", readonly>
																			
																		</div>
																		<div class="col-md-12">
																			<label for="nama_belmawa" class="form-label">Nama Kegiatan</label>
																			<p>
																				<select name="nama_belmawa" id="nama_belmawa" class="form-control", required>
                                                                                        <option value="">-- Pilih --</option>
                                                                                        <option value="NUDC">Debat Bahasa Inggris/National University Debate Championship (NUDC)</option>
                                                                                        <option value="KMI">Ekspo Kewirausahaan Mahasiswa Indonesia (KMI)</option>
                                                                                        <option value="FFMI">Festival Film Mahasiswa Indonesia (FFMI)</option>
                                                                                        <option value="KBMI">Kompetisi Bisnis Mahasiswa Indonesia (KBMI)</option>
                                                                                        <option value="KDMI">Kompetisi Debat Mahasiswa Indonesia (KDMI)</option>
                                                                                        <option value="MIPAPT">Kompetisi Matematika dan IPA PT (MIPA PT)</option>
																						<option value="KRI">Kontes Robot Indonesia (KRI)</option>
																						<option value="KRTI">Kontes Robot Terbang Indonesia (KRTI)</option>
																						<option value="LIDM">Lomba Inovasi Digital Mahasiswa (LIDM)</option>
																						<option value="MTQMN">Musabaqah Tilawatil Quran Mahasiswa Nasional (MTQMN)</option>
																						<option value="GEMASTIK">Pagelaran Mahasiswa Bidang TIK (GEMASTIK)</option>
																						<option value="PIMNAS">Pekan Ilmiah Mahasiswa Nasional (PIMNAS)</option>
																						<option value="POMNAS">Pekan Olahraga Mahasiswa Nasional (POMNAS)</option>
																						<option value="PEKSIMINAS">Pekan Seni Mahasiswa Tingkat Nasional (PEKSIMINAS)</option>
																						<option value="PILMAPRES">Pemilihan Mahasiswa Berprestasi (PILMAPRES)</option>
																						<option value="PKM">Program Kreativitas Mahasiswa (PKM)</option>
																						<option value="StartupMahasiswaIndonesia">Startup Mahasiswa Indonesia</option>
																					</select>
																		</div>
																		
																		<div class="col-md-12">
																			<label for="deskripsi" class="form-label">Deskripsi</label>
																			<p>
																			<textarea name="deskripsi" type="text" class="form-control" name="deskripsi" id="deskripsi"
																			placeholder="Deskripsi" aria-describedby="deskripsiHelp" rows="5" cols="100", required></textarea>
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
																			placeholder="lampiran" aria-describedby="lampiranHelp" size="100", required>
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

                                            <div id="detailbel<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Detail Belmawa</h2>
														</div>
														<form>
															<div class="modal-body">
																
																		<div class="row">
																			<div class="polaroid">
																				<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $bel['lampiran'];?> " alt=" <?=$bel['nama_belmawa'] ?>" style="width:50% ">
																			</div>
																			<table id="datailbel" class="table table-bordered table-striped">
																				<tbody>
																					<p>
								
																					<tr>
																						<td style="width:1%">
																							<b>ID Belmawa
																						</td>
																						<td style="width:5%">
																							<?php echo $bel['id_belmawa'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Kegiatan
																						</td>
																						<td style="width:5%">
																							<?php echo $bel['nama_belmawa'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Deskripsi
																						</td>
																						<td style="width:5%">
																							<?php echo $bel['deskripsi'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Tanggal Pelaksanaan
																						</td>
																						<td style="width:5%">
																							<?php echo date($bel['tgl_pelaksanaan']) ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Batas Pendaftaran
																						</td>
																						<td style="width:5%">
																							<?php echo date($bel['batas']) ?> </a>
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

                                            <div id="editbel<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Edit Belmawa</h2>
														</div>
														<form action="<?php echo base_url('update_bel/'.$bel['id_belmawa']);?>" method="post" enctype="multipart/form-data">
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																	<input name="lampiranLama" value="<?php echo $bel['lampiran'];?>" type="hidden" name="userfile" id="userfile">
																		<div class="col-md-12">
																			
																			<label for="id_belmawa" class="form-label">ID Belmawa</label>
																			<p>
																			<input name="id_belmawa" value="<?=$bel['id_belmawa'] ?>" type="text" class="form-control" name="id_belmawa" id="id_belmawa" 
																			placeholder="ID Belmawa" aria-describedby="id_belmawameHelp", disabled>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_belmawa" class="form-label">Nama Belmawa</label>
																			<p>
																			<input name="nama_belmawa" value="<?=$bel['nama_belmawa'] ?>" type="text" class="form-control" name="nama_belmawa" id="nama_belmawa" 
																			placeholder="Nama Belmawa" aria-describedby="nama_belmawameHelp", readonly>
																			
																		</div>
																		<div class="col-md-12">
																			<label for="deskripsi" class="form-label">Deskripsi</label>
																			<p>
																			<textarea name="deskripsi" value="<?=$bel['deskripsi'] ?>" type="text" class="form-control" name="deskripsi" id="deskripsi"
																			placeholder="Deskripsi" aria-describedby="deskripsiHelp" rows="5" cols="100", required><?=$bel['deskripsi'] ?></textarea>
																		</div>
																		<div class="col-md-12">
																			<label for="tgl_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
																			<p>
																			<input name="tgl_pelaksanaan" value="<?=date($bel['tgl_pelaksanaan']) ?>" type="datetime-local" class="form-control" name="tgl_pelaksanaan" id="tgl_pelaksanaan"
																			placeholder="Tanggal Pelaksanaan" aria-describedby="tgl_pelaksanaanHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="batas" class="form-label">Batas Pendaftaran</label>
																			<p>
																			<input name="batas" value="<?=date($bel['batas']) ?>" type="datetime-local" class="form-control" name="batas" id="batas"
																			placeholder="Batas Pendaftaran" aria-describedby="batasHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="lampiran" class="form-label">Lampiran</label>
																			<p>
																					<div>
																						<center><img src="<?php echo base_url('assets/lampiran/').$bel['lampiran']?>" style="width:50%">
																						<p>
																					</div>
																			<p>
																				
																			<input accept=".jpg, .png, .jpeg, .gif, .JPG, .JPEG, .PNG, .GIF" name="lampiran" value="<?=$bel['lampiran'] ?>" type="file" class="form-control" name="userfile" id="userfile"
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
