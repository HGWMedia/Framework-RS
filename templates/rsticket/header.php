
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>RS Tickets</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="templates/<?php echo Template ?>/stylesheets/foundation.css">
  <link rel="stylesheet" href="templates/<?php echo Template ?>/stylesheets/app.css">
  <link rel="stylesheet" href="templates/<?php echo Template ?>/stylesheets/style.css">
  <link rel="stylesheet" href="templates/<?php echo Template ?>/stylesheets/scroll.css">
  

  <script src="templates/<?php echo Template ?>/javascripts/modernizr.foundation.js"></script>
  
  <!--
  <script type="text/javascript" src="http://fast.fonts.com/jsapi/ef45479b-d0c4-43b6-b9ac-b9b40e3324fb.js"></script>  -->

  <script src="templates/<?php echo Template ?>/javascripts/typeface.js"></script>
  <script src="templates/<?php echo Template ?>/javascripts/rockwell_extra_bold_regular.typeface.js"></script>
  
  
</head>
<body>
<div class="row">
        	
	<div class="twelve columns">
	<div class="row">
    	<div class="three columns logo"><a href="#"><img src="templates/<?php echo Template ?>/images/rsticket-logo.jpg"></a></div>
    	
        <div class="nine columns">
            <div class="row topmenu">
            	Hi, <a href="#" class="rockwellLight">Sign in</a> or <a href="#" class="rockwellLight">Register</a> | <a href="#" class="rockwellLight">Buy</a> | <a href="#" class="rockwellLight">Sell</a> | <a href="#" class="rockwellLight">Customer Support</a>
            </div>
            <div class="row search">
            	<input type="text" class="six" placeholder="Enter: Team, artist, event, venue, date" /><a href="#" class="button radius btnRed fleft">Search</a><a href="#" class="button radius btnGrey fleft">Advanced Search</a>
            </div>
        </div>
           
    </div>
    <div class="row">
    
    	
        <ul class="nav-bar">
        	<li><a href="#" class="rockBold">Home</a></li>
        	<li class="has-flyout"><a href="#" class="rockBold">Upcoming</a></li>
        	<li class="has-flyout"><a href="#" class="rockBold">Sports</a>
            	<div class="flyout">
                	<div class="subnavi">
                        <ul>
                          <li><a href="#">Sub Nav Item 1</a></li>
                          <li><a href="#">Sub Nav Item 2</a></li>
                          <li><a href="#">Sub Nav 3</a></li>
                          <li><a href="#">Sub Nav 4</a></li>
                          <li><a href="#">Sub Nav Item 5</a></li>
                        </ul> 
                    </div>
					<div class="fetByCat">
                    	<h2>Popular Sports Events</h2>
                        <ul>
		                   <li class="radius"><a href="#">Sub Nav Item 1</a></li>
		                   <li class="radius"><a href="#">Sub Nav Item 1</a></li>
                        </ul>
                    </div>                                       
                </div>
            </li>
        	<li class="has-flyout"><a href="#" class="rockBold">Concerts</a></li>
        	<li class="has-flyout"><a href="#" class="rockBold">Theater</a></li>
        	<li class="has-flyout"><a href="#" class="rockBold">Night Clubs</a></li>
        	<li><a href="#" class="rockBold">My Account</a></li>
        	<li><a href="#" class="rockBold">Cart</a></li>
        </ul>
        <div class="bgArrow"></div>
       
    </div>