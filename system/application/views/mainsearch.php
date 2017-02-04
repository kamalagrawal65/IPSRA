
<div id="main" class="grid_8">
<?php $attributes = array( 'id' => 'quick-search');
echo form_open('pages/search',$attributes);  ?>
<p style='vertical-align:middle'>
<input name="q" type="text" class="searchText " value="" />				
<INPUT name="submit" type="submit" class="button" value="Search"  style="size:landscape;height:35px;width:80px;margin-left:5px"/>			
</p>
</form>
<font style="padding-left:0px;font-size:18px; ">
<b><a href="<?php echo base_url(); ?>pages/last_upload"> Latest Recources</a></b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b><a href="<?php echo base_url(); ?>pages/adsearch"> Advance Search </a></b></font>
<br><br>
<br><br>
<?php  
echo "<p class='heading'>You are searching over ".$sql." resources.</p>";
?>
<br><center>
<table style="background-color:#eeeeee; font: Arial, Helvetica, sans-serif;font-size:14px;padding-left:25px;align:center;"  width= "80%" > 
<TR><TH class='content' style='text-align:left;padding: 10px 10px;'><b> Category </Th>
<Th class='content' style='text-align:center;'><b>Resources  </Th>
<?php foreach($results as $result)
{
echo "<TR><TD class='content' style='text-align:left;' width='40%'> ".$result->Category."</TD>";
echo "<TD class='content' style='padding: 10px 10px;text-align:center;'><a href='".base_url()."pages/view_resource/".$result->Category."'>".$result->Records."</a></tr>";
}
?>
</table>
</div>