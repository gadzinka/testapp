<?php
include 'database.php';

$sql_select = "SELECT id, record FROM entries;";
$res = mysqli_query($connect, $sql_select);
$number = 1;
if (mysqli_num_rows($res) > 0) {
  echo "<p>list of todos</p>";
  while ($row = mysqli_fetch_assoc($res)) {
    echo $number . ") " . $row["record"] . " ";
    echo "<a href = 'delete.php?id=" . $row["id"] . "'>delete</a>" . "<br />";
    ++$number;
  }
}
?>
<br /><br /><a href = "index.html">go back</a>
