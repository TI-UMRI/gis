<!doctype html>
<html lang="">
<head>
	<title><?php echo isset($judulHalaman) ? $judulHalaman : '' ; ?></title>
	<?php $this->load->view('components/header'); ?>
	<!-- DataTables css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/DataTables/media/') ?>css/dataTables.bootstrap.min.css">
	<!-- Propeller dataTables css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>components/data-table/css/pmd-datatable.css">
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
		<div class="container-fluid full-width-container data-tables">
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span><?php echo isset($judulHalaman) ? $judulHalaman : '' ; ?></span>
			</h1><!-- End Title -->
			
			<!-- table card -->
			<section class="row component-section">
				<!-- table card code and example -->
				<div class="col-md-12">
					<div class="component-box">
						<!-- table card example -->
						<div  class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table id="tableLokasi" class="table pmd-table table-hover table-striped display " cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Nama</th>
											<!-- <th>Alamat</th>
											<th>Jadwal</th> -->
											<th>Kontak</th>
											<th>Koordinat</th>
											<th>#</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($listData as $key => $Data): ?>
											<tr>
												<td><a onclick="showDetail(<?php echo $Data->objek_id; ?>)" href="javascript:void(0);"><?php echo $Data->objek_nama ?></a></td>
												<td><?php echo $Data->objek_kontak ?></td>
												<td><?php echo $Data->objek_latitude.' , '.$Data->objek_longitude ?></td>
												<td>
													
													<a href="<?php echo base_url('data/ubah/') . $Data->objek_id; ?>" class="btn pmd-btn-flat btn-xs pmd-ripple-effect btn-warning pmd-z-depth"><i class="material-icons md-dark pmd-xs">edit</i></a> 
													<a data-pengguna-id="<?php echo $Data->objek_id; ?>" data-target="#modalDelete" data-toggle="modal" class="btn pmd-btn-flat btn-xs pmd-ripple-effect btn-danger pmd-z-depth" ><i class="material-icons md-dark pmd-xs">delete</i></a>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div> <!-- table card example end -->
					</div>
				</div> <!-- table card code and example end -->
			</section> <!-- table card end -->
		</div>
		<!--tab start-->
		<!--content area end-->
	</div><!-- content area end -->
	<div id="footerrr"></div>
	<!-- Alert without title bar -->
	<div tabindex="-1" class="modal fade" id="modalDelete" style="display: none;" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body"> Yakin Ingin Menghapus Data Lokasi Ini ? </div>
				<div class="pmd-modal-action text-right">
					<button  class="buttonDelete btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Hapus</button>
					<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default pmd-btn-flat" type="button">Batal</button>
				</div>
			</div>
		</div>
	</div>

	<div tabindex="-1" class="modal fade" id="modalDetail" style="display: none;" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<div class="media-body media-middle">
						<h3 class="pmd-card-title-text">Data Lokasi </h3>
					</div>
				</div>
				<div class="modal-body">
					<table class="table ">

						<tbody>
							<tr>
								<th>Nama</th>
								<td>:</td>
								<td><span id="detailNama"></span></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td>:</td>
								<td><span id="detailAlamat"></span></td>
							</tr>
							<tr>
								<th>Jadwal</th>
								<td>:</td>
								<td><span id="detailJadwal"></span></td>
							</tr>
							<tr>
								<th>Kontak</th>
								<td>:</td>
								<td><span id="detailKontak"></span></td>
							</tr>
							<tr>
								<th>Koordinat</th>
								<td>:</td>
								<td><span id="detailKoordinat"></span></td>
							</tr>
							<tr>
								<th>Foto</th>
								<td>:</td>
								<td><img id="detailFoto" style="max-width: 100%; max-height: 100%"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Starts -->
	<?php $this->load->view('components/footer'); ?>

	<!-- Datatable js -->
	<script type="text/javascript" language="javascript" src="<?php echo base_url('assets/plugins/DataTables/media/') ?>js/jquery.dataTables.min.js"></script>
	<!-- Datatable Bootstrap -->
	<script type="text/javascript" language="javascript" src="<?php echo base_url('assets/plugins/DataTables/media/') ?>js/dataTables.bootstrap.min.js"></script>

	<!-- Propeller Data table js-->
	<script>
//Propeller Customised Javascript code 
$(document).ready(function() {
	$('#tableLokasi').DataTable({
		order: [ 0, 'asc' ],
		bFilter: true,
		bLengthChange: true,
		pagingType: "simple",
		"paging": true,
		"searching": true,
		"language": {
			"info": " _START_ - _END_ of _TOTAL_ ",
			"sLengthMenu": "<span class='custom-select-title'>Rows per page:</span> <span class='custom-select'> _MENU_ </span>",
			"sSearch": "",
			"sSearchPlaceholder": "Search",
			"paginate": {
				"sNext": " ",
				"sPrevious": " "	
			},
		},
		"columnDefs": [
		{ "orderable": false, "targets": 3 },
		],
		dom:
		"<'pmd-card-title'<'data-table-title'><'search-paper pmd-textfield'f>>" +
		"<'row'<'col-sm-12'tr>>" +
		"<'pmd-card-footer' <'pmd-datatable-pagination' l i p>>",
		rowCallback: function(row, data, iDisplayIndex) {
			if(row.cells[0] ) row.cells[0].noWrap = true;
			if(row.cells[1] ) row.cells[1].noWrap = true;
			if(row.cells[2] ) row.cells[2].noWrap = true;
			if(row.cells[3] ) row.cells[3].noWrap = true;
		}
	});
	/// Select value
	$('.custom-select-info').hide();
	$("div.data-table-title").html('<a href="<?php echo base_url('data/tambah'); ?>"class="pmd-btn-outline btn btn-primary" >tambah</a>');
} );
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#modalDelete').on('show.bs.modal', function(e) {
			$(this).find('.buttonDelete').attr('id', $(e.relatedTarget).data('pengguna-id'));
		});
		$('.buttonDelete').click(function(event) {
			var id = $(this).attr('id');
			$('#modalDelete').modal('hide');
			window.location.href = "<?php echo base_url('data/hapus/'); ?>" + id;
			
		});


	});
</script>

<script type="text/javascript">
var baseURL = '<?php echo base_url(); ?>';
	function showDetail(objekId)
	{
		$.ajax({
			url: '<?php echo base_url('data/ajax_detail') ?>',
			type: 'POST',
			dataType: 'json',
			data: {objekId: objekId},
		})
		.success(function(data) {
			$('#detailNama').html(data.objek_nama);
			$('#detailAlamat').html(data.objek_alamat);
			$('#detailJadwal').html(data.objek_jadwal);
			$('#detailKontak').html(data.objek_kontak);
			$('#detailKoordinat').html(data.objek_latitude + ' , ' + data.objek_longitude);
			$('#detailFoto').attr('src', baseURL + data.objek_foto);
			$('#modalDetail').modal('show');
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}
</script>
<!-- Scripts Ends -->
</body>
</html>