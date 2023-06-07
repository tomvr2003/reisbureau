<?php
require_once('connection.php');
?>

<header>
  <div class="header-left">
    <h1>JTA Travel</h1>
  </div>
  <div class="header-center">
    <ul>
      <a href="./index.php"><li>Home</li></a>
      <a href="./index.php#top-6"><li>Top 6</li></a>
      <a href="./locaties.php"><li>Locaties</li></a>
      <a href="./contact.php"><li>Contact</li></a>
    </ul>
  </div>
  <div class="header-right">
  <?php
    if (!isset($_SESSION["username"])) { 
      echo "<a href='./login.php'><button>Register/Login</button></a>";
    } else {
      echo "<a href='./components/logout.php'><button>Logout</button></a>";
    }
    ?>
  </div>

</header>
