
<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">
<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );echo form_open('form/full_reg',$attributes); ?>
<table width="100%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"s> <b>Submit New Resource</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Main Clusters&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p><input type="text" name="main_clusters" style="width:200px" value="<?php echo $this->validation->main_clusters;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->main_clusters_error;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Main Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td >&nbsp;<p>
	
	  <input type="text" name="main_category" style="width:200px" value="<?php echo $this->validation->main_category;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->main_category_error;?></font>
	  </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Sub Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="sub_category" style="width:200px" value="<?php echo $this->validation->sub_category;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->sub_category_errror;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
    <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Name of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="name_of_resource" style="width:200px" value="<?php echo $this->validation->name_of_resource;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->name_of_resource_errror;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">URL of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="url_of_resource" style="width:200px" value="<?php echo $this->validation->url_of_resource;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->url_of_resource_errror;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Full Name of Resource&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="full_name_of_resource" style="width:200px" value="<?php echo $this->validation->full_name_of_resource;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->full_name_of_resource_errror;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
   <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Name of the Organization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="name_of_the_organization" style="width:200px" value="<?php echo $this->validation->name_of_the_organization;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->name_of_the_organization_errror;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">URL of the Organization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="url_of_the_organization" style="width:200px" value="<?php echo $this->validation->url_of_the_organization;?>" />
	 
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
 
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Address of the Organization &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="address_of_the_organization" style="width:200px; height:100px"><?php echo $this->validation->address_of_the_organization;?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
 
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Brief Description &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="brief_description" style="width:200px; height:100px"><?php echo $this->validation->brief_description;?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Subject Area &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="subject_area" style="width:200px; height:100px"><?php echo $this->validation->subject_area;?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Publisher.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="publisher" style="width:200px " value="<?php echo $this->validation->publisher;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="state" style="width:200px " value="<?php echo $this->validation->state;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="Country" style="width:200px " value="<?php echo $this->validation->Country;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Publishing Since&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="publishing_since" style="width:200px " value="<?php echo $this->validation->publishing_since;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">ISI IF (2009)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="isi_if_2009" style="width:200px " value="<?php echo $this->validation->isi_if_2009;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Indexing Abstracting.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="indexing_abstracting" style="width:200px " value="<?php echo $this->validation->indexing_abstracting;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Frequency&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="frequency" style="width:200px " value="<?php echo $this->validation->frequency;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">	ISSN (online)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="	issn_online" style="width:200px " value="<?php echo $this->validation->	issn_online;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">ISSN (Print)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="issn_print" style="width:200px " value="<?php echo $this->validation->issn_print;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Editorial Board&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="editorial_board" style="width:200px " value="<?php echo $this->validation->editorial_board;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Editorial Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="editorial_contact" style="width:200px " value="<?php echo $this->validation->editorial_contact;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Editor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="editor" style="width:200px " value="<?php echo $this->validation->editor;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="Year" style="width:200px " value="<?php echo $this->validation->Year;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="Year" style="width:200px " value="<?php echo $this->validation->Year;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Contact Person&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="contact_person" style="width:200px " value="<?php echo $this->validation->contact_person;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Contact Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="contact_email" style="width:200px " value="<?php echo $this->validation->contact_email;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Language&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="language" style="width:200px " value="<?php echo $this->validation->language;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Department Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="department_center" style="width:200px " value="<?php echo $this->validation->department_center;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">DBT Designated Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="dbt_designated_center" style="width:200px " value="<?php echo $this->validation->dbt_designated_center;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Computing Facility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="computing_facility" style="width:200px " value="<?php echo $this->validation->computing_facility;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Database Development&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="database_development" style="width:200px " value="<?php echo $this->validation->database_development;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Software Tools Developed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="software_tools_developed" style="width:200px " value="<?php echo $this->validation->software_tools_developed;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Publication History&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="publication_history" style="width:200px " value="<?php echo $this->validation->publication_history;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Areas of Research&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="areas_of_research" style="width:200px " value="<?php echo $this->validation->areas_of_research;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Research Grant Support &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="research_grant_support" style="width:200px " value="<?php echo $this->validation->research_grant_support;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Name of the Developer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="name_of_the_developer" style="width:200px " value="<?php echo $this->validation->name_of_the_developer;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Address of the Developer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="address_of_the_developer" style="width:200px " value="<?php echo $this->validation->address_of_the_developer;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Accesibility &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="accesibility" style="width:200px " value="<?php echo $this->validation->accesibility;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Keywords &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="keywords" style="width:200px " value="<?php echo $this->validation->keywords;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Associated Institutes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="associated_institutes" style="width:200px " value="<?php echo $this->validation->associated_institutes;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Associated Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="associated_country" style="width:200px " value="<?php echo $this->validation->associated_country;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">View pub &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="view_pub" style="width:200px " value="<?php echo $this->validation->view_pub;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Inventor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="inventor" style="width:200px " value="<?php echo $this->validation->inventor;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Assignee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="assignee" style="width:200px " value="<?php echo $this->validation->assignee;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Application No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="application_no" style="width:200px " value="<?php echo $this->validation->application_no;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Filed No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="filed_on" style="width:200px " value="<?php echo $this->validation->filed_on;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Source &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></td>
    <td>&nbsp;<p>
	  <input type="text" name="	source" style="width:200px " value="<?php echo $this->validation->	source;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> 
  
  <tr>
    <td>&nbsp;</td>
    <td style="vertical-align:middle">&nbsp; <p >
        <input class="button" name="text4" type="submit" value="Submit New Resource "> 
     </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
   
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


	</form>
</div>
