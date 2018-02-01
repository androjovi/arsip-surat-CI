<?php $this->load->view('page/header'); ?>
<!-- WRAPPER -->
<div id="wrapper">
	<?php $this->load->view('page/navbar'); ?>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<?php $this->load->view('page/sidebar'); ?>
	<!-- END LEFT SIDEBAR -->
	<script>


	</script>
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Tambah anggota mu dude</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<form action="<?php echo site_url('auth/proses_user'); ?>" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<p>Username</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="username" class="form-control" placeholder="Kimi no nawa" required> </div>
								<div class="col-md-1 col-md-pull-2"> <i class="fa fa-question-circle fa-1x"></i> </div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Nama</p>
								</div>
								<div class="col-md-4 col-md-pull-2">
									<input type="text" name="nama_depan" class="form-control" placeholder="Nama depan" required> </div>
								<div class="col-md-4 col-md-pull-2">
									<input type="text" name="nama_belakang" class="form-control" placeholder="Nama belakang" required> </div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Passpot</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="password" name="passw" class="form-control" placeholder="Password" required> </div>
								<div class="col-md-1 col-md-pull-2"> <i class="fa fa-question-circle fa-1x"></i> </div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Hak akses</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<select multiple class="form-control" name="hak">
													<option disabled>PILIH AKSES</option>
													<option value="petugas">Petugas</option>
													<option value="admin1">Admin 1</option>
													<option value="admin2">Admin 2</option>
												</select>
								</div>
								<div class="col-md-1 col-md-pull-2"> <i class="fa fa-question-circle fa-1x"></i> </div>
							</div>
							<br>
							<!--
							<div class="row">
								<div class="col-md-4">
									<p>ID *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="id" class="form-control" placeholder="ID" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
-->
							<br>
							<button type="submit" class="btn btn-primary">Submit</button>
							<input type="reset" class="btn btn-danger" value="reset"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery("#tanggal_kirim").datepicker({
		dateFormat: "dd-mm-yy",
	});
	jQuery("#tanggal_terima").datepicker({
		dateFormat: "dd-mm-yy",
	});

</script>
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



