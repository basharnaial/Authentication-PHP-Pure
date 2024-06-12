<?php

require "config.php";
if(isset($_POST['save'])) {
    $note_text = $_POST['note_text'];
    $user_id = $_SESSION['id'];
    // var_dump($_POST);die();

    $sql = "INSERT INTO notes (user_id, note_text) VALUES ('$user_id', '$note_text')";
    if ($conn->query($sql) ===  TRUE) {
        echo "SUCESS";
    }
}
// var_dump($_SESSION['id']);die();

if(isset($_SESSION['login'])) {
    echo "انت الان في لوحة التحكم"; 
}
else{
    header("location:login.php");
    die();
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
    <script src="dashboard.js"></script>

  </head>
<form method="POST" action="" class="container"> 


<div class="mb-3">
  <label for="note_text" class="form-label">الملاحظة</label>
  <textarea name="note_text" class="form-control" id="note_text" rows="3"></textarea>
  
</div>

<div class="col-auto">
    <button style="width:100%" id="save" name="save" type="submit" class="btn btn-primary mb-3">حفظ</button>
  </div>

</form>

<br>


<a href="logout.php">تسجيل الخروج</a>

