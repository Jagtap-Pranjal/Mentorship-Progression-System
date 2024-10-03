<?php
$conn=new mysqli("localhost","root","","mentorship_systemdb") or die("not connect");
if (isset($_POST["update"])) {
  $pass=$_POST["newpass"];
  $email=$_POST["Email"];
  $sql=mysqli_query($conn,"UPDATE `register` SET `Password`='".$pass."' WHERE `Email`='".$email."'");
  if($sql){
    $alert="<script>alert('Password Changed !!')
    window.location='hodlogin.php'</script>";
         echo $alert;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
body{
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: 'Jost', sans-serif;
  background: #333;
}
.main{
  width: 350px;
  height: 500px;
  background: red;
  overflow: hidden;
  background: #080706;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
}

label{
  color: #fff;
  font-size: 2.3em;
  justify-content: center;
  display: flex;
  margin: 60px;
  font-weight: bold;
  }
input{
  width: 30%;
  height: 30px;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 20px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
}
button{
  width: 30%;
  height: 60%;
  margin: auto;
  justify-content: center;
  display: block;
  color: #0000;
  background: #333333;
  font-size: 11px;
  font-weight: bold;
  margin-top: 20px;
  outline: none;
  border: none;
  border-radius: 5px;
  
}
button:hover{
  background: #daff94;
}
.txt_field{
 
}
.login{
  height: 500px;
  background: #eee;
  border-radius: 60% / 10%;
}
.login label{
  color: #080706;
  font-size: 3em;
  font-weight: bold;
}

.container{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
color:#0000;
}
.container .box
{  
position:relative;
  width: 800px;
  height: auto;
  padding: 60px;
  background: #000000;
  box-shadow: 0 5px 15px rgba(0,0,0,.9);
  border-radius: 30px;
  margin: auto;
  box-sizing: border-box;
  overflow: hidden;
  text-align: left;
  font-size: 15px;
  color: #ffffff
 
}
</style>
<head>
<meta charset="utf-8">
<title>Forget Password</title>
</head>
<body style="background: #daff94">
<section class="container" id="container">
    <div class="box">
    <a href="hodlogin.php" data-toggle="tooltip" data-placement="bottom" title="Back">
    <input type="button" name="close" value="GO BACK" cursor: pointer; border: none; ></a><br>
    <center><h1>Create New Password</h1></center>
    <form method="post">
    <center>Email</center>
    <input type="text" name="Email" style="color: #ffffff">
    <center>New Password</center></input>
    <input type="password" name="newpass" required>
    <br>
    <input type="submit" name="update" value="Save" class="button" style="background: #ffffff color: #ffffff" >
    </form>
    </div>
    </div>
    </section>
</body>
</html>