<?php
include 'connect.php';
 
if(isset($_POST['sub'])){
	$t=$_POST['text'];
	$e=$_POST['email'];
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$c=$_POST['state'];
 
	//code for image uploading
	if($_FILES['f1']['name']){
		$img="image/".$_FILES['f1']['name'];
	}
	}
?>
<html>
	<head>
	<title>Image upload authentication</title>
	<style type="text/css">
		body
   {
     margin:0px; background-color:#27a465; color:#f7f7f7; font-family:Arial, Helvetica, sans-serif; background-image: url(images/bg.jpg); background-size: cover;
   }
   #main
   {
     width:600px; height:260px; margin-left:auto; margin-right:auto; border-radius:5px; padding-left:5px; margin-top:100px; border-top:2px double #f1f1f1; border-bottom:3px double #f1f1f1; padding-top:20px; padding-bottom: 140px; background-color: #010512; text-align: center;
   }
   #main table
   {
     font-family:"Comic Sans MS", cursive;
   } 
  /* css code for textbox */
  #main .tb
  {
    height:28px; width:230px; border:1px solid #27a465; color:#27a465; font-weight:bold; border-left:5px solid #f7f7f7;
  }

   /* css code for button*/
   #main .btn
   {
    width:80px; height:32px; outline:none;  font-weight:bold; border:0px solid #27a465; text-shadow: 0px 0.5px 0.5px #fff;	
    border-radius: 2px; font-weight: 600; color: #27a465; letter-spacing: 1px; font-size:14px; -webkit-transition: 1s; -moz-transition: 1s; transition: 1s;
   }
  
   #main .btn:hover
   {
    background-color:#27a465; outline:none;  border-radius: 2px; color:#f1f1f1; border:1px solid #f1f1f1;
   }

   td
   {
   	padding-left: 70px;
   }

	</style>
    </head>
    <body>
    	<script type="text/javascript">
        function validate()
		{
			return (verifyNull() && verifyEmail());
		}
        
        function verifyNull(){
        var isValid = true;
        if(!document.getElementById('email1').value.trim().length && !document.getElementById('password').value.trim().length){
            isValid = false;
            alert('Please enter your email Id and password');
        }
        return isValid;
    }
    	function verifyEmail(){
        var x = document.getElementById('email1').value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            alert("Invalid email address");
        return false;
        }
        else
      {
  		alert('Successfully registered');
       	window.location = "login.php";
      }

    }

      function clearFunc()
      {
        document.getElementById("email").value="";
        document.getElementById("password").value="";
      } 
    </script>
    <div id="main">
	<div class="h-tag">
	<h2>Register Here</h2>
	</div>
		<form method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Enter your Name :</td>
					<td><input type="text" placeholder="Enter your name here" id="email" class="tb" name="text" /></td>
				</tr>
				<tr>
					<td>Enter Email Id :</td>
					<td><input type="text" placeholder="Enter email id here" id="email1" class="tb" name="email" /></td>
				</tr>
				<tr>
					<td>Enter User Name :</td>
					<td><input type="text" placeholder="Enter user name here" id="email" class="tb" name="user" /></td>
				</tr>
				<tr>
  					<td>Create Password :</td>
  					<td><input type="Password" placeholder="Enter new password here" id="password" class="tb" name="pass" />
  				</td>
  				</tr>
				<tr>
  					<td>Enter your state: </td>
  					<td><input type="text" name="state" placeholder="Enter your state here" id="email" class="tb" />
  				</td>
  				</tr>
				<tr>
					<td>Upload Image: </td>
					<td>
						<input type="file" id="img" name="f1">
					</td>
				</tr>

	<!-- Login box -->
	<div class="login">
	<table cellspacing="2" cellpadding="15" border="0" style="margin-left: 105px; margin-top: 10px;">
	<tr>
	<td>
	<input type="submit" value="Reset" onclick="clearFunc()" class="btn" />
	</td>
	<td>
	<input type="submit" name="sub" value="Register" onclick="validate()" class="btn" />
	</td>
	</tr>
	</table>
	<a href="login.php"><h3>Login</h3></a>
	</div>
	</table>
	</form>
	</body>
</html>