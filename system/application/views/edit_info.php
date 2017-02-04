

<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">
<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );echo form_open('form/edit_info',$attributes); ?>
<table width="100%"  bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"s> <b>Personal Information</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p><input type="text"   name="u_name" style="width:200px" value="<?php if($this->validation->u_name){echo $this->validation->u_name;}else{echo  $this->session->userdata('u_name');}?>" />
	<font color="#FF0000">*<?php echo $this->validation->u_name_error;?></font>
	 
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p><input type="text" disabled="disabled"  name="u_id" style="width:200px" value="<?php  echo  $this->session->userdata('u_id');?>" />
	
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Profession&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p><input type="text"  name="designation" style="width:200px" value="<?php if($this->validation->designation){echo $this->validation->designation;}else{ echo  $this->session->userdata('designation');}?>" />
	<font color="#FF0000">*<?php echo $this->validation->designation_error;?></font>
	  
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Name of the Institute&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td >&nbsp;<p>
	
	  <input type="text"  name="name_of_institute" style="width:200px" value="<?php if($this->validation->u_name){echo $this->validation->name_of_institute;}else{echo  $this->session->userdata('name_of_institute');}?>" />
	  <font color="#FF0000">*<?php echo $this->validation->name_of_institute_error;?></font>
	  </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Address of the Institute&nbsp;&nbsp;</label></td>
    <td>&nbsp;  <p>
       
       <textarea name="addr_institute"  style="width:200px; height:100px" ><?php if($this->validation->u_name){echo $this->validation->addr_institute;}else{ echo  $this->session->userdata('addr_institute');}?></textarea> 
       <font color="#FF0000">*<?php echo $this->validation->addr_institute_error; ?></font>
     </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="ins_country"  style="width:200px" value="<?php  if($this->validation->u_name){echo $this->validation->ins_country;}else{echo  $this->session->userdata('ins_country');}?>" />
		<font color="#FF0000">*<?php echo $this->validation->ins_country_error;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Highest Qualification &nbsp;  </label></td>
    <td>&nbsp; <p>
          	<select  name="u_highedu">
			<option value= 'Under Graduate'  <?php if ($this->session->userdata('u_highedu')=='Under Graduate'){echo selected;}?> >Under Graduate</option>
			<option value= 'Graduate'   <?php if ($this->session->userdata('u_highedu')=='Graduate'){echo selected;}?> >Graduate</option>
			<option value= 'Post Graduate'   <?php if ($this->session->userdata('u_highedu')=='Post Graduate'){echo selected;}?> >Post Graduate</option>
			<option value= 'Ph.D.'   <?php if ($this->session->userdata('u_highedu')=='Ph.D.'){echo selected;}?> >Ph.D.</option>
			</select>
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Subject Area&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	  <input type="text" name="subject_area" style="width:200px" value="<?php if($this->validation->subject_area){echo $this->validation->subject_area;}else{echo  $this->session->userdata('subject_area');}?>" />
  	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Contact No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	  <input type="text" name="u_contact" style="width:200px " value="<?php  if($this->validation->u_contact){echo $this->validation->u_contact;}else{echo  $this->session->userdata('u_contact');}?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Aobut Me &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="about_me"  style="width:200px; height:100px"><?php if($this->validation->u_name){echo $this->validation->about_me;}else{echo  $this->session->userdata('about_me');}?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Interest areas &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="int_area"  style="width:200px; height:100px"><?php if($this->validation->u_name){echo $this->validation->int_area;}else{echo $this->session->userdata('int_area');}?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td style="vertical-align:middle"> <input class="button" name="text4" type="submit" value=" Submit Details "> <p >
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