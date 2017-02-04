<div style="float:right; width:100%;padding-right:3px; ">

<?php 		$sno=0; 
	 	foreach($results as $result)
		{ ?>
<H1><a href="<?php echo site_url();?>user/del_res/<?php echo $result->master_list?>" target="_self">Click Here to Remove Following Resource </a></H1>
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
    <td><?php echo $result->nar_sr_no ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle;">Main Clusters</td>
    <td><?php echo $result->main_clusters ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle">Main Category</td>
    <td><?php echo $result->main_category ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle">  <label for="qsearch">Sub Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><?php echo $result->sub_category ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"> <label for="qsearch">Name of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><?php echo $result->Name_of_Resource ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"> <label for="qsearch">URL of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><?php echo $result->url_of_resource ?></b>
  </tr>  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"> <label for="qsearch">Full Name of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><?php echo $result->full_name_of_resource ?></b>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>  
    <td style="vertical-align:middle"><label for="qsearch">Brief Description   </label></td>
      <td><?php echo $result->brief_description ?></b>
  </tr>  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> <td style="vertical-align:middle"><label for="qsearch">Subject Area </label></td>
      <td><?php echo $result->subject_area ?></b>
  </tr>   <tr>     <td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td>
    <td style="vertical-align:middle"> <label for="qsearch">Name of the Organization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td><?php echo $result->name_of_the_organization ?></b>
    </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle"> <label for="qsearch">URL of the Organization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
	 <td><?php echo $result->url_of_the_organization ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle"><label for="qsearch">Address of the Organization   </label></td>
    <td><?php echo $result->address_of_the_organization ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Publisher </label></td>
    <td><?php echo $result->publisher ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">State </label></td>
    <td><?php echo $result->state ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Country </label></td>
    <td><?php echo $result->Country ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Publishing Since </label></td>
     <td><?php echo $result->publishing_since ?></b>
  </tr> 
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">ISI IF (2009) </label></td>
    <td><?php echo $result->isi_if_2009 ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Indexing Abstracting. </label></td>
    <td><?php echo $result->indexing_abstracting ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Frequency </label></td>
    <td><?php echo $result->frequency ?></b>
  </tr> 
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">	ISSN (online) </label></td>
    <td><?php echo $result->issn_online ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">ISSN (Print) </label></td>
    <td><?php echo $result->issn_print ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Editorial Board </label></td>
    <td><?php echo $result->editorial_board ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Editorial Contact </label></td>
    <td><?php echo $result->editorial_contact ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Editor </label></td>
    <td><?php echo $result->editor ?></b>
  </tr> <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Year </label></td>
	<td><?php echo $result->Year ?></b>
  </tr>
 <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Contact Person </label></td>
    <td><?php echo $result->contact_person ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Contact Email </label></td>
    <td><?php echo $result->contact_email ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Language </label></td>
    <td><?php echo $result->language ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Department Center </label></td>
    <td><?php echo $result->department_center ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">DBT Designated Center </label></td>
    <td><?php echo $result->dbt_designated_center ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Computing Facility </label></td>
    <td><?php echo $result->computing_facility ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Database Development </label></td>
    <td><?php echo $result->database_development ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Software Tools Developed </label></td>
    <td><?php echo $result->software_tools_developed ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Publication History </label></td>
    <td><?php echo $result->publication_history ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Areas of Research </label></td>
    <td><?php echo $result->areas_of_research ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Research Grant Support  </label></td>
    <td><?php echo $result->research_grant_support ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Name of the Developer  </label></td>
    <td><?php echo $result->name_of_the_developer ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Address of the Developer  </label></td>
    <td><?php echo $result->address_of_the_developer ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Accesibility  </label></td>
    <td><?php echo $result->accesibility ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Keywords  </label></td>
    <td><?php echo $result->keywords ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Associated Institutes  </label></td>
    <td><?php echo $result->associated_institutes ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Associated Country  </label></td>
    <td><?php echo $result->associated_country ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">View Publication</label></td>
    <td><?php echo $result->view_pub ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">View Course</label></td>
    <td><?php echo $result->view_course ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Inventor  </label></td>
    <td><?php echo $result->inventor ?></b>
  </tr>
  
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Assignee  </label></td>
    <td><?php echo $result->assignee ?></b>
  </tr><tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Application No.  </label></td>
    <td><?php echo $result->application_no ?></b>
  </tr>
  <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Filed No.  </label></td>
    <td><?php echo $result->filed_on ?></b>
  </tr>
   <tr><td width="10%" style="text-align:center"><?php echo $sno=$sno+1 ?>.</td> 
    <td style="vertical-align:middle">  <label for="qsearch">Source  </label></td>
    <td><?php echo $result->source ?></b>
  </tr> 
  
</table>
<?php 
	 	}
?>	


</div>
