
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
								<i class="fa fa-edit"></i>Tabel Webinar
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
											<a class="btn success green" data-toggle="modal" href="#addweb">
												<i class="fa fa-plus"></i>
												<span class="hidden-480">Tambah</span>
											</a>
										</div>
									</div>

								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="table_webinar">
								<thead>
								<tr>
									<th>
										<center>No
									</th>
									<th>
										<center>ID Webinar
									</th>
									<th>
										<center>Nama Webinar
									</th>
									<th>
										<center>Link Meet
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
										foreach ($webinarArr as $web){ ?>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$web['id_webinar'] ?></td>
											<td><center><?=$web['nama_webinar'] ?></td>
											<td><center><a><?=$web['link'] ?></a></td>
											<td><center><?=date($web['tgl_pelaksanaan'])?></td>
											<td><center><?=date($web['batas'])?></td>
											<td><center>
												<a class="fa fa-search-plus btn-sm btn-primary" data-toggle="modal" href="#detailweb<?= $no?>"></a>
												<a class="fa fa-edit btn-sm btn-warning" data-toggle="modal" href="#editweb<?= $no?>"></a>
												<a class="fa fa-trash-o btn-sm btn-danger tombol-hapus" data-toggle="modal" href="<?php echo base_url('delete_web/'.$web['id_webinar']);?>"> </a>
											</center>

											<div id="editweb<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Edit Webinar</h2>
														</div>
														<form action="<?php echo base_url('update_web/'.$web['id_webinar']);?>" method="post" enctype="multipart/form-data">
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																	<input name="lampiranLama" value="<?php echo $web['lampiran'];?>" type="hidden" name="userfile" id="userfile">
																		<div class="col-md-12">
																			
																			
																			<label for="id_webinar" class="form-label">ID Webinar</label>
																			<p>
																			<input name="id_webinar" value="<?=$web['id_webinar'] ?>" type="text" class="form-control" name="id_webinar" id="id_webinar" 
																			placeholder="ID Webinar" aria-describedby="id_webinarmeHelp", disabled>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_webinar" class="form-label">Nama Webinar</label>
																			<p>
																			<input name="nama_webinar" value="<?=$web['nama_webinar'] ?>" type="text" class="form-control" name="nama_webinar" id="nama_webinar"
																			placeholder="Nama Webinar" aria-describedby="nama_webinarHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_mitra" class="form-label">Mitra</label>
																			<p>
																			
																			<select name="nama_mitra" id="nama_mitra" class="form-control">
																				<option value="<?=$web['nama_mitra'] ?>"><?=$web['nama_mitra'] ?></option>
																				
																				<?php
																					$mitraArr = $this->mitra_webinar->get_mitra_webinar();
																					foreach($mitraArr as $mitra){
																						echo '<option value="'.$mitra['nama_mitra'].'">'.$mitra['nama_mitra'].'</option>';
																						
																					}
																				?>
																				

																			</select>
																		</div>
																		<div class="col-md-12">
																			<label for="narasumber" class="form-label">Narasumber</label>
																			<p>
																			<input name="narasumber" value="<?=$web['narasumber'] ?>" type="text" class="form-control" name="narasumber" id="narasumber"
																			placeholder="Narasumber" aria-describedby="linkHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="link" class="form-label">Link Meet</label>
																			<p>
																			<input name="link" value="<?=$web['link'] ?>" type="text" class="form-control" name="link" id="link"
																			placeholder="Link Meet" aria-describedby="linkHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="tgl_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
																			<p>
																			<input name="tgl_pelaksanaan" value="<?=date($web['tgl_pelaksanaan']) ?>" type="datetime-local" class="form-control" name="tgl_pelaksanaan" id="tgl_pelaksanaan"
																			placeholder="Tanggal Pelaksaaan" aria-describedby="tgl_pelaksanaanHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="batas" class="form-label">Batas Pendaftaran</label>
																			<p>
																			<input name="batas" value="<?=date($web['batas']) ?>" type="datetime-local" class="form-control" name="batas" id="batas"
																			placeholder="Batas Pendaftaran" aria-describedby="batasHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="lampiran" class="form-label">Lampiran</label>

																				<div class="polaroid">
																					<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $web['lampiran'];?> " style="width:50% ">
																				<p>
																				</div>
																			<p>
																			<input accept=".jpg, .png, .jpeg, .gif, .JPG, .JPEG, .PNG, .GIF" name="lampiran" value="<?=$web['lampiran'] ?>" type="file" class="form-control" name="userfile" id="userfile"
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

											<div id="addweb" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Tambah Webinar</h2>
														</div>
														<!--<form action=" echo base_url('save_web/');?>" method="post">-->
														<?php echo form_open_multipart('save_web');?>
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<div class="col-md-12">
																			<label for="id_webinar" class="form-label">ID Webinar</label>
																			<p>
																			<input name="id_webinar" type="text" class="form-control" name="id_webinar" id="id_webinar" 
																			placeholder="ID Webinar" aria-describedby="id_webinarmeHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_webinar" class="form-label">Nama Webinar</label>
																			<p>
																			<input name="nama_webinar" type="text" class="form-control" name="nama_webinar" id="nama_webinar"
																			placeholder="Nama Webinar" aria-describedby="nama_webinarHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_mitra" class="form-label">Mitra</label>
																			<p>
																			<select name="nama_mitra" id="nama_mitra" class="form-control">
																				<option value="">-- Pilih --
																					<?php
																					$mitraArr = $this->mitra_webinar->get_mitra_webinar();
																					foreach($mitraArr as $mitra){
																						echo  '<option value="'.$mitra['nama_mitra'].'">'.$mitra['nama_mitra'].'</option>';
																					}
																					?></option>
																				
																			</select>
																		</div>
																		<div class="col-md-12">
																			<label for="narasumber" class="form-label">Narasumber</label>
																			<p>
																			<input name="narasumber" type="text" class="form-control" name="narasumber" id="narasumber"
																			placeholder="Narasumber" aria-describedby="narasumberHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="link" class="form-label">Link Meet</label>
																			<p>
																			<input name="link" type="text" class="form-control" name="link" id="link"
																			placeholder="Link Meet" aria-describedby="linkHelp", required>
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
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Batal</button>
																<button type="submit" class="btn btn-success">Tambah</button>
															</div>
														<!--</form>-->
														<?php echo form_close();?>
														</div>
													</div>
												</div>
											</div>
											
											<div id="detailweb<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Detail Webinar</h2>
														</div>
														<form>
															<div class="modal-body">
																
																		<div class="row">
																			<div class="polaroid">
																				<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $web['lampiran'];?> " alt="Lampiran" style="width:50% ">
																			</div>
																			<table id="datailweb" class="table table-bordered table-striped">
																				<tbody>
																					<p>
								
																					<tr>
																						<td style="width:1%">
																							<b>ID Webinar
																						</td>
																						<td style="width:5%">
																							<?php echo $web['id_webinar'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Webinar
																						</td>
																						<td style="width:5%">
																							<?php echo $web['nama_webinar'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Mitra
																						</td>
																						<td style="width:5%">
																							<?php echo $web['nama_mitra'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Narasumber
																						</td>
																						<td style="width:5%">
																							<?php echo $web['narasumber'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Link Meet
																						</td>
																						<td style="width:5%">
																							<a>
																							<?php echo $web['link'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Tanggal Pelaksanaan
																						</td>
																						<td style="width:5%">
																							<?php echo date($web['tgl_pelaksanaan']) ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Batas Pendaftaran
																						</td>
																						<td style="width:5%">
																							<?php echo date($web['batas']) ?> </a>
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