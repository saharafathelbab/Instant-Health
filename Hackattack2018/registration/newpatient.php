<?php include('server.php') ?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title> Register - Patient </title>
    <link rel = "stylesheet" href = "./CSS/home.css"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  </head>

  <body>
    <h2> New Patient </h2>
    <div class = "full">
      <form action="newpatient.php" method="post">
        <?php include('errors.php'); ?>
        <label><b>Key:</b></label>
        <br>
        <input type="number" placeholder="Enter Key" name="id" required>
        <br>
        <br>
        <label><b>Email:</b></label>
        <br>
        <input type="email" placeholder="Enter Email" name="email" required>
        <br>
        <br>
        <label><b>Password:</b></label>
        <br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <br>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <br>
        <br>
        <button type="submit" class = "button-style" name="reg_user">Register</button>
        <p>
          Already a member? <a href = "loginp.php"> Sign In
        </p>
      </form>
     </div>
  </body>
