<?php
$link = mysqli_connect("localhost","root","29101980Aa","myD");
if($link == true) {
	echo "подкл";
} else{
	echo "error";

}
$table = "CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
userName TEXT NOT NULL,
userLastName TEXT NOT NULL,
userEmail TEXT NOT NULL,
userNumb INT NOT NULL
)";
if(mysqli_query($link, $table)== true)
{
	echo'тaблица созд';

}else{
	echo 'Ошибка'.mysqli_error($link);
}


$table2 = "CREATE TABLE usersInfo(
idUserInfo INT AUTO_INCREMENT PRIMARY KEY,
TEXT1 TEXT NOT NULL,
TEXT2 TEXT NOT NULL,
TEXT3 TEXT NOT NULL,
idUsers INT,
FOREIGN KEY (idUsers) REFERENCES users(id)
)";
if(mysqli_query($link, $table2)== true)
{
	echo'тaблица созд 2';

}else{
	echo 'Ошибка'.mysqli_error($link);
}

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$date = $_POST['date'];
$numb = $_POST['numb'];
// добавл данных в табл
$sqReq = "INSERT INTO users(userName, userLastName, userEmail, userDate, userNumb) VALUES ('$name','$lastname', '$email','$date','$numb')";
if(mysqli_query($link, $sqReq)== true)
{
	echo'данныe сохр';

} else {
	echo 'Ошибка'.mysqli_error($link);

}
?>
<form action="" method="POST">
	 <div class="container">
    <h1>вход</h1>
  
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="впиши имя" name="name" required>

<label for="lastn"><b>LastName</b></label>
     <input type="text" placeholder="впиши фамилию" name="lastname" required>

        <label for="email"><b>Email</b></label>
	<input type="text" placeholder="впиши email" name="email" required>

    <label for="date"><b>Дата</b></label>
    <input type="datetime-local" placeholder="vbn" name="date" required>

<label for="email"><b> Колво Персон</b></label>
	<input type="number" placeholder="впиши кол-во" name="numb" required>
 
  <button type="submit" class="registerbtn">Регистрация</button>
  </div>


<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}


.container {
    padding: 10px;
    background-color: white;
}

input{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}




hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


.registerbtn {
    background-color: #eb937c;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}


a {
    color: dodgerblue;
}


.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>