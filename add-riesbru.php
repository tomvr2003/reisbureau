<?php session_start();
    require_once('./components/connection.php');
    include("./components/head.php");
    include("./components/header.php");
?>


<?php 
if(isset($_POST["submit_button"])){
    $image_id = $_POST["image_id"];
    $star = $_POST["star"];
    $omschrijving = $_POST["omschrijving"];
    $location = $_POST["location"];
    $prijs = $_POST["prijs"];
    
    $sql = "INSERT INTO menu(image_id, star, omschrijving, location, prijs) VALUES(:image_id, :star, :omschrijving, :location, :prijs)";
    $statement = $conn->prepare($sql);
    $statement->execute([":image_id" => $image_id, ":star" => $star, ":omschrijving" => $omschrijving, ":location" => $location, ":prijs" => $prijs]);
    header("Location:index.php");
}
?>
<div class="up-gap-booking"></div>
<div class="container">
    <form action="add-riesbureau.php" method="POST">
        <div class="title">Add Riesbureau</div>
        <div class="input-box underline">
            <input type="text" name="image" placeholder="Image">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" name="star" placeholder="Star">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" name="omschrijving" placeholder="Omschrijving">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" name="location" placeholder="Location">
            <div class="underline"></div>
        </div>
        <div class="input-box underline">
            <input type="text" name="prijs" placeholder="Prijs">
            <div class="underline"></div>
        </div>
        <div class="input-box button">
            <input type="submit" name="submit_button">
        </div>
    </form>
</div>
</body>
</html>