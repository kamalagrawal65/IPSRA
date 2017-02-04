
<table  width=100% style="font:Verdana, Arial, Helvetica, sans-serif;font-size:12px;padding-left:0px " >
<tr>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="4%" >
</td>
<td>
<br /><br />

	<?php
if ( ! is_null($pub_results))
{
	 if (count($pub_results))
	 {
	 	$total_results=count($pub_results) ?>
	 
	 	<H1>Showing Publication Results for :</H1> 
			<!-- Name_of_Resource-->
			<?php 
			if($results[0]->Name_of_Resource)
			{ ?>
						
						<p align='justify'><font color="#3D3D3D" style="font-weight:100;font-size:24px;" ><b>
						<a style="color:#000000; text-decoration:none;font-size:24px; " onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000000'"  href="<?php if($results[0]->url_of_resource) echo $results[0]->url_of_resource ?>"><?php echo highlight_phrase($results[0]->Name_of_Resource, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </a></b></font>
			<?php 
			} ?>
			
			<!-- full_name_of_resource-->
			<?php 
			if($results[0]->full_name_of_resource)
			{ ?>
						
						<br><font color="#3D3D3D" style="font-weight:100;font-size:24px;" >
						<b>Full Name of the Resource :</b> 
						
						<?php echo highlight_phrase($results[0]->full_name_of_resource, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font>
			<?php
			} ?>

			<!-- Resource Category -->
			<br><font color="#3D3D3D" style="font-weight:100;font-size:20px;" ><b>Resource Category :</b> 
			<?php echo highlight_phrase($results[0]->main_clusters, $search_terms, '<span style="color:#F47200">', '</span>'); ?> <?php 
			 ?>
			<?php
			if($results[0]->main_category)
			{ ?>
				<?php echo highlight_phrase(" -> ".$results[0]->main_category, $search_terms, '<span style="color:#F47200">', '</span>'); ?> <?php 
			} ?>
			<?php
			if($results[0]->sub_category)
			{ ?>
				<?php echo highlight_phrase(" -> ".$results[0]->sub_category, $search_terms, '<span style="color:#F47200">', '</span>'); ?> <?php 
			} ?>

			</font></p><ol style="list-style-type: decimal; font-size:14px; font-family:'Times New Roman', Times, serif; font-style:normal"><?php
	 	foreach($pub_results as $result)
		{
			?>
			<li> 
			<?php if($result->title_of_the_paper)
			{ ?>
						<!-- title_of_the_paper  -->
						<p align='justify'><b>Title of the Paper</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->title_of_the_paper."</font>"; 
			} ?>
			<?php if($result->pubmed_urls)
			{ ?>
						<!-- pubmed_urls  -->
						<font color="#3D3D3D" style="font-weight:100" >
						 <a target="_blank" href="<?php echo $result->pubmed_urls; ?>">(View at PubMed)</a></font>
						
			<?php  
			} ?>

			<!-- DELETE LINK if Admin LOGIN -->
			<?php
			if($this->session->userdata('logged_as') == 'admin')
			{ ?>
				<br><b><a href="<?php echo site_url();?>user/edit_pub/<?php echo $result->s_no?>" target="_self">
				EDIT Publiction No. <font color="#FF00" ><?php echo $result->s_no?></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<b><a href="<?php echo site_url();?>pages/con_del_pub/<?php echo $result->master_list?>/<?php echo $result->s_no?>" target="_self">
				Remove Publiction No. <font color="#FF00" ><?php echo $result->s_no?></font></a> 
				<?php 
			} ?>

			<?php if($result->contributors)
			{ ?>
						<!-- contributors  -->
						<br><b>Contributors</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->contributors."</font>"; 
			} ?>

			<?php if($result->complete_address)
			{ ?>
						<!-- complete_address  -->
						<br><b>Address</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->complete_address."</font>"; 
			} ?>


			<?php if($result->secondry_title)
			{ ?>
						<!-- secondry_title  -->
						<br><b>Publication Name</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->secondry_title."</font>"; 
			} ?>

			<?php if($result->volume)
			{ ?>
						<!-- volume  -->
						<br><b>Volume</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->volume."</font>"; 
			} ?>

			<?php if($result->issue_no)
			{ ?>
						<!-- issue_no  -->
						<br><b>Issue</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->issue_no."</font>"; 
			} ?>

			<?php if($result->pages)
			{ ?>
						<!-- pages  -->
						<br><b>Pages</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->pages."</font>"; 
			} ?>

			<?php if($result->pub_year)
			{ ?>
						<!-- pub_year  -->
						<br><b>Publication Year</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->pub_year."</font>"; 
			} ?>

			<?php if($result->issn)
			{ ?>
						<!-- issn  -->
						<br><b>ISSN</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->issn."</font>"; 
			} ?>

			<?php if($result->pap_language)
			{ ?>
						<!-- pap_language  -->
						<br><b>Language</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->pap_language."</font>"; 
			} ?>

			<?php if($result->abstract)
			{ ?>
						<!-- abstract  -->
						<br><b>Abstract</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->abstract."</font>";
			} ?>


			</li><br><br>
		<?php 
		}
		?> </ol>
		 <?php  ?><?php
	}
	else
	{
		?>  <br /><br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO Publication found for this 
		<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Close This window to continue<?php  $flag=true;
		?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><br /><br />
		
	<?php
	}
}
?>
<br />
<br />

</td>
<td width="1%"> </td>
<td width="1%" background="<?php echo base_url();?>images/bg_right.gif"> </td>

</td>
</td>

</table>

<?php if($flag==true) {?>
<br /><br /> 
 &nbsp;   
<br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php }?>
