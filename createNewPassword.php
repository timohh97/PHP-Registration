<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change password</title>
  </head>
  <body style="text-align:center;">
    <h1>Change password</h1>
    <form action="createNewPasswordLogic.php" method="post">
      <label>Your username:</label>
      <br>
      <input type="text" name="username" placeholder="Your username" required><br>
      <br>
      <label>New password:</label>
      <br>
      <input type="password" name="password1" placeholder="New password" required minlength="6"><br>
      <br>
      <label>Repeat new password:</label>
      <br>
      <input type="password" name="password2" placeholder="Repeat new password" required><br>
      <br>
      <button type="submit" name="submit">Change password</button>
    </form>
  </body>
</html>
