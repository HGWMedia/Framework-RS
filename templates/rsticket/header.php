<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Foundation 4</title>
    
    <link rel="stylesheet" href="templates/<?php echo Template ?>/css/foundation.css" /> 
    <link rel="stylesheet" href="templates/<?php echo Template ?>/css/normalize.css" />
    <link rel="stylesheet" href="templates/<?php echo Template ?>/style.css" />
    
    <script src="templates/<?php echo Template ?>/js/vendor/custom.modernizr.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
     <script src="templates/<?php echo Template ?>/js/jquery.validate.js"></script>
    
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css"/>


</head>

<body>
	<div class="row">
    	<div class="small-2 columns">
        	Logo here
        </div>
        <div class="small-9 columns">
            <div class="row">
            	<div class="small-12 columns">
                	<div class="row right">
		                <a href="#" data-reveal-id="signupfrm">Sign Up</a> | <a href="#" data-reveal-id="regfrm">Register</a>
                	</div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                  <input type="text" class="small-6 inline" placeholder="Hex Value">
                  <input type="submit" class="small-2 inline button" value="Search" />
                  <input type="submit" class="small-3 inline button" value="Advance Search" />
                  <!-- <a href="#" class="button prefix">Action</a> -->
                </div>
                  <!-- 
                  <input type="text" name="pwd" id="pwd" class="small inline" placeholder="Inline Text Input">
                   <input type="submit" class="small inline button" value="Search" /> <input type="submit" class="small inline button" value="Advance Search" />
                   -->
                </div>
            </div>
        </div>
		<?php echo $this->template->get_template_part('modules/form_register') ?>
        <?php echo $this->template->get_template_part('modules/signup') ?>
        <?php echo $this->template->get_template_part('modules/forgot_pwd') ?>    
	</div>
    <div class="row">
    	<?php echo $this->template->get_template_part('modules/menu/main') ?>
    </div>

