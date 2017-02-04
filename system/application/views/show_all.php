

<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">
<p class='heading'>Click on the table to View contents in a Table Format</p>
<table width='100%'><tr><td></td></tr>
<?php 		
foreach ($results as $table)
{
?>
<tr><td style="font:'Times New Roman', Times, serif;font-size:20px"><center>
<b><a target="_blank" href="<?php echo base_url()."user/show_table/".$table?>"><?php echo $table ?></a></b>
</center></td></tr>	
<?php		}
?>

</table>
</div>