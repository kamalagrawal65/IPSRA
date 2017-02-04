<div style="float:right; width:100%;padding-right:3px; ">
<?php $attributes = array( 'id' => 'save_course' ,'style' =>'padding:10px' );echo form_open('user/save_course',$attributes); ?>
<?php 		$sno=0; 
	 	foreach($results as $result)
		{ 
		echo "<h1>&nbsp;&nbsp;&nbsp;&nbsp;Edit the following Course </h1>";?>
<table width="100%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td width="10%" style="text-align:center"><b> S. No. </td>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px" width="20%"> 
    <b> Field Name <td><b>Field Value </b>
  <tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px" width="20%"> 
    Master Course No. <td><?php echo $result->s_no ?></b>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px" width="20%"> 
    Master Resource No.</td> 
   	  <td><input type="text" name="master_list" style="width:600px"  value="<?php echo $result->master_list;?>"/></td>
	  <td>&nbsp;</td><td>&nbsp;</td>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Course/Degree Type</td>
	  <td><input type="text" name="degree_type" style="width:600px"  value="<?php echo $result->degree_type;?>"/></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Name of the Course</td>
	  <td><input type="text" name="course_name" style="width:600px"  value="<?php echo $result->course_name;?>"/></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">URL of the Course</td>
	  <td><input type="text" name="course_url" style="width:600px"   value="<?php echo $result->course_url;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Department Name</td>
	  <td><input type="text" name="department" style="width:600px"   value="<?php echo $result->department;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">University Affiliation</td>
	  <td><input type="text" name="university" style="width:600px"   value="<?php echo $result->university;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Available Since</td>
	  <td><input type="text" name="available_since" style="width:200px"   value="<?php echo $result->available_since;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Duration of Course</td>
	  <td><input type="text" name="course_duration" style="width:600px"  value="<?php echo $result->course_duration;?>"/></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>  
    <td style="vertical-align:middle"><label for="qsearch">Eligiibility</label></td>
    <td>   <textarea name="eligiibility" style="width:600px; height:100px"><?php echo $result->eligiibility;?></textarea>            
      </td>   <td></td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Suject Specialization</td>
	  <td><input type="text" name="sujects" style="width:600px"   value="<?php echo $result->sujects;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Degree Requirements</td>
	  <td><input type="text" name="degree_requirements" style="width:200px"   value="<?php echo $result->degree_requirements;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
	  <td style="vertical-align:middle;">Distance Mode</td>
	  <td><input type="text" name="distance_mode" style="width:200px"   value="<?php echo $result->distance_mode;?>" /></td>
	  <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>

  
  <tr><td width="10%" style="text-align:center"></td> 
    <td></td>
    <td style="vertical-align:middle"> <p >
        <input class="button" name="text4" type="submit" value="Update Course"> 
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
