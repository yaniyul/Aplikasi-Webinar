
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
								<i class="fa fa-edit"></i>Tabel Pengguna
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
									<div class="col-md-6">
										
									</div>

								</div>
							</div>
						
							<table class="table table-striped table-hover table-bordered" id="table_user">
								<thead>
								<tr>
									<th>
										<center>No
									</th>
									<th>
										<center>NIM
									</th>
									<th>
										<center>Nama
									</th>
									<th>
										<center>Program Studi
									</th>
									<th>
										<center>Email
									</th>
									<th>
										<center>Aksi
									</th>
								</tr>
								</thead>
								<tbody>
									<?php
										$no=1;
										foreach ($userArr as $user){ ?>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$user['username'] ?></td>
											<td><center><?=$user['nama'] ?></td>
											<td><center><?=$user['prodi'] ?></td>
											<td><center><?=$user['email'] ?></td>
											<td><center><a class="fa fa-edit btn-sm btn-warning" data-toggle="modal" href="#editusr<?= $no?>"></a>
											<a href="<?php echo base_url('delete_usr/'.$user['username']);?>" data-toggle="modal" class="fa fa-trash-o btn-sm btn-danger tombol-hapus-user"></a>
											</center>

											<div id="editusr<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Edit Pengguna</h2>
														</div>
														<form action="<?php echo base_url('update_usr/'.$user['username']);?>" method="post">
															<div class="modal-body">
																<div class="scroller" style="height:420px" data-always-visible="1" data-rail-visible1="1">
																	<div class="row">
																		<div class="col-md-12">
																			<label for="username" class="form-label">NIM</label>
																			<p>
																			<input name="username" value="<?=$user['username'] ?>" type="text" class="form-control" name="username" id="username" 
																			placeholder="NIM" aria-describedby="usernameHelp", disabled>
																		</div>
																		<div class="col-md-12">
																			<label for="nama" class="form-label">Nama</label>
																			<p>
																			<input name="nama" value="<?=$user['nama'] ?>" type="text" class="form-control" name="nama" id="nama"
																			placeholder="Nama" aria-describedby="namaHelp">
																		</div>
																		<div class="col-md-12">
																			<label for="prodi" class="form-label">Program Studi</label>
																			<p>
																			
																			<select name="prodi" id="prodi" class="form-control" placeholder="Program Studi">
																				<option value="<?=$user['prodi'] ?>"><?=$user['prodi'] ?></option>
																				<option>Sistem Informasi</option>
																				<option>Teknik Informatika</option>
																			</select>
																		</div>
																		<div class="col-md-12">
																			<label for="email" class="form-label">Email</label>
																			<input name="email" value="<?=$user['email'] ?>" type="text" class="form-control" name="email" id="email"
																			placeholder="Email" aria-describedby="emailHelp">
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