<div id="forgotfrm" class="reveal-modal medium">
<form id="forgotfrmval">
	<div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Email</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" name="email" id="email" placeholder="Inline Text Input"> 
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
			email:{required:true,email:true}
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
		   /*
		   $("#regOpenFrmSub").hide();
		   $(".loading_img").show();
		   $.ajax({url:"http://rollingstoneme.com/intern/2013/common_fn.php",type:"POST",data:$("#regOpenFrm").serialize(),
					success:function(responce){
							responce=jQuery.parseJSON(responce);
							if(responce.error)
							   {
									$.each(responce.error,function(index,val){	
										//alert(index);
										$("#"+index).parent().append("<p class='error'>"+val+"</p>");											
									})
							   }
							   if(responce.success)
							   {
								   $("#regOpenFrm").find('input:text, input:password, input:file, select, textarea').val('');
								   reloadCaptcha();
								   close_zoom_box();
							   }
							$("#regOpenFrmSub").show();
							$(".loading_img").hide();
						}
		   });
		   */
	   }
})
</script>