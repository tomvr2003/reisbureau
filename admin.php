<?php
session_start();
require_once('./components/connection.php');
include("./components/head.php");
include("./components/header.php");

// Retrieve data from the "reisbureau" table
$sql = "SELECT * FROM reisbureau";
$statement = $conn->query($sql);
$reisbureauData = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div id="admin-full-page">
        <div class="add-riesbru">
            <a href="./add-riesbureau.php"><button class="add-ries">Add Ries</button></a>
            <a href="booking.php"><button class="add-ries">Booking</button></a>
            <a href="Messages.php"><button class="add-ries">Messages</button></a>
        </div>
        <table class="rwd-table">
            <tbody>
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Star</th>
                    <th>Omschrijving</th>
                    <th>Location</th>
                    <th>Prijs</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($reisbureauData as $row) { ?>
                    <tr>
                        <td data-th="Image">
                            <?php echo $row['image']; ?>
                        </td>
                        <td data-th="ID">
                            <?php echo $row['id']; ?>
                        </td>
                        <td data-th="Star">
                            <?php echo $row['star']; ?>
                        </td>
                        <td data-th="Omschrijving">
                            <?php echo $row['omschrijving']; ?>
                        </td>
                        <td data-th="Location">
                            <?php echo $row['location']; ?>
                        </td>
                        <td data-th="Prijs">
                            <?php echo $row['prijs']; ?>
                        </td>
                        <td data-th="Action">
                            <a href="./components/delet.php?id=<?= $row['id']; ?>"><button class="delet-ries">Delete Ries</button></a>
                            <a href="./edit.php?id=<?= $row['id']; ?>"><button class="edit-ries">Edit Ries</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>
