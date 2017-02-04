<br /><br /><br />
<table  width=100% style="font:Verdana, Arial, Helvetica, sans-serif;font-size:12px;padding-left:0px " >
<tr>
<td width="6%" >
</td>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="4%" >
</td>
<td>

	<?php
if ( ! is_null($pub_results))
{
	 if (count($pub_results))
	 {
	 	$total_results=count($pub_results) ?>
	 
	 	<H1 class="heading">Total <?php echo count($pub_results)?> Publication Results Found</H1> 
		
<br />
			
		<ol style="list-style-type: decimal; font-size:14px; font-family:'Times New Roman', Times, serif; font-style:normal">
		<?php foreach($pub_results as $result)
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
			<br><font color="#3D3D3D" style="font-weight:100;font-size:18px" ><b>
			<a target="_blank" href="open_result/<?php echo $result->master_list; ?>">View Resource</a></font>

				</li><br><br></p>
		<?php 
		}
		?> </ol>
		 <?php  ?><?php
	}
	else
	{
		?>  <br /><br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO Publication found.<?php  $flag=true;
		?>' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><br /><br />
		
	<?php
	}
}
?>
<br />
<br />

</td>
<td width="4%"> </td>
<td width="1%" background="<?php echo base_url();?>images/bg_right.gif"> </td>
<td width="4%"> </td></tr>
</table>

<?php if($flag==true) {?>
<br /><br /> 
 &nbsp;   
<br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php }?>
