
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
	<script type="text/javascript">
    if (window.FileReader) {
    
      var reader = new FileReader(), rFilter = /^(image\/bmp|image\/cis-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x-cmu-raster|image\/x-cmx|image\/x-icon|image\/x-portable-anymap|image\/x-portable-bitmap|image\/x-portable-graymap|image\/x-portable-pixmap|image\/x-rgb|image\/x-xbitmap|image\/x-xpixmap|image\/x-xwindowdump)$/i; 
      
      reader.onload = function (oFREvent) { 
        preview = document.getElementById("uploadPreview")
        preview.src = oFREvent.target.result;  
        preview.style.display = "block";
      };  
  
      function doTest() {
        
        if (document.getElementById("myfile").files.length === 0) { return; }  
        var file = document.getElementById("myfile").files[0];  
        if (!rFilter.test(file.type)) { alert("You must select a valid image file!"); return; }  
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
					
					<div class="panel-heading">
						<h2>List data surat masuk</h2>
						<table class="table table-condensed" id="table-ah">
							<thead>
								<tr>
									<th>No </th>
									<th>No agenda</th>
									<th>No surat</th>
									<th>Pengirim</th>
									<th>Perihal</th>
									<th>Tgl terima</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($query as $k): // echox is custom helper in jovi_helper?>
								<tr>
									<td><?php echox ($k->id); ?>&nbsp; <?php if (cek_data(array('no_surat'=> $k->no_surat), 'tdisposisi')): ?><i class="fa fa-mail-forward" title="disposisi"></i> <?php  endif; ?></td>
									<td><?php echox ($k->no_agenda); ?></td>
									<td><?php echox ($k->no_surat); ?></td>
									<td><?php echox ($k->pengirim); ?></td>
									<td><?php echox ($k->perihal); ?></td>
									<td><?php echox ($k->tanggal_terima); ?></td>
									<td><?php echox ($k->id); ?></td>
									<td><a title="Edit data" href="<?php echo site_url('surat_masuk/show/'.$k->id); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a title="Hapus data" href="<?php echo site_url('surat_masuk/hapus/'.$k->id); ?>" class="btn btn-danger alert_notif"><i class="fa fa-close"></i></a>&nbsp;&nbsp;<a title="Lihat dokumen" href="javascipr:void(0)" onclick="window.open('<?php echo base_url('uploads/'.$k->nama_file); ?>')" class="btn btn-warning"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;</td>
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
