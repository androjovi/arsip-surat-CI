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
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Entry surat masuk</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<form action="<?php echo site_url('surat_masuk/submit'); ?>" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<p>No agenda *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="number" name="no_agenda" class="form-control" placeholder="No agenda surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>No surat *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="number" name="no_surat" class="form-control" placeholder="No surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
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
							<div class="row">
								<div class="col-md-4">
									<p>Jenis surat *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="jenis_surat" class="form-control" placeholder="Jenis surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Tanggal kirim *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="tanggal_kirim" id="tanggal_kirim" class="form-control" placeholder="Tanggal kirim surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Tanggal terima *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" id="tanggal_terima" name="tanggal_terima" class="form-control" placeholder="Tanggal terima surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>No surat *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="no_surat" class="form-control" placeholder="Nomor surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Pengirim *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="pengirim" class="form-control" placeholder="Pengirim surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Perihal *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="perihal" class="form-control" placeholder="Perihal surat masuk" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>File *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="file" name="file_surat" class="form-control" placeholder="" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x" title="Tanda tanya"></i>
								</div>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Submit</button>
							<input type="reset" class="btn btn-danger" value="reset">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
jQuery("#tanggal_kirim").datepicker({
			dateFormat: "dd/mm/yy",
			
		});
	jQuery("#tanggal_terima").datepicker({
			dateFormat: "dd/mm/yy",
			
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
