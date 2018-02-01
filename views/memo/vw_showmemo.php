<?php $this->load->view('page/header'); ?>

<!-- WRAPPER -->
<div id="wrapper">
	<?php $this->load->view('page/navbar'); ?>

	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<?php $this->load->view('page/sidebar'); ?>
	<!-- END LEFT SIDEBAR -->
	<script>
		jQuery(document).ready(function($) {
			$('.alert_notif').on('click', function() {
				var getLink = $(this).attr('href');
				swal({
					title: 'HAPUS DATA ?',
					text: 'Batalkan jika tidak !',
					html: true,
					type: 'warning',
					confirmButtonClass: "btn-danger",
					showCancelButton: true,
				}, function() {
					window.location.href = getLink
				});
				return false;
			});
		});

	</script>
	<script type="text/javascript">
		if (window.FileReader) {

			var reader = new FileReader(),
				rFilter = /^(image\/bmp|image\/cis-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x-cmu-raster|image\/x-cmx|image\/x-icon|image\/x-portable-anymap|image\/x-portable-bitmap|image\/x-portable-graymap|image\/x-portable-pixmap|image\/x-rgb|image\/x-xbitmap|image\/x-xpixmap|image\/x-xwindowdump)$/i;

			reader.onload = function(oFREvent) {
				preview = document.getElementById("uploadPreview")
				preview.src = oFREvent.target.result;
				preview.style.display = "block";
			};

			function doTest() {

				if (document.getElementById("myfile").files.length === 0) {
					return;
				}
				var file = document.getElementById("myfile").files[0];
				if (!rFilter.test(file.type)) {
					alert("You must select a valid image file!");
					return;
				}
				reader.readAsDataURL(file);
			}

		} else {
			alert("FileReader object not found :( \nTry using Chrome, Firefox or WebKit");
		}

	</script>
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="panel">
					<?php foreach ($query as $k): ?>
					<div class="panel-heading">
						<h3 class="panel-title"><b>DISPOSISI</b> <?php echo $k->no_disposisi."/".$k->no_agenda."/".$k->no_surat."/".substr($k->waktu,0,-15); ?> </h3>
						<p class="panel-subtitle"> <i class="fa fa-clock-o"></i> <?php echo $k->waktu; ?></p>
					</div>
					<div class="panel-body">
						<h4>Disposisi ke</h4>
						<p><?php echo $k->kepada; ?></p>
						<h4>Keterangan : </h4>
						<p><?php echo $k->keterangan; ?></p>
					</div>
					<div class="panel-footer">
						<h5><a href="<?php echo site_url('uploads/'.$k->nama_file); ?>" class="btn btn-danger"><i class="fa fa-print"></i>&nbsp;&nbsp;Cetak Disposisi</a></h5>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css" />

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#table-ah").dataTable();
	});

</script>


</body>

</html>
