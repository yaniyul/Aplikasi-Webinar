
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
								<i class="fa fa-edit"></i>Tabel Mitra Webinar
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
											<a class="btn success green" data-toggle="modal" href="#addmitra">
												<i class="fa fa-plus"></i>
												<span class="hidden-480">Tambah</span>
											</a>
										</div>
									</div>

								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="table_mitrainar">
								<thead>
								<tr>
									<th>
										<center>No
									</th>
									<th>
										<center>ID Mitra
									</th>
									<th>
										<center>Nama Mitra
									</th>
									<th>
										<center>Alamat
									</th>
									<th>
										<center>Aksi
									</th>
								</tr>
								</thead>
								<tbody>
									<?php
										$no=1;
										foreach ($mitraArr as $mitra){ ?>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$mitra['id_mitra'] ?></td>
											<td><center><?=$mitra['nama_mitra'] ?></td>
											<td><center><?=$mitra['alamat'] ?></td>
											<td><center>
												<a class="fa fa-edit btn-sm btn-warning" data-toggle="modal" href="#editmitra<?= $no?>"></a>
												<a data-toggle="modal" href="<?php echo base_url('delete_mit/'.$mitra['id_mitra']);?>" class="fa fa-trash-o btn-sm btn-danger tombol-hapus-mitra"></a>
											</center>

											<div id="editmitra<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Edit Mitra</h2>
														</div>
														<form action="<?php echo base_url('update_mit/'.$mitra['id_mitra']);?>" method="post">
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<div class="col-md-12">
																			<label for="id_mitra" class="form-label">ID Mitra</label>
																			<p>
																			<input name="id_mitra" value="<?=$mitra['id_mitra'] ?>" type="text" class="form-control" name="id_mitra" id="id_mitra" 
																			placeholder="ID Mitra" aria-describedby="id_mitraHelp", disabled>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_mitra" class="form-label">Nama Mitra</label>
																			<p>
																			<input name="nama_mitra" value="<?=$mitra['nama_mitra'] ?>" type="text" class="form-control" name="nama_mitra" id="nama_mitra"
																			placeholder="Nama Mitra" aria-describedby="nama_mitraHelp">
																		</div>
																		<div class="col-md-12">
																			<label for="alamat" class="form-label">Alamat</label>
																			<p>
																			<input name="alamat" value="<?=$mitra['alamat'] ?>" type="text" class="form-control" name="alamat" id="alamat"
																			placeholder="Alamat" aria-describedby="alamatHelp">
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

											<div id="addmitra" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Tambah Mitra</h2>
														</div>
														<!--<form action=" echo base_url('save_mitra/');?>" method="post">-->
														<?php echo form_open_multipart('save_mit');?>
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<div class="col-md-12">
																			<label for="id_mitra" class="form-label">ID Mitra</label>
																			<p>
																			<input name="id_mitra" type="text" class="form-control" name="id_mitra" id="id_mitra" 
																			placeholder="ID Mitra" aria-describedby="id_mitraHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="nama_mitra" class="form-label">Nama Mitra</label>
																			<p>
																			<input name="nama_mitra" type="text" class="form-control" name="nama_mitra" id="nama_mitra"
																			placeholder="Nama Mitra" aria-describedby="nama_mitraHelp", required>
																		</div>
																		<div class="col-md-12">
																			<label for="alamat" class="form-label">Alamat</label>
																			<p>
																			<input name="alamat" type="text" class="form-control" name="alamat" id="alamat"
																			placeholder="Alamat" aria-describedby="alamatHelp", required>
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

											<div id="hapusmitra<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<form action="<?php echo base_url('delete_mit/'.$mitra['id_mitra']);?>" method="post">
															<div class="modal-body">
																<div style="height:200px" data-always-visible="1" data-rail-visible1="1">
																<center><br><h4>Apakah anda yakin akan menghapus data ini?</h4>
																<img src="http://localhost/miniproject/assets/silang.png" alt="logo" class="logo-default" widht="150" height="150"/>
																</div>
															</div>
															
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Tidak</button>
																<button type="submit" class="btn btn-danger">Ya</button>
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