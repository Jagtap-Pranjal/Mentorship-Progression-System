<?php
include  "config.php";
include_once  "Common.php";
if($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue; // skip the heading header of sheet
            }
                $SR_NO = $connection->real_escape_string($data[0]);
                $CLASS = $connection->real_escape_string($data[1]);
                $ROLL_NO = $connection->real_escape_string($data[2]);
                $NAME = $connection->real_escape_string($data[3]);
                $ENROLLMENT_NO = $connection->real_escape_string($data[4]);
                $MOBILE_NO = $connection->real_escape_string($data[5]);
                $EMAIL_NO = $connection->real_escape_string($data[6]);
                $MENTOR_ID = $connection->real_escape_string($data[7]);
                $common = new Common();
               
                $SheetUpload = $common->uploadData($connection,$SR_NO,$CLASS,$ROLL_NO,$NAME,$ENROLLMENT_NO,$MOBILE_NO,$EMAIL_NO,$MENTOR_ID);
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='indexdemo.php';</script>";
        }
    }
}