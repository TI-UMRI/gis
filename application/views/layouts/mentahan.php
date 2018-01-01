<!doctype html>
<html lang="">
<head>
	<?php $this->load->view('components/header'); ?>
	<!-- DataTables css-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
	<!-- Propeller dataTables css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>components/data-table/css/pmd-datatable.css">
	<!-- Propeller theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>themes/css/propeller-theme.css" />
	<!-- Propeller admin theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>themes/css/propeller-admin.css">
</head>
<body>
	<?php $this->load->view('components/nav_side'); ?>
	<!--content area start-->
	<div id="content" class="pmd-content inner-page">
		<!--tab start-->
		<div class="container-fluid full-width-container data-tables">
			<!-- table card -->
			<section class="row component-section">
				<!-- table card code and example -->
				<div class="col-md-12">
					<div class="component-box">
						<!-- table card example -->
						<div  class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<!-- <th></th> -->
											<th>First name</th>
											<th>Last name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<!-- <td></td> -->
											<td>Tiger</td>
											<td>Nixon</td>
											<td>System Architect</td>
											<td>Edinburgh</td>
											<td>61</td>
											<td>2011/04/25</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Garrett</td>
											<td>Winters</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>63</td>
											<td>2011/07/25</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Ashton</td>
											<td>Cox</td>
											<td>Junior Technical Author</td>
											<td>San Francisco</td>
											<td>66</td>
											<td>2009/01/12</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Cedric</td>
											<td>Kelly</td>
											<td>Senior Javascript Developer</td>
											<td>Edinburgh</td>
											<td>22</td>
											<td>2012/03/29</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Airi</td>
											<td>Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Brielle</td>
											<td>Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Airi</td>
											<td>Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Brielle</td>
											<td>Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Airi</td>
											<td>Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Brielle</td>
											<td>Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Airi</td>
											<td>Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Brielle</td>
											<td>Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Airi</td>
											<td>Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Brielle</td>
											<td>Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
										</tr>
										<tr>
											<!-- <td></td> -->
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
										</tr>
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
	<!-- Footer Starts -->
	<?php $this->load->view('components/footer'); ?>
	
	<!-- Datatable js -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<!-- Datatable Bootstrap -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<!-- Datatable responsive js-->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
	<!-- Datatable select js-->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
	<!-- Propeller Data table js-->
	<script>
//Propeller Customised Javascript code 
$(document).ready(function() {
	$('#example-checkbox').DataTable({
		order: [ 1, 'asc' ],
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
		dom:
		"<'pmd-card-title'<'data-table-title'><'search-paper pmd-textfield'f>>" +
		"<'custom-select-info'<'custom-select-item'><'custom-select-action'>>" +
		"<'row'<'col-sm-12'tr>>" +
		"<'pmd-card-footer' <'pmd-datatable-pagination' l i p>>",
	});
	/// Select value
	$('.custom-select-info').hide();
	$("div.data-table-title").html('<h2 class="pmd-card-title-text">Data Lokasi</h2>');
} );
</script>

<!-- Scripts Ends -->
</body>
</html>