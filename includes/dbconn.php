<?php
$host='localhost';
$dbuser = 'root';
$password = '';
$dbname = 'calculator';

$conn = mysqli_connect($host,$dbuser,$password,$dbname);
if($conn){
    // echo "connection done";
}else {
    echo mysqli_error($error);
}

?>