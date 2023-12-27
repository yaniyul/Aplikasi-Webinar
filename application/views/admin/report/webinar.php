
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
				<?= $this->session->flashdata('message');?>
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
										<center>Aksi
									</th>
								</tr>
								</thead>
								<tbody>
										<?php
										$no=1;
										foreach ($webinarArr as $web){ ?>
										<form>
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											
											<td><center><?=$web['id_webinar'] ?></td>
											<td><center><?=$web['nama_webinar'] ?></td>
											<td><center><a><?=$web['link'] ?></a></td>
											<td><center><?=date($web['tgl_pelaksanaan'])?></td>
											<td><center>
											
												<a href="<?php echo base_url('pendaftar_web/'.$web['id_webinar']);?>" data-toggle="modal" class="fa fa-search-plus btn-sm btn-primary"></a>
												<a href="<?php echo base_url('print_web/'.$web['id_webinar']);?>" data-toggle="modal" class="fa fa-print btn-sm btn-danger"></a>
												<a href="<?php echo base_url('pdf_web/'.$web['id_webinar']);?>" data-toggle="modal" class="fa fa-file-pdf-o btn-sm btn-success"></a>
											</center>

											

											<?php $no ++; } ?>
										</form>
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