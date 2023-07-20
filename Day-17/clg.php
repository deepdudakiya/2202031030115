<?php

$obj = new mysqli("localhost","root","","soudb");

if(isset($_POST['submit']))
{
	$collegename = $_POST['collegename'];
	$trusteename = $_POST['trusteename'];
	$hodname = $_POST['hodname'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$area = $_POST['area'];


	//Table Store
	$exe = $obj->query("insert into clginfo(collegename,trusteename,hodname,city,email,contact,area) values('$collegename','$trusteename','$hodname','$city','$email','$contact','$area')");

	if($exe)
	{
		echo "Record Inserted Successfully!";
	}
	else
	{
		echo "Error In Code!";
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	<form method="POST">
 	<table border = "1" align= "center" cellspacing="0" cellpadding="5">

 	<tr>
 		<td>
 		   College name:
 		</td>
 		<td>
 	       <input type = "text" id="collegename" name="collegename">
 		</td>
 	</tr>

 	<tr>
 		<td>
 		   Trustee name:
 		</td>
 		<td>
 	       <input type = "text" id="trusteename" name="trusteename">
 		</td>
 	</tr>

    <tr>
 		<td>
 		   HOD name:
 		</td>
 		<td>
 	       <input type = "text" id="hodname" name="hodname">
 		</td>
 	</tr>

 	<tr>
 		<td>
 		   City:
 		</td>
 		<td>
 	       <input type = "text" id="city" name="city">
 		</td>
 	</tr>

    <tr>
 		<td>
 		   Email:
 		</td>
 		<td>
 	       <input type = "text" id="email" name="email">
 		</td>
 	</tr>

 	<tr>
 		<td>
 		   Contact:
 		</td>
 		<td>
 	       <input type = "text" id="contact" name="contact">
 		</td>
 	</tr>

 	<tr>
 		<td>
 		   Area:
 		</td>
 		<td>
 	       <input type = "text" id="area" name="area">
 		</td>
 	</tr>


    <tr>
        <td colspan="2" align="center">
        	<input type ="submit" id="submit" name="submit" value="Submit">
        </td>
    </tr>
    
</table>
</form>
</body>
</html>