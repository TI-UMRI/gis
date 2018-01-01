<!doctype html>
<html lang="">
<head>
	<?php $this->load->view('components/header'); ?>
	
	<!-- Propeller theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>themes/css/propeller-theme.css" />
	<!-- Propeller admin theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>themes/css/propeller-admin.css">


</head>
<body>
	<div id="headerr"></div>
	<?php $this->load->view('components/nav_side'); ?>
	<!--content area start-->
	<div id="content" class="pmd-content inner-page">

		<!--tab start-->
		<div class="container-fluid full-width-container">
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span><?php echo isset($judulHalaman) ? $judulHalaman : '' ; ?></span>
			</h1><!-- End Title -->
			
			<!-- table card -->
			<section class="row component-section">
				<!-- table card code and example -->
				<div class="col-md-10 col-md-offset-1">
					<div class="component-box">

						<div class="pmd-card pmd-z-depth pmd-z-depth pmd-card-custom-view">

							<div class="pmd-card-body">	

								<form id="formTambahLokasi" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
									<div class="form-group pmd-textfield">
										<label for="objekNama" class="col-sm-2 control-label">Nama Lokasi</label>
										<div class="col-sm-10">
											<input name="objekNama" class="form-control input-sm" id="objekNama" required type="text" value="<?php echo $dataLokasi['objek_nama']; ?>">
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label for="objekAlamat" class="col-sm-2 control-label">Alamat Lokasi</label>
										<div class="col-sm-10">
											<textarea rows="122" name="objekAlamat" class="form-control cssTextArea"><?php echo $dataLokasi['objek_alamat']; ?></textarea>
											
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label for="objekJadwal" class="col-sm-2 control-label">Jadwal Praktek</label>
										<div class="col-sm-10">
											<textarea name="objekJadwal" class="form-control cssTextArea"><?php echo $dataLokasi['objek_jadwal']; ?></textarea>
											
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label for="objekKontak" class="col-sm-2 control-label">Kontak</label>
										<div class="col-sm-10">
											<input name="objekKontak" class="form-control input-sm" id="objekKontak" required type="text" value="<?php echo $dataLokasi['objek_kontak']; ?>">
										</div>
									</div>

									<div class="form-group pmd-textfield">
										<label class="col-sm-2 control-label">Koordinat</label>
										<div class="col-sm-5">
											<input name="objekLatitude" placeholder="latitude" class="form-control input-sm" id="objekLatitude" required type="text" value="<?php echo $dataLokasi['objek_latitude']; ?>">
										</div>
										<div class="col-sm-5">
											<input name="objekLongitude" placeholder="longitude" class="form-control input-sm" id="objekLongitude" required type="text" value="<?php echo $dataLokasi['objek_longitude']; ?>">
										</div>
									</div>

									<div class="form-group pmd-textfield">
										<label for="objekKontak" class="col-sm-2 control-label">Foto Lokasi</label>
										<div class="col-sm-10">
											<img style="max-width: 50%" src="<?php echo base_url() . $dataLokasi['objek_foto']; ?>">
											<input type="file" name="file" value="" placeholder="" accept="image/x-png, image/gif, image/jpeg">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Ubah</button>
										</div>
									</div>
								</form>
							</div>
						</div> <!-- section content end -->  
					</div>
				</div>
			</section>

		</div><!-- tab end -->
	</div>

	<!-- content area end -->
	<div id="footerrr"></div>
	<!-- Footer Starts -->
	<?php $this->load->view('components/footer'); ?>
	<script src="<?php echo base_url('assets/plugins/parsleyjs/') ?>parsley.min.js"></script>
	<script src="<?php echo base_url('assets/plugins/parsleyjs/i18n/') ?>id.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#formTambahLokasi').parsley();
		});

		$('.cssTextArea').css('min-height', '80px');
	</script>
	<!-- Scripts Ends -->
</body>
</html>