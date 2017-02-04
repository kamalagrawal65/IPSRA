<div id="main" class="grid_7"  > 	
			<div  align="left" style="background-color:#F5F4F3; font-size:16px; width:620px; " >
			<br />
				<p style="color: red"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $this->session->userdata('error_message'); ?> </p>	
			<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );
 echo form_open('user/saveresult',$attributes);  ?>			
 				<p  class="heading" style="font-size:25px"> Save Your Query </p>		
			
				<p style="border-bottom: 1px solid #E6E6E6;">
					<label for="q_name">Enter Query Name</label><br />
					<input id="q_name" name="q_name" value="<?php echo $this->validation->q_name;?>" type="text" tabindex="3" />
					  <?php echo $this->validation->q_name_error; ?>
				</p>
				
				<p class="no-border">
				<input class="button" type="submit" value="Submit" tabindex="5" />
         		<!--  </form><form action='<?php echo base_url() ?>pages/adsearch2' method ="post" >
         		<input class="button"  type="Submit" value="Back to Search Results" tabindex="1" />-->
         		<a href='<?php echo base_url() ?>pages/adsearch2'>Back to Search Results</a>	
				</p>
					
			</form>	 <br /></div></div><div class="clear">&nbsp;</div>
<br /> <br /><br /> <br /><br /> <br />
</div><br /> <br /><br /> <br />

