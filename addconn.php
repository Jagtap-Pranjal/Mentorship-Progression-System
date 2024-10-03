<?php
	$firstName = $_POST['firstName'];
	$year = $_POST['year'];	
	$category = $_POST['category'];
	$cast = $_POST['cast'];
	$bg = $_POST['bg'];
	$dateofbirth=$_POST['dateofbirth'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$sib = $_POST['sib'];
	$sib_one = $_POST['sib_one'];
	$fmn = $_POST['fmn'];
	$mmn = $_POST['mmn'];
	$dep=$_POST['dep'];
	$enroll=$_POST['enroll'];
    $class=$_POST['class'];
    $ssc_mark = $_POST['ssc_mark'];
	$ssc_per = $_POST['ssc_per'];
	$ssc_year = $_POST['ssc_year'];
	$hsc_mark = $_POST['hsc_mark'];
	$hsc_per = $_POST['hsc_per'];
	$hsc_year = $_POST['hsc_year'];
	$iti_mark = $_POST['iti_mark'];
	$iti_per = $_POST['iti_per'];
	$iti_year = $_POST['iti_year'];	
	$sem1_mark = $_POST['sem1_mark'];
	$sem1_per = $_POST['sem1_per'];
	$sem1_year = $_POST['sem1_year'];
	$sem2_mark = $_POST['sem2_mark'];
	$sem2_per = $_POST['sem2_per'];
	$sem2_year = $_POST['sem2_year'];
	$sem3_mark = $_POST['sem3_mark'];
	$sem3_per = $_POST['sem3_per'];
	$sem3_year = $_POST['sem3_year'];
	$sem4_mark = $_POST['sem4_mark'];
	$sem4_per = $_POST['sem4_per'];
	$sem4_year = $_POST['sem4_year'];	
	$sem5_mark = $_POST['sem5_mark'];
	$sem5_per = $_POST['sem5_per'];
	$sem5_year = $_POST['sem5_year'];
	$sem6_mark = $_POST['sem6_mark'];
	$sem6_per = $_POST['sem6_per'];
	$sem6_year = $_POST['sem6_year'];
    $Event = $_POST['Event'];
	$dop = $_POST['dop'];
	$loe = $_POST['loe'];
	$Rank = $_POST['Rank']; 
	$Event_one = $_POST['Event_one'];
	$dop_one = $_POST['dop_one'];
	$loe_one= $_POST['loe_one'];
	$Rank_one= $_POST['Rank_one']; 
	$Event_two = $_POST['Event_two'];
	$dop_two= $_POST['dop_two'];
	$loe_two = $_POST['loe_two'];
	$Rank_two= $_POST['Rank_two']; 
	$Event_three= $_POST['Event_three'];
	$dop_three = $_POST['dop_three'];
	$loe_three = $_POST['loe_three'];
	$Rank_three = $_POST['Rank_three']; 
	
	// Database connection
	$conn = new mysqli('localhost','root','','mentorship_systemdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error); 
	} else {


		$stmt = $conn->prepare("insert into personal(firstName,category,year,cast,bg,dateofbirth,email,address,number,dep,enroll,class) values(?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssisssssisis", $firstName,$category,$year,$cast, $bg,$dateofbirth,$email,$address,$number,$dep,$enroll,$class);
		$execval = $stmt->execute();



		$stmt = $conn->prepare("insert into family(fname,mname,sib,sib_one,fmn,mmn,enroll) values(?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssiii",$fname,$mname,$sib,$sib_one,$fmn,$mmn,$enroll);
		$execval = $stmt->execute();

		$stmt = $conn->prepare("insert into educational(ssc_mark,ssc_per,ssc_year,hsc_mark,hsc_per,hsc_year,iti_mark,iti_per,iti_year,sem1_mark,sem1_per,sem1_year,sem2_mark,sem2_per,sem2_year,sem3_mark,sem3_per,sem3_year,sem4_mark,sem4_per,sem4_year,sem5_mark,sem5_per,sem5_year,sem6_mark,sem6_per,sem6_year,enroll) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiii",$ssc_mark,$ssc_per,$ssc_year,$hsc_mark,$hsc_per,$hsc_year,$iti_mark,$iti_per,$iti_year,$sem1_mark,$sem1_per,$sem1_year,$sem2_mark,$sem2_per,$sem2_year,$sem3_mark,$sem3_per,$sem3_year,$sem4_mark,$sem4_per,$sem4_year,$sem5_mark,$sem5_per,$sem5_year,$sem6_mark,$sem6_per,$sem6_year,$enroll);
		$execval = $stmt->execute();

		$stmt = $conn->prepare("insert into extra(Event,dop,loe,Rank,Event_one,dop_one,loe_one,Rank_one,Event_two,dop_two,loe_two,Rank_two,Event_three,dop_three,loe_three,Rank_three,enroll) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sisisisisisisisii",$Event,$dop,$loe,$Rank,$Event_one,$dop_one,$loe_one,$Rank_one,$Event_two,$dop_two,$loe_two,$Rank_two,$Event_three,$dop_three,$loe_three,$Rank_three,$enroll);
		$execval = $stmt->execute();


		echo $execval;
		echo $alert="<script>alert('Data Submitted Successfully !!')
    window.location='add.php'</script>";
		$stmt->close();
		$conn->close();
	}
?>