<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Rolling Stone Backend Management</title>
    
    <link rel="stylesheet" href="<?php echo base_url() ?>templates/<?php echo Template ?>/css/foundation.css" /> 
    <link rel="stylesheet" href="<?php echo base_url() ?>templates/<?php echo Template ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>templates/<?php echo Template ?>/style.css" />
    
    <script src="<?php echo base_url() ?>templates/<?php echo Template ?>/js/vendor/custom.modernizr.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>templates/<?php echo Template ?>/js/jquery.validate.js"></script>
    
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css"/>


</head>

<body>
	<?php echo $this->template->get_template_part('modules/form_register') ?>
    <?php echo $this->template->get_template_part('modules/forgot_pwd') ?>    
<?php if($this->session->userdata('logged_in')): ?>

	<?php echo $this->template->get_template_part('modules/tickets/ticket_form_item') ?>
    <?php echo $this->template->get_template_part('modules/tickets/ticket_form_category') ?>    
<?php endif; ?>

<div class="row">

<!-- <h1>Rolling Stone ME Dashboard</h1> -->

</div>