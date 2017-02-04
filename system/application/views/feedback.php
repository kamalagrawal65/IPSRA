
<div  style="float:left; width:20%; padding-left:4px ;">&nbsp;</div>
<div align="left" style="font:'Times New Roman', Times, serif;font-size:14px;letter-spacing:2;width:79%;float:right; ">
   <?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' );echo form_open('form/feedback',$attributes); ?>
   <table width="75%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td colspan=2 style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"> <b>Kindly Provide your Feed back in the Fields Below :</b></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr> <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Name</label></td>
    <td>&nbsp;<p>  <input type="text" name="name" style="width:200px" value="<?php echo $this->validation->name;?>"  />
   <font color="#FF0000">* <?php echo $this->validation->name_error; ?></font>	 </p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr> <td style="vertical-align:middle">&nbsp;<label for="qsearch">Designation</label></td>
    <td >&nbsp;<p>	 <input type="text" name="designation" style="width:200px" value="<?php echo $this->validation->designation;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->designation_error;?></font>
	  </p></td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr> <td style="vertical-align:middle">&nbsp;<label for="qsearch">Organisation</label></td>
    <td>&nbsp;  <p>    <input type="text" name="company" style="width:200px" value="<?php echo $this->validation->company;?>" />
	  <font color="#FF0000">*<?php echo $this->validation->company_error;?></font>
     </p></td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>  
  <tr> <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Email</label></td>
    <td>&nbsp;<p><input type="text" name="email"  style="width:200px" value="<?php echo $this->validation->email;?>"  />
        <font color="#FF0000">*<?php echo $this->validation->email_error; ?></font>
	 </p></td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>  <td style="vertical-align:middle">&nbsp;<label for="qsearch">FeedBack</label></td>
    <td>&nbsp; <p>  <textarea name="query" style="width:200px; height:100px"> <?php echo $this->validation->query;?></textarea>           
      </p></td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>    <td>&nbsp;</td>    <td style="vertical-align:middle">&nbsp; <p ><input class="button" name="text4" type="submit">
     </p></td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>  <td>&nbsp;</td>      <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>  <td>&nbsp;</td>      <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
</table>
   	</form>
	
	
	

	