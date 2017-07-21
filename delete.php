<?php
include 'database.php';

$sql = "DELETE FROM entries WHERE id = " . $_GET["id"] . ";";
mysqli_query($connect, $sql);
if (mysqli_affected_rows($connect) > 0) {
    echo "entry successfully deleted";
}
else {
  echo "error: " . mysqli_error($connect);
}
?>
<br /><br /><a href = "index.html">go back</a>
