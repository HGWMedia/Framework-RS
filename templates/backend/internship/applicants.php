<?php echo $this->template->get_header() ?>

<div class="row">
<?php echo $this->template->get_template_part('modules/menu/main') ?>
</div>
<div class="row">
	<h3>Internship Applicants</h3>
    <?php //echo $this->pagination->create_links(); ?>
	<table width="100%">
    	<thead>
            <tr><td>Id</td><td>Name</td><td>Email</td><td colspan="2">Phone</td></tr>
        </thead>
        <tbody>
			<?php 
            $query = $this->competition->applicants();
            foreach($query->result() as $row): ?>
            <tr><td><?php echo $row->id?></td><td><?php echo $row->fullname?></td><td><?php echo $row->email?></td><td><?php echo $row->phone?></td><td><a href="<?php echo 'applicants_details'.DS.$row->id?>" class="button">View Details</a> <a href="#" class="button">Make Candidate</a></td></tr>
            <?php endforeach ?>
    	</tbody>
    </table>
    <?php 
	$this->pagination->cur_page = $this->uri->segment(4); 
	echo $this->pagination->create_links();  ?>

</div>
<?php echo $this->template->get_footer() ?>
