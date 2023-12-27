
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
            <tbody>
				
						<div class="flash-data" data-flashdata="<?=$this->session->flashdata('message');?>"></div>
							<?php if ($this->session->flashdata('message')):?>
								
							<?php endif; ?>
			
			<?php
			$no=1;
			foreach ($webinarArr as $web){ ?>
			
			<div class="col-lg-3 col-md-3">
				
				<div class="polaroid">
					<br>
					
                    <center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $web['lampiran'];?>" alt="Lampiran" style="width:90% ">
                    <br><div>
                        <td style="width:5%">
                            <center><h4><b><?php echo $web['nama_webinar'] ?> </b></h4></center>
						</td>
                    </div>
					<br>
                    <center>
						<a href="<?php echo base_url('detail_web/'.$web['id_webinar']);?>" class="btn btn-sm blue" data-toggle="modal" >Lihat</a>
						
					<br>  <br>	
                </div>	
            </div>
			

											
											

            <?php $no ++; } ?>
			<script>
				document.getElementById("daftarButton").addEventListener("click", function(){
					var daftar_web = "sukses";
					if (daftar_web==="sukses"){
						tampilkanPopUp("pendaftaran berhasil");
					} else {
						tampilkanPopUp("pendaftaran gagal");
					}
				});

				function tampilkanPopUp(pesan){
					document.getElementById("popUpContent").innerHTML = pesan;
					document.getElementById("popUpContainer").style.display = "block";
				}

				document.getElemenById("closePopUp").addEventListener("click", function(){
					document.getElementById("popUpContainer").style.display = "none";
				});

			</script>
			</tbody>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->