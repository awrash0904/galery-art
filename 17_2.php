<?php
$link = mysqli_connect("localhost","root","29101980Aa","a");
if($link == true) {
	echo "подкл";
} else{
	echo "error";

}
$table2 = "CREATE TABLE users2(
id2 INT AUTO_INCREMENT PRIMARY KEY,
userName TEXT NOT NULL,
userLastName TEXT NOT NULL,
userPassword TEXT NOT NULL,
userAge INT,
FOREIGN KEY (id2users2) REFERENCES users(id)
)";
if(mysqli_query($link, $table2)== true)
{
	echo'тaблица созд';

}else{
	echo 'Ошибка'.mysqli_error($link);
}
$password='291019800';
if (isset($_POST["username"]) && $_POST["password"]== $password){
    echo "ДОСТУП ОТКРЫТ";
}
else{
    session_start();
    echo "не правильно";    
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];

$sqReq2 = "INSERT INTO users(userName, userLastName, userPassword, userAge) VALUES ('$name','$email','$password','$age')";
if(mysqli_query($link, $sqReq2)== true)
{
	echo'данныe сохр';

} else {
	echo 'Ошибка'.mysqli_error($link);

}

?>
<form action="" method="POST"><div class="container">
    <h1>вход</h1>
  

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="впиши Email" name="email" required>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="впиши имя" name="name" required>

    <label for="password"><b>Пароль</b></label>
    <input type="password" placeholder="впиши пароль" name="password" required>

   <label for="age"><b>Возраст</b></label>
    <input type="age" placeholder="впиши возраст" name="age" required>
   

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
    padding: 16px;
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

