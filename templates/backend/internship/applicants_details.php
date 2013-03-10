<?php echo $this->template->get_header() ?>

<div class="row">

<h1>Rolling Stone ME Dashboard</h1>

</div>
<div class="row">
<?php echo $this->template->get_template_part('modules/menu/main') ?>
</div>
<div class="row">
	<h3>Internship Applicants</h3>
    <?php $query = $this->competition->applicant_details(); ?>
    
    <?php //echo $this->pagination->create_links();
    foreach($query->result() as $row): ?>
    <h4><?php echo $row->fullname?></h4><a href="#" class="small button">Edit Details</a> <a href="#" class="small button">Make Candidate</a>
	<table width="100%">
        <tbody>
            <tr>
            	<td>Email</td><td><?php echo $row->email?></td>
            </tr>
            <tr>
            	<td>Phone</td><td><?php echo $row->phone?></td>
            </tr>
            <tr>
            	<td>Address</td><td><?php echo $row->address?></td>
            </tr>
    	</tbody>
    </table>
	<?php endforeach ?>

</div>
<?php echo $this->template->get_footer() ?>
