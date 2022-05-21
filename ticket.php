<?php
$link = mysqli_connect("localhost","root","29101980Aa","galery");
if($link == true) {
	echo "подкл";
} else{
	echo "error";

}
$table = "CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
Name TEXT NOT NULL,
LastName TEXT NOT NULL,
Numbe INT NOT NULL,
Email TEXT NOT NULL,
DateU INT
)";
if(mysqli_query($link, $table)== true)
{
	echo'тaблица созд';

}else{
	echo 'Ошибка'.mysqli_error($link);
}



$name = $_POST['name'];
$uname = $_POST['uname'];
$number = $_POST['number'];
$email = $_POST['email'];
$date = $_POST['date'];

$sqReq = "INSERT INTO 
users
(LastName,
Numbe,
Email,
DateU) 
VALUES
 ('$name',
'$uname', 
'$number',
'$email', 
'$date' )";
if(mysqli_query($link, $sqReq)== true)
{
	echo'данныe сохр';

} else {
	echo 'Ошибка'.mysqli_error($link);

}

?>
