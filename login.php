<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Login</title>
  </head>
  <body>
      <div id="container">
    <h2>Login</h2>
    <form action="loginLogic.php" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <br>
      <input type="password" name="password" placeholder="Password" required><br>
      <br>
      <button type="submit" name="submit">Log in</button>
    </form>
    <br>
    <a href="forgotPassword.php">I forgot my password</a>
    <br>
    <br>
    <a href="index.html">Create a new account</a>
    </div>
  </body>
</html>
