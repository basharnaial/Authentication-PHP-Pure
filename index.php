<?php 
require "config.php";


if(isset($_POST['add'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];



    // check  email 

    $sql = "SELECT * FROM users WHERE email='$email'";
    // var_dump($sql);die();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    echo "البريد الإلكتروني موجود مسبقاً";die();

    }else{



    $sql = "INSERT INTO users (email, password)
    VALUES ('$email', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "1";die();
      // header("location:index.php?active=1");
    // echo "<script>alert('test'); </script>";
    } else {
      echo "0" . $sql . "<br>" . $conn->error;
    }
    }
 
    }
    // check session

if(isset($_SESSION['login'])) {
    echo "انت مسجل الدخول بالفعل";die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="sign_up.js"></script>

  </head>


<body>
   <h1 id="sucessmsg" style="display:none">لقد تم تسجيل الإشتراك</h1>  

<div style="padding-top:50px;"></div>
<div method="POST" action="" class="row g-3 container">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="E-mail">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="col-auto">
    <button id="add" name="add" type="submit" class="btn btn-primary mb-3">sign up</button>
  </div>
</div>



<!-- ?php
if(isset($_GET['active'])){
echo "شكرا لك";
}

?> -->
</body> 


</html>