<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
		 <a href="index.html"><img src="<?php echo base_url('assets/img/logo-dark.png'); ?>" alt="Klorofil Logo" class="img-responsive logo"></a> 
		
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		</div>
		<form class="navbar-form navbar-left">
			<div class="input-group">
				<input type="text" value="" class="form-control" placeholder="Search dashboard...">
				<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
			</div>
		</form>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
		<div class="navbar-btn navbar-btn-right">
			<li>
			<a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
				</li>
		</div>
			</ul>
		</div>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-danger"><?php echo notif(array('kepada' => $this->session->userdata('data_user'), 'status_surat' => 0))->num_rows(); ?></span>
							</a>
					<ul class="dropdown-menu notifications">
						<?php foreach(notif(array('kepada' => $this->session->userdata('data_user'), 'status_surat' => 0))->result() as $k): ?>
						<li><a href="<?php echo site_url('memo/show/'.$k->no_disposisi); ?>" class="notification-item"><span class="dot bg-warning"></span>[DISPOSISI] <?php echo $k->keterangan; ?></a></li>
						<?php endforeach; ?>
						<li><a href="<?php echo site_url('memo'); ?>" class="more">See all notifications</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Basic Use</a></li>
						<li><a href="#">Working With Data</a></li>
						<li><a href="#">Security</a></li>
						<li><a href="#">Troubleshooting</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Hallo, <?php echo $this->session->userdata('user'); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
						<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
						<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
						<li><a href="<?php echo site_url('auth/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
					</ul>
				</li>
				<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
			</ul>
		</div>
	</div>
</nav>
<!-- END NAVIGATION NAVBAR -->
