<script src="<?php echo base_url();?>public/js/jquery-3.1.1.min.js"></script>

<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/toastr/toastr.min.js"></script>

<!-- CUSTOM AND PLUGIN JAVASCRIPT -->
<script src="<?php echo base_url();?>public/js/inspinia.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/pace/pace.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<!-- <script src="<?php echo base_url();?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

<!-- DROPZONE -->
<script src="<?php echo base_url();?>public/js/plugins/dropzone/dropzone.js"></script>  

<!-- Steps -->
<script src="<?php echo base_url();?>public/js/plugins/staps/jquery.steps.min.js"></script>

<!-- Jquery Validate -->
<script src="<?php echo base_url();?>public/js/plugins/validate/jquery.validate.min.js"></script>

<!-- Image cropper -->
<script src="<?php echo base_url();?>public/js/plugins/cropper/cropper.min.js"></script>

<!-- Chosen -->
<script src="<?php echo base_url();?>public/js/plugins/chosen/chosen.jquery.js"></script>

<?php if ( $curpage == "contacts" ) { ?>
    <!-- GOOGLE MAP API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5h8RE_Re9V9PJ-ROp7TKXQBKbMnWXDVE&callback=initMap">
    </script>
<?php } ?>
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
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        var $image = $(".image-crop > img")
        $($image).cropper({
            aspectRatio: 1.618,
            preview: ".img-preview",
            done: function(data) {
                    // Output the result data for cropping image.
            }
        });

        var $inputImage = $("#inputImage");
        if (window.FileReader) {
            $inputImage.change(function() {
                var fileReader = new FileReader(),
                    files = this.files,
                    file;

                if (!files.length) {
                    return;
                }

                file = files[0];

                if (/^image\/\w+$/.test(file.type)) {
                    fileReader.readAsDataURL(file);
                    fileReader.onload = function () {
                        $inputImage.val("");
                        $image.cropper("reset", true).cropper("replace", this.result);
                    };
                } else {
                    showMessage("Please choose an image file.");
                }   
            });
        } else {
            $inputImage.addClass("hide");
        }

        $("#download").click(function() {
            window.open($image.cropper("getDataURL"));
        });

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
                    async: true,
                    done:function(data)
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

    // DROPZONE START
    $(document).ready(function(){
        Dropzone.options.myAwesomeDropzone = {

            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,

            init: function() {
                var myDropzone = this;

                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("sendingmultiple", function() {
                });
                this.on("successmultiple", function(files, response) {
                });
                this.on("errormultiple", function(files, response) {
                });
            }
        }
    });
    // DROPZONE END

    // FORM WIZARD WITH VALIDATION CODE
    $(document).ready(function(){

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

        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                var su_fname        =   $('#su_fname').val();
                var su_lname        =   $('#su_lname').val();
                var su_uname        =   $('#su_uname').val();
                var su_cpnum        =   $('#su_cpnum').val();
                var su_email        =   $('#su_email').val();
                var su_pword        =   $('#password').val();
                var su_conpword     =   $('#confirm ').val();
                var su_emailcode    =   $('#su_emailcode').val();
                var random_code     =   randomString();

                var fname_check = /^[a-zA-Z-_]+( [a-zA-Z-_]+)*$/.test(su_fname);
                var lname_check = /^[a-zA-Z-_]+( [a-zA-Z-_]+)*$/.test(su_lname);
                var uname_check = /^\w+$/.test(su_uname);
                var cpnum_check = /^(0|\[0-9]{1,5})?([7-9][0-9]{9})$/.test(su_cpnum);

                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Warning steps if the user didn't complete all fields in step 1
                if (newIndex === 1) {
                    if (!fname_check){
                        toastr.error("Incorrect first name format!");
                    }else{
                        if (!lname_check){
                            toastr.error("Incorrect last name format!");
                        }else{
                            if (!uname_check) {
                                toastr.error("Incorrect username format!");
                                return false;
                            }else{
                                if (!cpnum_check){
                                    toastr.error("Invalid cellphone number!");
                                    return false;
                                }
                            }
                        }
                    }
                }

                if (newIndex === 2) {
                    if (su_email && su_pword && su_conpword){
                        $.ajax({
                            url: "<?php //echo base_url(); ?>signup/insert_verify_no",
                            method:"POST",
                            data:{
                                random_code     :   random_code,
                                su_fname        :   su_fname,
                                su_lname        :   su_lname,
                                su_uname        :   su_uname,
                                su_cpnum        :   su_cpnum,
                                su_email        :   su_email,
                                su_pword        :   su_pword
                            },
                            async: true,
                            done:function(data)
                            {
                                toastr.success("We sent you an email verification code on your mail account");
                            },error:function(){
                                toastr.error("ERROR");
                                return false;
                            }
                        });
                    }else{
                        return false;
                    }
                }

                if (newIndex === 3) {
                    $.ajax({
                            url: "<?php echo base_url(); ?>signup/check_verification",
                            method:"POST",
                            data:{
                                su_fname        :   su_fname,
                                su_lname        :   su_lname,
                                su_uname        :   su_uname,
                                su_cpnum        :   su_cpnum,
                                su_email        :   su_email,
                                su_pword        :   su_pword,
                                su_emailcode    :   su_emailcode
                            },
                            async: true,
                            done:function(data)
                            {
                                // alert(data);
                                if(data == 'TRUE'){
                                    $('#newRegname').text(su_fname + " " + su_lname);
                                    toastr.success('Registration done!');
                                }else{
                                    console.log(data);
                                    toastr.error('Invalid Verification Code');
                                    return false;
                                }
                            },error:function(){
                                toastr.error("ERROR");
                                return false;
                            }
                        });
                }


                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                    // Submit form input
                form.submit();
            }
        }).validate({
            errorPlacement: function (error, element)
            {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    });
    // END OF FORM WIZARD
    
    $(document).ready(function(){
        $('#btn_upload').click(function(){
            var title = $('#txt_title').val();
            var imagefile = document.getElementById('file_img');
            var imageName = $('#file_img').val();
            var descript = $('#txt_descript').val();
            var recipe = $('#txt_recipe').val();

            file = imagefile.files[0];

            if(file != undefined && title && descript && recipe) {
                formData = new FormData();
                formData.append("image", file);
                if(!!file.type.match(/image.*/)){
                    $.ajax ({
                        url: "<?php echo base_url(); ?>profile/uploadImage",
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        async: true,
                        done:function(data){
                            insertData();
                            // toastr.success(data);
                        },
                        error:function(){
                            toastr.error("Error!");
                        }
                    });
                }else{
                    toastr.error("Not a valid image!");
                }
            }else {
                toastr.error("Please fill up all fields!");
            }
        });

        function insertData(){
            var title = $('#txt_title').val();
            var imageName = $('#file_img').val();
            var descript = $('#txt_descript').val();
            var recipe = $('#txt_recipe').val();

            $.ajax ({
                url: "<?php echo base_url(); ?>profile/addRecipe",
                method: "POST",
                data: {
                    title       : title,
                    imageName   : imageName,
                    descript    : descript,
                    recipe      : recipe
                },
                async: true,
                done:function(data){
                    html =  '<div class="col-md-4">';
                    html +=     '<div class="ibox">'
                    html +=        '<div class="ibox-content product-box">'
                    html +=             '<img class="img-responsive prod-prof" src="<?php echo base_url();?>public/img/banana-walnut.jpg"/>'
                    html +=             '<div class="pad-top text-center">'
                    html +=               '<a href="#">'+title+'</a>'
                    html +=                        '</div>'
                    html +=                        '<div style="padding: 20px;">'
                    html +=                            '<a style="color: #a6a6a6;">'
                    html +=                                '<span class="glyphicon glyphicon-paperclip"></span>'
                    html +=                            '</a>'
                    html +=                            '<a style="color: #a6a6a6; float: right; padding-left: 10px;">'
                    html +=                                '<span class="glyphicon glyphicon-heart"></span>'
                    html +=                                    '173'
                    html +=                            '</a>'
                    html +=                       '</div>'
                    html +=                   '</div>'
                    html +=            '</div>'
                    html +=        '</div>'

                    $('#new_recipe_section').prepend(html);
                    // alert(data);
                    toastr.success("New recipe has been posted!");
                    },
                error:function(){
                    toastr.error("Error!");
                }
            });
        }

    });
</script>