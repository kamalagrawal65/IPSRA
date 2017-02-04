
<br />
<br><br><br>
<p style="font:Arial, Helvetica, sans-serif;font-size:14px">
welcome <?php  echo $this->session->userdata('u_id')?>
</p>

<br />
<p> Thanx For Registering Your Information Will Be Kept Secret  <br />
</p> <br />
<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );echo form_open('form/fullreg',$attributes); ?>
<table width="100%" border="1" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"s> <b>Institutional Details</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Designation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="designation" style="width:200px" value="<?php echo $this->validation->designation;?>" />
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
	  <font color="#FF0000">*<?php echo $this->validation->company_error;?></font>
	  </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Address of the Institute&nbsp;&nbsp;</label></td>
    <td>&nbsp;  <p>
       
       <textarea name="query" style="width:200px; height:100px"></textarea> 
        <font color="#FF0000">*<?php echo $this->validation->email_error; ?></font>
     </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Interest areas &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="query" style="width:200px; height:100px"></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp; <p >
      
     </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"><b>Personal Details  </b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>
	

	  <input type="text" name="designation" style="width:200px" value="<?php echo $this->validation->country;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->country;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td >&nbsp;<p>
	
	  <input type="text" name="name_of_institute" style="width:200px" value="<?php echo $this->validation->address;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->address;?></font>
	  </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Date Of Birth &nbsp;&nbsp;</label></td>
    <td>&nbsp;  <p>
       
        <input type="text" name="email"  style="width:200px" value="<?php echo $this->validation->dob;?>"  />
        <font color="#FF0000">*<?php echo $this->validation->dob; ?></font>
     </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle">&nbsp;<label for="qsearch">Aobut Me &nbsp;  </label></td>
    <td>&nbsp; <p>
           <textarea name="query" style="width:200px; height:100px"></textarea>            
      </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="vertical-align:middle">&nbsp; <p >
        <input class="button" name="text4" type="submit"> 
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
