<br>
<div style="float:right; width:70%;padding-right:3px; ">
<table width="100%"  bordercolordark="#999999" align="right" style="font-family:'Times New Roman', Times, serif;font-size:16px" >
    <td style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:14px"s> <b>Personal Information</b></td>
   <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">User Name</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('u_name');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
   <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Email Id</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('u_id');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Designation</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('designation');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Name of the Institute</label></td>
    <td >&nbsp;<?php echo  $this->session->userdata('name_of_institute');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Address of the Institute</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('addr_institute');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Country</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('ins_country');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
   <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Highest Qualification</label></td>
    <td>&nbsp;<?php if ($this->session->userdata('u_highedu')=='Under Graduate'){echo 'Under Graduate';}?> 
			<?php if ($this->session->userdata('u_highedu')=='Graduate'){echo 'Graduate';}?>
			<?php if ($this->session->userdata('u_highedu')=='Post Graduate'){echo 'Post Graduate';}?>
			<?php if ($this->session->userdata('u_highedu')=='Ph.D.'){echo 'Ph.D.';}?> &nbsp;</p></td>
			<td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
    <?php if($this->session->userdata('subject_area')){?>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Subject Area</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('subject_area');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>   </tr>
    <?php }?>
    <?php if($this->session->userdata('u_contact')){?>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Contact No.</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('u_contact');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
    <?php }?>
    <?php if($this->session->userdata('about_me')){?>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Aobut Me</label></td>
    <td>&nbsp;<?php echo  $this->session->userdata('about_me');?> &nbsp;</p></td>
    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
    <?php }?>
    <?php if($this->session->userdata('int_area')){?>
  <tr><td>&nbsp;<tr>
    <td style="vertical-align:middle"><label for="qsearch">Interest Areas</label></td>
    <td>&nbsp;<?php echo $this->session->userdata('int_area');?>            
      </p></td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
    <?php }?>
</table>
</div>