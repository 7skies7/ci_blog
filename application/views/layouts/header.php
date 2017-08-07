<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>Skies Blog</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/propeller.min.css'); ?>">
<!-- /build -->
<?php if(isset($page) && $page == 'myposts'){ ?>
<!-- DataTables css-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
<!-- Propeller dataTables css-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pmd-datatable.css'); ?>">
<?php } ?>

<?php if(isset($page) && $page == 'allposts'){ ?>
<!-- Select2 css-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/select2.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/select2-bootstrap.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/pmd-select2.css'); ?>" />
<?php } ?>
<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/propeller-theme.css'); ?>" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/propeller-admin.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/textfield.css'); ?>">
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=1f96x9ys3f9oeh3gophdxx9rfqxn87csze3e62pw22jjqr7f"></script>
<script>

tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});

</script>
</head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">
			<?php if (!$this->session->userdata('logged_in')){ ?>
		  	
			<a href="<?php echo base_url('login');?>" class="navbar-brand ">Sign In</a>
			
		<?php }?>
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a>	
		  <a href="<?php echo base_url('/');?>" class="navbar-brand">Skies Blog</a>
		  
		</div>
		
		
			

	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<?php require('menu.php'); ?>