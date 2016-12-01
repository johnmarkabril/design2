<!-- fullcalendar-->
<script src="<?php echo base_url();?>public/js/plugins/fullcalendar/moment.min.js"></script><!-- Mainly scripts -->
<script src="<?php echo base_url();?>public/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
 
<?php if ($curpage == "Reports") { ?>
    <script src="<?php echo base_url();?>public/js/plugins/chartJs/Chart.min.js"></script>
    <script src="<?php echo base_url();?>public/js/admin_reports.js"></script>
<?php } ?>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url();?>public/js/inspinia.js"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url();?>public/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Toastr -->
<script src="<?php echo base_url();?>public/js/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/clockpicker/clockpicker.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/iCheck/icheck.min.js"></script>

<!-- Image cropper -->
<script src="<?php echo base_url();?>public/js/plugins/cropper/cropper.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- SUMMERNOTE -->
<script src="<?php echo base_url();?>public/js/plugins/summernote/summernote.min.js"></script>

<!-- Steps -->
<script src="<?php echo base_url();?>public/js/plugins/staps/jquery.steps.min.js"></script>

<!-- Chosen -->
<script src="<?php echo base_url();?>public/js/plugins/chosen/chosen.jquery.js"></script>

<!-- at a glance -->
<script src="<?php echo base_url();?>public/js/plugins/morris/morris.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/morris/raphael-2.1.0.min.js"></script>

<!-- JVECTOR MAP -->
<script src="<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- FOOTABLE -->
<script src="<?php echo base_url();?>public/js/plugins/footable/footable.all.min.js"></script>

<!-- LIST -->
<script src="<?php echo base_url();?>public/js/plugins/list/list.min.js"></script>

<?php if ($curpage == 'Dashboard') { ?>
    <!-- GOOGLE MAP -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5h8RE_Re9V9PJ-ROp7TKXQBKbMnWXDVE&callback=initMap">
    </script>
<?php } ?>

<script>
    $(document).ready(function() {

        $("#btn_create_coa_save").click(function(){
            var txt_create_coa_fname        =   $("#txt_create_coa_fname").val();
            var txt_create_coa_lname        =   $("#txt_create_coa_lname").val();
            var txt_create_coa_uname        =   $("#txt_create_coa_uname").val();
            var txt_create_coa_pnum         =   $("#txt_create_coa_pnum").val();
            var txt_create_coa_email        =   $("#txt_create_coa_email").val();
            var txt_create_coa_pword        =   $("#txt_create_coa_pword").val();
            var txt_create_coa_conpword     =   $("#txt_create_coa_conpword").val();

            var checkEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/.test(txt_create_coa_email);

            if ( txt_create_coa_fname && txt_create_coa_lname && txt_create_coa_uname && txt_create_coa_pnum && txt_create_coa_email && txt_create_coa_pword && txt_create_coa_conpword ) {

                if ( checkEmail ) {
                    if ( txt_create_coa_pword.length >= 8 ) {
                        if ( txt_create_coa_pword == txt_create_coa_conpword ) {
                            toastr.success("ASDF");
                        } else {
                            toastr.error("Password doesn't match");
                        }
                    } else {
                        toastr.error("Password length must be 8 and above");
                    }
                } else {
                    toastr.error("Invalid email address format!");
                }

            } else {
                toastr.error("Please fill-up the fields!");
            }
        });

        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"100%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $('#btn_aboutMySite_save').click(function(){
           var txt_about_title = $("#txt_about_title").val();
           var txt_about_desc = $("#txt_about_desc").val();
           if (txt_about_title) {
                if (txt_about_desc) {
                    $.ajax({
                        url: "<?php echo base_url();?>admin/about_my_site/insert_about_my_site",
                        method: "POST",
                        data: {
                            txt_about_title : txt_about_title,
                            txt_about_desc  : txt_about_desc                  
                        },
                        success:function(data){
                            location.reload();
                        },
                        error:function(){
                            toastr.error("ERROR!");
                        }
                    });
                }else{
                    toastr.error("Fill-up the description field!");
                }
           }else{
            toastr.error("Fiil-up the title field!");
           } 
        });
        
        $('#btn_events_save').click(function(){
            var txt_events_title    =   $("#txt_events_title").val();
            var txt_events_desc     =   $("#txt_events_desc").val();
            if (txt_events_title){
                if (txt_events_desc) {
                    $.ajax ({
                        url: "<?php echo base_url();?>admin/events/add_events",
                        method: "POST",
                        data: {
                            txt_events_title    :   txt_events_title,
                            txt_events_desc     :   txt_events_desc
                        },
                        success:function(data){
                            location.reload();
                        },
                        error:function(){
                            toastr.error("ERROR!");
                        }
                    });
                }else{
                    toastr.error("Fill-up the description field!");
                }
            }else{
                toastr.error("Fill-up the title field!");
            }
        });

        $('#btn_update_events').click(function(){
            var update_events_title    =   $("#update_events_title").val();
            var update_events_desc     =   $("#update_events_desc").val();
            var txt_update_no     =   $("#txt_update_no").val();
            if (update_events_title) {
                if (update_events_desc) {
                    $.ajax ({
                        url: "<?php echo base_url();?>admin/events/event_update",
                        method: "POST",
                        data: {
                            update_events_title : update_events_title,
                            update_events_desc  : update_events_desc,
                            txt_update_no       : txt_update_no
                        },
                        success:function(data){
                            location.reload();
                            // console.log(data);
                        },
                        error:function(data){
                            // console.log(data);
                            toastr.error("ERROR!");
                        }
                    });
                }else{
                    toastr.error("Fiil-up the description field");
                }
            }else{
                toastr.error("Fill-up the title field!");
            }
        });

        $('#btn_about_update').click(function(){
            var update_about_title  =   $('#update_about_title').val();
            var update_about_desc   =   $('#update_about_desc').val();
            var update_about_no     =   $('#update_about_no').val();

            if (update_about_title) {
                if (update_about_desc) {
                    $.ajax({
                        url: "<?php echo base_url();?>admin/about_my_site/update_about_my_site",
                        method: "POST",
                        data: {
                            update_about_title  : update_about_title,
                            update_about_desc   : update_about_desc,
                            update_about_no     : update_about_no
                        },
                        success:function(data){
                            location.reload();
                        },
                        error:function(data){
                            toastr.error("ERROR");
                        }
                    });
                } else{
                    toastr.error("Fill-up the description field!");
                }
            } else{
                toastr.error("Fill-up the title field!");
            }
        });

        $("#btn_update_paypal_account").click(function(){
            var txt_paypal_email_upd    = $("#txt_paypal_email_upd").val();
            var paypal_email_status     = $("#paypal_email_status").val();
            var emailCheck = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/.test(txt_paypal_email_upd);
            if ( txt_paypal_email_upd ) {
                if ( emailCheck ) {
                    $.ajax ({
                        url: "<?php echo base_url();?>admin/paypal_configuration/updated_account",
                        method: "POST",
                        data: {
                            paypal_email      : txt_paypal_email_upd,
                            paypal_status     : paypal_email_status
                        },
                        success:function(data){
                            location.reload();
                        },
                        error:function(){
                            location.reload();
                        }
                    });
                } else {
                    toastr.error("Email address is invalid");
                }
            } else {
                toastr.error("Please fill-up the field!");
            }
        });

        $("#btn_paypal_save_new").click(function(){
            var paypal_email = $("#txt_paypal_email").val();
            var emailCheck = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/.test(paypal_email);
            if (paypal_email) {
                if (emailCheck){
                    $.ajax ({
                        url: "<?php echo base_url();?>admin/paypal_configuration/new_account",
                        method: "POST",
                        data: {
                            paypal_email      : paypal_email
                        },
                        success:function(data){
                            $("#txt_paypal_email").val("");
                            toastr.success("Saved new account!");
                        },
                        error:function(){
                            toastr.error("Error!");
                        }
                    });
                }else{
                    toastr.error("Email address is invalid");
                }
            }else{
                toastr.error("Please fill-up the field!");
            }
        });

        $('#btn_send_comp').click(function(){
            var compEmailTo = $("#txt_comp_emailto").val();
            var compSubject = $("#txt_comp_subject").val();
            var compMessage = $("#txt_comp_message").val();
            var emailCheck = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/.test(compEmailTo);
            if ( compEmailTo && compMessage && compSubject ){
                if ( emailCheck ){
                    if ("<?php echo $this->session->userdata('log_sess')->EMAIL ?>" != compEmailTo){

                        $.ajax ({
                            url: "<?php echo base_url();?>admin/compose_message/sent_message",
                            method: "POST",
                            data: {
                                EmailTo      : compEmailTo,
                                SubjectComp  : compSubject,
                                MessageComp  : compMessage
                            },
                            success:function(data){
                                $("#txt_comp_emailto").val("");
                                $("#txt_comp_subject").val("");
                                $("#txt_comp_message").val("");
                                toastr.success("Message sent!");
                                // console.log(data);
                            },
                            error:function(){
                                toastr.error("Error!");
                            }
                        });
                    }else{
                        toastr.error("Message sending failed!");
                    }
                }else{
                    toastr.error("Incorrect format of Email Address");
                }
            }else{
                toastr.error("Please fill up the fields!");
            }
        });

        $('#btn_new_category_save').click(function(){
            var title = $("#category_title").val();
            var status = $("#category_status").val();
            
            if (title && status) {
                // alert(title + status);
                $.ajax ({
                    url: "<?php echo base_url();?>admin/product_category/new_category",
                    method: "POST",
                    data: {
                        title   : title,
                        status  : status
                    },
                    success:function(data){
                        html =  "<tr>";
                        html += '   <td>';
                        html +=         title;
                        html += '   </td>';
                        html += "   <td>";
                        html += "       0";
                        html += "   </td>";
                        html += "   <td>";
                        if (status == 'Enabled'){
                            html += '   <span class="label label-primary">Enabled</span>';
                        }else{
                            html += '   <span class="label label-danger">Disabled</span>';
                        }
                        html += "   </td>";
                        html += '   <td class="text-right">';
                        html += '       <div class="btn-group">';
                        html += '           <button class="btn-white btn btn-xs">Edit</button>';
                        html += '       </div>';
                        html += '   </td>';
                        html += '</tr>';

                        $('#pend-title').prepend(html);
                        toastr.success("New Category Added");
                    },
                    error:function(){
                        toastr.error("Error!");
                    }
                });
            } else {
                toastr.error("Incomplete Fields");
            }
        });

        $('[data-toggle="tooltip"]').tooltip(); 
        $('[data-toggle="popover"]').popover();
        
        // SEARCH DASHBOARD
        var options = {
    	  valueNames: [ 'l_name', 'l_prodname', 'l_date' ]
    	};

    	var userList = new List('customer_purchase', options);   
    	// END OF SEARCH 

        // SEARCH DASHBOARD
        var options = {
          valueNames: [ 'title' ]
        };

        var AMSList = new List('AboutMySiteList', options);   
        // END OF SEARCH 

        // SEARCH PRODUCT GRID
        var options = {
            valueNames: [ 'prodtitle' ]
        };

        var prodGrid = new List('productGridSearchList', options);

        var options = {
            valueNames: [ 'email_name' , 'mail_subj' ]
        };

        var searchInbox = new List('inbox_email_search', options);

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $('.summernote').summernote();

        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };

    });
    // GOOGLE MAP API CODE START
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 14.633420, lng: 120.973839},
              zoom: 13
        });
    }
    // GOOGLE MAP API CODE END

    $(document).ready(function() {

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ]
        });


    });
    


    // PAGE LEVEL SCRIPTS START
    $(document).ready(function() {
        $('.footable').footable();
    });
    //  END OF PAGE LEVEL SCRIPTS
    
</script>