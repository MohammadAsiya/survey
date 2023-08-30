<?php
//session start
session_start();
if(isset($_POST['submit'])){
    //create new session variable anu put inside key and values from post array
    foreach ($_POST as $key => $value)
    {
       $_SESSION['info'][$key]=$value;
    }
    $keys = array_keys($_SESSION['info']);
    if(in_array('submit',$keys)){
       unset($_SESSION['info']['submit']);
    }
   //Finally redirect to next page
   header("Location:submit.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <link rel="stylesheet"href="style.css">
       <meta charset="UTF-8">
       <title>form3</title>
    </head>
    <body>
        <div class="container">
        <h3>Address</h3>
        <form action="" method="POST">
            <label for="">Address</label><br>
            <input type="text" name="address" value="<?=isset($_SESSION['info']['address'])?$_SESSION['info']['address']:''?>"><br>
            <label for="">Age</label><br>
            <input type="text" name="age"  value="<?=isset($_SESSION['info']['age'])?$_SESSION['info']['age']:''?>"><br>
            <div class="btn-box">
            <button><a href="form2.php">Previous</a></button>
            <button type="submit" name="submit" value="submit">submit</button>
            </div>

        </form>
        </div>
    </body>
</html>