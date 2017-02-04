	
</div></div>

		<div  class="container_16">


<div > 
<br><br><br><br>
	<div  style="float:left; width:100%;padding-left:20px"   >
		<?php echo form_open('pages/browse');  ?>
		
			
				
<p align="left" class="no-border" style="font-size:14pt">			
  <input  class="searchText2" align="right" type="text" name="b_text" value='<?php echo  $b_query.$this->session->userdata('b_text'); ?>' />
  <INPUT  name="submit" type="submit" class="button" value="Browse"  style="size:landscape;height:30px;width:60px;margin-left:5px"/>
  <br>
  <input style=" border:0" type="Radio" name="b_cluster" value="All_Resources" Checked> All Resources
  <input style=" border:0" type="Radio" name="b_cluster" value="Databases" 
  <?php if ($this->session->userdata('b_cluster')=="Databases")echo checked  ?>  > Databases 
  <input style=" border:0" type="Radio" name="b_cluster" value="Institutions" 
  <?php if ($this->session->userdata('b_cluster')=="Institutions")echo checked  ?>  > Institutions 
  <input style=" border:0" type="Radio" name="b_cluster" value="Journals" 
  <?php if ($this->session->userdata('b_cluster')=="Journals")echo checked  ?>  > Journals 
  <input style=" border:0" type="Radio" name="b_cluster" value="Patents" 
  <?php if ($this->session->userdata('b_cluster')=="Patents")echo checked  ?>  > Patents 
  <input style=" border:0" type="Radio" name="b_cluster" value="Software" 
  <?php if ($this->session->userdata('b_cluster')=="Software")echo checked  ?>  > Software 
  <input style=" border:0"  type="Radio" name="b_cluster" value="Webserver" 
  <?php if ($this->session->userdata('b_cluster')=="Webserver")echo checked  ?>  > Web-Servers 

</p> 
</form>
<br>
<table width="95%" ><tr><td width="100%" style='text-align:left;'><center>
	<?php 
	$letters = range('A', 'Z');
	$asize=sizeof($letters);
	echo "<table width='90%'><tr style='font-size:18px' >"; 
	echo "<td style='text-align:center'><a href='".base_url()."pages/browse09' ><b>0 - 9</a></td>";
	for($i=0; $i<$asize; $i++)    
	   {
		$htext=base_url()."pages/browse/".$letters[$i];
		echo "<td><a href='".$htext."' ><b>".$letters[$i]."</a></td>";
	   }
	echo "<td><a href='".base_url()."pages/browse' ><b>All</a></td>";
	echo "</tr></table>";	   
?>
</center><td></table></tr></table>
</p>
<br><br><br>
</div>

</div>


<div style="background-color:#00CC33"> 

