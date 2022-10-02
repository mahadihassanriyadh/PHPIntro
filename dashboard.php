<?php 

$userId = $_POST['userId'];
$password = $_POST['password'];

if($userId == 'admin' && $password == '1234') {
    echo "<h1>Welcome Admin</h1>";
} else {
    echo "<h1>Invalid Credentials</h1>";
}

?>