
<?php

include("dbcon.php");

$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

echo "<select name='memberID'>";

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $fn = $row['firstname'];
    $sn = $row['surname'];

    echo "<option value='$id'>$fn $sn</option>";
}

echo "</select>";

mysqli_close($conn);

?>
