<?php
//definisi variable
$usernameErr = "";
$emailErr = "";
$username="";
$email="";


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $str = strlen($_POST['username']);
    if (empty($_POST["username"])) {
        $usernameErr = "username masih kosong";
    }
    if ($str < 8) {
        $usernameErr = "username kurang dari 8 karakter";
    }
    if (ctype_upper($_POST['username'])) {
        $usernameErr = "username berisi huruf besar\n";
    }
    else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a]*$/",$username)) {
          $usernameErr = "username tidak boleh menggunakan huruf kapital"; 
        }
      }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Person Data</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>



<body>
    <div class="formulir">
    <form action="" method="POST">
        <label>Username</label><span style=" color:red; "class="error">* <?php echo $usernameErr;?></span>
        <div class="username"><input name="username" type="text"  /></div>
        
        <label>email</label><span style=" color:red; "class="error">* <?php echo $emailErr;?></span>
        <div class="email"><input name="email" type="text" /></div>

        <div><input name="validasi" type="submit" value="validasi"/></div>
    </form> 
    <div>
        <?php
            echo $username;
            echo "<br>";
            echo $email;

        ?>
    </div>
    </div>
</body>
</html>
