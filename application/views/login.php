<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <style>
        .form-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
<meta charset="utf-8"/>
<title>STMIK BANDUNG TALK | Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="http://localhost/miniproject/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="http://localhost/miniproject/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="http://localhost/miniproject/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/miniproject/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a>
	<img src="http://localhost/miniproject/assets/stmik.png" alt="" width="250px" height="160px"/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">

	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo base_url('checklogin');?>" method="post">
		<center><h3 class="form-title"><b>STMIK BANDUNG TALK</b></h3></center>
        <?php echo $this->session->flashdata('message');?>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Masukkan Username / NIM dan Password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username / NIM</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username / NIM" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<center><div class="form-actions">
			<label class="checkbox">
			<button type="submit" class="btn blue pull-right">
			Login <i class=" "></i>
			</button>
		</div></center>
		<div class="create-account">
			<p>
				 Belum punya akun?&nbsp; <a href="javascript:;" id="register-btn">
				Buat akun </a>
			</p>
		</div> 
	</form>

	<form id="javascript:;" class="register-form" action="<?php echo base_url('save_usr')?>" method="post">
		<center><h3 class="form-title"><b>STMIK BANDUNG TALK</b></h3></center>
		<p>
			 Masukkan data pribadi Anda di bawah ini:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">NIM</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="NIM" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Nama Lengkap</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Nama Lengkap" name="nama"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Program Studi</label>
			<div class="input-icon">
				<i class="icon-graduation"></i>
				<select name="prodi" id="prodi" class="form-control" placeholder="Program Studi">
					<option value="">Program Studi</option>
					<option>Sistem Informasi</option>
					<option>Teknik Informatika</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
			</div>
		</div>
		<p>
			 Masukkan detail akun Anda di bawah ini:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Konfirmasi Password</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Konfirmasi Password" name="rpassword"/>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>
			<input type="checkbox" name="tnc"/> Saya setuju dengan <a href="javascript:;">
			Persyaratan Layanan </a>
			dan <a href="javascript:;">
			Kebijakan Pribadi </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn">
			<i class=""></i> Kembali </button>
			<button type="submit" id="register-submit-btn" class="btn blue pull-right">
			Daftar <i class=""></i>
			</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2023 &copy; STMIK Bandung
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="http://localhost/miniproject/assets/global/plugins/respond.min.js"></script>
<script src="http://localhost/miniproject/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="http://localhost/miniproject/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://localhost/miniproject/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://localhost/miniproject/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://localhost/miniproject/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "http://localhost/miniproject/assets/stmikblur.jpg",
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>