<div id="signupfrm" >
    	<h1>Sign up</h1>
	<div class="status">
    	
    </div>
<form id="signupfrmval" action="backend/signup" method="post">
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
	   }
	   ,submitHandler :function()
	   {
		   el = "#signupfrmval";
		   $.ajax({url:$(el).attr('action'),type:"POST",data:$(el).serialize(),
					success:function(response){
						if(!response.error){
							$('.status').html(response);
							}else{
								window.location.href = response.url
						}
					}
		   });
	   }
})
</script>