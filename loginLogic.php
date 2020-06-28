<?php

$database = new mysqli("localhost","timohh97_admin1","449060data","timohh97_phpdata");

    $flag = false;

    $usernameFromInput = $_POST["username"];
    $passwordFromInput = $_POST["password"];


    $queryForUsernameCheck = "SELECT username FROM user";

    $usernameColumn = mysqli_query($database,$queryForUsernameCheck);

    $usernameArray = Array();

    while($result = $usernameColumn->fetch_assoc())
    {
       $usernameArray[] = $result['username'];
    }

    foreach ($usernameArray as $element) {

       if($element==$usernameFromInput)
       {
         $flag= true;
       }
    }


    if($flag){
    $queryForRow = "SELECT * FROM user WHERE username='$usernameFromInput'";
    $row = mysqli_query($database,$queryForRow);
    $rowArray = mysqli_fetch_array($row);

    if(password_verify($passwordFromInput,$rowArray[2])==true)
    {
      echo "<script> alert('Login successful!') </script>";
           echo "<script> window.location = 'https://www.register.timoschessl.com/login.php'</script>";
    }
    else {
          echo "<script> alert('Wrong password!') </script>";
           echo "<script> window.location = 'https://www.register.timoschessl.com/login.php'</script>";
    }
}
else {
    echo "<script> alert('This username doesnt exist!') </script>";
           echo "<script> window.location = 'https://www.register.timoschessl.com/login.php'</script>";
}


?>
