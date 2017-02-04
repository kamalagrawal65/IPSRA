	
</div></div>

		<div  class="container_16">


<div > 
<br><br><br><br>
	<div  style="float:left; width:100%;padding-left:20px"   >
		<?php echo form_open('pages/search');  ?>
		
			
			
				
				
<p align="left" class="no-border">

  <input  class="searchText2" align="right" type="text" name="q" value="<?php echo  $search_terms ?>" />
  <INPUT   name="submit" type="submit" class="button" value="Search"  style="size:landscape;height:30px;width:60px;margin-left:5px"/>
  
</p> 
<p align="left" class="no-border">
			<font size="-1" style="padding-left:10px;font-size:18px ">
			<b><a href="<?php echo base_url(); ?>pages/adsearch"> Advance Search </a></b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b><a href="<?php echo base_url(); ?>pages/last_upload"> Latest Recources</a></b></font>

			<?php if($this->session->userdata('u_id')||$this->session->userdata('username')  ){  ?>

			<?php if($this->session->userdata('qsi')) { ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="-1" style="padding-left:10px;font-size:18px "><b><a href="<?php echo base_url(); ?>user/saveresult"> Save My Query </a></b></font>
			<?php } ?>

			<?php } ?>
			

</form></p>
<br><br><br>
</div>

</div>


<div style="background-color:#00CC33"> 

