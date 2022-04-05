<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host= 'localhost'; 
$dbUser= 'root'; 
 $dbPass= ''; 
 if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) 
 {
       die('Could not connect: ' . mysqli_error($dbConn));
}mysqli_select_db($dbConn,'bolnica');
$table_name = "medication";
$backup_file  = "C:/xampp/tmp/bolnica.sql";
$sql = "SELECT *  FROM $table_name INTO OUTFILE '$backup_file'";
$result = mysqli_query($dbConn,$sql);
if(!$result )
{
    die('Could not take data backup: ' . mysqli_error($dbConn));
}
echo "Backup successful!";
?>
<br>
    <a href="index.php">Начало</а>
</body>
</html>
