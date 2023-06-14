<?php
session_start();
include("./components/head.php");
include("./components/header.php");
require_once('./components/connection.php');

if(isset($_SESSION["username"])) {
    // Check if form is submitted
    if(isset($_POST["submit"])) {
        $id = $_POST["id"];
        $image = $_POST["image"];
        $star = $_POST["star"];
        $omschrijving = $_POST["omschrijving"];
        $location = $_POST["location"];
        $price = $_POST["price"];

        // Update reisbureau item in database
        $sql = "UPDATE reisbureau SET titel = :image, omschrijving = :omschrijving, prijs = :price, location = :location, star = :star WHERE id = :id";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':image', $image);
        $statement->bindParam(':star', $star);
        $statement->bindParam(':omschrijving', $omschrijving);
        $statement->bindParam(':location', $location);
        $statement->bindParam(':price', $price);
        $statement->bindParam(':id', $id);
        $result = $statement->execute();

        if($result) {
            echo "Reisbureau item updated successfully.";
        } else {
            echo "Failed to update reisbureau item.";
        }
    }
    
    // Fetch reisbureau item details based on ID
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM reisbureau WHERE id = :id";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $reisbureau = $statement->fetch(PDO::FETCH_OBJ);
?>

<div class="up-gap-booking"></div>
<div class="container">
    <form action="edit.php" method="POST">
        <div class="title">Edit reisbureau</div>
        <div class="input-box underline">
            <input type="text" name="image" placeholder="Image" value="<?php echo $reisbureau->image; ?>">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" name="star" placeholder="Star" value="<?php echo $reisbureau->star; ?>">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" name="omschrijving" placeholder="Omschrijving" value="<?php echo $reisbureau->omschrijving; ?>">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" name="location" placeholder="Location" value="<?php echo $reisbureau->location; ?>">
            <div class="underline"></div>
        </div>
        <div class="input-box underline">
            <input type="text" name="prijs" placeholder="Prijs" value="<?php echo $reisbureau->prijs; ?>">
            <div class="underline"></div>
        </div>
        <input type="hidden" name="id" value="<?php echo $reisbureau->id; ?>">
        <div class="input-box button">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</div>

<?php
    } else {
        // Redirect to the main page if ID is not provided
        header("Location: ./index.php");
        exit;
    }
} else {
    header("Location: ./login.php");
    exit;
}
?>

</body>
</html>
