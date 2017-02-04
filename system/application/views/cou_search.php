
	
</div></div>
<br /><br /> <h1 align="Center" class="heading" style="font-size:30px; ">Search Courses</h1><br />
<div id="content-outer"><div  class="container_16">
<?php $attributes = array('id' => 'myform');?>
<?php echo form_open('pages/cou_search1',$attributes);  ?>


<table align="center" width="100%" >
	<tr>
		<td align="right" style="font-size:20px; color:#333333; text-align: right"><b>Define Search Fields :&nbsp;</b></td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select  name="sfild1">
			<option value= 'degree_type' selected>Type of Course</option>
			<option value= 'course_name'>Name of the Course</option>
			<option value= 'university'>Affilated to</option>
			<option value= 'distance_mode'>Distance Mode</option>
			<option value= 'eligiibility'>Eligiibility</option>
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
			<option value= 'degree_type'>Type of Course</option>
			<option value= 'course_name' selected>Name of the Course</option>
			<option value= 'university'>Affilated to</option>
			<option value= 'distance_mode'>Distance Mode</option>
			<option value= 'eligiibility'>Eligiibility</option>
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
			<option value= 'degree_type'>Type of Course</option>
			<option value= 'course_name'>Name of the Course</option>
			<option value= 'university' selected>Affilated to</option>
			<option value= 'distance_mode'>Distance Mode</option>
			<option value= 'eligiibility'>Eligiibility</option>
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
			<option value= 'degree_type'>Type of Course</option>
			<option value= 'course_name'>Name of the Course</option>
			<option value= 'university'>Affilated to</option>
			<option value= 'distance_mode' selected>Distance Mode</option>
			<option value= 'eligiibility'>Eligiibility</option>
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
			<option value= 'degree_type'>Type of Course</option>
			<option value= 'course_name'>Name of the Course</option>
			<option value= 'university'>Affilated to</option>
			<option value= 'distance_mode'>Distance Mode</option>
			<option value= 'eligiibility' selected>Eligiibility</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text5" type="text" value="" size="60"/></td>	
	</tr>
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