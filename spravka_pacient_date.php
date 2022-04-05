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
Име на пациент:
<br>
<input type="text" name="pac" />
<br>
<input type="submit" name="submit" value="Въведи"/>
</form>
</div>
<div class="table">
<table border="5px solid black" align=center>
    <?php
include "config.php"; 
$res=$_POST['pac'];
$result =mysqli_query($dbConn, "SELECT  m.id_pacient, p.name_p , m.id_lekar, l.name_l, m.date_arrival, m.date_departure, m.id_diagnosis, d.diagnosis
FROM medication m INNER JOIN pacient p ON m.id_pacient=p.id_pacient
INNER JOIN lekar l ON m.id_lekar=l.id_lekar
INNER JOIN diagnosis d ON m.id_diagnosis=d.id_diagnosis
WHERE p.name_p='$res'
ORDER BY m.date_arrival ASC"
 ); 
echo "<tr><th>Номер</th><th>Пациент</th><th>Лекуващ лекар</th><th>Дата на постъпване</th><th>Дата на изписване</th><th>Диагноза</th></tr>";
while($row = mysqli_fetch_array($result))
{
    echo "<tr><td>".$row['id_pacient']."</td><td>".$row['name_p']."</td><td>".$row['name_l']."</td><td>".$row['date_arrival']."</td><td>".$row['date_departure']."</td><td>".$row['diagnosis']."</td></tr>";
}
?>
    </table>
</div>
    <br>
    <div class="buttons">
        <button class="choice" onclick="location.href='index_spravki.html'">Назад</button>
        </div>
</body>
</html>