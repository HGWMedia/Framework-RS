<div id="cateitemfrm" class="reveal-modal medium">
	<div class="row">
    	<h1>Add Category Item</h1>
    </div>
	<div class="status">
    	
    </div>
<form id="cateitemfrmval" action="rs/register" method="post">

	<input type="hidden" name="type" value="rs" />
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Title</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="title" id="title" placeholder="Title">
        </div>
    </div>
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Category</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="category" id="category" placeholder="Category">
        </div>
    </div>
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Description</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="description" id="description" placeholder="Description">
        </div>
    </div>
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Geo Map</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="description" id="description" placeholder="Geo Map Coordinate">
        </div>
    </div>
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Has Ticket</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="description" id="description" placeholder="Description">
        </div>
    </div>
      
	<!--
    <label>Email</label><input type="text" name="email" /><br>
	<label>First Name</label><input type="text" name="gname" /><br>
	<label>Last Name</label><input type="text" name="lname" /><br>
	<label>Password</label><input type="text" name="pwd" /><br>
	<label>Confirm Password</label><input type="text" name="cpwd" /><br>
	<label>Phone</label><input type="text" name="phone" /><br>
    -->
  	<div class="row">  
    	<div class="small-3 columns">
        </div>
        <div class="small-9 columns">
	    <input type="submit" class="small button" value="Submit" />
        </div>
    </div>
</form>
</div>

<script>
		  
var v = jQuery("#cateitemfrmval").validate({
		rules :{
			//fname:{required:true},
			//lname:{required:true},
			//phone:{required:true},
			//email:{required:true,email:true},
			//pwd:{required:true},
		},
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		errorElement:"p",
		errorPlacement:function(error, element) {
			//alert( element.parent().html());
			//error.appendTo(element.parent());
	   }
	   ,submitHandler :function()
	   {
		   el = "#regformval";
		   $.ajax({url:$(el).attr('cateitemfrmval'),type:"POST",data:$(el).serialize(),
					success:function(response){
						$('.status').html(response);
							//responce=jQuery.parseJSON(responce);
							//if(responce.error)
							 //  {
							//		$.each(responce.error,function(index,val){	
										//alert(index);
										//$("#"+index).parent().append("<p class='error'>"+val+"</p>");											
							//		})
							//   }
							//   if(responce.success)
							//   {
								  // $("#regOpenFrm").find('input:text, input:password, input:file, select, textarea').val('');
								  // reloadCaptcha();
								  // close_zoom_box();
							//   }
							//$("#regOpenFrmSub").show();
							//$(".loading_img").hide();
						}
		   });
		   
	   }
									   })
</script>