<?php echo $this->template->get_header() ?>
<div class="columns twelve" id="content">
  <div class="join_the_competition">
    <div class="columns eight left joinComFrm">
      <h3 class="clsTitle">Join the competition</h3>
      <div class="frmContainer">
        <p>&nbsp;</p>
        <form id="joinForm" action="join" method="post">
        <div class="clsFormField genderFrmOpt">
          <div class="clsLabel columns left four"> &nbsp; </div>
          <div class="Input seven columns left txt_right_align"> GENDER
            <input type="radio" name="gender" value="male"/>
            Male &nbsp;&nbsp;
            <input type="radio" name="gender" value="female"/>
            Female </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> Name </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="name" id="name" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> Email </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="email" id="email" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> Phone/Mobile </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="contact_no" id="contact_no" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> Date Of Birth</div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="date_of_birth" id="date_of_birth" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> Nationality </div>
          <div class="Input seven columns left">
            <p>
              <select name="nationality" id="nationality">
                <option value="">Select</option>
              </select>
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> ADDRESS </div>
          <div class="Input seven columns left">
            <p>
              <textarea name="address" id="address"></textarea>
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> LOCATION, CITY </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="location" id="location" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> PO BOX </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="po_box" id="po_box" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> UNIVERSITY/COLLEGE </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="collage" id="collage" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> COURSE </div>
          <div class="Input seven columns left">
            <p>
              <input type="text" name="course" id="course" />
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField">
          <div class="clsLabel columns left four"> INTEREST </div>
          <div class="Input seven columns left">
            <p>
              <select name="interest" id="interest" >
                <option value="">Select</option>
              </select>
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clsFormField clSubmit">
          <div class="clsFloatRight">
            <input type="submit" name="regFrmStep1" id="regFrmStep2" value="CONTINUE"/>
          </div>
          <div class="clear"></div>
        </div>
        </form>
        <script>
		var v = jQuery("#joinForm").validate({
				rules :{
					email:{required:true,email:true},
					name:{required:true},
					contact_no:{required:true},
					address:{required:true},
					//name:{required:true},
					//name:{required:true},
					
				},
				onfocusout: false,
				onkeyup: false,
				onclick: false,
				errorElement:"p",
				errorPlacement:function(error, element) {
			   }
			   ,submitHandler :function()
			   {
				   el = "#joinForm";
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
      </div>
    </div>
    <div class="columns four right joinComDesc">    
      <div class="desc">
          <div class="colContent">
          	<h2>WHAT'S THE CHALLENGE?</h2>
            <div class="colDesc">
              <p>Etiam egestas sapien et ante ultricies eu scelerisque sem egestas. Sed rutrum est nec metus tincidunt rutrum. Integer non nisl quis sem mattis porttitor ut in massa. Sed a leo mauris. In hac habitasse platea dictumst. Nulla lobortis pretium justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>          
            </div>
          </div>
    </div>
    
    </div>
    <div class="clear"></div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<?php echo $this->template->get_footer() ?>