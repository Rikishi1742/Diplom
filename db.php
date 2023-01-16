<?php
$db = mysqli_connect('localhost', 'root', '');
if (!$db) {
    die('Could not connect: ' . mysqli_error());
}
//echo 'Connected successfully';
mysqli_select_db ($db, "gecko");

?>