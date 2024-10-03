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

                  <li><a href="index.php" class="menu-btn">Home</a></li>
                  <li><a href="login.php" class="menu-btn">Login</a></li>
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
<br><br><center><img src="https://media.istockphoto.com/photos/hand-with-marker-writing-mentoring-concept-picture-id629639348?b=1&k=20&m=629639348&s=170667a&w=0&h=CdFc2863tJfFJxMcg9iS9o78XbzWtGGuFkY1ooPKM3c=" height="400" width="500"><b><p>Mentoring means sharing acknowledgement with people around us, it is a professional way of expressing our 
skills and letting others and ourselves. Mentoring is a conventional method of transferring knowledge and ideas 
from confirmed professional in a society to an inexperienced member in sector. Mentoring is used in Education 
sector for providing knowledge.The goal of a mentorship is to accelerate the personal and professional development of mentees. A Mentoring is a traditional method of transferring knowledge and skills from an established professional in an organization to an inexperienced member in the field. Education sector has found mentoring as quite effective tool since long back and with the advent of new technologies, comes an idea of online mentoring, which is also referred to as e-mentoring. So a system is needed to maintain the mentoring record. 
<p>Mentorship Progression System (MPS) is system which can be used to assign the Mentees(Student) to Mentors(Teacher) and to store their data. This application replaces the inconvenient method of storing data. Mentorship Progression System (MPS)provides very easy, clear and effective way of maintaining the student record. This system shows solution to many problems of existing system. As we know that, everyone is familiar with the manual system which was maintaining the mentoring book for each and every student is very tedious, time-consuming, ineffective and complicated way of maintaining mentoring record.Mentorship Progression System is  systematic way of assinging Mentees to the Mentors.It is a web based Application which will be very usefull for keeping the data of Mentees such as their personal details, academic details, extra circular activities etc. The Data can be store for long time due to computerized system it will be very useful to manage student data more efficiently.It is most dynamic and pedagogical way to keep the records of students on appropriate manner also, it can keep records of these students Progression assessment to access easily. Mentor meeting are conducted in almost all the colleges but all the work done is manually, which is not too easy. This project will help to manage the mentoring record efficiently. So the records and reports of mentor meetings are handled using this system.
</b></center>
</div> </div>
</section>
</script>
</body>
</html>