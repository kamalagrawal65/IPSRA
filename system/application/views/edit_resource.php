<div style="float:right; width:100%;padding-right:3px; ">
<?php $attributes = array( 'id' => 'update_res' ,'style' =>'padding:10px' );echo form_open('user/update_resource',$attributes); ?>
<?php 		$sno=0; echo "<h1>&nbsp;&nbsp;&nbsp;&nbsp;Resource Editing</h1>";
	 	foreach($results as $result)
		{ ?>
<table width="100%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td width="10%" style="text-align:center"><b> S. No. </td>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px" width="20%"> 
    <b> Field Name <td><b>Field Value </b>
  <tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px" width="20%"> 
    Master Resource No. : <td><?php echo $result->master_list ?></b>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle;">NAR Sr. No.</td>
    <td><input type="text" name="nar_sr_no" style="width:400px" value="<?php echo $result->nar_sr_no;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle;">Main Clusters</td>
    <td><input type="text" name="main_clusters" style="width:400px" value="<?php echo $result->main_clusters;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle">Main Category</td>
    <td><input type="text" name="main_category" style="width:400px" value="<?php echo $result->main_category;?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle">  <label for="qsearch">Sub Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><input type="text" name="sub_category" style="width:400px" value="<?php echo $result->sub_category;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
    <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"> <label for="qsearch">Name of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><input type="text" name="Name_of_Resource" style="width:400px" value="<?php echo $result->Name_of_Resource;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
    <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"> <label for="qsearch">URL of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>	  <input type="text" name="url_of_resource" style="width:600px" value="<?php echo $result->url_of_resource;?>" /></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"> <label for="qsearch">Full Name of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>  <input type="text" name="full_name_of_resource" style="width:600px" value="<?php echo $result->full_name_of_resource;?>" />	  </td>
    <td>&nbsp;</td>    <td>&nbsp;</td>

  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>  
    <td style="vertical-align:middle"><label for="qsearch">Brief Description   </label></td>
    <td>   <textarea name="brief_description" style="width:600px; height:100px"><?php echo $result->brief_description;?></textarea>            
      </td>   <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"><label for="qsearch">Subject Area </label></td>
    <td> <textarea name="subject_area" style="width:400px; height:100px"><?php echo $result->subject_area;?></textarea>            
      </td><td></td>    <td></td>
  </tr>

  </tr>
   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Name of the Organization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td> <textarea name="name_of_the_organization" style="width:400px; height:100px"><?php echo $result->name_of_the_organization;?></textarea></td>
    </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle"> <label for="qsearch">URL of the Organization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><input type="text" name="url_of_the_organization" style="width:600px" value="<?php echo $result->url_of_the_organization;?>" />
	 </td><td>&nbsp;</td><td>&nbsp;</td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle"><label for="qsearch">Address of the Organization   </label></td>
    <td> <textarea name="address_of_the_organization" style="width:400px; height:100px"><?php echo $result->address_of_the_organization;?></textarea></td>
    <td></td>   <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Publisher </label></td>
    <td>
	  <input type="text" name="publisher" style="width:400px " value="<?php echo $result->publisher;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">State </label></td>
    <td>
	  <input type="text" name="state" style="width:400px " value="<?php echo $result->state;?>" />
	 </td>
    
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Country </label></td>
    <td>
	  <input type="text" name="Country" style="width:400px " value="<?php echo $result->Country;?>" />
	 </td>
    <td></td>
    <td></td>
    
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Publishing Since </label></td>
    <td>
	  <input type="text" name="publishing_since" style="width:400px " value="<?php echo $result->publishing_since;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr> 
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">ISI IF (2009) </label></td>
    <td>
	  <input type="text" name="isi_if_2009" style="width:400px " value="<?php echo $result->isi_if_2009;?>" />
	 </td>
    <td></td>
    <td></td>
    
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Indexing Abstracting. </label></td>
    <td>
	  <input type="text" name="indexing_abstracting" style="width:400px " value="<?php echo $result->indexing_abstracting;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Frequency </label></td>
    <td>
	  <input type="text" name="frequency" style="width:400px " value="<?php echo $result->frequency;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr> 
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">	ISSN (online) </label></td>
    <td>
	  <input type="text" name="issn_online" style="width:400px " value="<?php echo $result->issn_online;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">ISSN (Print) </label></td>
    <td>
	  <input type="text" name="issn_print" style="width:400px " value="<?php echo $result->issn_print;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Editorial Board </label></td>
    <td>
	  <input type="text" name="editorial_board" style="width:400px " value="<?php echo $result->editorial_board;?>" />
	 </td>
    <td></td>
    <td></td>
    
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Editorial Contact </label></td>
    <td>
	  <input type="text" name="editorial_contact" style="width:400px " value="<?php echo $result->editorial_contact;?>" />
	 </td>
    <td></td>
    
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Editor </label></td>
    <td>
	  <input type="text" name="editor" style="width:400px " value="<?php echo $result->editor;?>" />
	 </td>
    <td></td>
    <td></td>
    
  </tr> <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Year </label></td>
    <td>
	  <input type="text" name="Year" style="width:400px " value="<?php echo $result->Year;?>" />
	 </td>
    <td></td>
    <td></td>

  </tr>
 <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Contact Person </label></td>
    <td>
	  <input type="text" name="contact_person" style="width:400px " value="<?php echo $result->contact_person;?>" />
	 </td>
    
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Contact Email </label></td>
    <td>
	  <input type="text" name="contact_email" style="width:400px " value="<?php echo $result->contact_email;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Language </label></td>
    <td>
	  <input type="text" name="language" style="width:400px " value="<?php echo $result->language;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Department Center </label></td>
    <td>
	  <input type="text" name="department_center" style="width:400px " value="<?php echo $result->department_center;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">DBT Designated Center </label></td>
    <td>
	  <input type="text" name="dbt_designated_center" style="width:400px " value="<?php echo $result->dbt_designated_center;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Computing Facility </label></td>
    <td>
	  <input type="text" name="computing_facility" style="width:400px " value="<?php echo $result->computing_facility;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Database Development </label></td>
    <td>
	  <input type="text" name="database_development" style="width:400px " value="<?php echo $result->database_development;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Software Tools Developed </label></td>
    <td>
	  <input type="text" name="software_tools_developed" style="width:400px " value="<?php echo $result->software_tools_developed;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Publication History </label></td>
    <td>
	  <input type="text" name="publication_history" style="width:400px " value="<?php echo $result->publication_history;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Areas of Research </label></td>
    <td>
	  <input type="text" name="areas_of_research" style="width:400px " value="<?php echo $result->areas_of_research;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Research Grant Support  </label></td>
    <td>
	  <input type="text" name="research_grant_support" style="width:400px " value="<?php echo $result->research_grant_support;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Name of the Developer  </label></td>
    <td>
	  <input type="text" name="name_of_the_developer" style="width:400px " value="<?php echo $result->name_of_the_developer;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Address of the Developer  </label></td>
    <td>
    <textarea name="address_of_the_developer" style="width:600px; height:100px"><?php echo $result->address_of_the_developer;?></textarea>
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Accesibility  </label></td>
    <td>
	  <input type="text" name="accesibility" style="width:400px " value="<?php echo $result->accesibility;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Keywords  </label></td>
    <td>
	  <textarea name="keywords" style="width:600px; height:100px"><?php echo $result->keywords;?></textarea>
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Associated Institutes  </label></td>
    <td>
    <textarea name="associated_institutes" style="width:600px; height:100px"><?php echo $result->associated_institutes;?></textarea>
	  </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Associated Country  </label></td>
    <td>
	  <input type="text" name="associated_country" style="width:400px " value="<?php echo $result->associated_country;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">View Publication</label></td>
    <td>
	  <input type="text" name="view_pub" style="width:400px " value="<?php echo $result->view_pub;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">View Course</label></td>
    <td>
	  <input type="text" name="view_course" style="width:400px " value="<?php echo $result->view_course;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Inventor  </label></td>
    <td>
	  <input type="text" name="inventor" style="width:400px " value="<?php echo $result->inventor;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Assignee  </label></td>
    <td>
	  <input type="text" name="assignee" style="width:400px " value="<?php echo $result->assignee;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Application No.  </label></td>
    <td>
	  <input type="text" name="application_no" style="width:400px " value="<?php echo $result->application_no;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Filed No.  </label></td>
    <td>
	  <input type="text" name="filed_on" style="width:400px " value="<?php echo $result->filed_on;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
   <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Source  </label></td>
    <td>
	  <input type="text" name="source" style="width:400px " value="<?php echo $result->	source;?>" />
	 </td>
    <td></td>
    <td></td>
    <td></td>
  </tr> 
  
  <tr><td width="10%" style="text-align:center"></td> 
    <td></td>
    <td style="vertical-align:middle"> <p >
        <input class="button" name="text4" type="submit" value="Update Resource "> 
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
