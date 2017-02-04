

<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">
<?php  
echo "<p class='heading'>Total <font color='red'>".$total_res."</font> resources. ";
echo "Last resource no. : <font color='red'>".$last_res."</font><br>";
echo "Total <font color='red'>".$total_pub."</font> publications. ";
echo "Last publication no. : <font color='red'>".$last_pub."</font><br>";
echo "Total <font color='red'>".$total_course."</font> Courses. ";
echo "Last Course no. : <font color='red'>".$last_course."</font></p>";
?>


<p style="font:'Times New Roman', Times, serif;font-size:20px">
<?php echo $error;?>
</p>
<?php echo form_open_multipart('uploader/do_upload');?>
<p style="font:'Times New Roman', Times, serif;font-size:20px">Select a file to Upload</p>
<input style="font:'Times New Roman', Times, serif;font-size:14px" type="file" name="userfile" size="20" />
<br />
Select Location : 
          	<select  name="location">
			<option value= './uploads/' >XML File for Database</option>
			<option value= './system/application/controllers/' >PHP File in Controllers</option>
			<option value= './system/application/models/' >PHP File in Models</option>
			<option value= './system/application/views/' >PHP File in Views</option>
			<option value= './system/libraries/' >PHP File in Libraries</option>
			<option value= './system/application/config/' >PHP File in Config</option>
			</select>

<br />
<br />

<input class="button" type="submit" value=" Upload File ... " />

</form>

</div>