
	
</div></div>
<br /><br /><br /><br /><br />
<div id="content-outer"><div  class="container_16">

<?php $attributes = array('id' => 'myform');?>
<?php echo form_open('pages/adsearch1',$attributes);  ?>

<!--<img HEIGHT="90" WIDTH="150" align="baseline" BORDER="0" src="<?php echo base_url(); ?>/images/ibira.jpg" />-->
<table align="center" width="100%" >
	<tr>
		<td width="30%" align="right" style="font-size:14px; color:#333333"><b>Select Search Category : </b></td>
		<td colspan=4 width="75%"  align="left" style="font-size:20px; color:#333333" >
			<p style="border-bottom: 1px solid #E6E6E6;">&nbsp;&nbsp;&nbsp;
			<input style=" border:0" type="checkbox" name="mbd" value="Databases" checked> Databases 
			<input style=" border:0" type="checkbox" name="mbi" value="Institutions" checked> Institutions 
			<input style=" border:0" type="checkbox" name="mbj" value="Journals" checked> Journals 
			<input style=" border:0" type="checkbox" name="mbp" value="Patents" checked> Patents 
			<input style=" border:0" type="checkbox" name="mbs" value="Software" checked> Software 
			<input  style=" border:0"  type="checkbox" name="mbw" value="Web Server" checked> Web-Servers 

			</p><br><br>

			</td>
	</tr>
	<tr>
		<td align="right" style="font-size:14px; color:#333333"><b>Define Search Fields :</b></td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select  name="sfild1">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>

			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'year'>Year</option>
			<option value= 'keywords'>Keywords</option>
			</select>

		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text1" type="text" value="" size="60"/></td>	
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="scri1" >
				<option Value="all_w" >All Words</option>
				<option Value="any_w" >Any of the Words</option>
				<option Value="s_phrase">The Phrase</option>

				<option Value="b_with">Exact Match</option>
		  </select>
		</td>
		<td align="center" style="font-size:20px; color:#333333" >	
		<input type="hidden"  name=s_opr1 value="">
			<input name="a_button1" type="button" class="button" value="Add Query" onClick="add_query(this.form.s_opr1.value,this.form.sfild1.value,this.form.s_text1.value,this.form.scri1.value)"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">

			<select name="s_opr2">
				<option Value="AND">AND</option>
				<option Value="OR">OR</option>
				<option Value="NOT">NOT</option>
			</select>
		</td>
		<td align="center" style="font-size:20px; color:#333333" >

			<select name="sfild2">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource' selected>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>
			<option value= 'country'>Country</option>

			<option value= 'year'>Year</option>
			<option value= 'keywords'>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text2" type="text" value="" size="60"/></td>	
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="scri2">

				<option Value="all_w">All Words</option>
				<option Value="any_w">Any of the Words</option>
				<option Value="s_phrase" >The Phrase</option>
				<option Value="b_with">Exact Match</option>
				</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >	
			<input name="a_button2" type="button" class="button" value="Add Query" onClick="add_query(this.form.s_opr2.value,this.form.sfild2.value,this.form.s_text2.value,this.form.scri2.value)"/></td>	
	</tr>

	<tr>
		<td align="right" style="font-size:25px; color:#333333">
			<select name="s_opr3">
				<option Value="AND">AND</option>
				<option Value="OR" >OR</option>
				<option Value="NOT">NOT</option>
			</select>

		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild3">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area' selected>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>

			<option value= 'country'>Country</option>
			<option value= 'year'>Year</option>
			<option value= 'keywords'>Keywords</option>
		</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text3" type="text" value="" size="60"/></td>	
		<td align="center" style="font-size:20px; color:#333333" >

			<select name="scri3">
				<option Value="all_w">All Words</option>
				<option Value="any_w">Any of the Words</option>
				<option Value="s_phrase">The Phrase</option>
				<option Value="b_with" >Exact Match</option>
				</select>
			</td>

		<td align="center" style="font-size:20px; color:#333333" >	
			<input name="a_button3" type="button" class="button" value="Add Query" onClick="add_query(this.form.s_opr3.value,this.form.sfild3.value,this.form.s_text3.value,this.form.scri3.value)"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">
			<select name="s_opr4">
				<option Value="AND">AND</option>
				<option Value="OR">OR</option>
				<option Value="NOT" >NOT</option>

			</select>
		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild4">
			<option value= 'name_of_resource'>Name of Resource</option>
			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>

			<option value= 'name_of_the_organization' selected>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'year'>Year</option>
			<option value= 'keywords'>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >

			<input name="s_text4" type="text" value="" size="60"/></td>	
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="scri4">
				<option Value="all_w">All Words</option>
				<option Value="any_w">Any of the Words</option>
				<option Value="s_phrase" >The Phrase</option>
				<option Value="b_with">Exact Match</option>

				</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >	
			<input name="a_button4" type="button" class="button" value="Add Query" onClick="add_query(this.form.s_opr4.value,this.form.sfild4.value,this.form.s_text4.value,this.form.scri4.value)"/></td>
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">
			<select name="s_opr5">
				<option Value="AND">AND</option>

				<option Value="OR">OR</option>
				<option Value="NOT">NOT</option>
			</select>
		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild5">
			<option value= 'name_of_resource'>Name of Resource</option>

			<option value= 'full_name_of_resource'>Full Name of the Resource</option>
			<option value= 'subject_area'>Subject Area</option>
			<option value= 'name_of_the_organization'>Name of the Organization</option>
			<option value= 'country'>Country</option>
			<option value= 'year'>Year</option>
			<option value= 'keywords' selected>Keywords</option>

			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text5" type="text" value="" size="60"/></td>	
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="scri5">
				<option Value="all_w">All Words</option>
				<option Value="any_w">Any of the Words</option>

				<option Value="s_phrase">The Phrase</option>
				<option Value="b_with">Exact Match</option>
				</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >	
			<input name="a_button5" type="button" class="button" value="Add Query"  onclick="add_query(this.form.s_opr5.value,this.form.sfild5.value,this.form.s_text5.value,this.form.scri5.value)"/></td>	
	</tr>
	<tr >
			<td colspan=3 align="right" style="font-size:20px; color:#333333" ><br>
		<p style="vertical-align:middle"> 
			<input name="q_text" type="text" size="85"  style="float:inherit" value=""/>	
		  
			
				<INPUT TYPE="image" style="vertical-align:top;border:0" SRC="<?php echo base_url();?>images/search_button.gif" HEIGHT="41" WIDTH="50"  ALT="Submit Form"> 
				<input name="c_query" type="button" value="Clear Query" class="button" onclick="this.form.q_text.value=''"/>
				
				
			</p>
			
			</td>
			</td><td colspan=3 align="right" style="font-size:12px; color:#FF0000;vertical-align:bottom" >
			 <?php echo  $this->session->userdata('error_message'); ?> </td>
	  </tr>
</table>

</form>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div></div>