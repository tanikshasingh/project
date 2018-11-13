<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Submit Enquiry</title>

	<style type="text/css">
body
{
	background:#336699;
	font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
	font-size:small;
	margin:8px 0 16px;
	text-align:center;
}

#form_container
{
	background:#fff;
	
	margin:0 auto;
	text-align:left;
	width:640px;
}

#top
{
	display:block;
	height:10px;
	margin:10px auto 0;
	width:650px;
}

#footer
{
	width:640px;
	clear:both;
	color:#999999;
	text-align:center;
	width:640px;
	padding-bottom: 15px;
	font-size: 85%;
}

#footer a{
	color:#999999;
	text-decoration: none;
	border-bottom: 1px dotted #999999;
}

#bottom
{
	display:block;
	height:10px;
	margin:0 auto;
	width:650px;
}

form.appnitro
{
	margin:20px 20px 0;
	padding:0 0 20px;
}

/**** Logo Section  *****/
h
{
	color:#FFFFFF;
	clear:center;
    	font-size:250%;
    	font-weight:normal;
    	margin:0pt 0pt 3px;
}
h1
{
	background-color:#6699CC;
	margin:0;
	min-height:0;
	padding:0;
	text-decoration:none;
	text-indent:-8000px;
	
}

h1 a
{
	
	display:block;
	height:100%;
	min-height:40px;
	overflow:hidden;
}


img
{
	behavior:url(css/iepngfix.htc);
	border:none;
}


/**** Form Section ****/
.appnitro
{
	font-family:Lucida Grande, Tahoma, Arial, Verdana, sans-serif;
	font-size:small;
}

.appnitro li
{
	width:61%;
}

form ul
{
	font-size:100%;
	list-style-type:none;
	margin:0;
	padding:0;
	width:100%;
}

form li
{
	display:block;
	margin:0;
	padding:4px 5px 2px 9px;
	position:relative;
}

form li:after
{
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

.buttons:after
{
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

.buttons
{
	clear:both;
	display:block;
	margin-top:10px;
}

* html form li
{
	height:1%;
}

* html .buttons
{
	height:1%;
}

* html form li div
{
	display:inline-block;
}

form li div
{
	color:#444;
	margin:0 4px 0 0;
	padding:0 0 8px;
}

form li span
{
	color:#444;
	float:left;
	margin:0 4px 0 0;
	padding:0 0 8px;
}

form li div.left
{
	display:inline;
	float:left;
	width:48%;
}

form li div.right
{
	display:inline;
	float:right;
	width:48%;
}

form li div.left .medium
{
	width:100%;
}

form li div.right .medium
{
	width:100%;
}

.clear
{
	clear:both;
}

form li div label
{
	clear:both;
	color:#444;
	display:block;
	font-size:9px;
	line-height:9px;
	margin:0;
	padding-top:3px;
}

form li span label
{
	clear:both;
	color:#444;
	display:block;
	font-size:9px;
	line-height:9px;
	margin:0;
	padding-top:3px;
}

form li .datepicker
{
	cursor:pointer !important;
	float:left;
	height:16px;
	margin:.1em 5px 0 0;
	padding:0;
	width:16px;
}

.form_description
{
	border-bottom:1px dotted #ccc;
	clear:both;
	display:inline-block;
	margin:0 0 1em;
}

.form_description[class]
{
	display:block;
}

.form_description h2
{
	clear:left;
	font-size:160%;
	font-weight:400;
	margin:0 0 3px;
}

.form_description p
{
	font-size:95%;
	line-height:130%;
	margin:0 0 12px;
}

form hr
{
	display:none;
}

form li.section_break
{
	border-top:1px dotted #ccc;
	margin-top:9px;
	padding-bottom:0;
	padding-left:9px;
	padding-top:13px;
	width:97% !important;
}

form ul li.first
{
	border-top:none !important;
	margin-top:0 !important;
	padding-top:0 !important;
}

form .section_break h3
{
	font-size:110%;
	font-weight:400;
	line-height:130%;
	margin:0 0 2px;
}

form .section_break p
{
	font-size:85%;

	margin:0 0 10px;
}

/**** Buttons ****/
input.button_text
{
	overflow:visible;
	padding:0 7px;
	width:auto;
}

.buttons input
{
	font-size:120%;
	margin-right:5px;
}

/**** Inputs and Labels ****/
label.title
{
	border:none;
	color:#222;
	display:block;
	font-size:95%;
	font-weight:700;
	line-height:150%;
	padding:0 0 1px;

}


input.text
{
	background:#fff url(../../../images/shadow.gif) repeat-x top;
	border-bottom:1px solid #ddd;
	border-left:1px solid #c3c3c3;
	border-right:1px solid #c3c3c3;
	border-top:1px solid #7c7c7c;
	color:#333;
	font-size:100%;
	margin:0;
	padding:2px 0;
}

input.file
{
	color:#333;
	font-size:100%;
	margin:0;
	padding:2px 0;
}

textarea.textarea
{
	background:#fff url(../../../images/shadow.gif) repeat-x top;
	border-bottom:1px solid #ddd;
	border-left:1px solid #c3c3c3;
	border-right:1px solid #c3c3c3;
	border-top:1px solid #7c7c7c;
	color:#333;
	font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
	font-size:100%;
	margin:0;
	width:99%;
}

select.select
{
	color:#333;
	font-size:100%;
	margin:1px 0;
	padding:1px 0 0;
	background:#fff url(../../../images/shadow.gif) repeat-x top;
	border-bottom:1px solid #ddd;
	border-left:1px solid #c3c3c3;
	border-right:1px solid #c3c3c3;
	border-top:1px solid #7c7c7c;
}


input.currency
{
	text-align:right;
}

input.checkbox
{
	display:block;
	height:13px;
	line-height:1.4em;
	margin:6px 0 0 3px;
	width:13px;
}

input.radio
{
	display:block;
	height:13px;
	line-height:1.4em;
	margin:6px 0 0 3px;
	width:13px;
}

label.choice
{
	color:#444;
	display:block;
	font-size:100%;
	line-height:1.4em;
	margin:-1.55em 0 0 25px;
	padding:4px 0 5px;
	width:90%;
}

select.select[class]
{
	margin:0;
	padding:1px 0;
}

*:first-child+html select.select[class]
{
	margin:1px 0;
}

.safari select.select
{
	font-size:120% !important;
	margin-bottom:1px;
}



/**** Errors ****/
#error_message
{
	background:#fff;
	border:1px dotted red;
	margin-bottom:1em;
	padding-left:0;
	padding-right:0;
	padding-top:4px;
	text-align:center;
	width:99%;
}

#error_message_title
{
	color:#DF0000;
	font-size:125%;
	margin:7px 0 5px;
	padding:0;
}

#error_message_desc
{
	color:#000;
	font-size:100%;
	margin:0 0 .8em;
}

#error_message_desc strong
{
	background-color:#FFDFDF;
	color:red;
	padding:2px 3px;
}

form li.error
{
	background-color:#FFDFDF !important;
	border-bottom:1px solid #EACBCC;
	border-right:1px solid #EACBCC;
	margin:3px 0;
}

form li.error label
{
	color:#DF0000 !important;
}

form p.error
{
	clear:both;
	color:red;
	font-size:10px;
	font-weight:700;
	margin:0 0 5px;
}

form .required
{
	color:red;
	float:none;
	font-weight:700;
}

/**** Guidelines and Error Highlight ****/
form li.highlighted
{
	background-color:#fff7c0;
}

form .guidelines
{
	background:#f5f5f5;
	border:1px solid #e6e6e6;
	color:#444;
	font-size:80%;
	left:100%;
	line-height:130%;
	margin:0 0 0 8px;
	padding:8px 10px 9px;
	position:absolute;
	top:0;
	visibility:hidden;
	width:42%;
	z-index:1000;
}

form .guidelines small
{
	font-size:105%;
}

form li.highlighted .guidelines
{
	visibility:visible;
}

form li:hover .guidelines
{
	visibility:visible;
}

.no_guidelines .guidelines
{
	display:none !important;
}

.no_guidelines form li
{
	width:97%;
}

.no_guidelines li.section
{
	padding-left:9px;
}

/*** Success Message ****/
.form_success 
{
	clear: both;
	margin: 0;
	padding: 90px 0pt 100px;
	text-align: center
}

.form_success h2 {
    clear:left;
    font-size:160%;
    font-weight:normal;
    margin:0pt 0pt 3px;
}

/*** Password ****/
ul.password{
    margin-top:60px;
    margin-bottom: 60px;
    text-align: center;
}
.password h2{
    color:#DF0000;
    font-weight:bold;
    margin:0pt auto 10px;
}

.password input.text {
   font-size:170% !important;
   width:380px;
   text-align: center;
}
.password label{
   display:block;
   font-size:120% !important;
   padding-top:10px;
   font-weight:bold;
}

#li_captcha{
   padding-left: 5px;
}


#li_captcha span{
	float:none;
}

/** Embedded Form **/

.embed #form_container{
	border: none;
}

.embed #top, .embed #bottom, .embed h1{
	display: none;
}

.embed #form_container{
	width: 100%;
}

.embed #footer{
	text-align: left;
	padding-left: 10px;
	width: 99%;
}

.embed #footer.success{
	text-align: center;
}

.embed form.appnitro
{
	margin:0px 0px 0;
	
}

.error{
	color: #F00;
}

.success{
	color: green;
}


	</style>
</head>
<body>

<div id="container">
	<h1>&nbsp;</h1>
	<div class="row">
		<h>ONLINE MEDICAL ASSISTANCE</h>
	</div>

	<div id="body">
		<div id="form_container">
		
		<h1>&nbsp;</h1>
		<form id="form_34805" class="appnitro" method="post" action="http://192.168.33.20/enquiry">
					<div class="form_description">
			<h2>Submit Enquiry</h2>

		</div>						
			<ul>
				<?php if($this->session->flashdata('msg')): ?>
				<li>
				    <label class="success"><?php echo $this->session->flashdata('msg'); ?></label>
				</li>
				<?php endif; ?>
			
				<li>
					<label class="title" for="name">Name</label>
					<div>

						<input id="name" name="name" type="text" maxlength="200" value="<?php if(isset($name)) { echo $name; }?>" title="Name" alt="Name">
						<span class="error"><?php echo form_error('name'); ?> </span>
					</div> 
				</li>
				<li>
					<label class="title" for="email">Email</label>
					<div>
						<input id="email" name="email" type="text" maxlength="255" value="<?php if(isset($email)) { echo $email; }?>" title="Email" alt="Email"> 
						<span class="error"><?php echo form_error('email'); ?> </span>
					</div> 
				</li>	
				<li>
					<label class="title" for="mobile">Mobile</label>
					<span>
						<input id="mobile" name="mobile" maxlength="10" value="<?php if(isset($mobile)) { echo $mobile; }?>" type="text" title="Mobile" alt="Mobile">
						<span class="error"><?php echo form_error('mobile'); ?> </span>
					</span>
				</li>		
				<li>
					<label class="title" for="issues">Issues</label>
					<div>
						<textarea id="issues" name="issues" title="Issues" alt="Issues"><?php if(isset($issues)) { echo $issues; }?></textarea> 
						<span class="error"><?php echo form_error('issues'); ?> </span>
					</div> 
				</li>		
				
					
				
			
				<li class="buttons">
				    <input type="hidden" name="form_id" value="34805">
				    
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit">
				</li>
			</ul>
		</form>	
		
	</div>
	</div>

	
</div>

</body>
</html>
