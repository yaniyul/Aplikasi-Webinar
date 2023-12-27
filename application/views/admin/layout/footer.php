<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2023 &copy; STMIK Bandung
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="http://localhost/miniproject/assets/global/plugins/respond.min.js"></script>
<script src="http://localhost/miniproject/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="http://localhost/miniproject/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="http://localhost/miniproject/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="http://localhost/miniproject/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://localhost/miniproject/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<script src="http://localhost/miniproject/assets/js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="http://localhost/miniproject/assets/js/myscript2.js" type="text/javascript"></script>
<!-- <script src="http://localhost/miniproject/assets/js/scriptbelmawa.js" type="text/javascript"></script> -->
<script>
	<?php if ($this->session->flashdata('error')): ?> 
		Swal.fire({
			icon : 'error',
			title : 'Gagal',
			text : 'Data Belmawa gagal ditambahkan'
		});
	<?php endif; ?>
</script>
<script>
	<?php if ($this->session->flashdata('error_tgl')): ?> 
		Swal.fire({
			icon : 'error',
			title : 'Gagal',
			text : 'Batas pendaftaran tidak boleh melebihi waktu pelaksanaan!'
		});
	<?php endif; ?>
</script>
<script>
	<?php if ($this->session->flashdata('error_kom')): ?> 
		Swal.fire({
			icon : 'error',
			title : 'Gagal',
			text : 'Data kegiatan gagal ditambahkan'
		});
	<?php endif; ?>
</script>
<script>
	<?php if ($this->session->flashdata('error_web')): ?> 
		Swal.fire({
			icon : 'error',
			title : 'Gagal',
			text : 'Data webinar gagal ditambahkan'
		});
	<?php endif; ?>
</script>
<script>
	<?php if ($this->session->flashdata('error_mit')): ?> 
		Swal.fire({
			icon : 'error',
			title : 'Gagal',
			text : 'Data mitra gagal ditambahkan'
		});
	<?php endif; ?>
</script>
<script>
	var selectBelmawa = document.getElementById("nama_belmawa");
	var inputBelmawaID = document.getElementById("id_belmawa");

	selectBelmawa.addEventListener("change", function(){
		var selectedOption = selectBelmawa.value;

		inputBelmawaID.value = selectedOption;
	});
	//copySpanValueToInput();
</script>
<script>
	function displayFileName(){
		const input = document.getElementById('lampiran');
		const fileNameDisplay = document.getElementById('file_name');

		if (input.files.length > 0){
			fileNameDisplay.textContent = input.files[0].name;
		} else {
			fileNameDisplay.textContent = 'Pilih gambar';
		}
	}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>