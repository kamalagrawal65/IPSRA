<div style="float:right; width:100%;padding-right:3px; ">
<?php $attributes = array( 'id' => 'insert_pub' ,'style' =>'padding:10px' );echo form_open('user/insert_pub',$attributes); ?>
<?php 		$sno=0; echo "<h1>&nbsp;&nbsp;&nbsp;&nbsp;Complete Following Information of This Publication</h1>";

		{ ?>
<table width="100%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td width="10%" style="text-align:center"><b> S. No. </td>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px" width="20%"> 
    <b> Field Name <td><b>Field Value </b>
  <tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle;">Master Resource No. </td>
    <td><?php echo $this->session->userdata('s_no');?></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle;">Ref. Type</td>
    <td><input type="text" name="ref_type" style="width:400px" value="<?php echo $result->ref_type;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle">Ref. No</td>
    <td><input type="text" name="ref_no" style="width:400px" value="<?php echo $result->ref_no;?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle">  
  <label for="qsearch">Rec. No.</label></td>
    <td><input type="text" name="rec_no" style="width:400px" value="<?php echo $result->rec_no;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
    <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle"> <label for="qsearch">Name of Contributors</label></td>
    <td><input type="text" name="contributors" style="width:600px" value="<?php echo $result->contributors;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
    <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
     <td style="vertical-align:middle"> <label for="qsearch">Address of Contributors</label></td>
 <td>   <textarea name="complete_address" style="width:600px; height:100px"><?php echo $result->complete_address;?></textarea>
    </td>  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
  <td style="vertical-align:middle"> <label for="qsearch">Title of the Paper</label></td>
    <td>  <input type="text" name="title_of_the_paper" style="width:600px" value="<?php echo $result->title_of_the_paper;?>" />	  </td>
    <td>&nbsp;</td>    <td>&nbsp;</td>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>  
    <td style="vertical-align:middle"><label for="qsearch">Secondry Title</label></td>
   <td>  <input type="text" name="secondry_title" style="width:600px" value="<?php echo $result->secondry_title;?>" />	  </td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
  <td style="vertical-align:middle"><label for="qsearch">Full Title</label></td>
    <td>  <input type="text" name="full_title" style="width:600px" value="<?php echo $result->full_title;?>" />	  </td>
<td></td>    <td></td>
  </tr>

  </tr>
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Pages</label></td>
	<td><input type="text" name="pages" style="width:100px" value="<?php echo $result->pages;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  

   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Volume</label></td>
	<td><input type="text" name="volume" style="width:100px" value="<?php echo $result->volume;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Issue</label></td>
	<td><input type="text" name="issue_no" style="width:100px" value="<?php echo $result->issue_no;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Edition</label></td>
	<td><input type="text" name="edition" style="width:200px" value="<?php echo $result->edition;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Keywords</label></td>
	 <td>   <textarea name="pub_keywords" style="width:600px; height:100px"><?php echo $result->pub_keywords;?></textarea>
	<td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Pub. Year</label></td>
	<td><input type="text" name="pub_year" style="width:100px" value="<?php echo $result->pub_year;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Pub. Date</label></td>
	<td><input type="text" name="pub_date" style="width:200px" value="<?php echo $result->pub_date;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">ISSN</label></td>
	<td><input type="text" name="issn" style="width:200px" value="<?php echo $result->issn;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Acc. No.</label></td>
	<td><input type="text" name="ass_no" style="width:200px" value="<?php echo $result->ass_no;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Abstract</label></td>
	 	 <td>   <textarea name="abstract" style="width:600px; height:100px"><?php echo $result->abstract;?></textarea>
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Notes</label></td>
	<td><textarea name="notes" style="width:600px; height:100px"><?php echo $result->notes;?></textarea>
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Pubmed URLs</label></td>
	<td><input type="text" name="pubmed_urls" style="width:600px" value="<?php echo $result->pubmed_urls;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  

   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Electronic Resource No.</label></td>
	<td><input type="text" name="electronic_resource_number" style="width:400px" value="<?php echo $result->electronic_resource_number;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>
  

   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Language</label></td>
	<td><input type="text" name="pap_language" style="width:200px" value="<?php echo $result->pap_language;?>" />
	  </td>    <td>&nbsp;</td>    <td>&nbsp;</td>
    </tr>

  <tr><td width="10%" style="text-align:center"></td> 
    <td></td>
    <td style="vertical-align:middle"> <p >
        <input class="button" name="text4" type="submit" value="Insert Publication "> 
     </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
   
    <td></td>
    <td></td>
    <td></td>
  </tr><tr>
    <td></td>
   
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
<?php 
	 	}
?>
	</form>

</div>
