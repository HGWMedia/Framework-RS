<?php echo $this->template->get_header() ?>


<div class="row">
<?php echo $this->template->get_template_part('modules/menu/main') ?>
</div>
<div class="row">
	<h3>Events</h3>
    
    <?php //echo $this->pagination->create_links(); ?>
    <a href="#" class="small button"  data-reveal-id="eventitemfrm">Add Event</a>
	<table width="100%">
    	<thead>
            <tr><td>Id</td><td colspan="2">Name</td></tr>
        </thead>
        <tbody>
			<?php 
            $query = $this->tickets->categories();
            foreach($query->result() as $row): ?>
           <!-- <tr><td><?php echo $row->id?></td><td><?php echo $row->category_name?></td><td><a href="<?php echo 'category_details'.DS.$row->id?>" class="small button">Edit</a> </td></tr> -->
            <?php endforeach ?>
    	</tbody>
    </table>
    <?php 
	//$this->pagination->cur_page = $this->uri->segment(4); 
	//echo $this->pagination->create_links();  ?>

</div>
<?php echo $this->template->get_footer() ?>
