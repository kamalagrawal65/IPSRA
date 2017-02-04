


<!--fda
	<?php// echo $sub_category_array[0][0]; ?>-->
	
	<?php
	$replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
	$main_year_array = 0;
	for($i=0;$i<count($year_array);$i++)
	{
		$main_year_array += $no_of_records_of_year[$i];
	}
	
	$main_country = 0;

	for($k = 0; $k < count($country_array);$k++)
	{
		$main_country += $no_of_records_of_country[$k];
		
		
	}
	
?>
	
	<div id="main" style="float:left; width:28%; padding-left:0px; "  >
<h1 align="Center" class="heading" style="font-size:30px;"></h1>
<table  style="font:Verdana, Arial, Helvetica, sans-serif;font-size:12px;padding-left:0px"  >
<tr>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="3%">
</td>
<td>


<div id="sidetree" style=" " >
 
  <ul class="treeview" id="tree"><font color="#000000" size="+1">&nbsp;&nbsp;&nbsp;&nbsp;Clusters</font><br />
<br />


	<li ><span><strong>iBIRA(<?php echo $total_no_of_records?>)</strong></span>
	<!-- Category -->
	<?php
	
	if(count($main_clusters_array)!=0) {?>
	
	
	<ul  class="treeview" id="tree">
		<?php for($i = 0; $i < count($main_clusters_array); $i++){?>
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><strong><?php echo $main_clusters_array[$i];?>(<?php echo $no_of_records_in_main_cluster[$i];?>)</strong></span>
		<ul style="display: none;">
			
		<?php for($k = 0; $k < count($main_category_array[$i]); $k++){?>
			
			
				<?php if(count($sub_category_array[$i][$k])==0) {?>
		<li > <IMG SRC="<?php echo base_url();?>/images/dot.gif" height="13px" width="18px"/>
					<a style="color:#666666; text-decoration:none;" href="<?php echo site_url();?>/pages/advancedsearch2/<?php echo $main_category_array[$i][$k];?>/<?php echo $main_clusters_array[$i];?>/<?php echo $search_terms; ?>" style="text-decoration:none"><?php echo $main_category_array[$i][$k].'('.$no_of_records_in_main_category[$i][$k].')';?></a>
				<?php } 
				
				else {?>
			<li class="expandable" ><div class="hitarea expandable-hitarea"></div>
					<span><strong><?php echo $main_category_array[$i][$k].'('.$no_of_records_in_main_category[$i][$k].')';?>
					</strong></span>
			
				<?php } ?>
				<ul style="display: none;">
				<?php for($j = 0; $j < count($sub_category_array[$i][$k]); $j++){?>
						<li><IMG SRC="<?php echo base_url();?>/images/dot.gif" height="13px" width="18px"/>
						<a  style="color:#666666; text-decoration:none;" href=" <?php echo site_url();?>/pages/advancedsearch3/<?php echo str_replace($replacements,"",$main_clusters_array[$i]);?>/<?php echo str_replace($replacements,"",$main_category_array[$i][$k]);?>/<?php echo str_replace($replacements,"",$sub_category_array[$i][$k][$j]);?>/<?php echo $search_terms; ?>" style="text-decoration:none"><?php echo $sub_category_array[$i][$k][$j].'('.$no_of_records[$i][$k][$j].')';?>
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
		
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><strong>Country(<?php echo $main_country?>)</strong></span>
		<ul style="display: none;">
		<?php for($k = 0; $k < count($country_array); $k++){?>
			<li > <IMG SRC="<?php echo base_url();?>/images/dot.gif" height="13px" width="18px"/><a style="color:#666666; text-decoration:none;" href="<?php echo site_url();?>/pages/advancedsearch1/<?php echo $country_array[$k];?>/<?php echo Country?>/<?php echo $search_terms; ?>" > <?php echo $country_array[$k].'('.$no_of_records_of_country[$k].')';?> </a></li>
			<?php }?>
		</ul>
		</li>
	</ul>
	
	<?php }?>
	<!-- Year -->
	<?php 
	
	if(count($year_array)!=0) {?>
	
	
	<ul>
		
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><strong>Year(<?php echo $main_year_array;?>)</strong></span>
		<ul style="display: none;">
		<?php for($k = 0; $k < count($year_array); $k++){?>
			<li > <IMG SRC="<?php echo base_url();?>/images/dot.gif" height="13px" width="18px"/><a  style="color:#666666; text-decoration:none;" onclick="highlightSearchTerms(" <?php echo $year_array[$k].'('.$no_of_records_of_year[$k].')';?>", true)" href="<?php echo site_url();?>/pages/advancedsearch1/<?php echo $year_array[$k];?>/<?php echo Year?>/<?php echo $search_terms; ?>" > <?php echo $year_array[$k].'('.$no_of_records_of_year[$k].')';?></a>			</li>
			<?php }?>
		</ul>
		</li>
	</ul>
	
	<?php }?>
	
	
	
	
	
	
	
	</li>
</ul>

</div>
</td>
<td width="3%">
</td>
<td width="1%" background="<?php echo base_url();?>images/bg_right.gif"> 
</td>
</tr>
</table>

</div>
