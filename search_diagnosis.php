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
<div class="form">
<form action="#" method="post">
Диагноза:
<br>
<input type="text" name="diagnoza" />
<br>
<input type="submit" name="submit" value="Въведи"/>
</form>
</div>
<div class="table">
<table border="5px solid black" align=center>
    <?php
include "config.php"; 
$res=$_POST['diagnoza'];
$result =mysqli_query($dbConn, "SELECT  m.id_medication,m.id_pacient, p.name_p, p.phone, m.id_lekar, l.name_l, l.phone_l, m.date_arrival, m.date_departure, m.id_diagnosis, d.diagnosis
FROM medication m INNER JOIN pacient p ON m.id_pacient=p.id_pacient
INNER JOIN lekar l ON m.id_lekar=l.id_lekar
INNER JOIN diagnosis d ON m.id_diagnosis=d.id_diagnosis
WHERE d.diagnosis='$res'
ORDER BY m.date_arrival ASC"
 ); 
echo "<tr><th>Номер</th><th width=150vw>Пациент</th><th>Телефон на пациента</th></th><th width=150vw>Диагноза<th width=150vw>Лекуващ лекар</th><th>Телефон на лекаря</th><th>Дата на постъпване</th><th>Дата на изписване</th></tr>";
while($row = mysqli_fetch_array($result))
{
    echo "<tr><td>".$row['id_medication']."</td><td>".$row['name_p']."</td><td>".$row['phone']."</td><td>".$row['diagnosis']."</td><td>".$row['name_l']."</td><td>".$row['phone_l']."</td><td>".$row['date_arrival']."</td><td>".$row['date_departure']."</td></tr>";
}
?>
    </table>
</div>
    <br>
    <div class="buttons">
        <button class="choice" onclick="location.href='index_search.html'">Назад</button>
        </div>
</body>
</html>