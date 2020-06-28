<?php

$database = new mysqli('localhost','root','','besucher') or die();

$username=$_POST["username"];
$newPassword=$_POST["password1"];
$repeatedPassword=$_POST["password2"];

$flag = false;

$queryForUsernameCheck = "SELECT username FROM user";

$column= $database->query($queryForUsernameCheck);

$usernameArray = Array();

while($result = $column->fetch_assoc())
{
   $usernameArray[] = $result['username'];
}

foreach($usernameArray as $element)
{
  if($element==$username)
  {
    $flag=true;
  }
}

if($flag)
{
   if($newPassword==$repeatedPassword)
   {
      $query = "UPDATE user SET password='$newPassword' WHERE username='$username'";
      $database->query($query);
      echo "Changed password successfully!";
      die();
   }
   else {
     echo "The passwords are not the same!";
   }
}
else {
  echo "This username doesnt exist!";
}


?>
<br>
<a  href="createNewPassword.php">Go back</a>
