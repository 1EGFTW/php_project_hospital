<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="styles1.css">
<title>
</title>
</head>
<body>
<form action="create_medication.php" method="post">
<pre>
Пациент: 
<select name="pacient">
    <option selected disabled>
    Избери
    </option>
    <?php
    include "config.php";
    $sql = mysqli_query($dbConn,"SELECT * FROM pacient");
    while($c = mysqli_fetch_array($sql))
    
        echo '<option value="'. $c['id_pacient'] .'">'.$c['name_p'].'</option>';
        ?>
</select>
Лекар: 
<select name="lekar">
    <option selected disabled>
    Избери
    </option>
    <?php
    include "config.php";
    $sql = mysqli_query($dbConn,"SELECT * FROM lekar");
    while($c = mysqli_fetch_array($sql))
    
        echo '<option value="'. $c['id_lekar'] .'">'.$c['name_l'].'</option>';
        ?>
</select>
Дата на постъпване: 
<input type="date" name="date_arrival" />
Дата на изписване: 
<input type="date" name="date_departure" />
Диагноза: 
<select name="diagnosis">
    <option selected disabled>
    Избери
    </option>
    <?php
    include "config.php";
    $sql = mysqli_query($dbConn,"SELECT * FROM diagnosis");
    while($c = mysqli_fetch_array($sql))
    
        echo '<option value="'. $c['id_diagnosis'] .'">'.$c['diagnosis'].'</option>';
        ?>
</select>
<br>
<input type="submit" name="submit" value="Въведи"/>
</pre>
</form>
<div class="buttons">
        <button class="choice" onclick="location.href='index1.html'">Назад</button>
        </div>
</body>
</html>