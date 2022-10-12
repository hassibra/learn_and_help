<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <title>Learn and Help</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'show-button.php';
          include 'edit_fill.php';
          ?>
    <header class="inverse">
      <div class="container">
        <img class ="logo" src="images/logo.png" alt="Logo">
        <h1> <span class="accent-text">Registration Form</span></h1>
      </div>
      <div class="navbar">
        <a href="homepage.phtml">Home</a>
        <a href="#">Instructors and Volunteers Sign Up</a>
        <a href="#">Classes</a>
        <a href="#">Testimonials</a>
        <a href="#">Causes</a>
        <a href="meet_our_instructors.phtml">Meet our Instructors</a>
        <a href="contact_us.phtml">Contact Us</a>
        <a href="registration_form.phtml" id="register">Register Now</a>
		<div><?php getButton(); ?></div>
      </div>
    </header>
    <div id="container_2">
    <?php
      fill_form();
    ?>
    <input type="hidden" id="action" name="action" value="edit">
		<br>
		<input type="submit" id="submit" name="submit" value="Submit">

	  </form><!---survey-form--->
	</div>
  </body>
</html>