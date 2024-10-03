<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/80ea88e390.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
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
.container{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
color:#e0ffc7;
}
.container .box
{  
position:relative;
  width: 1500px;
  height: auto;
  padding: 60px;
  background: #000000;
  box-shadow: 0 5px 15px rgba(0,0,0,.9);
  border-radius: 30px;
  margin: 30px;
  box-sizing: border-box;
  overflow: hidden;
  text-align: left;
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
<li><a href="adminvalidation_mentor.php" class="menu-btn">My Home</a></li>
</ul>
<div class="menu-btn">
<i class="fas fa-bars"></i>
</div>
</div>
</nav>
<section class="container" id="container">
                <div class="box">
                <div class="content"> 
                <h1><center>Mentorship Progression System</center></h1>
<br><br><center>

<?php 
mysql_connect('localhost','root',''); 
mysql_select_db('mentorship_systemdb'); 

if(isset($_GET['deleteid']))
{
  $stmt = mysql_query("DELETE FROM personal where enroll= ".$_GET["deleteid"]);
		
  $stmt = mysql_query("DELETE FROM family where enroll= ".$_GET["deleteid"]);
	$stmt = mysql_query("DELETE FROM educational enroll= ".$_GET["deleteid"]);
	$stmt = mysql_query("DELETE FROM extra enroll= ".$_GET["deleteid"]);	

}

$query="select * from excelsheet"; 
$var=$_SESSION["Password"];
$result = mysql_query("SELECT CLASS,ROLL_NO,NAME,ENROLLMENT_NO,MOBILE_NO,EMAIL_ID,MENTOR_ID FROM excelsheet  WHERE MENTOR_ID = '$var'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;

 
$row = mysql_fetch_row($result);
echo $row[0]; 
echo $row[1]; 
echo $row[2]; 
echo $row[3]; 
echo $row[4]; 
echo $row[5]; 
echo $row[6]; 
}
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Mentees List</title> 
    </head> 
    <body> 
    <table align="center" border="3px" style="width:100%; line-height:30px;"> 
      <h1> Mentees List </h1>
    <tr>  
           
            <th>CLASS</th>
            <th>ROLL_NO</th>
            <th>NAME</th>
            <th>ENROLLMENT_NO</th>
            <th>MOBILE_NO</th>
            <th>EMAIL_ID</th>
            <th>MENTOR_ID</th> 
            <th>ACTION</th> 
    </tr> 
        
        <?php while($rows=mysql_fetch_assoc($result)) 
        { 
        ?> 
        <tr> 
        <td><?php echo $rows['CLASS']; ?></td> 
        <td><?php echo $rows['ROLL_NO']; ?></td> 
        <td><?php echo $rows['NAME']; ?></td> 
        <td><?php echo $rows['ENROLLMENT_NO']; ?></td> 
        <td><?php echo $rows['MOBILE_NO']; ?></td>
        <td><?php echo $rows['EMAIL_ID']; ?></td>
        <td><?php echo $rows['MENTOR_ID']; ?></td> 
        <td><a href="add.php"><button type="submit"  name="add">Add Details</button></a>
        <a href="mentor_menteespage.php?deleteid=<?php echo $rows['ENROLLMENT_NO']; ?>"><button >Delete Details</button></a>  
        <a href=""><button type="submit"  name="edit">Edit Details</button></a>   
      </td>
        </tr> 
<?php 
   } 
?>
</table> 
</section>
</script>
</body>
</html>