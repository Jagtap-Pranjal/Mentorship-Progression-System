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

                  <li><a href="adminvalidation_mentorincharge.php" class="menu-btn">My Home</a></li>
                  
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
$connect=mysql_connect("localhost","root","");
mysql_select_db("mentorship_systemdb", $connect)or die("Unable to connect");

//insert
if(isset($_POST["btnsave"]))
{
$srno=$_POST["Sr_No"];
$mentorid=$_POST["Mentor_ID"];
$mentorname=$_POST["Mentor_Name"]; 
$mob=$_POST["Mobile_No"];
$email=$_POST["Email"];

$qry="INSERT INTO `mentor_table_mi`(`Sr_No`,`Mentor_ID`,`Mentor_Name`,`Mobile_No`,`Email`) VALUES('".$srno."','".$mentorid."','".$mentorname."','".$mob."','".$email."')";
$sql=mysql_query($qry);
if ($sql) 
{
echo "Data Inserted Sucessfully!!";
}
else
{
 echo "Data Failed to Insert";
}
}

//Update
if (isset($_POST["btn-update"]))
{   
$Sr_No = $_POST["newsrno"];
$Mentor_ID = $_POST["newmentorid"];
$Mentor_Name = $_POST["newmentorname"];
$Mobile_No = $_POST["newmob"];
$Email = $_POST["newemail"];

$qry= "UPDATE `mentor_table_mi` SET `Sr_No` = '".$Sr_No."',`Mentor_ID` = '".$Mentor_ID."',`Mentor_Name` = '".$Mentor_Name."',`Mobile_No` = '".$Mobile_No."',`Email` = '".$Email."' WHERE `Sr_No`= ".$_POST['newsrno'];  

$sql = mysql_query($qry);
if ($sql) 
{
echo "Updated";
}else{
echo "Failed to update";
}
}

//delete
if (isset($_GET["desrno"])) {
$qry=mysql_query("DELETE FROM `mentor_table_mi` WHERE `Sr_No`= ".$_GET["desrno"]);
if ($qry) {
echo "Record deleted";
}else{
echo "Not deleted";
}
}
?>
<!DOCTYPE html>
<html>
<body><center>
<form method="post">
<table>
<tr>
<td><b>Sr No:</b></td>
<td><input type="number" required="" name="Sr_No" placeholder="Sr No"></td></tr> 
<tr><td><b> Mentor ID:</b></td>
<td><input type="text" required="" name="Mentor_ID" placeholder="Mentor ID"></td></tr>
<tr><td><b>Mentor Name:</b></td>
<td><input type="text" required="" name="Mentor_Name" placeholder="Mentor Name"></td></tr>
<tr><td><b>Mobile No:</b></td>
<td><input type="number" required="" name="Mobile_No" placeholder="Mobile No"></td></tr> 
<tr><td><b>Email:</b></td>
<td><input type="email" required="" name="Email" placeholder="Email"></td></tr>
<tr><td><input type="submit" name="btnsave" value="Save"></td></tr>
</tr>
</table>
</form>
<hr>
<?php
$qry="select * from mentor_table_mi";
$sql = mysql_query($qry);
?>
<table align="center" border="3px" style="width:1200px; line-height:30px;"> 
<tr>
<td>Sr No</td>
<td>Mentor ID</td>
<td>Mentor Name</td>
<td>Mobile No</td>
<td>Email</td>
<td>Action</td>
</tr>
<h1>Mentor Details</h1>
<?php while ($result = mysql_fetch_array($sql))
{
  ?>
<tr>
<td><?php echo $result['Sr_No']; ?></td>
<td><?php echo $result['Mentor_ID']; ?></td>
<td><?php echo $result['Mentor_Name']; ?></td>
<td><?php echo $result['Mobile_No']; ?></td>
<td><?php echo $result['Email']; ?></td> 
<td>
<a href="MI_mentorpage.php?srno=<?php echo $result['Sr_No']; ?>"><button type="submit"  name="view">View</button></a> 
<a href="MI_mentorpage.php?edit=<?php echo $result['Sr_No']; ?>"><button type="submit"  name="edit">Edit</button></a> 
<a href="MI_mentorpage.php?desrno=<?php echo $result['Sr_No']; ?>"><button type="submit"  name="delete">Delete</button></a> 
<a href="MI_mentormentee.php?viewmentee=<?php echo $result['Mentor_ID']; ?>"><button type="submit"  name="viewmentee">View Mentees</button></a> 

</td>
</tr>
<?php
}
?> 
</table>
<br><br>
<?php
if (isset($_GET["srno"])) {
$qry = "select * from mentor_table_mi where Sr_No = ".$_GET["srno"];

$sql = mysql_query($qry);

$result = mysql_fetch_array($sql);
 
echo "Mentor ID is ".$result["Mentor_ID"]."<br>";
echo "Mentor Name is ".$result["Mentor_Name"]."<br>";
echo "Mentor Mobile No is ".$result["Mobile_No"]."<br>";
echo "Mentor Email is ".$result["Email"]."<br>";
}

//edit
if (isset($_GET["edit"])) {
$qry = "select * from mentor_table_mi where Sr_No= ".$_GET["edit"]; 

$sql = mysql_query($qry);

$result = mysql_fetch_array($sql);
$srno = $result["Sr_No"];
$mentorid = $result["Mentor_ID"];
$mentorname = $result["Mentor_Name"];
$mob = $result["Mobile_No"];
$email = $result["Email"];
?>
<form method="post">
<input type="number" name="newsrno" value="<?php echo $srno; ?>"> <br><br> 
<input type="text" name="newmentorid" value="<?php echo $mentorid; ?>" ><br><br>
<input type="text" name="newmentorname" value="<?php echo $mentorname; ?>"><br><br>
<input type="number" name="newmob" value="<?php echo $mob; ?>"><br><br>
<input type="email" name="newemail" value="<?php echo $email; ?>"><br><br>
<input type="submit" name="btn-update" value="Update">
</form>
<?php
}
?>
</center>
</body>
</html>