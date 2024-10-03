<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mentorship_systemdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$SR_NO = mysqli_real_escape_string($link, $_REQUEST['SR_NO']);
$CLASS = mysqli_real_escape_string($link, $_REQUEST['CLASS']);
$ROLL_NO = mysqli_real_escape_string($link, $_REQUEST['ROLL_NO']);
$NAME = mysqli_real_escape_string($link, $_REQUEST['NAME']);
$ENROLLMENT_NO = mysqli_real_escape_string($link, $_REQUEST['ENROLLMENT_NO']);
$MOBILE_NO = mysqli_real_escape_string($link, $_REQUEST['MOBILE_NO']);
$EMAIL_ID = mysqli_real_escape_string($link, $_REQUEST['EMAIL_ID']);
$MENTOR_ID = mysqli_real_escape_string($link, $_REQUEST['MENTOR_ID']);

 
// Attempt insert query execution
$sql = "INSERT INTO excelsheet (SR_NO,CLASS,ROLL_NO,NAME,ENROLLMENT_NO,MOBILE_NO,EMAIL_ID,MENTOR_ID) VALUES ('$SR_NO', '$CLASS', '$ROLL_NO', '$NAME', '$ENROLLMENT_NO', '$MOBILE_NO', '$EMAIL_ID', '$MENTOR_ID')";
if(mysqli_query($link, $sql)){
    
    $alert="<script>alert('Record inserted Successfully..!!')
    window.location='viewexcelsheet.php'</script>";
    echo $alert;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>