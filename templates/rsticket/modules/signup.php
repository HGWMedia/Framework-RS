<div id="signupfrm" class="reveal-modal medium">
	<div class="row">
    	<h1>Sign up</h1>
    </div>
	<div class="status">
    	
    </div>
<form id="signupfrmval" action="rs/signup" method="post">
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Email</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="email" id="email" placeholder="Email">
        </div>
    </div>
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Password</label>
        </div>
        <div class="small-9 columns">
          <input type="password" name="pwd" id="pwd" placeholder="Password">
        </div>
    </div>
  	<div class="row"> 
    	<div class="small-3 columns">
        </div>
        <div class="small-9 columns"> 
	    	<a href="#" data-reveal-id="forgotfrm" >Forgot password?</a> <input type="submit" class="small button" value="Submit" />
        </div>
    </div>
    
</form>
</div>

<script>
var v = jQuery("#signupfrmval").validate({
		rules :{
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
		   el = "#signupfrmval";
		   $.ajax({url:$(el).attr('action'),type:"POST",data:$(el).serialize(),
					success:function(response){
						//alert(response.status);
						if(response.status == 'URL redirection'){
							location.reload()
						}else{
							$('.status').html(response);
						}
						//$.parseJSON(response);
						//$('.status').html(response);
							
							//$.parseJSON(response);
							//alert( obj.name === "John" );
							//alert(response.status);
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