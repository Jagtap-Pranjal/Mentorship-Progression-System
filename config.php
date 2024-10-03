<?php
$connection = new mysqli("localhost","root","","mentorship_systemdb");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}