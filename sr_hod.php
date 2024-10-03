<!DOCTYPE html>
<html>
<head>
  <title>Search Student Data</title>
  <script type="text/javascript">
    function PrintDiv() 
   {  
       var divContents = document.getElementById("div1").innerHTML;  
       var printWindow = window.open('', '', 'height=200,width=400');   
       printWindow.document.write(divContents); 
       printWindow.document.close();  
       printWindow.print();  
    }    
  </script>
  <style>
    
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
color:#000000;
}
.container .box
{  
position:relative;
  width: 1200px;
height: auto;
  padding: 60px;
  background: #daff94;
  box-shadow: 0 5px 15px rgba(0,0,0,.9);
  border-radius: 30px;
  margin: auto;
  margin-top: 80px;
  margin-bottom: 40px;
  box-sizing: border-box;
  overflow: hidden;
  text-align: left;
   
}
.button{
  width: 30%;
  height: 80%;
  margin: auto;
  justify-content: center;
  display: block;
  color: #0000;
  font-size: 20px;
  font-weight: bold;
  margin-top: 50px;
  outline: none;
  border: none;
  border-radius: 5px;
  
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
  </style>
</head>
<body style="background:#000000">
  <nav class="navbar">
        <div class="headin">
      <div class="logo"><a href="#">Mentor<span>ing.</span></a></div>
<ul class="menu" id="menu">

                  <li><a href="adminvalidation_hod.php" class="menu-btn">My Home</a></li>
</ul>
<div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
</div>
</nav>


<br><br><br><br><br>
<form method="post">
  <center><br><br>
<label>Search</label>
<input type="text" name="search" placeholder="Enter Your Enrollment Number Here">
<input type="submit" name="submit">
  </center>
</form>

</body>
</html>
<html>
<body>
  <section class="container" id="container">
             <div class="box" id="div1">
<?php

$con = new PDO("mysql:host=localhost;dbname=mentorship_systemdb",'root','');

if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  
  $sth = $con->prepare("SELECT * FROM `personal` WHERE enroll = '$str' ");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <br>
    
    <center><h2><b><label>PERSONAL DETAILS</b></h2></label>
</center><br>
    <table align="center" border="3px" style="width:700px; line-height:30px;">
      <tr>
        <th>Enrollment No</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Addmission Year</th>

      </tr>
      <tr>
        <td><?php echo $row->enroll; ?></td>
        <td><?php echo $row->firstName;?></td>
        <td><?php echo $row->email;?></td>
        <td><?php echo $row->number;?></td>
        <td><?php echo $row->year;?></td></tr>
        <tr>
        <th>Date Of Birth</th>
        <th>Category</th>
        <th>Cast</th>
        <th>Blood Group</th>
        <th>Address</th></tr>

        <tr>
        <td><?php echo $row->dateofbirth;?></td>
        <td><?php echo $row->category;?></td>
        <td><?php echo $row->cast;?></td>
        <td><?php echo $row->bg;?></td>
        <td><?php echo $row->address;?></td>

      </tr>

    </table>
    <br>
    <?php 
  }
  ?>

    <?php
  
  $sth = $con->prepare("SELECT * FROM `family` WHERE enroll = '$str' ");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?><center><label><h2><b>FAMILY DETAILS</b></h2></label></center>
  <br>
    <table align="center" border="3px" style="width:700px; line-height:30px;">
      <tr>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        

      </tr>
      <tr>
        <td><?php echo $row->fname;?></td>
        <td><?php echo $row->mname;?></td>
        
      </tr>
      <th>Sibling's Name</th>
      <th>Sibling's Name</th></tr>


      </tr><tr>
        <td><?php echo $row->sib;?></td>
        <td><?php echo $row->sib_one;?></td>
</tr>
        <th>Father's Mobile No</th>
        <th>Mother's Mobile No</th></tr>
        <tr>
        <td><?php echo $row->fmn;?></td>
        <td><?php echo $row->mmn;?></td>
      </tr>

    </table>
    <?php 
  }
  ?>
<?php 
  
  $sth = $con->prepare("SELECT * FROM `extra` WHERE enroll = '$str' ");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <center><label><h2><b>EXTRA CIRRICULAR DETAILS</b></h2></label></center>
  <br>
    <table align="center" border="3px" style="width:700px; line-height:30px;">
      <tr>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Level of Event</th>
        <th>Rank Achived</th>
        

      </tr>
      <tr>
        <td><?php echo $row->Event;?></td>
        <td><?php echo $row->dop;?></td>
        <td><?php echo $row->loe;?></td>
        <td><?php echo $row->Rank;?></td></tr><tr>
        <td><?php echo $row->Event_one;?></td>
        <td><?php echo $row->dop_one;?></td>
        <td><?php echo $row->loe_one;?></td>
        <td><?php echo $row->Rank_one;?></td></tr><tr>
        <td><?php echo $row->Event_two;?></td>
        <td><?php echo $row->dop_two;?></td>
        <td><?php echo $row->loe_two;?></td>
        <td><?php echo $row->Rank_two;?></td></tr><tr>
        <td><?php echo $row->Event_three;?></td>
        <td><?php echo $row->dop_three;?></td>
        <td><?php echo $row->loe_three;?></td>
        <td><?php echo $row->Rank_three;?></td>
      </tr>

    </table>
      <?php 
  }
  ?>
<?php 
  
  $sth = $con->prepare("SELECT * FROM `educational` WHERE enroll = '$str' ");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <center><label><h2><b>EDUCATIONAL DETAILS</b></h2></label></center>
  <br>
    <table align="center" border="3px" style="width:700px; line-height:30px;">
      <tr>
        <th>Examination</th>
        <th>Mark</th>
        <th>Percentage</th>
        <th>Year of Passing</th>
        

      </tr>
      <tr>
        <td>SSC</td>
        <td><?php echo $row->ssc_mark;?></td>
        <td><?php echo $row->ssc_per;?></td>
        <td><?php echo $row->ssc_year;?></td></tr><tr>
        <td>HSC</td>
        <td><?php echo $row->hsc_mark;?></td>
        <td><?php echo $row->hsc_per;?></td>
        <td><?php echo $row->hsc_year;?></td></tr><tr>
        <td>ITI</td>
        <td><?php echo $row->iti_mark;?></td>
        <td><?php echo $row->iti_per;?></td>
        <td><?php echo $row->iti_year;?></td></tr><tr>
        <td>Sem ONE</td>
        <td><?php echo $row->sem1_mark;?></td>
        <td><?php echo $row->sem1_per;?></td>
        <td><?php echo $row->sem1_year;?></td></tr><tr>
        <td>Sem TWO</td>
        <td><?php echo $row->sem2_mark;?></td>
        <td><?php echo $row->sem2_per;?></td>
        <td><?php echo $row->sem2_year;?></td></tr><tr>
        <td>Sem THREE</td>
        <td><?php echo $row->sem3_mark;?></td>
        <td><?php echo $row->sem3_per;?></td>
        <td><?php echo $row->sem3_year;?></td></tr><tr>
        <td>Sem FOUR</td>
        <td><?php echo $row->sem4_mark;?></td>
        <td><?php echo $row->sem4_per;?></td>
        <td><?php echo $row->sem4_year;?></td></tr><tr>
        <td>Sem FIVE</td>
        <td><?php echo $row->sem5_mark;?></td>
        <td><?php echo $row->sem5_per;?></td>
        <td><?php echo $row->sem5_year;?></td></tr><tr>
        <td>Sem SIX</td>
        <td><?php echo $row->sem6_mark;?></td>
        <td><?php echo $row->sem6_per;?></td>
        <td><?php echo $row->sem6_year;?></td>
      </tr>

    </table>
<?php 
  } 
  else{
      echo "Enrollment Number Does Not Exist";
    }
}

?>
</div>
</section>
</body>
</html>
 <center><td><input type="button" class="button" onclick="PrintDiv();" value="Print"  style="color: #000000"></td></center>
 <br><br><br>
</div>



