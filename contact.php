<?php session_start();
    include("./components/head.php");
    include("./components/header.php");
    require_once('./components/connection.php');
?>

<main>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Assuming you have a PDO database connection named $conn
    $query = "INSERT INTO contact (first_name, last_name, email, phone, message) VALUES (:first_name, :last_name, :email, :phone, :message)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':first_name', $firstName);
    $stmt->bindParam(':last_name', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    // You can redirect the user to a thank you page after the form submission
    header("Location: ./index.php");
    exit();
  }
?>

<section class="footer_get_touch_outer">
  <div class="container">
    <div class="footer_get_touch_inner grid-70-30">
      <div class="colmun-70 get_form">
        <div class="get_form_inner">
          <div class="get_form_inner_text">
            <h3>Get In Touch</h3>
          </div>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="grid-50-50">
              <input type="text" name="first_name" placeholder="First Name" required>
              <input type="text" name="last_name" placeholder="Last Name">
              <input type="email" name="email" placeholder="Email" required>
              <input type="tel" name="phone" placeholder="Phone">
            </div>
            <div class="grid-full">
              <textarea name="message" placeholder="About Your Project" cols="30" rows="10" required></textarea>
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <div class="colmun-30 get_say_form">
        <h5>Say Hi!</h5>
        <ul class="get_say_info_sec">
          <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:">info@company.com</a>
          </li>
          <li>
            <i class="fa fa-whatsapp"></i>
            <a href="tel:">+31123123123</a>
          </li>
          <li>
            <i class="fa fa-instagram"></i>
            <a href="inst:">JTA Travel</a>
          </li>
        </ul>  
        <ul class="get_say_social-icn">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>          
      </div>        
    </div>
  </div>
  <div class="small-space-contact"></div>
</section>

</main>


<?php
include("./components/footer.php") 
?>