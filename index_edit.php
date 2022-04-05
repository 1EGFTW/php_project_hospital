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
<form name="form" method="post" action="#">
<br>
<select name='choice' onchange="location = this.value;">
    <option selected disabled>
        Избери
    </option>
    <option value="index_edit_lekar.php">
        Редактиране на лекар
    </option>
    <option value="index_edit_pacient.php">
        Редактиране на пациент
    </option>
    <option value="index_edit_diagnoza.php">
        Редактиране на диагноза
    </option>
    <option value="index_edit_date_arrival.php">
        Редактиране на дата на постъпване
    </option>
    <option value="index_edit_date_departure.php">
        Редактиране на дата на изписване
    </option>
</select>
<br>
<input type="submit" name="submit" value="Въведи"/>
</form>
</div>
    <div class="buttons">
        <button class="choice" onclick="location.href='index.html'">Назад</button>
    </div>
</body>
</html>
