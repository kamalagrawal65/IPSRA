<?php $replacements = array(';'); ?>

<div style="float:right; width:79%;padding-right:3px; ">
<h1 align="Center" class="heading" style="font-size:30px;"></h1>
<table width="100%" style="font:Verdana, Arial, Helvetica, sans-serif;font-size:12px;padding-left:0px "  >
<tr>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="4%">
</td>
<td>
<br />	
<?php
?><div align="left" style="font:Verdana, Arial, Helvetica, sans-serif;font-size:16px;padding-left:24px"  ><?php
echo $this->pagination->create_links();

?><br>
<br>


</div>
	<?php
if ( ! is_null($results))
{
	 if (count($results))
	 {?>
	 	<p><?php  $this->session->userdata('qsi'); ?></p>
	 	<p><b>Showing search results <?php 
		"'".$search_terms."'";
		?> (<?php echo $first_result; ?>&ndash;<?php echo $last_result; ?> of <?php echo $total_results; ?>):</b>
		<br /><br />
		
		<?php //echo $search_terms.'>'.$main_clusters.'>'.$main_category.' > '.$sub_category;  ?>

		</p>
		<ol style="list-style-type: decimal; font-size:14px; font-family:'Times New Roman', Times, serif; font-style:normal" start=<?php echo (int)$first_result?>><?php
	 	foreach($results as $result)
		{
			?><li>
		<!-- Name_of_Resource-->
			<?php 
			if($result->Name_of_Resource)
			{ ?>
			<p align='justify'><font color="#3D3D3D" style="font-weight:bold;font-size:14px; " >						
		<!-- IF URL Exist then only show the hyperlink -->
			<?php 
			if($result->url_of_resource)
			{ ?>
			<a style="color:#000000; font-weight:bold;font-size:14px; " 
			onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000000'"  
			href="<?php if($result->url_of_resource) echo $result->url_of_resource ?>">
			<?php 
			} ?>
				<b><?php echo highlight_phrase($result->Name_of_Resource, $search_terms, '<span style="color:#F47200">', '</span>'); ?> 
				</a></b></font>
			<?php 
			} ?>
			
			<?php 
			if($result->view_pub)
			{ ?>
				<a href="<?php echo site_url();?>pages/view_publication/<?php echo $result->master_list?>" target="_blank">(View Publication)</a>
			<?php
			}
			elseif($result->view_course)
			{ ?>
			
				<a href="<?php echo site_url();?>pages/view_cources/<?php echo $result->master_list?>" target="_blank">(View Courses)</a>
			<?php
			}
			elseif($this->session->userdata('logged_as') == 'admin')
			{ ?>
				<b><a style="color: red" href="<?php echo site_url();?>pages/con_del_res/<?php echo $result->master_list?>" target="_blank">(Remove Resource)</a></b>
			<?php
			} ?>
			


		<!-- allow edit resourec if admin login -->
			<?php
			if($this->session->userdata('logged_as') == 'admin')
			{ ?>
				<b><a href="<?php echo site_url();?>user/edit_resource/<?php echo $result->master_list?>" target="_blank">(Edit Resource No.
				<?php echo $result->master_list.")</a></b>";
			} ?>

			<!-- full_name_of_resource-->
			<?php 
			if($result->full_name_of_resource)
			{ ?>
						<br><b>Full Name of the Resource</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->full_name_of_resource, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font>
			<?php
			} ?>

			<!-- Resource Category -->
			<br><b>Resource Category</b> : 
			<font color="#3D3D3D" style="font-weight:100" >
			<?php echo highlight_phrase($result->main_clusters, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			 ?>
			<?php
			if($result->main_category)
			{ ?>
				<?php echo highlight_phrase(" -> ".$result->main_category, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>
			<?php
			if($result->sub_category)
			{ ?>
				<?php echo highlight_phrase(" -> ".$result->sub_category, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>
			
			<?php
			if($this->session->userdata('logged_as') == 'admin' )
			{ 
			if($result->main_clusters == 'Institutions')
			{?>
			<b><a href="<?php echo site_url();?>user/add_courses/<?php echo $result->master_list?>" target="_blank">(Add Courses)</a></b>
			<?php
			}
			else
			{?>
			<b><a href="<?php echo site_url();?>user/add_pub/<?php echo $result->master_list?>" target="_blank">(Add Publication)</a></b>		
			<?php
			}} ?>

			<!-- accesibility-->
			<?php 
			if($result->accesibility)
			{ ?>
						<br><b>Accesibility</b> : 
						<?php echo $result->accesibility;?><?php 
			} ?>
			

			<!-- inventor -->
			<?php 
			if($result->inventor)
			{ ?>
						<br><b>Inventor</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->inventor, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>

<br>
			<!-- brief_description -->
			<?php 
			if($result->brief_description)
			{ ?>
						<br><b>Brief Description</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->brief_description, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>

			<!-- assignee -->
			<?php 
			if($result->assignee)
			{ ?>
						<br><b>Assignee</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->inventor, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>
			<!-- application_no -->
			<?php 
			if($result->inventor)
			{ ?>
						<br><b>Application No.</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->application_no, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>
			<!-- abstract -->
			<?php 
			if($result->filed_on)
			{ ?>
						<br><b>Filed On</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->filed_on, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>
			<!-- source -->
			<?php 
			if($result->source)
			{ ?>
						<br><b>Source</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->source, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>

			<!-- subject_area -->
			<?php 
			if($result->subject_area)
			{ ?>
						<br><b>Subject Area</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($result->subject_area, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><br /><?php 
			} ?>
<br>		
			<!-- name_of_the_organization-->
			<?php 
			if($result->name_of_the_organization)
			{ ?>
						<br><b>Institute/s</b> :<br> 
						<font color="#3D3D3D" style="font-weight:100" >
						<a  style="color:#000000; text-decoration:none;" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000000'"  href="<?php if($result->url_of_the_organization) echo $result->url_of_the_organization ?>"><?php echo highlight_phrase(str_replace($replacements,"<br>",$result->name_of_the_organization), $search_terms, '<span style="color:#F47200">', '</span>'); ?> </a></b></font><?php 
			} ?>

			<!-- address_of_the_organization -->
			<?php 
			if($result->address_of_the_organization)
			{ ?>
						<br><b>Address of Institute/s</b> : <br>
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase(str_replace($replacements,"<br>",$result->address_of_the_organization), $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>

			<!-- Publisher -->
			<?php 
			if($result->publisher)
			{ ?>
						<br><b>Publisher</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase(str_replace($replacements,"<br>",$result->publisher), $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>

			<!-- state -->
			<?php 
			if($result->state)
			{ ?>
						<br><b>State</b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase(str_replace($replacements,"<br>",$result->state), $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font><?php 
			} ?>
			<!-- Country -->
			<?php 
			if($result->Country)
			{ ?>
						<br><b>Country</b> : 
						<?php echo $result->Country;?><?php 
			} ?>

			<!-- Associated Institutes-->
			<?php 
			if($result->associated_institutes)
			{ ?>
						<br><br><b>Associated Institutes</b> : <ul style="list-style-type: circle;margin:0px 15px"><li> 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase(str_replace($replacements,"<li>",$result->associated_institutes), $search_terms, '<span style="color:#F47200">', '</span>'); ?> 
						</font></ul></ul><?php 
			} ?>

			<!-- Associated Country -->
			<?php 
			if($result->associated_country)
			{ ?>
						<br><b>Associated Country</b> : 
						<?php echo $result->associated_country;?><?php 
			} ?>




<br>			
			<!-- publishing_since -->
			<?php 
			if($result->publishing_since)
			{ ?>
						<br><b>Publishing Since</b> : 
						<?php echo $result->publishing_since;?><?php 
			} ?>

			<!-- frequency -->
			<?php 
			if($result->frequency)
			{ ?>
						<br><b>Frequency</b> : 
						<?php echo $result->frequency;?><?php 
			} ?>
			<!-- isi_if_2009-->
			<?php 
			if($result->isi_if_2009)
			{ ?>
						<br><b>Impact Factor (2009)</b> : 
						<?php echo $result->isi_if_2009;?><?php 
			} ?>
			<!-- indexing_abstracting -->
			<?php 
			if($result->indexing_abstracting)
			{ ?>
						<br><b>Indexing & Abstracting</b> :
						<?php echo $result->indexing_abstracting;?><?php 
			} ?>
	
			
			<!-- issn_online-->
			<?php 
			if($result->issn_online)
			{ ?>
						<br><b>ISSN (Online)</b> : 
						<?php echo $result->issn_online;?><?php 
			} ?>

			<!-- issn_print-->
			<?php 
			if($result->issn_print)
			{ ?>
						<br><b>ISSN (Print)</b> : 
						<?php echo $result->issn_print;?><?php 
			} ?>
<br>			
			<!-- editorial_board-->
			<?php 
			if($result->editorial_board)
			{ ?>
						<br><b>Editorial Board </b> : <a href='<?php echo $result->editorial_board;?>'><b>Click here </b> </a> 
						<?php 
			} ?>

			<!-- Editor -->
			<?php 
			if($result->editor)
			{ ?>
						<br><b>Editor</b> : 
						<?php echo $result->editor;?><?php 
			} ?>
			
			
			<!-- Editorial Contact -->
			<?php 
			if($result->editorial_contact)
			{ ?>
						<br><b>Editorial Contact</b> : 
						<?php echo $result->editorial_contact;?><?php 
			} ?>
			
			<!-- contact_person-->
			<?php 
			if($result->contact_person)
			{ ?>
					<br><b>Contact Person</b> :
					<?php echo $result->contact_person;?><?php 
			} ?>

			<!-- contact_email-->
			<?php 
			if($result->contact_email)
			{ ?>
					<br><b>Contact Email</b> :
					<?php echo $result->contact_email;?><?php 
			} ?>

			<!-- Year-->
			<?php 
			if($result->Year)
			{ ?>
						<br><b>Year</b> : 
						<?php echo $result->Year;?><?php 
			} ?>
			
			<!-- language-->
			<?php 
			if($result->language)
			{ ?>
						<br><b>Language</b> : 
						<?php echo $result->language;?><?php 
			} ?>

			<!-- 	department_center-->
			<?php 
			if($result->department_center)
			{ ?>
						<br><b>Department</b> : 
						<?php echo $result->	department_center;?><?php 
			} ?>
			
			<!-- DBT_Designated_Center-->
			<?php 
			if($result->dbt_designated_center)
			{ ?>
						<br><b>DBT Designated Center</b> : 
						<?php echo $result->dbt_designated_center;?><?php 
			} ?>
			
			<!-- areas_of_research-->
			<?php 
			if($result->areas_of_research)
			{ ?>
						<br><b>Research Area</b> : 
						<?php echo $result->areas_of_research;?><?php 
			} ?>
			
			<!-- research_grant_support-->
			<?php 
			if($result->research_grant_support)
			{ ?>
						<br><b>Research Grant Support</b> : 
						<?php echo $result->research_grant_support;?><?php 
			} ?>

			<!-- computing_facility-->
			<?php 
			if($result->computing_facility)
			{ ?>
						<br><b>Computing Facility</b> : 
						<?php echo $result->computing_facility;?><?php 
			} ?>

			<!-- database_development -->
			<?php 
			if($result->database_development)
			{ ?>
						<br><b>Database/s</b> : 
						<?php echo $result->database_development;?><?php 
			} ?>

			<!-- software_tools_developed-->
			<?php 
			if($result->software_tools_developed)
			{ ?>
						<br><b>Software Tools</b> 
						<?php echo $result->software_tools_developed;?><?php 
			} ?>
			
			<!-- name_of_the_developer-->
			<?php 
			if($result->name_of_the_developer)
			{ ?>
						<br><b>Name of the Developer</b> : 
						<?php echo $result->name_of_the_developer;?><?php 
			} ?>

			<!-- address_of_the_developer-->
			<?php 
			if($result->address_of_the_developer)
			{ ?>
						<br><b>Address of the Developer</b> : 
						<?php echo $result->address_of_the_developer;?><?php 
			} ?>
<br>
			<!-- keywords-->
			<?php 
			if($result->keywords)
			{ ?>
						<br><b>Keywords</b> : 
						<?php echo $result->keywords;?><?php 
			} ?>

			</li><br><br>
		<?php 
		}
		?> </ol>
		 <?php  ?><?php
	}
	else
	{
		?>  <br /><br /><center><b> No result found for '<?php $flag=true;
		echo $search_terms;
		?>' </b><center><br /><br /><br />
		
	<?php
	}
}
?>
			<div align="left" style="font:Verdana, Arial, Helvetica, sans-serif;font-size:16px;padding-left:30px"  >
			<?php echo $this->pagination->create_links(); ?><br />
 <br />
<br />
</div>
</td>
<td width="4%" >	</td>
		<td width="1%" background="<?php echo base_url();?>images/bg_right.gif"> </td>
		
		
</td>
<td width="4%">
</td>

</table>

<?php if($flag==true) {?>
<br /><br /> 
 &nbsp;   
<br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php }?>

</div>

