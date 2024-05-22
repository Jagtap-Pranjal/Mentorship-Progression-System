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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
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

.navbar{
  position:fixed;
    width: 100%;
    padding: 18px 0;
    font-family: 'Ubuntu', sans-serif;
    transition: all 0.3s ease;
    z-index: 2;
}

.navbar .headin{
  max-width: 1300px;
  padding: 0 20px;
  margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navbar .logo a{
    color: #fff;
    font-size: 35px;
    text-decoration: none;
    font-weight: 600;
}
.navbar .logo a span{
color:#9BDC28;
    transition: all 0.3s ease;
}
.navbar .menu{
    list-style: none;
    display: flex;
}
.navbar .menu a{
    display: inline-flex;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 25px;
    transition: color 0.3s ease;
    position: relative;
    text-decoration: none;
}
.navbar .menu li a:hover{
    color: #9BDC28;
}

/* menu btn styling */
.menu-btn{
    color: #fff;
    font-size: 23px;
    cursor: pointer;
    display: none;
}

.navbar label.button{
  color:#fff;
  font-size:18px;
  cursor:pointer;
  display:none;
}
@media (max-width: 940px){
        .menu-btn{
        display: block;
        z-index: 999;
    }
    .menu-btn i.active:before{
        content: "\f00d";
    }
    .navbar .headin .menu{
      display:block;
      position:fixed;
      top:0;
      left:-102%;
      width:100%;
      padding-top:45px;
      height:100%;
      background:#333;
      box-shadow:0 5px 10px #fff;
      z-index:12;
      transition:all 0.5s ease;
    }
    .headin .menu.active{
        left: 0;
        width:100%;
    }
    .headin .menu li{
        display: block;
    }
    .headin .menu li a{
        display: inline-block;
        margin: 15px 0;
        font-size: 20px;
    }
    .headin .menu a{
      display:block;
      font-size:20px;
      width:100%;
      margin-top: 30px;
      box-shadow: none;
      text-align:center;
    }
  .headin .menu a:hover:before{
    box-shadow: none;
  }
}
.menu-btn{
    color: #fff;
    font-size: 23px;
    cursor: pointer;
    display: none;
}

.navbar label.button{
  color:#fff;
  font-size:18px;
  cursor:pointer;
  display:none;
}
@media (max-width: 940px){
        .menu-btn{
        display: block;
        z-index: 999;
    }
    .menu-btn i.active:before{
        content: "\f00d";
    }
    .navbar .headin .menu{
      display:block;
      position:fixed;
      top:0;
      left:-102%;
      width:100%;
      padding-top:45px;
      height:100%;
      background:#333;
      box-shadow:0 5px 10px #fff;
      z-index:12;
      transition:all 0.5s ease;
    }
    .headin .menu.active{
        left: 0;
        width:100%;
    }
    .headin .menu li{
        display: block;
    }
    .headin .menu li a{
        display: inline-block;
        margin: 15px 0;
        font-size: 20px;
    }
    .headin .menu a{
      display:block;
      font-size:20px;
      width:100%;
      margin-top: 30px;
      box-shadow: none;
      text-align:center;
    }
  .headin .menu a:hover:before{
    box-shadow: none;
  }
}
}
@media (max-width:300px){
  .home .home-content .text-1{
    font-size: 15px;
  }
  .home .home-content .text-2{
      font-size: 35px;
      font-weight: 500;
      margin-left: -2px;
  }
  .home .home-content .text-3{
      font-size: 20px;
      margin: 5px 0;
  }
  .home .home-content .text-3 span{
  color: #fff;
      font-weight: 400;
  }
  .home .max-width{
      margin: auto 5px auto 5px;
  }
  .navbar .logo a{
      font-size: 18px;
  }
}

</style>
</head>
</html>
    <script type="text/javascript" src="java.js"></script>
<body style="background:#daff94">
<nav class="navbar">
        <div class="headin">
      <div class="logo"><a href="#">Mentor<span>ing.</span></a></div>
<ul class="menu" id="menu">

                  
                  <li><a href="hod_mentorpage.php" class="menu-btn">Mentors</a></li>
                   <li><a href="sr_hod.php" class="menu-btn">Mentees Report</a></li>
                  <li><a href="add notice.php" class="menu-btn"> Add Notice</a></li>
                  <li><a href="hodlogout.php" class="menu-btn">Logout</a></li>
                  
</ul>
<div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
</div>
</nav>
<br><br><br><br><br><br>
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
<center>
  </body>
</html>