<?php session_start();
    require_once('./components/connection.php');
    include("./components/head.php");
    include("./components/header.php");
?>

<main>
    <div id="admin-full-page">
        <div class="add-riesbru">
            <a href="add-ries.php"><button class="add-ries">Add ries</button></a>
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
          UPS
        </td>
        <td data-th="Star">
          UPS5005
        </td>
        <td data-th="Omschrijving">
          hello 123 aisyfgbahsf saiufabsfnpasf asfuashfnol
        </td>
        <td data-th="Location">
          06/25/2016
        </td>
        <td data-th="Prijs">
          12/25/2016
        </td>
        <td data-th="Action">
          $8,322.12
        </td>
      </tr>
      </tr>
    </tbody>
  </table>
    </div>

</main>