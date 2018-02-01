<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.3/moment.min.js"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datetimepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/klorofil-common.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/bootstrap-notify.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>
<script>
	
	<?php if ($this->session->flashdata('success') !=NULL ){ ?>
$.notify({
	// options
	message: '<?php echo $this->session->flashdata('success'); ?>' 
},{
	// settings
	type: 'success'
});
		
		<?php } ?>
	
	<?php if ($this->session->flashdata('error') !=NULL ){ ?>
$.notify({
	// options
	message: '<?php echo $this->session->flashdata('error'); ?>' 
},{
	// settings
	type: 'danger'
});
		
		<?php } ?>
</script>
