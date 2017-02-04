


<?php $replacements = array(';'); ?>

<div style="float:right; width:95%;padding-right:3px; ">

<table  width='95%' style="font:Verdana, Arial, Helvetica, sans-serif;font-size:12px;padding-left:0px "  >
<tr>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="6%">
</td>
<td>
<?php
?><div align="left" style="font:Verdana, Arial, Helvetica, sans-serif;font-size:16px;padding-left:24px"  ><?php
 //echo $this->pagination->create_links();

?>

</div>
	<?php
if ( ! is_null($results))
{
	 if (count($results))
	 {?>
	 	<p><?php $this->session->userdata('q_text'); ?></p>
	 	<p style="font-size: 18px"><b>Showing <?php echo $total_results; ?> Browse Results.</b>
		<br /><br />
		
		<?php //echo $search_terms.'>'.$main_clusters.'>'.$main_category.' > '.$sub_category;  ?>

		</p>
		<ol style="list-style-type: decimal; font-size:14px; font-family:'Times New Roman', Times, serif; font-style:normal" start=<?php echo (int)$first_result?>><?php
	 	foreach($results as $result)
		{
			?><li><?php
				/*echo search_extract($result->Keywords, $search_terms);*/
				
			?> 
			<!-- Name_of_Resource-->

			<?php 
			if($result->Name_of_Resource)
			{ ?>
						<font color="#3D3D3D" font-weight:150px" ><b>
						<a style="color:#000000; text-decoration:none;font-size:18px; " onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000000'" target="_blank" href="<?php echo base_url()."pages/new_result/".$result->Name_of_Resource."/".$result->main_clusters ?>"><?php echo $result->Name_of_Resource ?> </a></b></font>
			<?php 
			} ?>
 			<font color="#3D3D3D" style="font-weight:100" > [<b>Categorised as   : </b>
			<?php echo $result->main_clusters ?> </font>
			<?php
			if($result->main_category)
			{ ?>
				<?php echo " -> ".$result->main_category ?> </font><?php 
			} ?>
			<?php
			if($result->sub_category)
			{ ?>
				<?php echo " -> ".$result->sub_category ?></font><?php 
			} ?>]
			</li><br>
		<?php 
		}
		?> </ol><br><br><br>
		 <?php  ?><?php
	}
	else
	{
		?>  <br /><br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO result found for '<?php $flag=true;
		echo $search_terms;
		?>' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><br /><br />
		
	<?php
	}
}
?>
<div align="left" style="font:Verdana, Arial, Helvetica, sans-serif;font-size:16px;padding-left:30px"  >
</div>
</td>
<td width="1%" ></td>
<td width="1%" background="<?php echo base_url();?>images/bg_right.gif"> </td>
</td>
<td width="1%">
</td>

</table>

<?php if($flag==true) {?>
<br /><br /> 
 &nbsp;   
<br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php }?>

</div>

