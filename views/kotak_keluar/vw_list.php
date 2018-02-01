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
				<div class="panel">
					
					<div class="panel-heading">
						<h2>List data surat keluar</h2>
						<table class="table table-condensed" id="table-ah">
							<thead>
								<tr>
									<th>No</th>
									<th>No agenda</th>
									<th>No surat</th>
									<th>Jenis surat</th>
									<th>Tanggal kirim</th>
									<th>Pengirim</th>
									<th>Perihal</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($query as $k): // echox is custom helper in jovi_helper?>
								<tr>
									<td><?php echox ($k->id); ?></td>
									<td><?php echox ($k->no_agenda); ?></td>
									<td><?php echox ($k->no_surat); ?></td>
									<td><?php echox ($k->jenis_surat); ?></td>
									<td><?php echox ($k->tanggal_kirim); ?></td>
									<td><?php echox ($k->pengirim); ?></td>
									<td><?php echox ($k->perihal); ?></td>
									<td><a title="Edit data" href="<?php echo site_url('surat_keluar/show/'.$k->id); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a title="Hapus data" href="<?php echo site_url('surat_keluar/hapus/'.$k->id); ?>" class="btn btn-danger alert_notif"><i class="fa fa-close"></i></a>&nbsp;&nbsp;<a title="Lihat dokumen" href="javascript:void(0)" onclick="window.open('<?php echo base_url('uploads/'.$k->nama_file); ?>')" class="btn btn-warning"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;</td>
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
