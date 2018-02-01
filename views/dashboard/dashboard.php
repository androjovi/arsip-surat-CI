<?php $this->load->view('page/header'); ?>
<!-- WRAPPER -->
<div id="wrapper">
	<?php $this->load->view('page/navbar'); ?>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<?php $this->load->view('page/sidebar'); ?>
	<!-- END LEFT SIDEBAR -->

	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h3 class="panel-title">Overview</h3>
						<p class="panel-subtitle"></p>
					</div>
					<div class="panel-body">
						<div class="alert alert-info alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-info-circle"></i> Welcome to the jungle
									</div>
						<div class="row">
							<div class="col-md-6">
								<div class="metric">
									<span class="icon"><i class="fa fa-envelope"></i></span>
									<p>
										<span class="number">1,252</span>
										<span class="title">Surat masuk</span>
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="metric">
									<span class="icon"><i class="fa fa-envelope-open"></i></span>
									<p>
										<span class="number">203</span>
										<span class="title">Surat keluar</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
<!-- END MAIN -->
<div class="clearfix">
<?php $this->load->view('page/footer'); ?>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<?php $this->load->view('page/js'); ?>
</body>

</html>
