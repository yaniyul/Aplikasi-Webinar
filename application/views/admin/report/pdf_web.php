
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
					<h1>Data Webinar <small></small></h1>
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
							<?php foreach ($daftar_webArr as $daftar) ?>
								<b><i class=""></i>ID Webinar		: <?php echo $daftar['id_webinar'] ?> </b>
								<b><br><br><i class=""></i>Nama Webinar	: <?=$daftar['nama_webinar'] ?></b>
							
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
										<center>ID Daftar
									</th>
									<th>
										<center>Tanggal Daftar
									</th>
									<th>
										<center>Nama Lengkap
									</th>
									<th>
										<center>Program Studi
									</th>
									<th>
										<center>Email
									</th>
								</tr>
								</thead>
								<tbody>
								
									
										<?php
										$no=1;
										foreach ($daftar_webArr as $daftar){ ?>
										<form action="">
											<tr>
											<th scope="row"> 
											<center><?= $no?></th>
											<td><center><?=$daftar['id_daftar'] ?></td>
											<td><center><?=date($daftar['waktu_daftar']) ?></td>
											<td><center><?=$daftar['nama'] ?></td>
											<td><center><?=$daftar['prodi']?></td>
											<td><center><a><?=$daftar['email']?></a></td>
											
											<?php $no ++; } ?>
															
										</form>
										
								
										
								</tbody>
							</table>
							<div class="modal-footer">
								<a href="<?php echo base_url('report_webinar')?>" type="button" data-dismiss="modal" class="btn default">Kembali</a>
							</div>
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
<script type="text/javascript">
    window.print();
    </script>