<?php echo $this->template->get_header() ?>

<div class="row">
<h1>Rolling Stone ME Dashboard</h1>

</div>
<div class="row">

		<?php
        //print_r($this->session->all_userdata());
        if($this->session->userdata('logged_in')){
        ?>
            <a href="backend/logout">Logout</a>
        <?php
        }else{
			
			
        ?>
        <?php echo $this->template->get_template_part('modules/signup') ?>
        
        <?php
        }
        ?>

</div>


<?php echo $this->template->get_footer() ?>
