
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
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Tabel Kegiatan-Ku
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
									</div>

								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="table_daftarinar">
								<thead>
								<tr>
									<th>
										<center>No
									</th>
									<th>
										<center>Nama Kegiatan
									</th>
                                    <th>
										<center>Nama UKM
									</th>
									<th>
										<center>Waktu Pelaksanaan
									</th>
								</tr>
								</thead>
								<tbody>
									<?php
										$no=1;
										foreach ($daftar_komArr as $daftar){ ?>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$daftar['nama_kegiatan'] ?></td>
                                            <td><center><?=$daftar['nama_ukm'] ?></td>
											<td><center><?=date($daftar['tgl_pelaksanaan'])?></td>
											<input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username']?>">
											
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