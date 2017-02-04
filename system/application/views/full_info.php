
<br />
<br><br><br>
<br />
<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );echo form_open('form/full_reg',$attributes); ?>
<table width="100%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"s> <b>Personal Information</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Profession&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p><input type="text" name="designation" style="width:200px" value="<?php echo $this->validation->designation;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->designation_error;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Name of the Institute&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td >&nbsp;<p>
	
	  <input type="text" name="name_of_institute" style="width:200px" value="<?php echo $this->validation->name_of_institute;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->name_of_institute_error;?></font>
	  </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Address of the Institute&nbsp;&nbsp;</label></td>
    <td>&nbsp;  <p>
       
       <textarea name="addr_institute" style="width:200px; height:100px" ><?php echo $this->validation->addr_institute;?></textarea> 
        <font color="#FF0000">*<?php echo $this->validation->addr_institute_error; ?></font>
     </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="ins_country" style="width:200px" value="<?php echo $this->validation->ins_country;?>" />
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
			<option value= 'Under Graduate'>Under Graduate</option>
			<option value= 'Graduate' Selected >Graduate</option>
			<option value= 'Post Graduate'>Post Graduate</option>
			<option value= 'Ph.D.'>Ph.D.</option>
			</select>
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Subject Area&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	  <input type="text" name="subject_area" style="width:200px" value="" />
  	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
     <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Aobut Me &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="about_me" style="width:200px; height:100px"><?php echo $this->validation->about_me;?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Interest areas &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="int_area" style="width:200px; height:100px"><?php echo $this->validation->int_area;?></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Contact No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	  <input type="text" name="u_contact" style="width:200px " value="<?php echo $this->validation->u_contact;?>" />
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="vertical-align:middle">&nbsp; <p >
        <input class="button" name="text4" type="submit" value=" Complete Registration "> 
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
	<br /><br /><br /><br /><br />
