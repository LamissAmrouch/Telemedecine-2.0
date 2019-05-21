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
	<link rel="stylesheet" class="ace-main-stylesheet" id="main-ace-style" href="<?php echo base_url()."assets/css/ace.min.css";?>">
	
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
<!-- ace jquery -->
<!--body class="skin-1no-skin"-->
<body class="no-skin">
	<?php $this->load->view('layouts/header2'); ?>
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<?php $this->load->view('layouts/sidebar'); ?>
		<?php $this->load->view($view_isi); ?>

		<?php $this->load->view('layouts/footer2'); ?>

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


</body>
</html>
