

<br />

<br /><br /><br /><br />
<div style="float:right; width:70%;padding-right:3px; ">

<?php echo form_open('form/changepassword');?>

<font color="#FF0000" style="font:'Times New Roman', Times, serif;font-size:14px"><?php echo $this->session->userdata('error_message');?></font><br /><br />
<table width="70%" border="1" style="font:'Times New Roman', Times, serif;font-size:16px">
  <tr>
    <td align="right"> <label for="qsearch">Old Password </label></td>
    <td><input type="password" style="width:100%" name="pass" /> <font color="#FF0000"> <?php echo $this->validation->pass_error; ?></font></td>
    <td>  <font color="#FF0000">*</font> </td>
  </tr>
  <tr>
    <td> <label for="qsearch">New Password</label></td>
    <td><input type="password" style="width:100%" name="newpass" /> <font color="#FF0000"><?php echo $this->validation->newpass_error; ?></font></td>
    <td><font color="#FF0000">*</font></td>
  </tr>
  <tr>
    <td><label for="qsearch">Confirm Password</label></td>
    <td><input type="password"  style="width:100%" name="confirmpass" /><font color="#FF0000"><?php echo $this->validation->confirmpass_error; ?></font></td>
    <td><font color="#FF0000">*</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="button" name="Submit" value="Change Password" /></td>
    <td></td>
  </tr>
</table>


	      
    
  </form>

</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />