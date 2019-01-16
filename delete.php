<?php
/**** Supprimer une randonnée ****/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reunion_island";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {

    $conn->select_db($dbname);
    echo "Connecté";

}

function delete() {

    global $conn;

    $id = $_GET['id'];

    $sql = "DELETE from hiking where id = '$id'";


    $conn -> query($sql);

    header("Location:read.php");
}

delete();