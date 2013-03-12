<div id="catfrm" class="reveal-modal medium">
	<div class="row">
    	<h1>Add New Category</h1>
    </div>
	<div class="status">
    	
    </div>
<form id="catfrmval" action="rs/register" method="post">

	<input type="hidden" name="type" value="category" />
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Category Name</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="email" id="email" placeholder="Category Name">
        </div>
    </div>
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
		  
var v = jQuery("#catfrmval").validate({
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
		   $.ajax({url:$(el).attr('catfrmval'),type:"POST",data:$(el).serialize(),
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