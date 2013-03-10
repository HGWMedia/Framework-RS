<?php echo $this->template->get_header() ?>

<div class="row">

<h1>Rolling Stone ME Dashboard</h1>

</div>
<div class="row">
<?php echo $this->template->get_template_part('modules/menu/main') ?>
</div>
<div class="row">
	<h3>Internship Applicants</h3>
    <?php echo $this->pagination->create_links(); ?>
	<table width="100%">
    	<thead>
            <tr><td>Name</td><td>Email</td><td colspan="2">Phone</td></tr>
        </thead>
        <tbody>
			<?php 
            $query = $this->competition->applicants();
            foreach($query->result() as $row): ?>
            <tr><td><?php echo $row->fullname?></td><td><?php echo $row->email?></td><td><?php echo $row->phone?></td><td><a href="<?php echo $this->uri->segment(3).DS.$row->id?>" class="button">View Details</a> <a href="#" class="button">Make Candidate</a></td></tr>
            <?php endforeach ?>
    	</tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>

</div>
<?php echo $this->template->get_footer() ?>
