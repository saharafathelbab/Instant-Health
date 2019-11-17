<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title> Login - Patient </title>
    <link rel = "stylesheet" href = "./CSS/home.css"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  </head>

  <body>
    <h2> Existing Patient </h2>
    <div class = "full">
      <form action="info.html" method="post">
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
        <button type="submit" class = "button-style" name = "login_user">Login</button>
        <br>
        <br>
        <form action = "newpatient.php">
          <input type = "submit" value = "Not A Patient?" class = "button-style"/>
        </form>
      </form>
     </div>
  </body>
