	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			
			</h3>
				<div class="flash-data" data-flashdata="<?=$this->session->flashdata('message');?>"></div>
							<?php if ($this->session->flashdata('message')):?>
								
							<?php endif; ?>

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row margin-top-20">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="col-md-3">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
                            <img src="http://localhost/miniproject/assets/user.png" class="img-responsive" alt="user">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
                                    <center><h2><b><?php echo $_SESSION['nama']?></b></h2>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						<!-- PORTLET MAIN -->
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-8">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Akun Profil</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Informasi Pribadi</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Ubah Password</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="#">
													<div class="form-group">
														<label class="control-label">NIM</label>
														<input type="text" value="<?php echo $_SESSION['username']?>" class="form-control", disabled/>
													</div>
													<div class="form-group">
														<label class="control-label">Nama Lengkap</label>
														<input type="text" value="<?php echo $_SESSION['nama']?>" class="form-control", disabled/>
													</div>
													<div class="form-group">
														<label class="control-label">Program Studi</label>
														<input type="text" value="<?php echo $_SESSION['prodi']?>" class="form-control", disabled/>
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input type="text" value="<?php echo $_SESSION['email']?>" class="form-control", disabled/>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="<?= base_url('profile/changepass');?>" method="post">
													<div class="form-group">
														<label class="control-label">Password Lama</label>
														<input name="password" id="password" type="password" class="form-control", required/>
													</div>
													<div class="form-group">
														<label class="control-label">Password Baru</label>
														<input name="password_baru" id="password_baru" type="password" class="form-control", required/>
													</div>
													<div class="form-group">
														<label class="control-label">Konfirmasi Password Baru</label>
														<input name="rpw" id="rpw" type="password" class="form-control", required/>
													</div>
													<div class="margin-top-10">
														<button type="submit" class="btn green-haze">
														Ubah Password </button>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- PRIVACY SETTINGS TAB -->
											<!-- END PRIVACY SETTINGS TAB -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->