<?php
$host= 'localhost'; 
$dbUser= 'root';
 $dbPass= ''; 
 $dbName= 'bolnica'; 
 if (!$dbConn=mysqli_connect($host, $dbUser, $dbPass))
{
      die('Не може да се осъществи връзка със сървъра.');
}
$sql = 'CREATE Database IF NOT EXISTS bolnica';
if (!$queryResource=mysqli_query($dbConn,$sql))
{
    echo "Грешка при създаване на базата данни: " . mysqli_error($dbConn);
}
if (!mysqli_select_db($dbConn,'bolnica'))
{
    die('Не може да се селектира базата от данни:'. mysqli_error($dbConn));
}
?>