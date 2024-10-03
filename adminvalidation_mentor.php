<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/80ea88e390.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
*{
      box-sizing: border-box;
      margin: 0;
      padding:0;
      outline: none;
      text-decoration: none;
}
html
{
    scroll-behavior: smooth;
}
.max-width
{
    max-width: 1300px;
    padding: 0 20px;
    margin: auto;
}
/* navbar styling */
.navbar
{
    position:fixed;
    width: 100%;
    padding: 18px 0;
    font-family: 'Ubuntu', sans-serif;
    transition: all 0.3s ease;
    z-index: 2;
}
.navbar .headin
{
  max-width: 1300px;
  padding: 0 20px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.navbar .logo a
{
    color: #fff;
    font-size: 35px;
    text-decoration: none;
    font-weight: 600;
}
.navbar .logo a span
{
    color:#9BDC28;
    transition: all 0.3s ease;
}
.navbar .menu
{
    list-style: none;
    display: flex;
}
.navbar .menu a
{
    display: inline-flex;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 25px;
    transition: color 0.3s ease;
    position: relative;
    text-decoration: none;
}
.navbar .menu li a:hover
{
    color: #9BDC28;
}
/* menu btn styling */
.menu-btn
{
    color: #fff;
    font-size: 23px;
    cursor: pointer;
    display: none;
}
.navbar label.button
{
  color:#fff;
  font-size:18px;
  cursor:pointer;
  display:none;
}
@media (max-width: 940px)
{
.menu-btn
{
  display: block;
  z-index: 999;
}
.menu-btn i.active:before
{
  content: "\f00d";
}
.navbar .headin .menu
{
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
.headin .menu.active
{
  left: 0;
  width:100%;
}
.headin .menu li
{
  display: block;
}
.headin .menu li a
{
  display: inline-block;
  margin: 15px 0;
  font-size: 20px;
}
.headin .menu a
{
  display:block;
  font-size:20px;
  width:100%;
  margin-top: 30px;
  box-shadow: none;
  text-align:center;
}
.headin .menu a:hover:before
{
  box-shadow: none;
}
}
/* home section styling */
.home
{
    display: flex;
    height: 100vh;
    color: #fff;
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    background:#080706;
    font-family: 'Ubuntu', sans-serif;
}
.home .max-width
{
    margin: auto 50px auto 50px;
}
.home .home-content .text-1
{
    font-size: 27px;
}
.home .home-content .text-2
{
    font-size: 75px;
    font-weight: 600;
    margin-left: -3px;
}
.home .home-content .text-3
{
    font-size: 40px;
    margin: 5px 0;
}
.home .home-content .text-3 span
{
    color: #9BDC28;
    font-weight: 500;
}
@media (max-width:600px)
{
.home .home-content .text-1
{
font-size: 20px;
}
.home .home-content .text-2
{
      font-size: 50px;
      font-weight: 500;
      margin-left: -2px;
}
.home .home-content .text-3
{
      font-size: 30px;
      margin: 5px 0;
}
.home .home-content .text-3 span
{
  color: #9BDC28;
  font-weight: 400;
}
.home .max-width
{
  margin: auto 10px auto 10px;
}
.navbar .logo a
{
  font-size: 25px;
}
}
@media (max-width:300px)
{
.home .home-content .text-1
{
  font-size: 15px;
}
.home .home-content .text-2
{
  font-size: 35px;
  font-weight: 500;
  margin-left: -2px;
}
.home .home-content .text-3
{
  font-size: 20px;
  margin: 5px 0;
}
.home .home-content .text-3 span
{
  color: #9BDC28;
  font-weight: 400;
}
.home .max-width
{
  margin: auto 5px auto 5px;
}
.navbar .logo a
{
font-size: 18px;
}
}
/cards/
body .container
{
margin:0;
padding:0;
display: flex;
justify-content:center;
align-items: center;
min-height: 100vh;
font-family: 'Poppins',sans-serif;
}
.container
{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.container .box
{
  position:relative;
  width: 350px;
  padding: 40px;
  background: #CBED91;
  box-shadow: 0 5px 15px rgba(0,0,0,.9);
  border-radius: 10px;
  margin: 20px;
  box-sizing: border-box;
  overflow: hidden;
  text-align: center;
}
.container .box:before
{
  content:'';
  width:50%;
  height:100%;
  position:absolute;
  top:0;
  left:0;
  background:rgba(255,255,255,.2);
  z-index:1;
  pointer-events: none;
}
.container .box .icon
{
  position: relative;
  width:80px;
  height:80px;
  color:#fff;
  background: #000;
  display:flex;
  justify-content: center;
  align-items: center;
  margin:0 auto;
  border-radius: 50%;
  font-size:40px;
  font-weight: 700;
  transition: 1s;
}
.container .box:nth-child(1) .icon
{
  box-shadow:0 0 0 0 #080706;
  background: #080706;
}
.container .box:nth-child(1):hover .icon
{
  box-shadow:0 0 0 400px #080706;
}
.container .box:nth-child(2) .icon
{
  box-shadow:0 0 0 0 #080706;
  background: #080706;
}
.container .box:nth-child(2):hover .icon
{
  box-shadow:0 0 0 400px #080706;
}
.container .box:nth-child(3) .icon
{
  box-shadow:0 0 0 0 #080706;
  background: #080706;
}
.container .box:nth-child(3):hover .icon
{
  box-shadow:0 0 0 400px #080706;
}
.container .box .content
{
  position:relative;
  z-index: 1;
  transition:0.5s;
}
.container .box:hover .content
{
  color:#fff;
}
.container .box .content h4
{
  font-size: 15px;
  margin:10px 0;
  padding: 0;
}
.container .box .content p
{
  margin: 0;
  padding: 0;
}
.container .box .content a
{
  display:inline-block;
  padding: 10px 20px;
  background:#fff;
  border-radius: 20px;
  text-decoration: none;
  color: #000;
  font-weight:500;
  margin-top: 20px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.container .box .content a:hover
{
background:#CBED91;
}
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.contain
{
  max-width: 800px;
  background: #fff;
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.contain .text
{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: #9BDC28;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.contain form
{
  padding: 30px 0 0 0;
}
.contain form .form-row
{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data
{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea
{
  height: 70px;
}
.input-data input,
.textarea textarea
{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label
{
  transform: translateY(-20px);
  font-size: 14px;
  color: #9BDC28;
}
.textarea textarea
{
  resize: none;
  padding-top: 10px;
}
.input-data label
{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.textarea label
{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline
{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before
{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #9BDC28;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before
{
  transform: scale(1);
}
.submit-btn .input-data
{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner
{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background:#9BDC28;
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner
{
  left: 0;
}
.submit-btn .input-data input
{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index:1;
}
@media (max-width: 700px) 
{
.container .text
{
  font-size: 30px;
}
.container form
{
  padding: 10px 0 0 0;
}
.container form .form-row
{
  display: block;
}
form .form-row .input-data
{
  margin: 35px 0!important;
}
.submit-btn .input-data
{
  width: 40%!important;
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
                  <li><a href="index.php" class="menu-btn">Home</a></li>
                  <li><a href="mps_about.php" class="menu-btn">About Us</a></li>
                  <li><a href="mentor_menteespage.php" class="menu-btn">Mentees</a></li>
                  <li><a href="sr_M.php" class="menu-btn">Mentees Report</a></li>
                  <li><a href="demo.php" class="menu-btn">Add Attendance</a></li>
                  <li><a href="view_attendance.php" class="menu-btn">View Attendance</a></li>
                  <li><a href="viewnotice_mentor.php" class="menu-btn">Notice</a></li>
                  <li><a href="mentorlogout.php" class="menu-btn">Logout</a></li>
</ul>

<div class="menu-btn">
<i class="fas fa-bars"></i>
</div>
</div>
</nav>
<!-- home section start -->
<section class="home" id="home">
              <div class="max-width">
              <div class="home-content">
              <div class="text-3">Hello<span class="typin">         Mentor </span></div><br>
              <div class="text-2">Welcome to</div><br>
              <div class="text-2">Mentorship Progression System</div>
</div>
</div>
</section>
</body>
</html>
