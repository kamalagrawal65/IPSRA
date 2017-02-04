<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">
			<div  align="left" style="background-color:#F5F4F3; font-size:16px; width:420px; " >
				<p> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $this->session->userdata('error_message'); ?> </p>	
			<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );
			echo form_open('user/del_query',$attributes);  ?>			
 				<p  class="heading" style="font-size:25px">  Confirm Your Action</p>		
				<p class="no-border">Are you sure to delete Query  : <?php echo $q_name;?> ?
				<br><br>
				<input type="hidden" id="q_id"  name="q_id" value="<?php echo $q_id ?>">
				<input class="button"  type="submit" value="Delete Query" tabindex="6" />
				
				</form>	
				
				<a href="<?php echo base_url(); ?>user/view_searches"/>Cancel the Action</a> 	
				</p>
					
			 <br /></div></div><div class="clear">&nbsp;</div>
<br /> <br /><br /> <br /><br /> <br />
</div><br /> <br /><br /> <br />

