<div id="main" class="grid_7"  > 	
			<div  align="left" style="background-color:#F5F4F3; font-size:16px; width:450px; " >
			<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );
 				echo form_open('form/reg',$attributes);  ?>			
				<p  class="heading" style="font-size:25px; text-align:right"><a href="<?php echo site_url();?>pages/u_loginpage">Existing User &nbsp;</a></p>
 				<p  class="heading" style="font-size:25px">  New User Registration</p>		
				<p style="border-bottom: 1px solid #E6E6E6;">	
					<label for="name">Your Name</label><br />
					<input id="name" name="username" value="<?php echo $this->validation->username;?>" type="text" tabindex="2" />
					  <font color="#FF0000">* <?php echo $this->validation->username_error; ?></font>
				</p>
			
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="email">Your Email Address</label><br />
					<input id="email" name="email" value="<?php echo $this->validation->email;?>" type="text" tabindex="3" />
					  <font color="#FF0000">* <?php echo $this->validation->email_error; ?></font>
				</p>
				
					
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="email">New Password</label> 
					<br />
					<input id="email" name="pass" value="<?php echo $this->validation->pass;?>" type="password" tabindex="3" />
					<font color="#FF0000">* <?php echo $this->validation->pass_error; ?></font>
				
				</p>	
			
				<p class="no-border">
					<input class="button" type="submit" value="Submit" tabindex="5" />
         		<input class="button"  type="reset" value="Reset" tabindex="6" />	
				</p>
					
			</form>	 <br /></div></div><div class="clear">&nbsp;</div>
<br /> <br /><br /> <br /><br /> <br />
</div><br /> <br /><br /> <br />

