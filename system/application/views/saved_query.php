


<?php $replacements = array(';'); ?>

<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px ">

<br /><br />
<?php 
	 
	
	if ( ! is_null($results))
	{
		 if (count($results))
		 {?>
		 	
		<p class="heading" style="text-align:left">Your Saved Queries are as under : </p>
		<br><br>	 	
<table  style="font: Arial, Helvetica, sans-serif;font-size:14px;padding-left:0px "  width= "100%" style="align:center;"> 
<TR><TH class='content'><b>Query Name</Th><Th class='content' style='text-align:center;'><b>Saved on</Th>
<TH class='content' style='text-align:center;'><b>Run Query</Th><Th class='content' style='text-align:center;'><b>Delete Query</Th>
<?php foreach($results as $result)
{
echo "<TR><TD class='content'>".$result->q_name."</TD><TD class='content' style='text-align:center;'>".$result->q_time."</TD>";
echo "<TD class='content' style='text-align:center;'><a href='".base_url()."user/run_saved_query/".$result->q_no."/".$this->session->userdata('enc_uid')."'>Run Query</a></TD>";
echo "<TD class='content' style='text-align:center;'><a href='".base_url()."user/con_del_query/".$result->q_no."/".$result->q_name."/".$this->session->userdata('enc_uid')."'>Remove Query</a></TD>";
echo "</TR>";
}
?>
</table>
		 	
		 	
		 	
		 	
	<?php
		 }
	
	}
	 else 
	 {
	 	?>
	 	<code>
<font style="font-size: 14px" color="#4444"> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('error_message');?> <br><br /></font>
	
	
	 </code>
	 	<?php
	 	
	 }

?>	

 

</div>

