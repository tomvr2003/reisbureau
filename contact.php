<?php session_start();
    include("./components/head.php");
    include("./components/header.php");
?>

<main>
<section class="footer_get_touch_outer">
    <div class="container">
      <div class="footer_get_touch_inner grid-70-30">
        <div class="colmun-70 get_form">
          <div class="get_form_inner">
            <div class="get_form_inner_text">
              <h3>Get In Touch</h3>
            </div>
            <form action="#">
              <div class="grid-50-50">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="tel" placeholder="Phone">
              </div>
              <div class="grid-full">
                <textarea placeholder="About Your Project" cols="30" rows="10"></textarea>
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
              <a href="tel:">+31 123 123 123</a>
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
  </section>
  
</main>


<?php
include("./components/footer.php") 
?>