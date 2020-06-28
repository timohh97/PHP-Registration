<?php

$database = new mysqli('localhost','timohh97_admin1','449060data','timohh97_phpdata') or die();

  if($_POST['password1']==$_POST['password2'])
  {

    $flag = true;

    $newusername = $_POST['username'];

    $queryForUsernameCheck = "SELECT username FROM user";

    $column= $database->query($queryForUsernameCheck);

    $usernameArray = Array();

    while($result = $column->fetch_assoc())
    {
       $usernameArray[] = $result['username'];
    }

    foreach($usernameArray as $element)
    {
      if($element==$newusername)
      {
        echo "<script> alert('This username already exists!') </script>";
           echo "<script> window.location = 'https://www.register.timoschessl.com/index.html'</script>";
        $flag=false;
      }
    }

    if($flag)
    {
    $password = $_POST['password1'];
    $id = rand();
    
    $passwordHashed = password_hash($password,PASSWORD_DEFAULT);

    $queryForInsert = "INSERT INTO user (id,username,password) VALUES ('$id','$newusername','$passwordHashed')";

    $database->query($queryForInsert);

    echo "<script> alert('Created new account successfully!') </script>";
    echo "<script> window.location = 'https://www.register.timoschessl.com/index.html'</script>";
    }


  }
  else {
    echo "<script> alert('The passwords dont match!') </script>";
       echo "<script> window.location = 'https://www.register.timoschessl.com/index.html'</script>";
  }

?>
