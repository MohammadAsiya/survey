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
       <meta charset="UTF-8">
       <title>form3</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="">Address</label><br>
            <input type="text" name="address" value="<?=isset($_SESSION['info']['address'])?$_SESSION['info']['address']:''?>"><br>
            <label for="">Age</label><br>
            <input type="text" name="age"  value="<?=isset($_SESSION['info']['age'])?$_SESSION['info']['age']:''?>"><br>
            <input type="submit" name="submit" value="submit">
            <a href="form2.php">Previous</a>

        </form>
    </body>
</html>