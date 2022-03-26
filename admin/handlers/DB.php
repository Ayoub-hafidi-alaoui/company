<?php
session_start();
require_once('../../handlers/connect.php');

function add_service($table, $cols, $values) {
    global $conn;
    $query = "INSERT INTO $table ($cols) VALUES ($values)";
    if(mysqli_query($conn, $query)) {
        $_SESSION["add"]="$table added succefully";
        header("Location: ../add-services.php" );
    }
    else {
        echo mysqli_error($conn);
    }

}

if(isset($_POST["addService"])) {
    $name = $_POST['name'];
    $description = $_POST["description"];
    $icon = $_POST["icon"];
    $status = $_POST["status"];

    add_service("services", "name, description, icon, status", "'$name', '$description', '$icon', '$status'");
}


?>