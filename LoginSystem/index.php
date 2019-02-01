<?php
  include 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper"></div>
	<h2>Home</h2>
   <?php 
       if (isset($_SESSION['u_uid'])) {
       	echo "You are Logged in!";
       }
   ?>

</section>
<?php
  include 'footer.php';
?>
