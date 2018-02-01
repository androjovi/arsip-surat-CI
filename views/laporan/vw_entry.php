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
						<h3 class="panel-title">Report from date range *[alpha]</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<form action="<?php echo site_url('laporan/search_data'); ?>" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<p>Pilih bagian</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<select class="form-control" name="bagian">
										<option value="dis">Disposisi</option>
										<option value="mas">Surat masuk</option>
										<option value="kel">Surat keluar</option>
									</select>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Pilih tanggal</p>
								</div>
								<div class="col-md-3 col-md-pull-2">
									<input type="text" id="from" class="form-control" name="from">
								</div>
								<div class="col-md-3 col-md-pull-2">
									<input type="text" id="to" name="to" class="form-control">
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
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
	$( function() {
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );

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
