<div id="main" class="grid_7"  > 	
			<div  align="left" style="background-color:#F5F4F3; font-size:16px; width:420px; " >
			<br />
				<p> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $this->session->userdata('error_message'); ?> </p>	
			<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );
 echo form_open('form/admin_ret_password',$attributes);  ?>			
 				<p  class="heading" style="font-size:25px">  Retrive Password </p>		
			
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="email">Enter Admin Email Address</label><br />
					<input id="email" name="email" value="<?php echo $this->validation->email;?>" type="text" tabindex="3" />
					  <?php echo $this->validation->email_error; ?>
				</p>
				
				<p class="no-border">
					<input class="button" type="submit" value="Submit" tabindex="5" />
         		<input class="button"  type="reset" value="Reset" tabindex="6" />	
				</p>
					
			</form>	 <br /></div></div><div class="clear">&nbsp;</div>
<br /> <br /><br /> <br /><br /> <br />
</div><br /> <br /><br /> <br />

