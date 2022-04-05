
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="styles2.css">
<title>
</title>
</head>
<body>
<div class="form">
<form action="#" method="post">
Въведете номер на лечение за редактиране:
<br>
<input type="text" name="edit" />
<br>
Въведете нова дата на постъпване:
<br>
<input type="date" name="data">
<br><br>
<input type="submit" name="submit" value="Въведи"/>
</form>
</div>
    <table align=center border="2px solid black">
    <?php
    include "config.php";
    $update=$_POST['edit'];
    $new_date=$_POST['data'];
            $sql = "UPDATE medication SET date_arrival='$new_date' WHERE id_medication='$update'";
            mysqli_query($dbConn,$sql);
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
    <div class="buttons">
        <button class="choice" onclick="location.href='index_edit.php'">Назад</button>
    </div>
</body>
</html>

