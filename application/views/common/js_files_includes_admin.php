
<!-- fullcalendar-->
<script src="<?php echo base_url();?>public/js/plugins/fullcalendar/moment.min.js"></script><!-- Mainly scripts -->
<script src="<?php echo base_url();?>public/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
 
<?php if ($curpage == "Reports") { ?>
    <!-- Flot -->
    <script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/flot/jquery.flot.time.js"></script>
<?php } ?>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url();?>public/js/inspinia.js"></script>
<!--
<script src="<?php //echo base_url();?>public/js/plugins/pace/pace.min.js"></script>
-->

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

<!-- at a glance -->
<script src="<?php echo base_url();?>public/js/plugins/morris/morris.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/morris/raphael-2.1.0.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/chosen/chosen.jquery.js"></script>

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
                        //statement;
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

<!-- CHARTJS-->
<?php if ($curpage == 'Reports') { ?>
    <script src="<?php echo base_url();?>public/js/plugins/chartJs/Chart.min.js"></script>
    <script src="<?php echo base_url();?>public/js/demo/chartjs-demo.js"></script>
<?php } ?>