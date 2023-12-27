
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1> <small></small></h1>
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
			<ul class="page-breadcrumb breadcrumb hide">
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php
								 $this->db->from('user');
								 $total = $this->db->count_all_results();
								 echo "" . $total;
								 
								 ?>
							</div>
							<div class="desc">
								 Total Pengguna
							</div>
						</div>
						<a class="more" href="data_user">
						Detail <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php
								 $this->db->from('belmawa');
								 $total = $this->db->count_all_results();
								 echo "" . $total;
								 
								 ?>
							</div>
							<div class="desc">
								Total Kegiatan Belmawa
								 
							</div>
						</div>
						<a class="more" href="event_belmawa">
						Detail <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php
								 $this->db->from('komunitas');
								 $total = $this->db->count_all_results();
								 echo "" . $total;
								 
								 ?>
							</div>
							<div class="desc">
								 Total Kegiatan Komunitas (UKM)
							</div>
						</div>
						<a class="more" href="event_komunitas">
						Detail <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php
								 $this->db->from('webinar');
								 $total = $this->db->count_all_results();
								 echo "" . $total;
								 
								 ?>
							</div>
							<div class="desc">
								Total Webinar
							</div>
							
						</div>
						<a class="more" href="event_webinar">
						Detail <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->