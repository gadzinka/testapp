<?php
include 'database.php';

$entry = $_POST['entry'];
$sql_insert = "INSERT INTO entries(record) values ('$entry');";

mysqli_query($connect, $sql_insert);

if (mysqli_affected_rows($connect) > 0) {
    echo "entry successfully added";
}
else {
  echo "error: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
<br /><br /><a href = "index.html">go back</a>
