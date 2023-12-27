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
						<button type="button" class="btn btn-sm blue" data-toggle="modal" data-target="#daftarwebinar<?=$no?>">Daftar</button>
					<br>  <br>	
                </div>	
            </div>

<div id="daftarwebinar<?=$no?>" class="modal fade" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
															<h2 class="modal-title">Detail Webinar</h2>
														</div>
														<?php echo form_open_multipart('daftar_web');?>
														<form>
															<div class="modal-body">
																
																		<div class="row">
																			<div>
																				<center><img src="<?php echo base_url(); ?>assets/lampiran/<?php echo $web['lampiran'];?> " alt="Lampiran" style="width:70% ">
																			</div>
																			<table id="datailweb" class="table table-bordered table-striped">
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
																							<b>Waktu Pelaksanaan
																						</td>
																						<td style="width:5%">
																							<?php echo date($web['tgl_pelaksanaan']) ?> </a>
																						</td>
																							<input type="hidden" name="tgl_pelaksanaan" id="tgl_pelaksanaan" value="<?php echo date($web['tgl_pelaksanaan']) ?>">
																						</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn default">Batal</button>
																<input type="hidden" name="waktu_daftar" id="waktu_daftar">
																<button id="daftarButton" type="submit" class="btn blue">Daftar</button>
																<div id="popUpContainer" style="display:none;">
																	<div id="popUpContent"></div>
																	<button id="closePopUp">Tutup</div>
																</div>


															</div>
														</form>
														</div>
													</div>
												</div>
											</div>