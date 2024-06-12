<?php 
require "config.php";
if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' limit 1 ";
// var_dump($sql);die();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   $userid =  $row["id"];
  $_SESSION['id'] = $userid;
    // var_dump($row);
  }
      var_dump($_SESSION['id']);

  // die();

  // var_dump($result);die();
  // output data of each row
  echo "1";
  $_SESSION["login"] = "1";die();

} else {
  echo "0";die();
}

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
    <script src="login.js"></script>

  </head>


<body>
  <!-- #1 -->
<!-- <p> hi </p> -->
<!-- <h1 style="display:none"> test </h1> -->

<!-- خطوات اضافة الاجاكس
اضافة الاجاكس 
اضافة القيم وتعريفها بالجافا سكربت -->

<div style="padding-top:50px;"></div>

<!-- // we don't neet to form and method and action -->
<!-- <div method="POST" action="" class="row g-3 container"> -->
<h1 id="sucessmsg" style="display:none">تم تسجيل الدخول بنجاح</h1>
<div class="row g-3 container">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="E-mail">
  </div>
  <div class="col-auto">
    <label for="password" class="visually-hidden">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="col-auto">
    <button id="login" name="login" type="submit" class="btn btn-primary mb-3">sign in</button>
  </div>
</div>
</body> 


</html>