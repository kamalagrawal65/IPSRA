<?php
class nitin_uploader extends Controller {
    var $first=" ";
	var $last=" ";
	var $middle=" ";
	var $email=" ";
	var $add=" ";

function nitin_uploader()
	{
		parent::Controller();
		$this->load->library('parser');	
	    $this->load->library('simplexml');
		$this->load->model('upload_model');
	}
	
function upload_ibira()  
 {  
			
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}
 			$fname='ibira';
	    	$filename = $fname.'.xml'; 				 
            $xmlfile=site_url()."uploads/".$filename;  
            $xmlRaw = file_get_contents($xmlfile);  
            $xmlData = $this->simplexml->xml_parse($xmlRaw);  
			echo "<h2 align='center'><a href='save_ibira'>Click Here to upload following records in Ibira Table</a></h2>";  
             $result='<table cellpadding="0" cellspacing="0" width="100%" border><thead>';
//Ibira Table Heading
            $result .= '<td>master_list</td>';
			$result .= '<td>nar_sr_no</td>';
			$result .= '<td>main_clusters</td>';
			$result .= '<td>main_category</td>';
			$result .= '<td>sub_category</td>';
			$result .= '<td>Name_of_Resource</td>';
			$result .= '<td>url_of_resource</td>';
			$result .= '<td>full_name_of_resource</td>';
			$result .= '<td>brief_description</td>';
			$result .= '<td>subject_area</td>';
			$result .= '<td>name_of_the_organization</td>';
			$result .= '<td>url_of_the_organization</td>';
			$result .= '<td>address_of_the_organization</td>';
			$result .= '<td>publisher</td>';
			$result .= '<td>state</td>';
			$result .= '<td>Country</td>';
			$result .= '<td>publishing_since</td>';
			$result .= '<td>isi_if_2009</td>';
			$result .= '<td>indexing_abstracting</td>';
			$result .= '<td>frequency</td>';
			$result .= '<td>issn_online</td>';
			$result .= '<td>issn_print</td>';
			$result .= '<td>editorial_board</td>';
			$result .= '<td>editorial_contact</td>';
			$result .= '<td>editor</td>';
			$result .= '<td>Year</td>';
			$result .= '<td>contact_person</td>';
			$result .= '<td>contact_email</td>';
			$result .= '<td>language</td>';
			$result .= '<td>department_center</td>';
			$result .= '<td>dbt_designated_center</td>';
			$result .= '<td>computing_facility</td>';
			$result .= '<td>database_development</td>';
			$result .= '<td>software_tools_developed</td>';
			$result .= '<td>publication_history</td>';
			$result .= '<td>areas_of_research</td>';
			$result .= '<td>research_grant_support</td>';
			$result .= '<td>name_of_the_developer</td>';
			$result .= '<td>address_of_the_developer</td>';
			$result .= '<td>accesibility</td>';
			$result .= '<td>keywords</td>';
			$result .= '<td>associated_institutes</td>';
			$result .= '<td>associated_country</td>';
			$result .= '<td>view_pub</td>';
			$result .= '<td>inventor</td>';
			$result .= '<td>assignee</td>';
			$result .= '<td>application_no</td>';
			$result .= '<td>filed_on</td>';
			$result .= '<td>source</td>';
			             
             
             $result .= '</thead><tbody>';
//      For ibira Table       
            foreach($xmlData['ibira'] as $row)  
             {  
  
					$result .= '<tr valign="top">';  
					
					$result .= '<td>'.$row['master_list'].'</td>';
					$result .= '<td>'.$row['nar_sr_no'].'</td>';
					$result .= '<td>'.$row['main_clusters'].'</td>';
					$result .= '<td>'.$row['main_category'].'</td>';
					$result .= '<td>'.$row['sub_category'].'</td>';
					$result .= '<td>'.$row['Name_of_Resource'].'</td>';
					$result .= '<td>'.$row['url_of_resource'].'</td>';
					
					if(is_null($row['full_name_of_resource']))
					{
						$result .= '<td>NULL</td>';
					}
					else 
					{
						$result .= '<td>'.$row['full_name_of_resource'].'</td>';	
					}
					
					
					$result .= '<td>'.$row['brief_description'].'</td>';
					$result .= '<td>'.$row['subject_area'].'</td>';
					$result .= '<td>'.$row['name_of_the_organization'].'</td>';
					$result .= '<td>'.$row['url_of_the_organization'].'</td>';
					$result .= '<td>'.$row['address_of_the_organization'].'</td>';
					$result .= '<td>'.$row['publisher'].'</td>';
					$result .= '<td>'.$row['state'].'</td>';
					$result .= '<td>'.$row['Country'].'</td>';
					$result .= '<td>'.$row['publishing_since'].'</td>';
					$result .= '<td>'.$row['isi_if_2009'].'</td>';
					$result .= '<td>'.$row['indexing_abstracting'].'</td>';
					$result .= '<td>'.$row['frequency'].'</td>';
					$result .= '<td>'.$row['issn_online'].'</td>';
					$result .= '<td>'.$row['issn_print'].'</td>';
					$result .= '<td>'.$row['editorial_board'].'</td>';
					$result .= '<td>'.$row['editorial_contact'].'</td>';
					$result .= '<td>'.$row['editor'].'</td>';
					$result .= '<td>'.$row['Year'].'</td>';
					$result .= '<td>'.$row['contact_person'].'</td>';
					$result .= '<td>'.$row['contact_email'].'</td>';
					$result .= '<td>'.$row['language'].'</td>';
					$result .= '<td>'.$row['department_center'].'</td>';
					$result .= '<td>'.$row['dbt_designated_center'].'</td>';
					$result .= '<td>'.$row['computing_facility'].'</td>';
					$result .= '<td>'.$row['database_development'].'</td>';
					$result .= '<td>'.$row['software_tools_developed'].'</td>';
					$result .= '<td>'.$row['publication_history'].'</td>';
					$result .= '<td>'.$row['areas_of_research'].'</td>';
					$result .= '<td>'.$row['research_grant_support'].'</td>';
					$result .= '<td>'.$row['name_of_the_developer'].'</td>';
					$result .= '<td>'.$row['address_of_the_developer'].'</td>';
					$result .= '<td>'.$row['accesibility'].'</td>';
					$result .= '<td>'.$row['keywords'].'</td>';
					$result .= '<td>'.$row['associated_institutes'].'</td>';
					$result .= '<td>'.$row['associated_country'].'</td>';
					$result .= '<td>'.$row['view_pub'].'</td>';
					$result .= '<td>'.$row['inventor'].'</td>';
					$result .= '<td>'.$row['assignee'].'</td>';
					$result .= '<td>'.$row['application_no'].'</td>';
					$result .= '<td>'.$row['filed_on'].'</td>';
					$result .= '<td>'.$row['source'].'</td>';
										
					
					$result .= '</tr>';  
					  
             }
               
             
               	echo   $result;
               
        		echo "</tbody></table>";  
                return ;  
     }  

function save_ibira()  
 {  
			
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}
 			
 			$fname='ibira';
	    	$filename = $fname.'.xml'; 				 
            $xmlfile=site_url()."uploads/".$filename;  
            $xmlRaw = file_get_contents($xmlfile);  
            $xmlData = $this->simplexml->xml_parse($xmlRaw);  

// Heading of Ibira Table for Records which are Duplicate 
             $result='<table cellpadding="0" cellspacing="0" width="100%" border><thead>';
//Ibira Table Heading
            $result .= '<td>master_list</td>';
			$result .= '<td>nar_sr_no</td>';
			$result .= '<td>main_clusters</td>';
			$result .= '<td>main_category</td>';
			$result .= '<td>sub_category</td>';
			$result .= '<td>Name_of_Resource</td>';
			$result .= '<td>url_of_resource</td>';
			$result .= '<td>full_name_of_resource</td>';
			$result .= '<td>brief_description</td>';
			$result .= '<td>subject_area</td>';
			$result .= '<td>name_of_the_organization</td>';
			$result .= '<td>url_of_the_organization</td>';
			$result .= '<td>address_of_the_organization</td>';
			$result .= '<td>publisher</td>';
			$result .= '<td>state</td>';
			$result .= '<td>Country</td>';
			$result .= '<td>publishing_since</td>';
			$result .= '<td>isi_if_2009</td>';
			$result .= '<td>indexing_abstracting</td>';
			$result .= '<td>frequency</td>';
			$result .= '<td>issn_online</td>';
			$result .= '<td>issn_print</td>';
			$result .= '<td>editorial_board</td>';
			$result .= '<td>editorial_contact</td>';
			$result .= '<td>editor</td>';
			$result .= '<td>Year</td>';
			$result .= '<td>contact_person</td>';
			$result .= '<td>contact_email</td>';
			$result .= '<td>language</td>';
			$result .= '<td>department_center</td>';
			$result .= '<td>dbt_designated_center</td>';
			$result .= '<td>computing_facility</td>';
			$result .= '<td>database_development</td>';
			$result .= '<td>software_tools_developed</td>';
			$result .= '<td>publication_history</td>';
			$result .= '<td>areas_of_research</td>';
			$result .= '<td>research_grant_support</td>';
			$result .= '<td>name_of_the_developer</td>';
			$result .= '<td>address_of_the_developer</td>';
			$result .= '<td>accesibility</td>';
			$result .= '<td>keywords</td>';
			$result .= '<td>associated_institutes</td>';
			$result .= '<td>associated_country</td>';
			$result .= '<td>view_pub</td>';
			$result .= '<td>inventor</td>';
			$result .= '<td>assignee</td>';
			$result .= '<td>application_no</td>';
			$result .= '<td>filed_on</td>';
			$result .= '<td>source</td>';
            $result .= '</thead><tbody>';
            
            
//      Inserting records in ibira Table
			$file='ibira';
			$records_saved = 0;
			$records_notsaved = 0;       
            foreach($xmlData['ibira'] as $row)  
             {  
  				
             	$data = array(
					'master_list'  =>  $row['master_list'], 
					'nar_sr_no'  =>  $row['nar_sr_no'], 
					'main_clusters'  =>  $row['main_clusters'], 
					'main_category'  =>  $row['main_category'], 
					'sub_category'  =>  $row['sub_category'], 
					'Name_of_Resource'  =>  $row['Name_of_Resource'], 
					'url_of_resource'  =>  $row['url_of_resource'], 
					'full_name_of_resource'  =>  $row['full_name_of_resource'], 
					'brief_description'  =>  $row['brief_description'], 
					'subject_area'  =>  $row['subject_area'], 
					'name_of_the_organization'  =>  $row['name_of_the_organization'], 
					'url_of_the_organization'  =>  $row['url_of_the_organization'], 
					'address_of_the_organization'  =>  $row['address_of_the_organization'], 
					'publisher'  =>  $row['publisher'], 
					'state'  =>  $row['state'], 
					'Country'  =>  $row['Country'], 
					'publishing_since'  =>  $row['publishing_since'], 
					'isi_if_2009'  =>  $row['isi_if_2009'], 
					'indexing_abstracting'  =>  $row['indexing_abstracting'], 
					'frequency'  =>  $row['frequency'], 
					'issn_online'  =>  $row['issn_online'], 
					'issn_print'  =>  $row['issn_print'], 
					'editorial_board'  =>  $row['editorial_board'], 
					'editorial_contact'  =>  $row['editorial_contact'], 
					'editor'  =>  $row['editor'], 
					'Year'  =>  $row['Year'], 
					'contact_person'  =>  $row['contact_person'], 
					'contact_email'  =>  $row['contact_email'], 
					'language'  =>  $row['language'], 
					'department_center'  =>  $row['department_center'], 
					'dbt_designated_center'  =>  $row['dbt_designated_center'], 
					'computing_facility'  =>  $row['computing_facility'], 
					'database_development'  =>  $row['database_development'], 
					'software_tools_developed'  =>  $row['software_tools_developed'], 
					'publication_history'  =>  $row['publication_history'], 
					'areas_of_research'  =>  $row['areas_of_research'], 
					'research_grant_support'  =>  $row['research_grant_support'], 
					'name_of_the_developer'  =>  $row['name_of_the_developer'], 
					'address_of_the_developer'  =>  $row['address_of_the_developer'], 
					'accesibility'  =>  $row['accesibility'], 
					'keywords'  =>  $row['keywords'], 
					'associated_institutes'  =>  $row['associated_institutes'], 
					'associated_country'  =>  $row['associated_country'], 
					'view_pub'  =>  $row['view_pub'], 
					'inventor'  =>  $row['inventor'], 
					'assignee'  =>  $row['assignee'], 
					'application_no'  =>  $row['application_no'], 
					'filed_on'  =>  $row['filed_on'], 
					'source'  =>  $row['source'] 
             					);

             if($this->upload_model->insert_data($file,$data))
             		$records_saved=$records_saved+1;
             else

             {
					$records_notsaved=$records_notsaved+1;
             		$result .= '<tr valign="top">';  
					$result .= '<td>'.$row['master_list'].'</td>';
					$result .= '<td>'.$row['nar_sr_no'].'</td>';
					$result .= '<td>'.$row['main_clusters'].'</td>';
					$result .= '<td>'.$row['main_category'].'</td>';
					$result .= '<td>'.$row['sub_category'].'</td>';
					$result .= '<td>'.$row['Name_of_Resource'].'</td>';
					$result .= '<td>'.$row['url_of_resource'].'</td>';
					$result .= '<td>'.$row['full_name_of_resource'].'</td>';
					$result .= '<td>'.$row['brief_description'].'</td>';
					$result .= '<td>'.$row['subject_area'].'</td>';
					$result .= '<td>'.$row['name_of_the_organization'].'</td>';
					$result .= '<td>'.$row['url_of_the_organization'].'</td>';
					$result .= '<td>'.$row['address_of_the_organization'].'</td>';
					$result .= '<td>'.$row['publisher'].'</td>';
					$result .= '<td>'.$row['state'].'</td>';
					$result .= '<td>'.$row['Country'].'</td>';
					$result .= '<td>'.$row['publishing_since'].'</td>';
					$result .= '<td>'.$row['isi_if_2009'].'</td>';
					$result .= '<td>'.$row['indexing_abstracting'].'</td>';
					$result .= '<td>'.$row['frequency'].'</td>';
					$result .= '<td>'.$row['issn_online'].'</td>';
					$result .= '<td>'.$row['issn_print'].'</td>';
					$result .= '<td>'.$row['editorial_board'].'</td>';
					$result .= '<td>'.$row['editorial_contact'].'</td>';
					$result .= '<td>'.$row['editor'].'</td>';
					$result .= '<td>'.$row['Year'].'</td>';
					$result .= '<td>'.$row['contact_person'].'</td>';
					$result .= '<td>'.$row['contact_email'].'</td>';
					$result .= '<td>'.$row['language'].'</td>';
					$result .= '<td>'.$row['department_center'].'</td>';
					$result .= '<td>'.$row['dbt_designated_center'].'</td>';
					$result .= '<td>'.$row['computing_facility'].'</td>';
					$result .= '<td>'.$row['database_development'].'</td>';
					$result .= '<td>'.$row['software_tools_developed'].'</td>';
					$result .= '<td>'.$row['publication_history'].'</td>';
					$result .= '<td>'.$row['areas_of_research'].'</td>';
					$result .= '<td>'.$row['research_grant_support'].'</td>';
					$result .= '<td>'.$row['name_of_the_developer'].'</td>';
					$result .= '<td>'.$row['address_of_the_developer'].'</td>';
					$result .= '<td>'.$row['accesibility'].'</td>';
					$result .= '<td>'.$row['keywords'].'</td>';
					$result .= '<td>'.$row['associated_institutes'].'</td>';
					$result .= '<td>'.$row['associated_country'].'</td>';
					$result .= '<td>'.$row['view_pub'].'</td>';
					$result .= '<td>'.$row['inventor'].'</td>';
					$result .= '<td>'.$row['assignee'].'</td>';
					$result .= '<td>'.$row['application_no'].'</td>';
					$result .= '<td>'.$row['filed_on'].'</td>';
					$result .= '<td>'.$row['source'].'</td>';
					$result .= '</tr>';  
             } 
             								
             
        }
        
    	echo  "<h1 align='center'>".$records_saved." Records Inserted Successfully.</h1>";
		$result .= '</tbody></table>';
		echo  "<h1 align='center'>Following ".$records_notsaved." Records Not Inserteted</h1>";
		$this->upload_model->update_ibira();		
		echo $result;          
     }  

function upload_pub()  
 {  
			
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}
 			$fname='publications';
	    	$filename = $fname.'.xml'; 				 
            $xmlfile=site_url()."uploads/".$filename;  
            $xmlRaw = file_get_contents($xmlfile);  
            $xmlData = $this->simplexml->xml_parse($xmlRaw);  
			echo "<h2 align='center'><a href='save_pub'>Click Here to upload following records in publications Table</a></h2>";  
            $result='<table cellpadding="0" cellspacing="0" width="100%" border><thead>';
//publications Table Heading
			$result .= '<td>s_no</td>';
			$result .= '<td>master_list</td>';
			$result .= '<td>ref_type</td>';
			$result .= '<td>ref_no</td>';
			$result .= '<td>rec_no</td>';
			$result .= '<td>contributors</td>';
			$result .= '<td>complete_address</td>';
			$result .= '<td>title_of_the_paper</td>';
			$result .= '<td>secondry_title</td>';
			$result .= '<td>full_title</td>';
			$result .= '<td>pages</td>';
			$result .= '<td>volume</td>';
			$result .= '<td>issue_no</td>';
			$result .= '<td>edition</td>';
			$result .= '<td>pub_keywords</td>';
			$result .= '<td>pub_year</td>';
			$result .= '<td>pub_date</td>';
			$result .= '<td>issn</td>';
			$result .= '<td>ass_no</td>';
			$result .= '<td>abstract</td>';
			$result .= '<td>notes</td>';
			$result .= '<td>pubmed_urls</td>';
			$result .= '<td>electronic_resource_number</td>';
			$result .= '<td>pap_language</td>';
			             			             			             
			             
            $result .= '</thead><tbody>';
//      For publications Table       
            foreach($xmlData['publications'] as $row)  
             {  
  
			$result .= '<tr valign="top">';  
			$result .= '<td>'.$row['s_no'].'</td>';
			$result .= '<td>'.$row['master_list'].'</td>';
			$result .= '<td>'.$row['ref_type'].'</td>';
			$result .= '<td>'.$row['ref_no'].'</td>';
			$result .= '<td>'.$row['rec_no'].'</td>';
			$result .= '<td>'.$row['contributors'].'</td>';
			$result .= '<td>'.$row['complete_address'].'</td>';
			$result .= '<td>'.$row['title_of_the_paper'].'</td>';
			$result .= '<td>'.$row['secondry_title'].'</td>';
			$result .= '<td>'.$row['full_title'].'</td>';
			$result .= '<td>'.$row['pages'].'</td>';
			$result .= '<td>'.$row['volume'].'</td>';
			$result .= '<td>'.$row['issue_no'].'</td>';
			$result .= '<td>'.$row['edition'].'</td>';
			$result .= '<td>'.$row['pub_keywords'].'</td>';
			$result .= '<td>'.$row['pub_year'].'</td>';
			$result .= '<td>'.$row['pub_date'].'</td>';
			$result .= '<td>'.$row['issn'].'</td>';
			$result .= '<td>'.$row['ass_no'].'</td>';
			$result .= '<td>'.$row['abstract'].'</td>';
			$result .= '<td>'.$row['notes'].'</td>';
			$result .= '<td>'.$row['pubmed_urls'].'</td>';
			$result .= '<td>'.$row['electronic_resource_number'].'</td>';
			$result .= '<td>'.$row['pap_language'].'</td>';
			$result .= '</tr>';  
					  
             }
               
             
               	echo   $result;
               
        		echo "</tbody></table>";  
                return ;  
     }  

function save_pub()  
 {  
			
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}
 			
 			$fname='publications';
	    	$filename = $fname.'.xml'; 				 
            $xmlfile=site_url()."uploads/".$filename;  
            $xmlRaw = file_get_contents($xmlfile);  
            $xmlData = $this->simplexml->xml_parse($xmlRaw);  

// Heading of publications Table for Records which are Duplicate 
             $result='<table cellpadding="0" cellspacing="0" width="100%" border><thead>';
//publications Table Heading
			$result .= '<td>s_no</td>';
			$result .= '<td>master_list</td>';
			$result .= '<td>ref_type</td>';
			$result .= '<td>ref_no</td>';
			$result .= '<td>rec_no</td>';
			$result .= '<td>contributors</td>';
			$result .= '<td>complete_address</td>';
			$result .= '<td>title_of_the_paper</td>';
			$result .= '<td>secondry_title</td>';
			$result .= '<td>full_title</td>';
			$result .= '<td>pages</td>';
			$result .= '<td>volume</td>';
			$result .= '<td>issue_no</td>';
			$result .= '<td>edition</td>';
			$result .= '<td>pub_keywords</td>';
			$result .= '<td>pub_year</td>';
			$result .= '<td>pub_date</td>';
			$result .= '<td>issn</td>';
			$result .= '<td>ass_no</td>';
			$result .= '<td>abstract</td>';
			$result .= '<td>notes</td>';
			$result .= '<td>pubmed_urls</td>';
			$result .= '<td>electronic_resource_number</td>';
			$result .= '<td>pap_language</td>';
			                         
            
//      Inserting records in publications Table
			$file='publications';
			$records_saved = 0;
			$records_notsaved = 0;       
            foreach($xmlData['publications'] as $row)  
             {  
  				
             	$data = array(
				's_no' => $row['s_no'],
				'master_list' => $row['master_list'],
				'ref_type' => $row['ref_type'],
				'ref_no' => $row['ref_no'],
				'rec_no' => $row['rec_no'],
				'contributors' => $row['contributors'],
				'complete_address' => $row['complete_address'],
				'title_of_the_paper' => $row['title_of_the_paper'],
				'secondry_title' => $row['secondry_title'],
				'full_title' => $row['full_title'],
				'pages' => $row['pages'],
				'volume' => $row['volume'],
				'issue_no' => $row['issue_no'],
				'edition' => $row['edition'],
				'pub_keywords' => $row['pub_keywords'],
				'pub_year' => $row['pub_year'],
				'pub_date' => $row['pub_date'],
				'issn' => $row['issn'],
				'ass_no' => $row['ass_no'],
				'abstract' => $row['abstract'],
				'notes' => $row['notes'],
				'pubmed_urls' => $row['pubmed_urls'],
				'electronic_resource_number' => $row['electronic_resource_number'],
				'pap_language' => $row['pap_language']
				             		);

             if($this->upload_model->insert_data($file,$data))
             		$records_saved=$records_saved+1;
             else
             {
					$records_notsaved=$records_notsaved+1;
			$result .= '<tr valign="top">';  
			$result .= '<td>'.$row['s_no'].'</td>';
			$result .= '<td>'.$row['master_list'].'</td>';
			$result .= '<td>'.$row['ref_type'].'</td>';
			$result .= '<td>'.$row['ref_no'].'</td>';
			$result .= '<td>'.$row['rec_no'].'</td>';
			$result .= '<td>'.$row['contributors'].'</td>';
			$result .= '<td>'.$row['complete_address'].'</td>';
			$result .= '<td>'.$row['title_of_the_paper'].'</td>';
			$result .= '<td>'.$row['secondry_title'].'</td>';
			$result .= '<td>'.$row['full_title'].'</td>';
			$result .= '<td>'.$row['pages'].'</td>';
			$result .= '<td>'.$row['volume'].'</td>';
			$result .= '<td>'.$row['issue_no'].'</td>';
			$result .= '<td>'.$row['edition'].'</td>';
			$result .= '<td>'.$row['pub_keywords'].'</td>';
			$result .= '<td>'.$row['pub_year'].'</td>';
			$result .= '<td>'.$row['pub_date'].'</td>';
			$result .= '<td>'.$row['issn'].'</td>';
			$result .= '<td>'.$row['ass_no'].'</td>';
			$result .= '<td>'.$row['abstract'].'</td>';
			$result .= '<td>'.$row['notes'].'</td>';
			$result .= '<td>'.$row['pubmed_urls'].'</td>';
			$result .= '<td>'.$row['electronic_resource_number'].'</td>';
			$result .= '<td>'.$row['pap_language'].'</td>';
			$result .= '</tr>';  
            } 
             								
             
        }
        
    	echo  "<h1 align='center'>".$records_saved." Records Inserted Successfully.</h1>";
		$result .= '</tbody></table>';
		echo  "<h1 align='center'>Following ".$records_notsaved." Records Not Inserteted</h1>";		
		echo $result;          
     }  
     

function upload_courses()  
 {  
			
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}
 			$fname='inst_courses';
	    	$filename = $fname.'.xml'; 				 
            $xmlfile=site_url()."uploads/".$filename;  
            $xmlRaw = file_get_contents($xmlfile);  
            $xmlData = $this->simplexml->xml_parse($xmlRaw);  
			echo "<h2 align='center'><a href='save_courses'>Click Here to upload following records in inst_courses Table</a></h2>";  
            $result='<table cellpadding="0" cellspacing="0" width="100%" border><thead>';
//inst_courses Table Heading
			$result .= '<td>s_no</td>';
			$result .= '<td>master_list</td>';
			$result .= '<td>department</td>';
			$result .= '<td>course_name</td>';
			$result .= '<td>eligiibility</td>';
			$result .= '<td>course_url</td>';
			$result .= '<td>available_since</td>';
			$result .= '<td>sujects</td>';
			$result .= '<td>distance_mode</td>';
			$result .= '<td>degree_type</td>';
			$result .= '<td>course_duration</td>';
			$result .= '<td>degree_requirements</td>';
			$result .= '<td>university</td>';
            $result .= '</thead><tbody>';
//      For inst_courses Table       
            foreach($xmlData['inst_courses'] as $row)  
             {  
  			$result .= '<tr valign="top">';  
			$result .= '<td>'.$row['s_no'].'</td>';
			$result .= '<td>'.$row['master_list'].'</td>';
			$result .= '<td>'.$row['department'].'</td>';
			$result .= '<td>'.$row['course_name'].'</td>';
			$result .= '<td>'.$row['eligiibility'].'</td>';
			$result .= '<td>'.$row['course_url'].'</td>';
			$result .= '<td>'.$row['available_since'].'</td>';
			$result .= '<td>'.$row['sujects'].'</td>';
			$result .= '<td>'.$row['distance_mode'].'</td>';
			$result .= '<td>'.$row['degree_type'].'</td>';
			$result .= '<td>'.$row['course_duration'].'</td>';
			$result .= '<td>'.$row['degree_requirements'].'</td>';
			$result .= '<td>'.$row['university'].'</td>';
			$result .= '</tr>';  
			}
			echo   $result;
            echo "</tbody></table>";  
                return ;  
     }  

function save_courses()  
 {  
			
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}
 			
 			$fname='inst_courses';
	    	$filename = $fname.'.xml'; 				 
            $xmlfile=site_url()."uploads/".$filename;  
            $xmlRaw = file_get_contents($xmlfile);  
            $xmlData = $this->simplexml->xml_parse($xmlRaw);  

// Heading of publications Table for Records which are Duplicate 
             $result='<table cellpadding="0" cellspacing="0" width="100%" border><thead>';
//publications Table Heading
			$result .= '<td>s_no</td>';
			$result .= '<td>master_list</td>';
			$result .= '<td>department</td>';
			$result .= '<td>course_name</td>';
			$result .= '<td>eligiibility</td>';
			$result .= '<td>course_url</td>';
			$result .= '<td>available_since</td>';
			$result .= '<td>sujects</td>';
			$result .= '<td>distance_mode</td>';
			$result .= '<td>degree_type</td>';
			$result .= '<td>course_duration</td>';
			$result .= '<td>degree_requirements</td>';
			$result .= '<td>university</td>';
            $result .= '</thead><tbody>';
                         
//      Inserting records in publications Table
			$file='inst_courses';
			$records_saved = 0;
			$records_notsaved = 0;       
            foreach($xmlData['inst_courses'] as $row)  
             {  
  				
             	$data = array(
				's_no' => $row['s_no'],
				'master_list' => $row['master_list'],
				'department' => $row['department'],
				'course_name' => $row['course_name'],
				'eligiibility' => $row['eligiibility'],
				'course_url' => $row['course_url'],
				'available_since' => $row['available_since'],
				'sujects' => $row['sujects'],
				'distance_mode' => $row['distance_mode'],
				'degree_type' => $row['degree_type'],
				'course_duration' => $row['course_duration'],
				'degree_requirements' => $row['degree_requirements'],
				'university' => $row['university']
             					);

             if($this->upload_model->insert_data($file,$data))
             		$records_saved=$records_saved+1;
             else
             {
					$records_notsaved=$records_notsaved+1;
			$result .= '<tr valign="top">';  
			$result .= '<td>'.$row['s_no'].'</td>';
			$result .= '<td>'.$row['master_list'].'</td>';
			$result .= '<td>'.$row['department'].'</td>';
			$result .= '<td>'.$row['course_name'].'</td>';
			$result .= '<td>'.$row['eligiibility'].'</td>';
			$result .= '<td>'.$row['course_url'].'</td>';
			$result .= '<td>'.$row['available_since'].'</td>';
			$result .= '<td>'.$row['sujects'].'</td>';
			$result .= '<td>'.$row['distance_mode'].'</td>';
			$result .= '<td>'.$row['degree_type'].'</td>';
			$result .= '<td>'.$row['course_duration'].'</td>';
			$result .= '<td>'.$row['degree_requirements'].'</td>';
			$result .= '<td>'.$row['university'].'</td>';
			$result .= '</tr>';  
            } 
             								
             
        }
        
    	echo  "<h1 align='center'>".$records_saved." Records Inserted Successfully.</h1>";
		$result .= '</tbody></table>';
		echo  "<h1 align='center'>Following ".$records_notsaved." Records Not Inserteted</h1>";		
		echo $result;          
     }  
     
     
     
     
     
	
}
?>
