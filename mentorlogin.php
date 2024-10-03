<?php
session_start();
$connect = mysql_connect("localhost","root","");
mysql_select_db("mentorship_systemdb",$connect) or die("Unable to connect");

if (isset($_POST["Login"])) {
  $user=$_POST["Email"];
  $pass=$_POST["Password"];
$qry = "select * from register_mentor where Email = '".$user."' and Password = '".$pass."'";
$sql = mysql_query($qry);
$var = mysql_num_rows($sql);
  if($var!=0){
    $result = mysql_fetch_array($sql);
    $_SESSION["Login"] = true;
    $_SESSION['Email'] = $result['Email'];
    $_SESSION['Password'] = $result['Password'];
    
  $alert="<script>alert('You Have Login Successfully !!')
    window.location='adminvalidation_mentor.php'</script>";
    echo $alert;
  }
  else
  {
    $alert="<script>alert('Invalid Login...!!!  Please try again..!!')</script>";
         echo $alert;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> MENTOR Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
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
  
}
button:hover{
  background: #1a1a1a;
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
</style>
</head>
</html>
</head>
<body>
<div class="main">
        <div class="Login">
        <form action="" method="post">
        <label>Login</label>
        <input type="text" name="Email" placeholder="Email" required="">
        <input type="password" name="Password" placeholder="Password" required="">
        <button type="submit" name="Login">Login</button> 
        </form>
        <a href="restrict_mentor.php"><button type="submit">Dont Have An Account...? Register Here</button>
        </div>
</div>
<a href="adminvalidation_mentor.php">  </a>
</body>
</html>