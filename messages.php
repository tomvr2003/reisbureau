<?php
    session_start();
    require_once('./components/connection.php');
    include("./components/head.php");
    include("./components/header.php");
?>

<main>
    <div id="admin-full-page">
        <div class="add-riesbru">
            <a href="./add-riesbru.php"><button class="add-ries">Add ries</button></a>
            <a href="booking.php"><button class="add-ries">Booking</button></a>
            <a href="Messages.php"><button class="add-ries">messages</button></a>
        </div>
        <table class="rwd-table">
            <tbody>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
                <?php
                $query = "SELECT * FROM contact";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td data-th="First Name"><?php echo $row['first_name']; ?></td>
                        <td data-th="Last Name"><?php echo $row['last_name']; ?></td>
                        <td data-th="Email"><?php echo $row['email']; ?></td>
                        <td data-th="Phone"><?php echo $row['phone']; ?></td>
                        <td data-th="Message"><?php echo $row['message']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
