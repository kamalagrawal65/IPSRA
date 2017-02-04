	<div id="main" class="grid_7"  > 	
	<div  align="left" style="background-color:#F5F4F3; font-size:16px; width:475px; " >
	<br>
	<p  class="heading" style="font-size:25px; text-align:right"><a href="<?php echo site_url();?>pages/register">New Registration &nbsp;</a></p>
	<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' ); echo form_open('form/u_login',$attributes);?>
	<p  class="heading" style="font-size:25px">  Existing User Login</p>	
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="username">Your Email ID</label><br />
					<input id="username" size="75" name="username" value="<?php echo $this->validation->username;?>" type="text" tabindex="3" />
				  <font color="#FF0000">* <?php echo $this->validation->username_error; ?></font>
				</p>
				
					
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="pass">Your Password</label> 
					<br />
					<input id="pass" size="75" name="pass" value="<?php echo $this->validation->pass;?>" type="password" tabindex="3" />
					<font color="#FF0000">* <?php echo $this->validation->pass_error; ?></font>
				
				</p>	
	  <p class="no-border">
    <input type="submit" class="button" name="Submit" value=" Login " /> &nbsp; &nbsp; &nbsp;<a href="<?php echo base_url();?>form/forget_password" >Forget Password</a>
 </p>
</form>
</div>
<br><br>