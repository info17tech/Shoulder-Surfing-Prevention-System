<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Font Awesome Link  -->
    <script src="https://kit.fontawesome.com/6d8a0dfbb1.js" crossorigin="anonymous"></script>
</head>
<body>
	<style type="text/css">
		h1{
	text-align: center;
	left: 450px;
	top: 40px;
	color: black;
	font-weight: 700;
  font-size: 50px;
  padding-top: 50px;
  margin: auto;
  position: absolute;
}

.cfb{
  float: left;
  margin: 20px 20px 0px 20px;
}

.navbar {
  overflow: hidden;
  background-color: #001a33;
  margin-bottom: 0;
  min-height: 35px;
  border: none;
  border-bottom: 3px solid red;
  font-family: Arial;
  display: flex;
  border-right: 1px solid #212529;
  justify-content: center;
  text-align: center;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: #001a33;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #001a33;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgb(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  background-color: #001a33;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: red;
}

.dropdown:hover .dropdown-content {
  display: block;
} 

.marq{
	color: red;
	font-size: large;
	font-weight: bold;
	text-shadow: 5px;
	padding: 10px;
}

.form{
	height: 50;
	font-size: large;
  margin: 10px 10px 25px 32px;
  padding: 10px 10px 10px 10px;
}

.block{
  text-align: center;
	background-color: lightgrey;
	margin: 25px 25px 25px 32px;
	padding: 10px 10px 10px 10px;
}

.b1{
  margin: 10px 10px 20px 20px;
  padding: 10px 10px 10px 10px;
}

td, th {
  border: 2px solid grey;
  text-align: left;
  padding: 8px;
  font-family: unset;
}

tr:nth-child(odd){
	  background-color: #e6e6ff;
	  font-family: unset;
}

tr:nth-child(even){
	  background-color: #cccfff;
	  font-family: unset;
}

* {
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

	</style>
	<div class="marq">
	<marquee direction="left" height="70%" onmouseover="this.stop();" onmouseout="this.start();">Welcome to your home page</marquee><br>
	</div>

	<!--start header-->
	<header class="page-header">
	<div class="navbar">
  	<a class="active" href="#home">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Volunteers</button>
    <div class="dropdown-content">
      <a href="Register.html">Register as a volunteer</a>
      <a href="Login.html">Login</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Resources</button>
    <div class="dropdown-content">
      <a href="#">FAQ</a>
      <a href="#">Cyber News</a>
      <a href="#">Cyber Safety tips</a>
      <a href="#">Cyber Awareness</a>
    </div>
  </div>
  <a href="#contact">Contact us</a>
  <a href="#">Feedback</a>
  <a href="#">Helpline</a>
 </div>
</div>
</header>
<!--end header-->

	<div class="block">
		<h2 style="text-align: center; background-color: lightgrey;">Shoulder Surfing Prevention System</h2>
		<p style="padding: 15px 10px;"><big>CONFIDENTIALITY🤫. INTEGRITY 😒. 
& AVAILABILITY 👍🏻 <br><br>
Other’s can see what you’re typing💬and what’s on your screen 📺 <br>
Prevent Prying Eyes 👀 <br><br>
Stay Protected….. <br><br>
		Shoulder surfing is an attack which is used to obtain confidential informations such as personal identification numbers and login credentials by looking over the victim’s shoulder.
The objective of our project is to prevent others from direct observation of our confidential details.
Due to rise in internet users and online dependencies, the risk of sensitive data being leaked is increasing day by day.
For example, online transactions, online shopping, online registrations, online education, work from home, excessive use of social media etc.
Security and privacy are playing vital role in any online application and to access or share any Information, the user requires password. 
Therefore, to maintain password security and privacy, user uses different types of authentication technique one of them is textual password.
We have implemented multi authentication using image upload mechanism which verifies the password along with the image uploaded for authentication.
</big></p>
	</div>
  <a href="logout.php" style="text-align: center;"><h3>Logout</h3></a>
</body>
</html>