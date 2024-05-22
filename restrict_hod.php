<?php 
$connect = mysql_connect("localhost","root","");
mysql_select_db("mentorship_systemdb",$connect) or die("Unable to connect");

if(isset($_POST["signup"])){
$qry = "INSERT into register (`Name`, `Email`, `Password`) VALUES ('".$_POST["Name"]."','".$_POST["Email"]."','".$_POST["Password"]."')";
$sql = mysql_query($qry);
  if ($sql) {
    $alert="<script>alert('You Have Register Successfully !!')
    window.location='hodlogin.php'</script>";
    echo $alert;
    
  }
  else
  {
    echo "Failed to register";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> HOD Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
#chk{
  display: none;
}
.signup{
  position: relative;
  width:100%;
  height: 100%;
}
label{
  color: #fff;
  font-size: 2.3em;
  justify-content: center;
  display: flex;
  margin: 60px;
  font-weight: bold;
  cursor: pointer;
  transition: .5s ease-in-out;
}
input{
  width: 60%;
  height: 20px;
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
  width: 60%;
  height: 40px;
  margin: 10px auto;
  justify-content: center;
  display: block;
  color: #fff;
  background: #333333;
  font-size: 1em;
  font-weight: bold;
  margin-top: 20px;
  outline: none;
  border: none;
  border-radius: 5px;
  transition: .2s ease-in;
  cursor: pointer;
}
button:hover{
  background: #1a1a1a;
}
.login{
  height: 460px;
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(-180px);
  transition: .8s ease-in-out;
}
.login label{
  color: #080706;
  transform: scale(.6);
}

#chk:checked ~ .login{
  transform: translateY(-500px);
}
#chk:checked ~ .login label{
  transform: scale(1);
}
#chk:checked ~ .signup label{
  transform: scale(.6);
}
</style>
</head>
</html>
</head>
<body>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="register">
        <form action="" method="POST">
        <label for="chk" aria-hidden="true">Register</label>
          <input type="text" name="Name" placeholder="Name" required="">
          <input type="text" name="Email" placeholder="Email" required="">
          <input type="password" name="Password" placeholder="Password" required="">
          <button name="register" type="submit">Register</button>
        </form>
        <a href="hodlogin.php"><button type="submit">Already Have An Account Login Here...!!!</button>
      </div>
      </div>
  </div>
</body>
</html>