<?php
class Common
{
public function uploadData($connection,$SR_NO,$CLASS,$ROLL_NO,$NAME,$ENROLLMENT_NO,$MOBILE_NO,$EMAIL_ID,$MENTOR_ID)
 {
 $mainQuery = "INSERT INTO  excelsheet SET SR_NO='$SR_NO',CLASS='$CLASS',ROLL_NO='$ROLL_NO',NAME='$NAME',ENROLLMENT_NO='$ENROLLMENT_NO',MOBILE_NO='$MOBILE_NO',EMAIL_ID='$EMAIL_ID',MENTOR_ID='$MENTOR_ID'";
 $result1 = $connection->query($mainQuery) or die("Error in main Query".$connection->error);
 return $result1;
 }
}