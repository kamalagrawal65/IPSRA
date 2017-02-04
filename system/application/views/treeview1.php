<?php
	$replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
	$main_year_array = 0;

/*	for($i=0;$i<count($year_array);$i++)
	{
		$main_year_array += $no_of_records_of_year[$i];
	}
*/
	for($i=0;$i<count($year_array);$i++)
	{
		$main_year_array += 1;
	}
	
	$main_country = 0;
/*	
	for($k = 0; $k < count($country_array);$k++)
	{
		$main_country += $no_of_records_of_country[$k];
	}
*/	
	
	for($k = 0; $k < count($country_array);$k++)
	{
		$main_country += 1;
	}
	
?>


	<div  style="float:left; width:20%; padding-left:4px ;"  >
<h1 align="Center" class="heading" style="font-size:30px;"></h1>	
	<table  style="font:Verdana, Arial, Helvetica, sans-serif;font-size:14px;padding-left:0px;width:auto; border:thin"  >
<tr>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="3%">
</td>
<td>
<div id="sidetree">
 <br>
  <ul class="treeview" id="tree"><font color="#000000" size="+1">&nbsp;&nbsp;&nbsp;&nbsp;Clusters</font><br />
<br />


	<li ><span><strong>iBIRA&nbsp;(<?php if($total_no_of_records==0) {$flag=true; echo $total_no_of_records;}else echo $total_no_of_records;?>)</strong></span>
	<!-- Category -->
	<?php
	
	if(count($main_clusters_array)!=0) {?>
	
	
	<ul  class="treeview" id="tree">
		<?php for($i = 0; $i < count($main_clusters_array); $i++){?>
		<!--  <li class="expandable"><div class="hitarea expandable-hitarea"></div><span><a style="" href="<?php echo base_url()?>pages/advancedsearch4/<?php echo $main_clusters_array[$i];?>"><strong><?php echo $main_clusters_array[$i];?>&nbsp;(<?php echo $no_of_records_in_main_cluster[$i];?>)</strong></a></span> -->
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><a style="" ><strong><?php echo $main_clusters_array[$i];?>&nbsp;(<?php echo $no_of_records_in_main_cluster[$i];?>)</strong></a></span>		
		<ul style="display: none;">
			
		<?php for($k = 0; $k < count($main_category_array[$i]); $k++){?>
			
			
				<?php if(count($sub_category_array[$i][$k])==0) {?>
		<li class="expandable"><div class="hitarea1 expandable-hitarea1"></div>
				<a style="color:#666666; text-decoration:none;" href="<?php echo site_url();?>pages/advancedsearch2/<?php echo $main_category_array[$i][$k];?>/<?php echo $main_clusters_array[$i];?>/<?php echo $search_terms; ?>" style="text-decoration:none"><?php echo $main_category_array[$i][$k].'&nbsp;('.$no_of_records_in_main_category[$i][$k].')';?></a>
				<?php } 
				
				else {?>
			<li class="expandable" ><div class="hitarea expandable-hitarea"></div>
					<span><strong><?php echo $main_category_array[$i][$k].'&nbsp;('.$no_of_records_in_main_category[$i][$k].')';?>
					</strong></span>
			
				<?php } ?>
				<ul style="display: none;">
				<?php for($j = 0; $j < count($sub_category_array[$i][$k]); $j++){?>
						<li class="expandable" ><div class="hitarea1 expandable-hitarea1"></div>
						<a  style="color:#666666; text-decoration:none;" href=" <?php echo site_url();?>pages/advancedsearch3/<?php echo str_replace($replacements,"",$main_clusters_array[$i]);?>/<?php echo str_replace($replacements,"",$main_category_array[$i][$k]);?>/<?php echo str_replace($replacements,"",$sub_category_array[$i][$k][$j]);?>/<?php echo $search_terms; ?>" style="text-decoration:none"><?php echo $sub_category_array[$i][$k][$j].'&nbsp;('.$no_of_records[$i][$k][$j].')';?>
						</a></li>	
				<?php }?>
				</ul>
			
			
			
			</li>
			<?php }?>
		</ul>
		</li>
		<?php }?>
	</ul>
	
	<?php }?>
	<!-- Country -->
	<?php 
	
	if(count($country_array)!=0) {?>
	
	
	<ul>
		
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><strong>Country&nbsp;(<?php echo $main_country?>)</strong></span>
		<ul style="display: none;">
		<?php for($k = 0; $k < count($country_array); $k++){?>
			<li class="expandable" ><div class="hitarea1 expandable-hitarea1"></div>
			<a style="color:#666666; text-decoration:none;" href="<?php echo site_url();?>pages/view_country/<?php echo $country_array[$k];?>" > <?php echo $country_array[$k].'&nbsp;('.$no_of_records_of_country[$k].')';?> </a></li>
			<?php }?>
		</ul>
		</li>
	</ul>
	
	<?php }?>
	<!-- Year -->
	
	
	<!-- Year -->
	<?php 
	
	if(count($year_array)!=0) {?>
	
	<ul>
		
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><strong>Year&nbsp;(<?php echo $main_year_array;?>)</strong></span>
		<ul style="display: none;">
		<?php for($k = 0; $k < count($year_array); $k++){?>
			<li class="expandable" ><div class="hitarea1 expandable-hitarea1"></div>
			<a  style="color:#666666; text-decoration:none;" onclick="highlightSearchTerms(" <?php echo $year_array[$k].'('.$no_of_records_of_year[$k].')';?>", true)" href="<?php echo site_url();?>pages/view_year/<?php echo $year_array[$k];?>" > <?php echo $year_array[$k].'&nbsp;('.$no_of_records_of_year[$k].')';?></a></li>
			<?php }?>
		</ul>
		</li>
	</ul>
	
	<?php }?>
	
		
	</li>
</ul>
<?php if($flag==true) {?> <br /><br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No clusters were found &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br /><br /><br /><br /><br /><?php } ?>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</td>

</tr>
</table>

</div>
 

