<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

  <style>

	
  </style>

<style>
.searchText
{
     border-style: hidden;
     border-width: 0px;
     color: #000000;
     padding-left:10px;
     padding-right:7px;
     font-size:18px;
	 height:32px;
	 width:307px;
     background-image: url(<?php echo base_url();?>images/searchBox.gif);
     margin-left:3px;
	 padding-top:1px;
}
.searchText2
{
     border-style: hidden;
     border-width: 0px;
     color: #000000;
     padding-left:10px;
     padding-right:7px;
     font-size:12pt;
	 height:21px;
	 width:227px;
     background-image: url(<?php echo base_url(); ?>/images/searchBox2.gif ) ;
     margin-left:3px;
	 padding-top:5px;
}

.searchText3
{
     border-style: hidden;
     border-width: 0px;
     color: #000000;
     padding-left:10px;
     padding-right:7px;
     font-size:12pt;
	 height:30px;
	 width:243px;
     background-image: url(<?php echo base_url(); ?>/images/searchBox2.gif ) ;
     margin-left:3px;
	 padding-top:5px;
}

.searchbtn
{
     border-style: hidden;
     border-width: 0px;
     color: #000000;
     padding-left:27px;
     padding-right:7px;
   
	 height:55px;
	 width:57px;

     
     margin-left:0px;
	 padding-top:0px;
}

.searchbtn2
{
     border-style: hidden;
     border-width: 0px;
     color: #000000;
     padding-left:5px;
     padding-right:7px;
   
	 height:40px;
	 width:45px;

     
     margin-left:0px;
	 padding-top:15px;
}
/* Rounded Corner */
.tb5 {
	background: url(images/rounded.gif) no-repeat top left;
	height: 22px;
	width: 230px;
}
.tb5a {
	border: 0;
	width:220px;
	margin-top:3px;
}
</style>

<script language="javascript">
function add_query(opr1, field1, text1, cri1)
{
if(opr1=="")
{
	q_text=""	
}
else
{
q_text=document.forms[0].q_text.value
}
q_text=q_text+" "+opr1+" ("
var arry = text1.split(' ');
if(cri1=="all_w") 
{
	for (var i=0; i<arry.length-1; i++) 
	{
		q_text=q_text+"( "+field1 +" Like '"+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+"'"+") AND "
	}
		q_text=q_text+"("+field1 +" Like '"+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+"'"+") ) "
}
if(cri1=="any_w") 
{
	for (var i=0; i<arry.length-1; i++) 
	{
		q_text=q_text+"( "+field1 +" Like '"+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+"'"+") OR"
	}
		q_text=q_text+"("+field1 +" Like '"+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+" %' OR "
		q_text=q_text+field1 +" Like '% "+arry[i]+"'"+") ) "
}
if(cri1=="s_phrase") 
{
	q_text=q_text+field1 +" like '%" + text1 + "%') "
} 
if(cri1=="b_with")
{
	q_text=q_text+field1 +" = '" + text1 + "') "
} 
document.forms[0].q_text.value = q_text
}
</script>

<link rel="stylesheet" href="<?php echo base_url();?>/css/jquery.treeview.css" />

	<link rel="stylesheet" href="<?php echo base_url();?>/css/screen.css" />
	
	<script src="<?php echo base_url();?>js/lib/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/lib/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/jquery.treeview.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				prerendered: true,
				persist: "location"
			});
		})
		
	</script>


<title>iPSRA</title>
<link href="<?php echo base_url();?>css/KeepItSimple.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/960.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/reset.css" rel="stylesheet" type="text/css">


</head>

<body >


	<!-- header starts-->
		