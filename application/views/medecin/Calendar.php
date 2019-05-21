<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Blank Page - Ace Admin</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/font-awesome/css/font-awesome.min.css";?>">
    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/fonts.googleapis.com.css";?>">
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/jquery-ui.min.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap-datepicker3.min.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/ui.jqgrid.min.css";?>">
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/ace.min.css";?>">

    <link rel="stylesheet" href="<?php echo base_url()."assets/css/ace-part2.min.css";?>">

    <link rel="stylesheet" href="<?php echo base_url()."assets/css/ace-rtl.min.css";?>">

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/ace-ie.min.css";?> />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/ace-skins.min.css";?>">

    <link rel="stylesheet" href="<?php echo base_url()."assets/css/select2.min.css";?>">

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script
    <![endif]-->
    <!-- ace jquery -->
    <script src="<?php echo base_url()."assets/js/jquery.min.js";?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery-ui.min.js";?>"></script>
    <script src="<?php echo base_url()."assets/js/ace-extra.min.js";?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js";?>"></script>
    <script src="<?php echo base_url()."assets/js/spinbox.min.js";?>"></script>

    <!-- page specific plugin scripts -->
    <script src="<?php echo base_url()."assets/js/jquery-2.1.4.min.js";?>"></script>
    <!-- ace scripts -->
    <script src="<?php echo base_url()."assets/js/ace-elements.min.js";?>"></script>
    <script src="<?php echo base_url()."assets/js/ace.min.js";?>"></script>

</head>

<body class="no-skin">

<?php $this->load->view('layouts/header2'); ?>
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->
<!--[if IE]>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="<?php echo base_url()."assets/js/ace-elements.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/ace.min.js";?>"></script>

<!-- inline scripts related to this page -->



<script src="<?php echo base_url()."assets/metisMenu/metisMenu.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/mon-script.js";?>"></script>

<!-- basic scripts -->
<!--[if !IE]> -->
<script src="<?php echo base_url()."assets/js/jquery-2.1.4.min.js";?>"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<!-- page specific plugin scripts -->
<script src="<?php echo base_url()."assets/js/bootstrap.min.js";?>"></script>
<!-- page specific plugin scripts -->
<script src="<?php echo base_url()."assets/js/jquery.jqGrid.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/bootstrap-datepicker.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/grid.locale-en.js";?>"></script>
<!-- ace scripts -->
<script src="<?php echo base_url()."assets/js/ace-elements.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/ace.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/wizard.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/jquery.validate.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/jquery-additional-methods.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/bootbox.js";?>"></script>
<script src="<?php echo base_url()."assets/js/jquery.maskedinput.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/select2.min.js";?>"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Planning des Seances</h1>
            <div id="calendar">

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un nouveau planning</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open(site_url("Seance/Ajouter/".$id), array("class" => "form-horizontal")) ?>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Code Médecin</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="name" value="" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Titre</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="titre" value="" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Commentaire</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="description" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">heure Debut</label>
                    <div class="col-md-8">
                        <input type="datetime-local" class="form-control" name="start_date" placeholder="AAAA/MM/JJ HH:MM">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Durée</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="end_date" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Ajouter Rdv">
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier Planning</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open(site_url("SeanceController/edit_event/".$id), array("class" => "form-horizontal")) ?>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">titre</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="titre" value="" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Commentaire</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Date début</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="start_date" id="start_date" placeholder="AAAA/MM/JJ HH:MM">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">fin</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="end_date" id="end_date" placeholder="AAAA/MM/JJ HH:MM">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Supprimer Rdv</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
                </div>
                <input type="hidden" name="eventid" id="event_id" value="0" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Modifier Rdv">
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/footer2'); ?>


<script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="<?php echo base_url()."assets/js/ace-elements.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/ace.min.js";?>"></script>

<!-- inline scripts related to this page -->

<script src="<?php echo base_url()."assets/metisMenu/metisMenu.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/mon-script.js";?>"></script>

<!-- basic scripts -->
<!--[if !IE]> -->
<script src="<?php echo base_url()."assets/js/jquery-2.1.4.min.js";?>"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<!-- page specific plugin scripts -->
<script src="<?php echo base_url()."assets/js/bootstrap.min.js";?>"></script>
<!-- page specific plugin scripts -->
<script src="<?php echo base_url()."assets/js/jquery.jqGrid.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/bootstrap-datepicker.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/grid.locale-en.js";?>"></script>
<!-- ace scripts -->
<script src="<?php echo base_url()."assets/js/ace-elements.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/ace.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/wizard.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/jquery.validate.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/jquery-additional-methods.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/bootbox.js";?>"></script>
<script src="<?php echo base_url()."assets/js/jquery.maskedinput.min.js";?>"></script>
<script src="<?php echo base_url()."assets/js/select2.min.js";?>"></script>
















































<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>scripts/fulcalendar/fullcalendar.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>scripts/fulcalendar/lib/moment.min.js"></script>
<script src="<?php echo base_url() ?>scripts/fulcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>scripts/fulcalendar/gcal.js"></script>




<script type="text/javascript">
    $(document).ready(function() {

        var date_last_clicked = null;

        $('#calendar').fullCalendar({
            eventSources: [
                {
                    events: function(start, end, timezone, callback) {
                        $.ajax({
                            url: '<?php echo base_url() ?>SeanceController/get_events',
                            dataType: 'json',
                            data: {
                                // our hypothetical feed requires UNIX timestamps
                                start: start.unix(),
                                end: end.unix()
                            },
                            success: function(msg) {
                                var events = msg.events;
                                callback(events);
                            }
                        });
                    }
                },
            ],
            dayClick: function(date, jsEvent, view) {
                date_last_clicked = $(this);
                $(this).css('background-color', '#bed7f3');
                $('#addModal').modal();
            },
            eventClick: function(event, jsEvent, view) {
                $('#name').val(event.title);
                $('#description').val(event.description);
                $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                if(event.end) {
                    $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
                } else {
                    $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                }
                $('#event_id').val(event.id);
                $('#editModal').modal();
            },
        });
    });
</script>

</body>
</html>