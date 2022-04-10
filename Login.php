<html>
<head>
<title>LOGIN</title>
<link rel="icon" href="image 1.jpg">
<style>
.bg{
  background-image: url("login back.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment:fixed;
}
#d1 {border:2px solid #f1f1f1; border-radius:25px; border-color:#0033FF;}
</style>
</head>
<body class="bg" >
<form class="modal-content animate" action="log.php" method="post">
<div style="height:400; width:400; margin-left:1000; margin-top:20;" id="d1">
<form title="Login Here" action="aftel.php"  >
<b><br><br><br><font size="+2">USER ID:<br></b><input style=" width:400; height:35; border-radius:10px; "  type="text" maxlength="28" id="n" name="email" placeholder="Enter Your Registered Email " required><br>
<b>Password:<br></b> <input style=" width:400; height:35; border-radius:10px; " placeholder="Enter Password" type="password" id="myInput" name="pass"  required><br>
<input type="checkbox" onClick="myFunction()">Show Password<br><br>
<center><input style=" color:#FFFFFF; background-color:#FF0000; font-size:18px; width:400; height:35; border-radius:20px; " type="submit" value="login"  ></center>
</form></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr> 
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } 
  else {
    x.type = "password";
  }
}

 
</script>

</body>
<div style="background-color:#333333; height:320; border:medium; margin-top:5;">
		<a href="Home.php"><abbr title="Notes On Web"><font style="margin-left:150;" size="+3" color="red">N<font color="#FFFFFF">O</font>W</font></font></abbr>
		<font color="#FFFFFF" style="margin-top:30; writing-mode:vertical-rl; text-orientation:mixed;">welcome</font></a><br>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home.php"><font color="#FFFFFF">Home <sup>.</sup></font><font color="#FFFFFF"></a>Contact<sup>.</sup>Privacy Policy<sup>.</sup></font>
		<img src="loc.jpg" height="30" width="30" style="margin-left:165"><font color="#FFFFFF">&nbsp;Lovely Professional University</img><br>
		<img src="call.jpg" height="30" width="30" style="margin-left:524">&nbsp;6387602429</img><br>
		<img src="mail.jpg" height="30" width="30" style="margin-left:524">&nbsp;chaurasiarishabh2@gmail.com</img></font>
		<hr>
		&nbsp;&nbsp;&nbsp;<font color="#FFFF00">Copyright (c) 2019 Copyright 'NOW' All Rights Reserved.</font>
		<font color="#0066FF" style="margin-left:800"><abbr title="Rishabh Chaurasiya"><b>->Crafted By<-</b></abbr></font>
		
		</div>
</html>
