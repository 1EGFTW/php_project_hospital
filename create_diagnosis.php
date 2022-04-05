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
$sql="CREATE TABLE IF NOT EXISTS diagnosis(
    id_diagnosis INT NOT NULL AUTO_INCREMENT,
    diagnosis VARCHAR(25), 
    PRIMARY  key (id_diagnosis))
     ENGINE=INNODB DEFAULT CHARSET=utf8";
if (isset($_POST["submit"]))
{

    $diagnosis=$_POST['diagnosis'];
    if (!empty($diagnosis))
    {
        $sql="INSERT INTO diagnosis (diagnosis) VALUES ('$diagnosis')";

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