<?php session_start();
    require_once('./components/connection.php');
    include("./components/head.php");
    include("./components/header.php");
?>

<main>

    <div class="index-banner">
        
    </div>

    <div class="search-box">
        <input class="search-input" type="text" placeholder="Search something..">
        <button class="search-btn"><i class="fas fa-search"></i></button>
    </div>

    <div class="boxes-container">
        <div class="box">
            <h1 style="font-size: 40px;" class="box-text">Zomer<br>Vakantie</h1>
            <p style="margin: 50px 0;" class="box-text">Ontspan naar de zon</p>
            <button class="box-button">Ontdek</button>
        </div>
        <div class="box-2">
            <h1 style="font-size: 40px;" class="box-text">Last<br>Minute</h1>
            <p style="margin: 50px 0;" class="box-text">Laatste kans</p>
            <button class="box-button">Ontdek</button>
        </div>
        <div class="box-3">
            <h1 style="font-size: 40px;" class="box-text">Best<br>Sellers</h1>
            <p style="margin: 50px 0;" class="box-text">Scoor de beste deals</p>
            <button class="box-button">Ontdek</button>
        </div>
    </div>

    <div class="top-6-title-container" id="top-6">
        <h1 style="font-size: 40px;">Top 6 favoriete ontdekkingen</h1>
    </div>

<?php
    $query = "SELECT * FROM top6";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
    <div class="top-6-boxes-container">
        <div class="top-6-box">
            <div class="top-6-box-left">
                <img src="<?php echo $row["image"]; ?>" alt="place" class="top-6-img">
            </div>
            <div class="top-6-box-center">
                <div class="star-rating-6">
                    <i class="fa-solid fa-star"></i>
                    <h3 class="star-text"><?php echo $row["star"]; ?></h3>
                </div>
                <h3 class="top-6-title"><?php echo $row["title"]; ?></h3>
                <h4 class="top-6-des"><?php echo $row["omschrijving"]; ?></h4>
                <div class="reis-info-6">
                    <h6 style="font-weight: 500;" class="top-6-des"><?php echo $row["reisinfo"]; ?></h6>
                </div>
            </div>
            <div class="top-6-box-right">
                <i class="fa-solid fa-message"></i>
                <h3 class="rating-6"><?php echo $row["rating"]; ?></h3>
            </div>
        </div>
    </div>

    <?php 
      }
    ?>


</main>

<?php
include("./components/footer.php") 
?>