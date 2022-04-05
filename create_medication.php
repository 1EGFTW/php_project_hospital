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
$sql="CREATE TABLE IF NOT EXISTS medication(
   id_medication INT NOT NULL AUTO_INCREMENT,
   id_pacient INT NOT NULL, 
   id_lekar INT NOT NULL, 
   date_arrival DATE, 
   date_departure DATE, 
   id_diagnosis INT NOT NULL,
   PRIMARY KEY (id_medication),
   FOREIGN KEY (id_lekar) REFERENCES lekar(id_lekar),
   FOREIGN KEY (id_diagnosis) REFERENCES Diagnosis(id_diagnosis),
   FOREIGN KEY (id_pacient) REFERENCES pacient(id_pacient))
     ENGINE=INNODB DEFAULT CHARSET=utf8";
if (isset($_POST["submit"]))
{

    $pacient = $_POST['pacient'];
    $lekar=$_POST['lekar'];
    $date_arrival=$_POST['date_arrival'];
    $date_departure=$_POST['date_departure'];
    $diagnosis=$_POST['diagnosis'];
    if (!empty($pacient)&&!empty($lekar)&&!empty($date_arrival)&&!empty($date_departure)&&!empty($diagnosis))
    {
        $sql="INSERT INTO medication (id_pacient,id_lekar,date_arrival,date_departure,id_diagnosis) VALUES ('$pacient', '$lekar','$date_arrival','$date_departure','$diagnosis')";

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