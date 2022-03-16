<?php
require_once('connect.php');
function getAll($table) {
    global $conn;
    $query = "SELECT * FROM $table";
    $getAll = mysqli_query($conn, $query);
    $getAllData = mysqli_fetch_all($getAll, MYSQLI_ASSOC);
    return $getAllData;
}
?>