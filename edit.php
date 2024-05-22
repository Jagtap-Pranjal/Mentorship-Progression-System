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
.fn{
 width: 50%;
  height: 35px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      }
      .ln{
 width: 87%;
  height: 35px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
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
<li><a href="mentor_menteespage.php" class="menu-btn">Go Back</a></li>
</ul>
<div class="menu-btn">
<i class="fas fa-bars"></i>
</div>
</div>
</nav>
<section class="container" id="container">
    <?php 
    $connect=mysql_connect("localhost","root","");
    mysql_select_db("mentorship_systemdb", $connect)or die("Unable to connect");
    if(isset($_POST['update'])){
        //update personal where enroll = $_POST['enroll']
        $enroll = $_POST['enroll'];
        $sql = "UPDATE `personal` SET `firstName` = '".$_POST["firstName"]."', `year` = '".$_POST["year"]."', `category` = '".$_POST["category"]."', `cast` = '".$_POST["cast"]."', `bg` = '".$_POST["bg"]."', `dateofbirth` =     '".$_POST["dateofbirth"]."', `email` = '".$_POST["email"]."', `address` = '".$_POST["address"]."', `number` = '".$_POST["number"]."', `dep` = '".$_POST["dep"]."', `class` = '".$_POST["class"]."'  WHERE `enroll` = ".$enroll;
        
        $result = mysql_query($sql);
        if($result){
            echo "<script>alert('Updated Successfully')</script>";
        }
        else{
            echo "<script>alert('Error')</script>";
        }


    }

    $sql = "select * from personal where enroll = ".$_GET['editid'];
        $result = mysql_query($sql);
        $personal = mysql_fetch_array($result);
    $sql2 = "select * from family where enroll= ".$_GET['editid'];
        $result2 = mysql_query($sql2);
        $family = mysql_fetch_array($result2);
    $sql3 = "select * from educational where enroll= ".$_GET['editid'];
        $result3 = mysql_query($sql3);
        $educational = mysql_fetch_array($result3);
        $sql4 = "select * from  extra where enroll = ".$_GET['editid'];
        $result4 = mysql_query($sql4);
        $extra = mysql_fetch_array($result4);

    ?>
             <div class="box">
             <div class="content"><center>
             <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <center> <h1>Mentee Information Form</h1></center>
          </div>
          <div class="panel-body">
          <form action="" method="post"><center>
          <label for="family"><b><h2>Personal Details</h2></b></label></center><br><br>
          <div class="form-group">
                <label for="firstName">Full Name</label><br>
                <input
                  type="text"
                  class="fn"
                  id="firstName"
                  name="firstName"
                  required
                  value="<?php echo $personal['firstName']; ?>"
                />
              </div><br>
              <div class="form-group">
                <label for="lastName">Addmission Year</label><br>
                <input
                  type="text"
                  class="fn"
                  id="year"
                  name="year"
                  required
                  value="<?php echo $personal['year']; ?>"
                  />
              </div><br>
              <label for="category">Category</label><br>
                <input
                  type="text"
                  class="fn"
                  id="category"
                  name="category"
                  required
                  value="<?php echo $personal['category']; ?>"
                />
              </div><br>
              <label for="cast">Cast</label><br>
                <input
                  type="text"
                  class="fn"
                  id="cast"
                  name="cast"
                  required
                  value="<?php echo $personal['cast']; ?>"
                />
              </div>
              <br>
              <div class="form-group">
              <label for="Bg">Blood Group</label><br>
              <input
                  type="text"
                  class="fn"
                  id="bg"
                  name="bg"
                  required
                  value="<?php echo $personal['bg']; ?>"
              />
              </div><br>
              <label for="dateofbirth">Date of Birth</label><br>
              <input type ="date" class="fn" id="dateofbirth" name="dateofbirth" required/>
              </div><br>   
              <div class="form-group">
              <label for="email">Email</label><br>
              <input
                  type="text"
                  class="fn"
                  id="email"
                  name="email"
                  required
                  value="<?php echo $personal['email']; ?>"
              />
              </div><br>
              <div class="form-group">
              <div class="form">
              <label for="address">Address</label><br>
              <textarea name="address" class="fn" rows="4" cols="30" required><?php echo $personal["address"]; ?></textarea>
              </div><br>
              <div class="form-group">
              <label for="number">Phone Number</label><br>
              <input
                  type="number"
                  class="fn"
                  id="number"
                  name="number"
                  required
                  value="<?php echo $personal['number']; ?>"
              />
              </div>
              <br><br>
              <center> <label for="family"><b><h2>Family Details</h2></b></label></center><br><br>
              <div class="form-group">
              <label for="firstName">Fathers Name</label><br>
              <input
                  type="text"
                  class="fn"
                  id="fname"
                  name="fname"
                  required
                  value="<?php echo $family['fname']; ?>"
                />
              </div><br>
              <div class="form-group">
              <label for="lastName">Mothers Name</label><br>
                <input
                  type="text"
                  class="fn"
                  id="mname"
                  name="mname"
                  required
                  value="<?php echo $family['mname']; ?>"
                />
              </div><br>
              <label for="cast">Siblings Name</label><br>
              <input
                  type="text"
                  class="fn"
                  id="sib"
                  name="sib"
                  value="<?php echo $family['sib']; ?>"
                  />
            </div>
            <br>
              <div class="form-group">
                <label for="Bg">Siblings Name</label><br>
                <input
                  type="text"
                  class="fn"
                  id="sib_one"
                  name="sib_one"
                    value="<?php echo $family['sib_one']; ?>"
                />
              </div>
              <br>
              <div class="form-group">
                <label for="number">Fathers Mobile Number</label><br>
                <input
                  type="text"
                  class="fn"
                  id="fmn"
                  name="fmn"
                  required
                    value="<?php echo $family['fmn']; ?>"
                />
              </div>
              <br>
              <div class="form-group">
              <label for="number">Mothers Mobile Number</label><br>
              <input
                  type="number"
                  class="fn"
                  id="mmn"
                  name="mmn"
                    required
                        value="<?php echo $family['mmn']; ?>"
                />
              </div>
              <br><br>
<center> <label for="family"><b><h2>Academic Details</h2></b></label></center><br>
  <div class="form-group">
                <label for="department">Department</label><br>
                <input type="text" name="dep" class="fn" id="dep" required 
                value=" <?php echo $personal['dep']; ?>"/>
                

              </div><br>
              <div class="form-group">
                <label for="enroll">Enrollment No</label><br>
                <input
                  type="text"
                  class="fn"
                  id="enroll"
                  name="enroll"
                  required
                  value="<?php echo $personal['enroll']; ?>"
                />
              </div><br>
               <div class="form-group">
                <label for="class">Class</label><br>
                <input
                  type="text"
                  class="fn"
                  id="class"
                  name="class"
                  required
                  value="<?php echo $personal['class']; ?>"
                />
              </div>
               <br><br>
<table>
 
<tr><tr>
<td align="center"><b>Sr.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Mark</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr></tr>
 <tr>
<tr>
<td>1</td>
<td>SSC</td>
<td><input type="text" class="ln" name="ssc_mark" id="ssc_mark" required value="<?php echo $educational["ssc_mark"] ?>"/></td>
<td><input type="text"class="ln" name="ssc_per" id="ssc_per" required
value="<?php echo $educational["ssc_per"];?>" /> </td>
<td><input type="text" class="ln" name="ssc_year" id="ssc_year" required 
value="<?php echo $educational["ssc_year"];?>"/></td>
</tr>
 
<tr>
<td>2</td>
<td>HSC</td>
<td><input type="text" class="ln" name="hsc_mark" value="<?php echo $educational["hsc_mark"]; ?>" /></td>
    <td><input type="text" class="ln" name="hsc_per" value="<?php echo $educational["hsc_per"]; ?>"  /></td>
<td><input type="text" class="ln" name="hsc_year" value="<?php echo $educational["hsc_year"]; ?>"/></td>
</tr>

<tr>
  <td>3</td>
    <td>ITI</td>
    <td><input type="text" name="iti_mark" value="<?php echo $educational["iti_mark"]; ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="iti_per"  value="<?php echo $educational["iti_per"]; ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="iti_year" placeholder="" class="ln"  value="<?php echo $educational["iti_year"]; ?>"></td>

  </tr>
  <tr>
    <td>4</td>
    <td>First Semester</td>
    <td><input type="text" name="sem1_mark" value="<?php echo $educational["sem1_mark"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem1_per" value="<?php echo $educational["sem1_per"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem1_year" value="<?php echo $educational["sem1_year"] ?>" placeholder="" class="ln"></td>
   
  </tr>
  <tr>
    <td>5</td>
    <td>Second Semester</td>
    <td><input type="text" name="sem2_mark" placeholder="" 
    value="<?php echo $educational["sem2_mark"] ?>" class="ln"></td>
    class="ln"></td>
    <td><input type="text" name="sem2_per" placeholder="" class="ln"
    value="<?php echo $educational["sem2_per"] ?>"></td>
    ></td>
    <td><input type="text" name="sem2_year" placeholder=""
    value="<?php echo $educational["sem2_year"] ?>" class="ln"></td>
    
  </tr>
    <tr>
      <td>6</td>
    <td>Third Semester</td>
    <td><input type="text" name="sem3_mark" placeholder=""
    value="<?php echo $educational["sem3_mark"] ?>" class="ln"></td>

    <td><input type="text" name="sem3_per" placeholder=""
    value="<?php echo $educational["sem3_per"] ?>" class="ln"></td>
    
    <td><input type="text" name="sem3_year" placeholder="" 
    value="<?php echo $educational["sem3_year"] ?>" class="ln"></td>
  </tr>
  <tr>
    <td>7</td>
    <td>Fourth Semester</td>
    <td><input type="text" name="sem4_mark"
    value="<?php echo $educational["sem4_mark"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem4_per" 
    value="<?php echo $educational["sem4_per"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem4_year" placeholder="" 
    value="<?php echo $educational["sem4_year"] ?>" class="ln"></td>
  </tr>
  <tr>
    <td>8</td>
    <td>Fifth Semester</td>
    <td><input type="text" name="sem5_mark" 
    value="<?php echo $educational["sem5_mark"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem5_per"
    value="<?php echo $educational["sem5_per"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem5_year" 
    value="<?php echo $educational["sem5_year"] ?>" placeholder="" class="ln"></td>
  </tr>
  <tr>
    <td>9</td>
    <td>Sixth Semester</td>
    <td><input type="text" name="sem6_mark"  
    value="<?php echo $educational["sem6_mark"] ?>" placeholder="" class="ln"></td>

    <td><input type="text" name="sem6_per"  
    value="<?php echo $educational["sem6_per"] ?>" placeholder="" class="ln"></td>
    <td><input type="text" name="sem6_year"  
    value="<?php echo $educational["sem6_year"] ?>" placeholder="" class="ln"></td>
    

  </tr></tr></table>
<br><br><br>
<table>       
 <center> <label for="family"><b><h2>Extra Curricular Details</h2></b></label></center>
<tr>
<td align="center"><b>Sr.No.</b></td>
<td align="center"><b>Event Name</b></td>
<td align="center"><b>Date of Participation</b></td>
<td align="center"><b>Level of Event</b></td>
<td align="center"><b>Rank Achieved</b></td>
</tr>
 <br>
<tr>
<td>1</td>
<td><input type="text" class="ln" name="Event" required value="<?php echo $extra["Event"]; ?>" /></td>
<td><input type="text" class="ln" name="dop" required value="<?php echo $extra["dop"]; ?>" /></td>
<td><input type="text" class="ln" name="loe" required value="<?php echo $extra["loe"]; ?>" /></td>
<td><input type="text" class="ln" name="Rank" required value="<?php echo $extra["Rank"]; ?>" /></td>
</tr>
 <br>
<tr>
<td>2</td>
<td><input type="text" class="ln" name="Event_one"  value="<?php echo $extra["Event_one"]; ?>" /></td>
<td><input type="text" class="ln" name="dop_one" value="<?php echo $extra["dop_one"]; ?>" /></td>
<td><input type="text" class="ln" name="loe_one" value="<?php echo $extra["loe_one"]; ?>" /></td>
<td><input type="text" class="ln" name="Rank_one" value="<?php echo $extra["Rank_one"]; ?>" /></td>
</tr><br>
<tr>
<td>3</td>
<td><input type="text" class="ln" name="Event_two" value="<?php echo $extra["Event_two"]; ?>" /></td>
<td><input type="text" class="ln" name="dop_two" value="<?php echo $extra["dop_two"]; ?>" /></td>
<td><input type="text" class="ln" name="loe_two" value="<?php echo $extra["loe_two"]; ?>" /></td>
<td><input type="text" class="ln" name="Rank_two" value="<?php echo $extra["Rank_two"]; ?>" /></td>
</tr><br>
<tr>
<td>4</td>
<td><input type="text" class="ln" name="Event_three" value="<?php echo $extra["Event_three"]; ?>" /></td>
<td><input type="text" class="ln" name="dop_three" value="<?php echo $extra["dop_three"]; ?>" /></td>
<td><input type="text" class="ln" name="loe_three" value="<?php echo $extra["loe_three"]; ?>" /></td>
<td><input type="text" class="ln" name="Rank_three" value="<?php echo $extra["Rank_three"]; ?>" /></td>
</tr>
</table>
</div>
<br>
<center> <div class="form-group">
<tr><td><input 
     type="submit"
     class="btn btn-primary" 
      style="color: #000000"
        name="update"
        value="Update" /></td>
</tr>
</center>
</form>
</div>
</div>
</table>
</center>
</div>
</div>
</section>
</body>
</html>