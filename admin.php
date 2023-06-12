<?php session_start();
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
        <th>Image</th>
        <th>ID</th>
        <th>Star</th>
        <th>Omschrijving</th>
        <th>Location</th>
        <th>Prijs</th>
        <th>Action</th>
      </tr>
      <tr>
        <td data-th="Image">
          UPS5005
        </td>
        <td data-th="ID">
          001
        </td>
        <td data-th="Star">
          4
        </td>
        <td data-th="Omschrijving">
          deze hotel is de best en de goedst prijs voor jouw ja jouw broke ik weet je hebt geen geld
        </td>
        <td data-th="Location">
          china
        </td>
        <td data-th="Prijs">
          19,99
        </td>
        <td data-th="Action">
            <a href="add-delete.php"><button class="delet-ries">delete ries</button></a>
            <a href="add-edit.php"><button class="edit-ries">edit ries</button></a>
        </td>
      </tr>
      </tr>
    </tbody>
  </table>
    </div>

</main>

