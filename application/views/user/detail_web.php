
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
					<h1>Detail Webinar <small></small></h1>
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
                            foreach ($webinarArr as $web){ ?>
							
                                            
														<?php echo form_open_multipart('daftar_web');?>
														<form>
															<div class="modal-body">
																
																		<div class="row">
																			<div>
																				<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $web['lampiran'];?> " alt="Lampiran" style="width:40% ">
																			</div>
																			<table id="detailweb" class="table table-bordered table-striped">
																				<tbody>
																					<p>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Webinar
																						</td>
																						<td style="width:5%">
																							<input type="hidden" name="id_daftar" id="id_daftar">
																							<input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username']?>">
																							<input type="hidden" name="nama" id="nama" value="<?php echo $_SESSION['nama']?>">
																							<input type="hidden" name="prodi" id="prodi" value="<?php echo $_SESSION['prodi']?>">
																							<input type="hidden" name="email" id="email" value="<?php echo $_SESSION['email']?>">
																							<input type="hidden" name="id_webinar" id="id_webinar" value="<?php echo ($web['id_webinar']) ?>">
																							<input type="hidden" name="link" id="link" value="<?php echo ($web['link']) ?>">
																							<input type="hidden" name="nama_webinar" id="nama_webinar" value="<?php echo ($web['nama_webinar']) ?>">
																							<?php echo $web['nama_webinar'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Nama Mitra
																						</td>
																						<td style="width:5%">
																							
																							<input type="hidden" name="nama_mitra" id="nama_mitra" value="<?php echo ($web['nama_mitra']) ?>">
																							<?php echo $web['nama_mitra'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Narasumber
																						</td>
																						<td style="width:5%">
																							<input type="hidden" name="narasumber" id="narasumber" value="<?php echo ($web['narasumber']) ?>">
																							<?php echo $web['narasumber'] ?> </a>
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Tanggal Pelaksanaan
																						</td>
																						<td style="width:5%">
																							<?php echo date($web['tgl_pelaksanaan']) ?> </a>
																						</td>
																							<input type="hidden" name="tgl_pelaksanaan" id="tgl_pelaksanaan" value="<?php echo date($web['tgl_pelaksanaan']) ?>">
																						</td>
																					</tr>
																					<tr>
																						<td style="width:1%">
																							<b>Batas Pendaftaran
																						</td>
																						<td style="width:5%">
																							<?php echo date($web['batas']) ?> </a>
																						</td>
																							<input type="hidden" name="batas" id="batas" value="<?php echo date($web['batas']) ?>">
																						</td>
																					</tr>
																				</tbody>
																			</table>

															<div class="modal-footer">
																<a href="<?php echo base_url('webinar')?>" type="button" data-dismiss="modal" class="btn default">Kembali</a>
																<input type="hidden" name="waktu_daftar" id="waktu_daftar">
																<button id="daftarButton" type="submit" class="btn blue">Daftar</button>
																<div id="popUpContainer" style="display:none;">
																	<div id="popUpContent"></div>
																	<button id="closePopUp">Tutup</div>
																</div>


															</div>
														</form>
											
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