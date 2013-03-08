<div id="forgotfrm" class="reveal-modal medium">
	<div class="row frmheader">
    	<h1>Forgot your password?</h1>
    </div>
	<div class="status">
    </div>

<form id="forgotfrmval" action="rs/forgot" method="post">
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Email</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="email" id="email" placeholder="Inline Text Input"> 
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

var v = jQuery("#forgotfrmval").validate({
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
		   el = "#forgotfrmval";
		   $.ajax({url:$(el).attr('action'),type:"POST",data:$(el).serialize(),
					success:function(response){
						$('.status').html(response);
						}
		   });
	   }
})
</script>