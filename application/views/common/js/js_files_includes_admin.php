
<!-- MAIN SCRIPTS -->
<script src="<?php echo base_url();?>public/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


    <!-- iCheck -->
<script src="<?php echo base_url();?>public/js/plugins/iCheck/icheck.min.js"></script>

<!-- CUSTOM AND PLUGIN JAVASCRIPT -->
<script src="<?php echo base_url();?>public/js/inspinia.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/list/list.min.js"></script>



<script>
$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip(); 
    $('[data-toggle="popover"]').popover();
         
    // SEARCH
    var options = {
	  valueNames: [ 'l_name', 'l_prodname', 'l_date' ]
	};

	var userList = new List('customer_purchase', options);   
	// END OF SEARCH 
});
</script>