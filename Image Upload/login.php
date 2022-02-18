<?php
include'connect.php';
 
if(isset($_POST['sub'])){
 
  $u=$_POST['user'];
  $p=$_POST['pass'];
  $s= "select * from register where username='$u' and password= '$p'";
  $qu= mysqli_query($con, $s);
 
  if(mysqli_num_rows($qu)>0){
    $f= mysqli_fetch_assoc($qu);
    $_SESSION['id']=$f['id'];
    header ('location:home.php');
  }
}
?>

<html>
  <head>
    <title>User Login Form</title>
    <style type="text/css">
      body
   {
     margin:0px; background-color:#27a465; color:#f7f7f7; font-family:Arial, Helvetica, sans-serif; background-image: url(images/pw.jpg); background-size: cover;
   }
   #main
   {
     width:600px; height:260px; margin-left:auto; margin-right:auto; border-radius:5px; padding-left:10px; margin-top:100px; border-top:2px double #f1f1f1; border-bottom:3px double #f1f1f1; padding-top:20px; padding-bottom: 70px; background-color: #010512;
   }
   #main table
   {
     font-family:"Comic Sans MS", cursive;
   } 
  /* css code for textbox */
  #main .tb
  {
    height:28px; width:230px; border:1px solid #27a465; color:white; font-weight:bold; border-left:5px solid #f7f7f7; opacity:0.9;
  }

  #main .tb1
  {
    height:28px; width:230px; border:1px solid #27a465; color:#27a465; font-weight:bold; border-left:5px solid #f7f7f7; opacity:0.9;
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

  </style>
  </head>
  <body>
    <script type="text/javascript">
      function validate()
      {
        function ValidateEmail(email) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
      }

      function clearFunc()
      {
        document.getElementById("email").value="";
        document.getElementById("password").value="";
      } 
    </script>
    
    <h2 style="text-align: center; font-family: serif; color: orange; font-size: 30px;"><b><span style="background-color: black;">ENTER YOU PASSWORD SECURELY</span></b></h2>
  <div id="main">
  <div class="h-tag">
  <h2 style="text-align: center;">Welcome to your account login</h2>
  </div>
  <!-- Login box -->
  <div class="login">
  <table cellspacing="2" align="center" cellpadding="8" border="0">
  <form action="#" name='sub' method="post" enctype="multipart/form-data">
  <tr>
  <td>Enter User Name :</td>
  <td><input type="text" placeholder="Enter user name here" id="email" class="tb1" name="user" /></td>
  </tr>
  <tr>
  <td>Enter Password :</td>
  <td><input type="Password" placeholder="Enter your password here" id="password" class="tb" name="pass" />
  </td>
  </tr>
  <tr>
  <td>Upload Image :</td>
  <td><input type="file" class="f1" name="f1">
  </td>
  </tr>
  <div class="login">
  <table cellspacing="2" align="center" cellpadding="15" border="0">
  <tr>
  <td>
  <input type="submit" value="Reset" onclick="clearFunc()" class="btn" />
  </td>
  <td>
  <input type="submit" name="sub" onclick="validate()" value="Submit" class="btn" />
  </td>
  </tr>
</table>
</div>
<a href="register.php" style="text-align: center;"><h3>Register here</h3></a>
</table>
</div>
</div>

<?php
if (isset($_POST["sub"])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["f1"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["f1"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["f1"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }    // Validate image file size
    else if (($_FILES["f1"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
    else if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {
        $target = "image/" . basename($_FILES["f1"]["name"]);
        if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}  
?>
  </form>
  </body>
</html>