<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Document</title>
</head>
<body>
<table border="1px solid black">
<?php
include "config.php";
$sql="CREATE TABLE IF NOT EXISTS speciality(
    id_speciality INT NOT NULL AUTO_INCREMENT,
    speciality VARCHAR(25), 
    PRIMARY  key (id_speciality))
     ENGINE=INNODB DEFAULT CHARSET=utf8";
if (isset($_POST["submit"]))
{

    $speciality=$_POST['specialnost'];
    if (!empty($speciality))
    {
        $sql="INSERT INTO speciality (speciality) VALUES ('$speciality')";

        $result = mysqli_query($dbConn,$sql);
            if (!$result)
            {
                die('Грешка!!!');
            }
        echo "Добавихте един запис.";
    }
    else 
    echo "Не сте въвели всички данни!!!";
}      
?>
    </table>
    <br>
    <div class="buttons">
        <button class="choice" onclick="location.href='index.html'">Назад</button>
        </div>
</body>
</html>