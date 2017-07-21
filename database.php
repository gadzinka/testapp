<?php
$connect = mysqli_connect('localhost', 'testuser', 'qwerty', 'test');

if ($connect == false) {
    die("error: " . mysqli_error_connect());
}
?>
