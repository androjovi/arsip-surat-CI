<?php $this->load->view('page/header'); ?>

<!-- WRAPPER -->
<div id="wrapper">
	<?php $this->load->view('page/navbar'); ?>
	
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<?php $this->load->view('page/sidebar'); ?>
	<!-- END LEFT SIDEBAR -->
<script>
        jQuery(document).ready(function($){
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'HAPUS DATA ?',
                        text: 'Batalkan jika tidak !',
                        html: true,
						type : 'warning',
						confirmButtonClass: "btn-danger",
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
	 
    </script>
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<h4>INFO</h4>
				<dl class="row">
					<?php foreach($query as $k): ?>
  <dt class="col-sm-3">ID </dt>
  <dd class="col-sm-9"><?php echo $k->id; ?></dd>

  <dt class="col-sm-3">No Agenda </dt>
  <dd class="col-sm-9"><?php echo $k->no_agenda; ?></dd>
					<dt class="col-sm-3">Jenis surat </dt>
  <dd class="col-sm-9"><?php echo $k->jenis_surat; ?></dd>
					<dt class="col-sm-3">Tanggal kirim </dt>
  <dd class="col-sm-9"><?php echo $k->tanggal_kirim; ?></dd>
					<dt class="col-sm-3">No surat </dt>
  <dd class="col-sm-9"><?php echo $k->no_surat; ?></dd>
					<dt class="col-sm-3">Pengirim </dt>
  <dd class="col-sm-9"><?php echo $k->pengirim; ?></dd>
					<dt class="col-sm-3">Perihal </dt>
  <dd class="col-sm-9"><?php echo $k->perihal; ?></dd>
				</dl>
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Edit surat keluar</h3>
						<div class="right">
							<button type="button" title="sembunyikan" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<form action="<?php echo site_url('surat_keluar/submit_edit'); ?>" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							
							<div class="row">
								<div class="col-md-4">
									<p>No agenda *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" value="<?php echo $k->id; ?>" name="id_surat" class="form-control" placeholder="No agenda surat masuk" required style="display: none;">
									<input type="number" value="<?php echo $k->no_agenda; ?>" name="no_agenda" class="form-control" placeholder="No agenda surat masuk" required>
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
									<input type="number" value="<?php echo $k->no_surat; ?>" name="no_surat" class="form-control" placeholder="No surat masuk" required>
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
									<input type="text" value="<?php echo $k->jenis_surat; ?>" name="jenis_surat" class="form-control" placeholder="Jenis surat masuk" required>
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
									<input type="text" value="<?php echo $k->tanggal_kirim; ?>" id="tanggal_kirim" name="tanggal_kirim" class="form-control" placeholder="Tanggal terima surat masuk" required>
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
									<input type="text" value="<?php echo $k->pengirim; ?>" name="pengirim" class="form-control" placeholder="Pengirim surat masuk" required>
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
									<input type="text" value="<?php echo $k->perihal; ?>" name="perihal" class="form-control" placeholder="Perihal surat masuk" required>
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
									<input type="file" name="file_surat" class="form-control" placeholder="">
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
		<?php endforeach; ?>
		</div>
	</div>
</div>
<script>
jQuery("#tanggal_kirim").datepicker({
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
