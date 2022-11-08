<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/new_logo.png" type="image/icon type">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'show-navbar.php'; ?>
  <?php show_navbar(); ?>
  <header class="inverse">
      <div class="container">
          <h1><span class="accent-text">Login</span></h1>
      </div>
  </header>
  <br>
  <form action="validate-login.php" method="post">
      <label for="usermail">Email</label>
      <br>
      <input id="usermail" type="email" name="usermail" placeholder="Yourname@email.com" required>
      <br>
      <label for="password">Password</label>
      <br>
      <input id="password" type="password" name="password" placeholder="Password" required>
      <br>
      <input type="submit" id="submit-login" value="Login"/>
	</form>

  </body>
</html>
