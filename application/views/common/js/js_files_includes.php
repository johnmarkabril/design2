<script src="<?php echo base_url();?>public/js/jquery-3.1.0.min.js"></script>

<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/toastr/toastr.min.js"></script>

<!-- GOOGLE MAP API -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5h8RE_Re9V9PJ-ROp7TKXQBKbMnWXDVE&callback=initMap">
</script>

<script>
	// NOTIFY WHEN THE EMAIL OR PASSWORD IS INCORRECT
	<?php 
		if($this->session->flashdata('error_message')){
        ?>
        	toastr.error("INCORRECT EMAIL OR PASSWORD!");
    <?php } ?>

    // NOTIFY WHEN THE EMAIL AND PASSWORD IS CORRECT
	<?php 
		if($this->session->flashdata('success_message')){
        ?>
        	toastr.success("LOGIN SUCCESSFUL!");
    <?php } ?>
    
    $(document).ready(function(){
        
        // TOOLTIP AND POPOVER
        $('[data-toggle="tooltip"]').tooltip(); 
        $('[data-toggle="popover"]').popover();

        // LINK COMMENT FORM BUTTON SUBMIT
        $('#btn_submit_comment').click(function(){

            var comment_name    =   $('#comment_name').val();
            var comment_email   =   $('#comment_email').val();
            var comment_here    =   $('#comment_here').val();
            var post_no         =   $('#post_no').val();
            var timedate         =   $('#timedate').val();

            if(comment_name == ''){
                toastr.error('PLEASE TYPE YOUR NAME!');
            }else if(comment_email == ''){
                toastr.error('PLEASE TYPE YOUR EMAIL!');
            }else if(comment_here == ''){
                toastr.error('PLEASE TYPE COMMENT!');
            }else{
                // APPEND TO THE TOP OF COMMENT SECTION DIV TAG ID
                html =  '<div class="panel panel-default no-border">';
                html += '   <div class="panel-body" style="background-color: #f5f4f6;">';
                html += '       <div class="row">';
                html += '           <div class="col-md-12">';
                html += '               <div class="col-md-2">';
                html += '                   <div><img class="img-responsive  full-width text-center" src="<?php echo base_url(); ?>public/img/prof4.png"/></div>';
                html += '                   <div class="text-center">'+comment_name+'</div>';
                html += '               </div>';
                html += '               <div class="col-md-10"><div class="justify-text">'+comment_here+'</div></div>';
                html += '           </div>';
                html += '           <div class="pull-right"><span style="padding-right: 20px;color: #FF4785;">'+timedate+'</span>';
                html += '               <span style="padding-right: 20px;"><a href="#"><b>reply</b></a></span>';
                html += '           </div>';
                html += '       </div>';
                html += '   </div>';
                html += '</div>';

                $('#comment-section').prepend(html);

                // ADD TO THE DATABASE WITHOUT RELOADING THE PAGE
                $.ajax({
                    url: "<?php echo base_url(); ?>post/insert_comment_cont",
                    method:"POST",
                    data:{
                        comment_name    :comment_name,
                        comment_here    :comment_here,
                        comment_email   :comment_email,
                        post_no         :post_no,
                        timedate   :timedate,
                    },
                    success:function(data)
                    {
                        toastr.success("COMMENT POSTED!");
                    },error:function(){
                        toastr.error("ERROR");
                    }
                })
                
            }
        }); // END OF LINK COMMENT FORM BUTTON SUBMIT
    });

    // GOOGLE MAP API CODE START
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
    }
    
    // GOOGLE MAP API CODE END

</script>