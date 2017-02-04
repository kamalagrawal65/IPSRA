
<html>
<head>
<style>
.searchText
{
     border-style: hidden;
     border-width: 0px;
     color: #8AB08A;
     padding-left:10px;
     padding-right:7px;
     font-size:18px;
	 height:37px;
	 width:324px;
     background-image: url(../images/searchBox.gif);
     margin-left:3px;
	 padding-top:5px;
}
</style>
</head>
<body>
<br /><br />
<br />
<br />
<br />

<br />
<br />
<br />
<br />
<br />
<br />

<?php /*?><?php
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
$counter = $hits[0];
echo $hits[0];
?><?php */?>
<?php echo form_open('pages/search');  ?>
<!--<img HEIGHT="90" WIDTH="150" align="baseline" BORDER="0" src="<?php echo base_url(); ?>/images/ibira.jpg" />-->
<table align="center" width="100%" height="40%">
	<tr valign="bottom">
		<td width="35%" align="right"></td>
		<td width="65%"  align="left" style="font-size:36px; color:#333333" ><b>iBIRA</b></td>
		
	</tr>
	<tr  valign="top" >
	  <td  width="25%" align="right">

		  
	  </td>
		
		<td width="75%"  align="left" > 
 			 <input name="q" type="text" class="searchText" value="" />
			 <INPUT TYPE="image" style="vertical-align:top" SRC="<?php echo base_url(); ?>/images/search_button.gif" HEIGHT="41" WIDTH="50" BORDER="0" ALT="Submit Form">
		</td> 
		
	</tr>
	<tr >
		<td width="25%" align="right"></td>
		<td width="75%"  align="left" </td>
		
	</tr>
	<tr >
		<td width="25%" align="right"></td>
		<td width="75%"  align="left" </td>
		
	</tr>
</table>

</form>
