<!--

<?php echo $this->template->get_header() ?>

<div class="row">
    <div class="small-2 column">
    	left column here
    </div>
    <div class="small-7 column">
    <?php //print_r($events) 
        foreach($events as $eitem){
            echo $eitem."<br>"	;
        }
    ?>
    </div>
    <div class="small-3 column">
    	right column here
    </div>
</div>


<?php echo $this->template->get_footer() ?>

-->