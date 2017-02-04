

<br />

<br /><br />
<div style="float:right; width:70%;padding-right:3px; ">

<p style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:20px">Your file has been uploaded successfully.</p>

<table style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:16px;text-align:left" width="75%">
<tr><td width="25%"><td width="5%"><td>
<?php foreach ($upload_data as $item => $value):?>
<tr><td><?php echo $item;?><td>:<td><?php echo $value;?>
<?php endforeach; ?>
</td></tr></table>
</P>
<p style="vertical-align:middle;font:'Times New Roman', Times, serif;font-size:20px">
<?php echo anchor('uploader', 'Upload Another File!'); ?></p>

</div>