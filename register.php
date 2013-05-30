<?php
$messageSent = isset($_GET['sent']) ? $_GET['sent'] : null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum on Relationship Education and Vulnerable Youth</title>
<style type="text/css">
<!--
body {
	background-image: url();
}
-->
</style>
<link href="nhmrc-main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
<link href="roundtable_supportfiles/nhmrc-main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {font-size: 36px}
-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#000000"><h1 align="center" class="style3"><span class="style5">Forum on Relationship Education and Vulnerable Youth


</span><br />
        Tuesday September 25, 2012 10:00AM - 12:00PM<br />
      The United States Capitol Visitor Center 
Congressional Meeting Room North
 </h1>    </td>
  </tr>
  <tr>
    <td bgcolor="#CCFF99"><div align="left">
      <table width="780" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center"><img src="roundtable_supportfiles/logos2.jpg" alt="Public Strategies, Inc  |  Innovation Center - for Community &amp; Youth Development  |  The Annie E. Casey Foundation" width="780" height="100" /></div>      <div align="center"></div></td>
    </tr>
</table>
<?php
if ($messageSent=="success"){
	echo("<table cellspacing='5' cellpadding='5' border='0'><tr><td><strong>We have received your information and look forward to seeing you at this event.<p></p><p></p><p></p><p></p></strong></td></tr></table>");
}
else
{
?>

<form enctype="multipart/form-data" method="post" action="sendmail.php" accept-charset="UTF-8">
	<div>
	
	</div>
	<table cellspacing="5" cellpadding="5" border="0">
  	<tr>
			<td valign="top" colspan="2" >
			  <div align="left">
        <input type="radio" name="attend" value="Yes, I plan to attend" /> Yes, I plan to attend<br />
        <input type="radio" name="attend" value="No, I can not attend" /> No, I can not attend. <br />
        <input type="radio" name="attend" value="Maybe. I hope to attend, but cant confirm at this point." /> Maybe. I hope to attend, but can't confirm at this point. 
        </div></td>
			
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>First Name:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="fname" id="fname" size="40" value="" />			</td>
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>Last Name:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="lname" id="lname" size="40" value="" />			</td>
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>Organization:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="organization" id="organization" size="40" value="" />			</td>
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>Job Title:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="title" id="title" size="40" value="" />			</td>
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>Email Address:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="email" id="email" size="40" value="" />			</td>
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>Business Phone Number:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="bus-phone" id="bus-phone" size="40" value="" />			</td>
		</tr>
		<tr>
			<td valign="top">
			  <div align="left"><strong>Mobile Phone Number:</strong>		          </div></td>
			<td valign="top">
				<input type="text" name="cell-phone" id="cell-phone" size="40" value="" />			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value=" Submit Form " />			</td>
		</tr>
	</table>
</form>
<?php
}
?>




        
      </div></td>
  </tr>
</table>
<p class="style3">Copyright 2012 Its My Community Initiative - All Rights Reserved</p>
</body>
</html>
