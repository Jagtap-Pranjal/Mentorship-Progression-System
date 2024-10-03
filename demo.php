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
</head>
</html>
    <script type="text/javascript" src="java.js"></script>
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
<center>
    <?php 
mysql_connect('localhost','root',''); 
mysql_select_db('mentorship_systemdb'); 
$query="select * from excelsheet"; 
$var=$_SESSION["Password"];

try{
   
      if(isset($_POST['att'])){
        for($i=0;$i<count($_POST["class"]); $i++){
          $attendance[$i]["class"] = $_POST['class'][$i];
          $attendance[$i]["attendance"] = $_POST['st_status'][$i];
        $attendance[$i]["enrollment"] = $_POST['enrollment'][$i];
        $attendance[$i]["enroll"] = $_POST['enroll'][$i];
        $attendance[$i]["date"] = $_POST['date'][$i];
        $attendance[$i]["mentor"] = $_POST['mentor'];
        }
       foreach ($attendance as $att) {
        $result = mysql_query("insert into attendance(st_status,MENTOR_ID,CLASS,ENROLLMENT_NO,NAME,date) values('".$att["attendance"]."','".$att["mentor"]."','".$att["class"]."','".$att["enroll"]."','".$att["enrollment"]."','".$att["date"]."')") ;
      $alert="<script>alert('Record inserted Successfully..!!')
          window.location='demo.php'</script>";
        echo $alert;
       
      }
    }
  }
  catch(Execption $e){
    $error_msg = $e->$getMessage();
  }
$result = mysql_query("SELECT MENTOR_ID,CLASS,NAME,ENROLLMENT_NO FROM excelsheet  WHERE MENTOR_ID = '$var'");

     $radio = 0;
     $i=0;
     

if (!$result) {

    echo 'Could not run query: ' . mysql_error();
    exit;


$row = mysql_fetch_row($result);

echo $row[0]; 
echo $row[1]; 
echo $row[2];
echo $row[3]; 

}
?> 

<!DOCTYPE html> 
<html> 
    <head> 
        <title>Mentees Attendance</title> 
    </head> 
    <body>
    <form  method="post">
        <h1>Attendance of <?php echo date('Y-m-d'); ?></h1>
        
    <table align="center" border="1px" style="width:900px; line-height:15px;"> 
   <tr><br>
            <th>MENTOR_ID</th>
            <th>CLASS</th>
            <th>NAME</th>
            <th>ENROLLMENT NO</th>
            <th>DATE</th>
            <th>ATTENDANCE</th>              
        </tr> 
        
        <?php while($rows=mysql_fetch_assoc($result)) 
        {   $i++;
        ?> 
        <tr> 
        <td><input type="hidden" name="mentor" value="<?php echo $rows['MENTOR_ID']; ?>"><?php echo $rows['MENTOR_ID']; ?></td> 
        <td><input type="hidden" name="class[<?php echo $radio; ?>]" value="<?php echo $rows['CLASS']; ?>"><?php echo $rows['CLASS']; ?></td> 
        <td><input type="hidden" name="enrollment[<?php echo $radio; ?>]" value="<?php echo $rows['NAME']; ?>"><?php echo $rows['NAME']; ?></td>
        <td><input type="hidden" name="enroll[<?php echo $radio; ?>]" value="<?php echo $rows['ENROLLMENT_NO']; ?>"><?php echo $rows['ENROLLMENT_NO']; ?></td>
        <td><input type="hidden" name="date[<?php echo $radio; ?>]" value="<?php echo date('Y-m-d'); ?>"><?php echo date('Y-m-d'); ?></td>  
       
      <td>
         <label>Present</label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="P" style="height:20px; width:20px;">
         <label>Absent </label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="A" checked style="height:20px; width:20px;">
       </td>
        
        </tr> 
    <?php 
               $radio++; 
           }

          ?> 


    </table> 
    <center><br>
    <input type="submit" class="btn" value="Save!" name="att" />
  </center>

        </section>
</script>
</form>
</body>
</html>

