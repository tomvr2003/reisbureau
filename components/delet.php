<?php 
    require("connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM reisbureau WHERE id=:id";
    $statement = $conn->prepare($sql);
    if($statement->execute([":id" => $id])) {
        header("Location:admin.php");
    }
?>