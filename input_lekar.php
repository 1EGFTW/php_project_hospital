<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="styles1.css">
<title>
</title>
</head>
<body >
<form action="create_lekar.php" method="post" >
<pre>
Име: 
<input type="text" name="name_l"/><br>
Специалност:
<select name="specialnost">
    <option selected disabled>
    Избери
    </option>
    <?php
    include "config.php";
    $sql = mysqli_query($dbConn,"SELECT * FROM speciality");
    while($c = mysqli_fetch_array($sql))
    
        echo '<option value="'. $c['id_speciality'] .'">'.$c['speciality'].'</option>';
        ?>
</select>
<br>
Телефон: 
<input type="text" name="phone_l" />
<br>
<input type="submit" name="submit" value="Въведи"/>
</pre>
</form>
        <div class="buttons">
        <button class="choice" onclick="location.href='index1.html'">Назад</button>
        </div>
</body>
</html>