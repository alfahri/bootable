<?php

$con = mysqli_connect('localhost','root','','bootcamp');

$query = 'SELECT * FROM user';
$result_select2 = mysqli_query($con, $query) or die(mysqli_error());
$rows2 = array();
while($row2 = mysqli_fetch_object($result_select2))
    $rows2[] = $row2;

?>