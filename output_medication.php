<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Document</title>
</head>
<body>
    <div class="table">
    <table border="2px solid black">
    <?php
include "config.php"; 
$result =mysqli_query($dbConn, "SELECT m.id_medication,m.id_pacient, p.name_p, m.id_lekar, l.name_l, m.date_arrival, m.date_departure, m.id_diagnosis, d.diagnosis
FROM medication m INNER JOIN pacient p ON m.id_pacient=p.id_pacient
INNER JOIN lekar l ON m.id_lekar=l.id_lekar
INNER JOIN diagnosis d ON m.id_diagnosis=d.id_diagnosis"); 
echo "<tr><th>Номер</th><th width=150vw>Пациент</th><th width=150vw>Лекар</th><th>Дата на постъпване</th><th>Дата на изписване</th><th width=150vw>Диагноза</th></tr>";
while($row = mysqli_fetch_array($result))
{
    echo "<tr><td>".$row['id_medication']."</td><td>".$row['name_p']."</td><td>".$row['name_l']."</td><td>".$row['date_arrival']."</td><td>".$row['date_departure']."</td><td>".$row['diagnosis']."</td></tr>";
}
?>
    </table>
    </div>
    <br>
    <div class="buttons">
        <button class="choice" onclick="location.href='index.html'">Начало</button>
        <button class="choice" onclick="location.href='backup.php'">Make backup of data</button>
       
    </div>
    <div class="buttons2">
        <button class="choice1" onclick="location.href='index_edit.php'">Редактиране</button>
        <button class="choice1" onclick="location.href='index_delete.php'">Изтриване на запис</button>
    </div>
    <br>
</body>
</html>
