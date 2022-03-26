<?php
require_once("connect.php");

function getAll($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $getAll = mysqli_query($conn, $query);
    $getAllData = mysqli_fetch_all($getAll, MYSQLI_ASSOC);
    return $getAllData;
}

function getWhere($table, $where)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE $where";
    $getAll = mysqli_query($conn, $query);
    $getAllData = mysqli_fetch_all($getAll, MYSQLI_ASSOC);
    return $getAllData;
}
function getJoin($table1, $table2, $col,$primary_key, $foreign_key) {
    global $conn;
    $query = "SELECT $col FROM $table1 INNER JOIN $table2 on $table1.$primary_key=$table2.$foreign_key";
    $getAll = mysqli_query($conn, $query);
    $getAllData = mysqli_fetch_all($getAll, MYSQLI_ASSOC);
    return $getAllData;

}

function getOnes($table, $where=1) {
    global $conn;
    $query= "SELECT * FROM $table WHERE $where";
    $getAll = mysqli_query($conn, $query);
    $getData = mysqli_fetch_assoc($getAll);
    return $getData;
}



?>