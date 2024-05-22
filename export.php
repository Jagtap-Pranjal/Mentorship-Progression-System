<?php
if(isset($_GET['download'])){
  mysql_connect('localhost','root',''); 
  mysql_select_db('mentorship_systemdb');
  $query="select * from excelsheet where `MENTOR_ID` = '".$_GET['view']."'";
  $sql = mysql_query($query);
  $users = array();
  
    while ($row = mysql_fetch_array($sql)) {
        $users[] = $row;
    }
    $fp = fopen('php://output', 'w');
    if ($fp && $users) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="users.csv"');
        header('Pragma: no-cache');
        header('Expires: 0');
        fputcsv($fp, array('CLASS', 'ROLL_NO', 'NAME', 'ENROLLMENT_NO', 'MOBILE_NO', 'EMAIL_ID', 'MENTOR_ID'));
        foreach ($users as $row) {
            fputcsv($fp, array($row['CLASS'], $row['ROLL_NO'], $row['NAME'], $row['ENROLLMENT_NO'], $row['MOBILE_NO'], $row['EMAIL_ID'], $row['MENTOR_ID']));
        }
        die;
    }
  
  }