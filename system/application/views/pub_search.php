
	
</div></div>
<br /><br /> <h1 align="Center" class="heading" style="font-size:30px; ">Search Publications</h1><br />
<div id="content-outer"><div  class="container_16">


<?php $attributes = array('id' => 'myform');?>
<?php echo form_open('pages/pub_search1',$attributes);  ?>


<table align="center" width="100%" >
	<tr>
		<td align="right" style="font-size:20px; color:#333333; text-align: right"><b>Define Search Fields :&nbsp;</b></td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select  name="sfild1">
			<option value= 'title_of_the_paper'  selected>Title of the Paper</option>
			<option value= 'contributors'>Contributor</option>
			<option value= 'secondry_title'>Title of the Journal</option>
			<option value= 'volume'>Volume</option>
			<option value= 'issue_no'>Issue No</option>
			<option value= 'abstract'>Abstract</option>
			<option value= 'pub_keywords'>Keywords</option>
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
			<option value= 'title_of_the_paper'>Title of the Paper</option>
			<option value= 'contributors' selected>Contributor</option>
			<option value= 'secondry_title'>Title of the Journal</option>
			<option value= 'volume'>Volume</option>
			<option value= 'issue_no'>Issue No</option>
			<option value= 'abstract'>Abstract</option>
			<option value= 'pub_keywords'>Keywords</option>
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
			<option value= 'title_of_the_paper'>Title of the Paper</option>
			<option value= 'contributors'>Contributor</option>
			<option value= 'secondry_title' selected>Title of the Journal</option>
			<option value= 'volume'>Volume</option>
			<option value= 'issue_no'>Issue No</option>
			<option value= 'abstract'>Abstract</option>
			<option value= 'pub_keywords'>Keywords</option>
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
			<option value= 'title_of_the_paper'>Title of the Paper</option>
			<option value= 'contributors'>Contributor</option>
			<option value= 'secondry_title'>Title of the Journal</option>
			<option value= 'volume'>Volume</option>
			<option value= 'issue_no'>Issue No</option>
			<option value= 'abstract' selected>Abstract</option>
			<option value= 'pub_keywords'>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text4" type="text" value="" size="60"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:25px; color:#333333">
		</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<select name="sfild5" >
			<option value= 'title_of_the_paper'>Title of the Paper</option>
			<option value= 'contributors'>Contributor</option>
			<option value= 'secondry_title'>Title of the Journal</option>
			<option value= 'volume'>Volume</option>
			<option value= 'issue_no'>Issue No</option>
			<option value= 'abstract'>Abstract</option>
			<option value= 'pub_keywords' selected>Keywords</option>
			</select>
			</td>
		<td align="center" style="font-size:20px; color:#333333" >
			<input name="s_text5" type="text" value="" size="60"/></td>	
	</tr>
	<tr>
		<td align="right" style="font-size:20px; color:#333333; text-align:right" ><b>Publication Year :&nbsp;</b></td>
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
				<INPUT   name="submit" type="submit" class="button" value="Search Publication"  style="size:landscape;height:30px;width:150px;margin-left:5px;margin-right:5px"/>
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