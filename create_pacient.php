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
$sql="CREATE TABLE IF NOT EXISTS pacient(
    id_pacient int not null AUTO_INCREMENT,
    name_p VARCHAR(30) DEFAULT NULL ,
    address VARCHAR(10) DEFAULT NULL,
    phone VARCHAR(10) DEFAULT NULL,
    PRIMARY KEY  (id_pacient))
     ENGINE=INNODB DEFAULT CHARSET=utf8";
if (isset($_POST["submit"]))
{

    $name_p = $_POST['name_p'];
    $address_p = $_POST['address'];
    $phone_p=$_POST['phone_p'];
    if (!empty($name_p)&&!empty($address_p)&&!empty($phone_p))
    {
        $sql="INSERT INTO pacient (name_p,address,phone) VALUES ('$name_p', '$address_p','$phone_p')";

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