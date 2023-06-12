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
        <th>Name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>contacts</th>
      </tr>
      <tr>
        <td data-th="name">
          AHMAD
        </td>
        <td data-th="Last-name">
          MAHOUK
        </td>
        <td data-th="Email">
          bart@gmail.com
        </td>
        <td data-th="Phone">
          06510925
        </td>
        <td data-th="contacts">
          dat is echt een sexy website
        </td>
      </tr>
      </tr>
    </tbody>
  </table>
    </div>

</main>
