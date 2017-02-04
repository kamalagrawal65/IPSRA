




<br />
<br />
<br />
<br /><br />
<br />

<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">
	 <?php echo  $this->session->userdata('error_message'); ?> 
	
	
<?php $attributes = array( 'id' => 'contactform' ,'style' =>'padding:10px' ); echo form_open('form/login',$attributes);?>
   
 
 <table width="100%" bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
  <tr>
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"s> <b>Admin Login</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p><input type="text"  class="tbox" width="100%" name="username"  value="<?php echo $this->validation->username;?>"  />
	  <font color="#FF0000">*<?php echo $this->validation->username_error;?></font>
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<tr>
 <tr>
    <td style="vertical-align:middle"> &nbsp; <label for="qsearch">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td>&nbsp;<p>    <input type="password"   class="tbox" width="100%" name="pass" />
	<font color="#FF0000">*<?php echo $this->validation->pass_error;?></font>
	
	 </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td style="vertical-align:middle">&nbsp; <p >
	 <input type="submit" class="button" name="Submit" value="Login " />
	 &nbsp; &nbsp; &nbsp;<a href="<?php echo base_url();?>form/admin_forget_password" >Forget Password</a>
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








<br />
<br />
<br />
<br /><br />
<br />

<br />
<br />
<br />
<br /><br />
<br />
<br />
<br /><br />
<br />
<br />
<br /><br />
<br />
<br /><br />
<br />
<br />

<br />
<br />
<br />
<br /><br />
<br />
<br />
<br /><br />
<br />
<br />
<br /><br />
<br />
<br /><br />
<br />
<br />



	<!--<td align="right"><img src="<?php echo base_url();?>/images/temp02.png" width="153" height="135" alt="" border="0"></td>-->

</div>