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
$sql="CREATE TABLE IF NOT EXISTS lekar(
   id_lekar INT NOT NULL AUTO_INCREMENT,
   id_speciality INT NOT NULL, 
   name_l VARCHAR(30), 
   phone_l VARCHAR(15), 
   PRIMARY key(id_lekar),
   FOREIGN key(id_speciality)
   REFERENCES speciality(id_speciality))
     ENGINE=INNODB DEFAULT CHARSET=utf8";
if (isset($_POST["submit"]))
{

    $name_l = $_POST['name_l'];
    $speciality=$_POST['specialnost'];
    $phone_l=$_POST['phone_l'];
    if (!empty($name_l)&&!empty($speciality)&&!empty($phone_l))
    {
        $sql="INSERT INTO lekar (name_l,id_speciality,phone_l) VALUES ('$name_l', '$speciality','$phone_l')";

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