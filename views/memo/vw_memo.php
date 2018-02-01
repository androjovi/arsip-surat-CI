
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
						<h2>MEMO</h2>
						<table class="table table-condensed" id="table-ah">
							<thead>
								<tr>
									<th>No DIS </th>
									<th>No agenda</th>
									<th>No surat</th>
									<th>Keterangan</th>
									<th>Tanggapan</th>
									<th>Tgl masuk</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($query as $k): // echox is custom helper in jovi_helper?>
								<tr>
									<td><?php echox ($k->no_disposisi); ?>&nbsp; <?php if ($k->status_surat == 0): ?><i class="fa fa-asterisk" title="belum dibaca"></i> <?php  endif; ?></td>
									<td><?php echox ($k->no_agenda); ?></td>
									<td><?php echox ($k->no_surat); ?></td>
									<td><?php echox ($k->keterangan); ?></td>
									<td><?php echox ($k->tanggapan); ?></td>
									<td><?php echox ($k->waktu); ?></td>
									<td><a title="Edit data" href="<?php echo site_url('memo/show/'.$k->no_disposisi); ?>" class="btn btn-primary"><i class="fa fa-navicon"></i></a>&nbsp;&nbsp;<a title="Lihat dokumen" href="javascipr:void(0)" onclick="window.open('<?php echo base_url('uploads/'.$k->nama_file); ?>')" class="btn btn-warning"><i class="fa fa-file-pdf-o"></i></a>&nbsp;&nbsp;</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css" />

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#table-ah").dataTable();
	});

</script>


</body>

</html>
