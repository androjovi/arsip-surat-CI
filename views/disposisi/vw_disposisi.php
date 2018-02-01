<?php $this->load->view('page/header'); ?>
<!-- WRAPPER -->
<div id="wrapper">
	<?php $this->load->view('page/navbar'); ?>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<?php $this->load->view('page/sidebar'); ?>
	<!-- END LEFT SIDEBAR -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css" />
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Disposisikan</h3>
						<div class="right">
							<button type="button" title="sembunyikan" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<form action="<?php echo site_url('disposisi/submit'); ?>" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<p>Disposisikan ke *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<select name="disposisi[]" class="form-control" multiple id="langOpt">
										<option value="S">Sekretaris</option>
										<option value="M">Manager</option>
										</select>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Keterangan *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" style="display: none;" name="id" class="form-control" placeholder="Catatan" required value="<?php echo $id; ?>">
									<input type="text" name="keterangan" class="form-control" placeholder="Catatan" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Tanggapan *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="tanggapan" class="form-control" placeholder="Tanggapan" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
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
		dateFormat: "dd-mm-yy",

	});
	jQuery("#tanggal_terima").datepicker({
		dateFormat: "dd-mm-yy",

	});
	$(document).ready(function() {
		jQuery('#langOpt').multiSelect({
			columns: 1,
			placeholder: 'Select Languages',
			search: true
		})
		
		$(this).find('select').each(function() {
         var inputvalue = $(this).val();
        if( inputvalue == "" || $.trim(inputvalue).length == 0) {
            e.preventDefault();
            $(this).addClass('input-error');
        }
        else {
            $(this).removeClass('input-error');
        }
    });
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
