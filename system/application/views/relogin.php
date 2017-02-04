


<div  class="container_16" >
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<div id="header"></div>


<br><br><br><br><br><br><br>


<div  style="float:left; width:20%; padding-left:4px ;">&nbsp;</div>
			
<div  align="left" style="background-color:#F5F4F3; font-size:16px; width:420px;float:right" >
					
			<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );
 echo form_open('form/reg',$attributes);  ?>					
				<p style="border-bottom: 1px solid #E6E6E6;">Sign Up </p>
			
				
			
				<p style="border-bottom: 1px solid #E6E6E6;">	
					<label for="name">Your Name</label><br />
					<input id="name" name="username" value=" <?php echo $this->validation->username;?>" type="text" tabindex="2" />
					  <?php echo $this->validation->username_error; ?>
				</p>
			
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="email">Your Email Address</label><br />
					<input id="email" name="email" value="<?php echo $this->validation->email;?>" type="text" tabindex="3" />
					  <?php echo $this->validation->email_error; ?>
				</p>
				
					
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="email">New Password</label> 
					<br />
					<input id="email" name="pass" value="<?php echo $this->validation->pass;?>" type="password" tabindex="3" />
					<?php echo $this->validation->pass_error; ?>
				
				</p>	
			
				<p class="no-border">
					<input class="button" type="submit" value="Submit" tabindex="5" />
         		<input class="button" type="reset" value="Reset" tabindex="6" />	
				</p>
					
			</form>	 </div></div><div class="clear">&nbsp;</div>