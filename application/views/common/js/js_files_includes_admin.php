
<!-- MAIN SCRIPTS -->
<script src="<?php echo base_url();?>public/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo base_url();?>public/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- iCheck -->
<script src="<?php echo base_url();?>public/js/plugins/iCheck/icheck.min.js"></script>

<!-- CUSTOM AND PLUGIN JAVASCRIPT -->
<script src="<?php echo base_url();?>public/js/inspinia.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/pace/pace.min.js"></script>

<!-- TOASTR -->
<script src="<?php echo base_url();?>public/js/plugins/toastr/toastr.min.js"></script>

<!-- LIST -->
<script src="<?php echo base_url();?>public/js/plugins/list/list.min.js"></script>

<!-- SUMMERNOTE -->
<script src="<?php echo base_url();?>public/js/plugins/summernote/summernote.min.js"></script>

<!-- JVECTOR MAP -->
<script src="<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- FLOT -->
<script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.resize.js"></script>


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


        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $('.summernote').summernote();
    });
    
    var edit = function() {
        $('.click2edit').summernote({focus: true});
    };
    var save = function() {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };


    
</script>