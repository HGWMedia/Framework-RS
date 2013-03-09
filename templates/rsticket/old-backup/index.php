<?php include("header.php") ?>
	<div id="left_pane" class="clsFloatLeft">
        <div id="slider">
            <img src="images/slider.png" />
        </div>
        <div id="upcoming_events">
            <div class="headerBox">
                <div class="headerTitle">
                    <h1>
                        UPCOMING EVENTS</h1>
                </div>
            </div>
            <div class="clear">
            </div>
            <div id="eventscontainer">
			   <?php include("events_listings.php") ?>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
<?php include("rightadvt.php") ?>
<?php include("footer.php") ?>
