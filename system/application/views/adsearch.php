
	
</div></div>
<br /><br /> <h1 align="Center" class="heading" style="font-size:30px; ">Advanced Search</h1><br />
<table width="100%"><tr><td><h1 style="font-size:25px;"><center><a href="pub_search" target="_blank" style="border-bottom: 1px dotted #AE855C" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#AE855C'" >Search Publications</a></center></h1></td><td>
<h1 style="font-size:25px;"><center><a href="cou_search" target="_blank" style="border-bottom: 1px dotted #AE855C" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#AE855C'">Search Courses</center></td></tr></table>
<div id="content-outer"><div  class="container_16">


<?php $attributes = array('id' => 'myform');?>
<?php echo form_open('pages/adsearch1',$attributes);  ?>


<table align="center" width="100%" >
	<tr>
		<td width="30%" align="right" style="font-size:20px; color:#333333; text-align: right"><b>Select Search Category :&nbsp;</b></td>
		<td colspan=4 width="75%"  align="left" style="font-size:20px; color:#333333" >
			<p style="border-bottom: 1px solid #E6E6E6;">&nbsp;&nbsp;&nbsp;
			<input style=" border:0" type="checkbox" name="mbd" value="Databases" checked> Databases 
			<input style=" border:0" type="checkbox" name="mbi" value="Institutions" checked> Institutions 
			<input style=" border:0" type="checkbox" name="mbj" value="Journals" checked> Journals 
			<input style=" border:0" type="checkbox" name="mbp" value="Patents" checked> Patents 
			<input style=" border:0" type="checkbox" name="mbs" value="Software" checked> Software 
			<input style=" border:0"  type="checkbox" name="mbw" value="Web Server" checked> Web-Servers 

			</p><br><br>

			</td>
	</tr>
	<tr>
		<td align="right" style="font-size:20px; color:#333333; text-align: right"><b>Define Search Fields :&nbsp;</b></td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select  name="sfild1">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'keywords'>Keywords</option>
			</select>

		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text1" type="text" value="" size="60"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">
		</td>
		<td align="center" style="font-size:20px; color:#333333" >

			<select name="sfild2">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource' selected>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'keywords'>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text2" type="text" value="" size="60"/></td>	
	</tr>

	<tr>
		<td align="right" style="font-size:25px; color:#333333">
		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild3">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area' selected>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'keywords'>Keywords</option>
		</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text3" type="text" value="" size="60"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">
		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild4">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization' selected>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'keywords'>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text4" type="text" value="" size="60"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">
		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild5">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization' selected>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'keywords'>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text5" type="text" value="" size="60"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:20px; color:#333333; text-align:right" ><b>Year :&nbsp;</b></td>
		<td style="font-size:20px; color:#333333;"><input name="yfrom" type="text" value="" size="4"/> to
		<input name="yto" type="text" value="" size="4"/></td></tr>
	<tr >
		<td align="right" style="font-size:20px; color:#333333; text-align:right" ><b>Match :&nbsp;</b></td>
			<td align="center" style="font-size:20px; color:#333333" >
			<select name="match1">
			<option value= 'AND'>All Fields</option>
			<option value= 'OR' selected>Any Field</option>
			</select>
			</td>
			<td align="right" style="font-size:20px; color:#333333" >
				<INPUT   name="submit" type="submit" class="button" value="Search"  style="size:landscape;height:30px;width:50px;margin-left:5px;margin-right:5px"/>
				<input name="c_query" type="button" value="Clear Search" class="button" onclick="this.form.q_text.value=''"/>
			
			</td>
	  </tr>
	<tr >
		<td colspan=3 align="center" style="font-size:20px; color:red;text-align:center " ><br><?php echo  $this->session->userdata('error_message'); ?></td>
 
 </p>
</td>
</table>

</form>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div></div>