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
    
    <?php
        if($this->session->flashdata('attempt_open')){
        ?>
            toastr.error("ATTEMPTING TO OPEN A PAGE. PLEASE LOGIN!");
    <?php } ?>

    $(document).ready(function(){
        
        // TOOLTIP AND POPOVER
        $('[data-toggle="tooltip"]').tooltip(); 
        $('[data-toggle="popover"]').popover();

        // IF THE SESSION IS EMPTY AND CLICK THE SUBMIT COMMENT BUTTON
        $('#btn_disabled_comment').click(function(){
            toastr.error('Please login!');
        });

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
                        $('#comment_here').val("");
                    },error:function(){
                        toastr.error("ERROR");
                    }
                })
                
            }
        }); // END OF LINK COMMENT FORM BUTTON SUBMIT

        // START OF CONTACT RIGHT FORM BUTTON SUBMIT
        $('#btn_fc_submit_comment').click(function(){
            $name   =   $('#cf_name').val();
            $email  =   $('#cf_email').val();
        });

        function randomString() {
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length = 8;
            var randomstring = '';
            for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
            }
            return randomstring;
        }

        var su_fname    =   $('#su_fname');
        var su_lname    =   $('#su_lname');
        var su_uname    =   $('#su_uname');
        var su_cpnum    =   $('#su_cpnum');
        var su_email        =   $('#su_email');
        var su_pword        =   $('#su_pword');
        var su_conpword     =   $('#su_conpword');
        var su_emailcode    =   $('#su_emailcode');

        // START PERSONAL TAB - PROCEED
        $('#btn-pres1-proceed').click(function(){
            var fname_check = /^[a-zA-Z-_]+( [a-zA-Z-_]+)*$/.test(su_fname.val());
            var lname_check = /^[a-zA-Z-_]+( [a-zA-Z-_]+)*$/.test(su_lname.val());
            var uname_check = /^\w+$/.test(su_uname.val());
            var cpnum_check = /^(0|\[0-9]{1,5})?([7-9][0-9]{9})$/.test(su_cpnum.val());

            if(fname_check){
                if(lname_check){
                    if(uname_check){
                        if(cpnum_check){
                            disable_pointer_events();
                            $('#pres2').css({pointerEvents: "auto"});
                            toastr.success('Please click the second tab to proceed');
                        }else{
                            toastr.error('Invalid Cellphone Number');
                        }
                    }else{
                        toastr.error('Invalid Username');
                    }
                }else{
                    toastr.error('Invalid Last Name');
                }
            }else{
                toastr.error('Invalid First Name');
            }
        }) // END PERSONAL TAB - PROCEED

        $('#btn-pres2-back').click(function(){
            disable_pointer_events();
            $('#pres1').css({pointerEvents: "auto"});
            toastr.success('Please click the first tab to go back');
        })


        // START ACCOUNT TAB - PROCEED
        $('#btn-pres2-proceed').click(function(){

            var email_check     =   /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/.test(su_email.val());

            var random_code     = randomString();
            
            if(email_check){
                if(su_pword.val().length >= 7){
                    if(su_pword.val() == su_conpword.val()){
                        $.ajax({
                            url: "<?php echo base_url(); ?>signup/insert_verify_no",
                            method:"POST",
                            data:{
                                random_code     :   random_code,
                                su_fname        :   su_fname.val(),
                                su_lname        :   su_lname.val(),
                                su_uname        :   su_uname.val(),
                                su_cpnum        :   su_cpnum.val(),
                                su_email        :   su_email.val(),
                                su_pword        :   su_pword.val()
                            },
                            success:function(data)
                            {
                                disable_pointer_events();
                                $('#pres3').css({pointerEvents: "auto"});
                                toastr.success('Please click the third tab to proceed');
                                // toastr.success(data);
                                // alert(data);
                            },error:function(){
                                toastr.error("ERROR");
                            }
                        })

                    }else{
                        toastr.error("Password doesn't match");
                    }
                }else{
                    toastr.error('Minimum of 8 characters for Password');
                }
            }else{
                toastr.error('Invalid Email Address');
            }
        }) // END ACCOUNT TAB - PROCEED

        $('#btn-pres3-proceed').click(function(){
            if(su_emailcode.val().length > 0){
                $.ajax({
                    url: "<?php echo base_url(); ?>signup/check_verification",
                    method:"POST",
                    data:{
                        su_fname        :   su_fname.val(),
                        su_lname        :   su_lname.val(),
                        su_uname        :   su_uname.val(),
                        su_cpnum        :   su_cpnum.val(),
                        su_email        :   su_email.val(),
                        su_pword        :   su_pword.val(),
                        su_emailcode    :   su_emailcode.val()
                    },
                    success:function(data)
                    {
                        // alert(data);
                        if(data == 'TRUE'){
                            disable_pointer_events();
                            $('#su_emailcode').css({pointerEvents: "none"});
                            $('#pres4').css({pointerEvents: "auto"});
                            toastr.success('Please click the last tab to complete the registration');
                        }else{
                            toastr.error('Invalid Verification Code');
                        }
                    },error:function(){
                        toastr.error("ERROR");
                    }
                })
                // alert(asdf)
            }else{
                toastr.error('Please input your verification code');
            }

            // disable_pointer_events();
            // $('#pres4').css({pointerEvents: "auto"});
            // toastr.success('Please click the last tab to complete the registration');
        })

        function disable_pointer_events(){
            $('#pres1').css({pointerEvents: "none"});
            $('#pres2').css({pointerEvents: "none"});
            $('#pres3').css({pointerEvents: "none"});
            $('#pres4').css({pointerEvents: "none"});
        }
    });

    // GOOGLE MAP API CODE START
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.633420, lng: 120.973839},
          zoom: 18
        });
    }
    
    // GOOGLE MAP API CODE END

</script>