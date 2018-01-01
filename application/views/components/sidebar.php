
<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav" id="sidebarr">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="<?php echo base_url('template/') ?>javascript:void(0);">
				<div class="media-left">
					<img src="<?php echo base_url('template/') ?>themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle">Propeller Admin</div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a  href="<?php echo base_url('logout') ?>">	
						<span class="media-body">Logout</span>
						<i class="material-icons media-right pmd-sm">lock open</i> 

					</a> 
				</li>
			</ul>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect" href="<?php echo base_url('dashboard'); ?>">	
				<i class="material-icons media-left pmd-sm">dashboard</i> 
				<span class="media-body">Dashboard</span>
			</a> 
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="<?php echo base_url('data'); ?>">	
				<i class="material-icons media-left pmd-sm">dashboard</i> 
				<span class="media-body">Data</span>
			</a> 
		</li>
	<!-- 	<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">dashboard</i> 
				<span class="media-body">Data</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a class="pmd-ripple-effect" href="<?php echo base_url('data/data') ?>">Data data</a></li>
				<li><a class="pmd-ripple-effect" href="<?php echo base_url('data/tambah') ?>">Tambah data</a></li>
				

			</ul>
		</li> -->
		
		
		
		
		
	</ul>
</aside><!-- End Left sidebar -->