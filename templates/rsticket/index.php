<?php echo $this->template->get_header() ?>

<div class="row">
    <div class="small-2 column">
    	left column here
    </div>
    <div class="small-7 column">
	

<div class="row">

<div class="section-container" data-section>
  <section class="section">
    <p class="title"><a href="#">Section 1</a></p>
    <div class="content">
      <p>Content of section 1.</p>
    </div>
  </section>
  <section class="section">
    <p class="title"><a href="#">Section 2</a></p>
    <div class="content">
      <p>Content of section 2.</p>
    </div>
  </section>
</div>


</div>


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
