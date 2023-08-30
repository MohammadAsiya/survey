<?php
//session start
session_start();
if(isset($_POST['next'])){
    //create new session variable anu put inside key and values from post array
    foreach ($_POST as $key => $value)
    {
       $_SESSION['info'][$key]=$value;
    }
    $keys = array_keys($_SESSION['info']);
    if(in_array('next',$keys)){
       unset($_SESSION['info']['next']);
    }
   //Finally redirect to next page
   header("Location:form3.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <title>form2</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="">Phone Number</label><br>
            <input type="text" name="phone" value="<?=isset($_SESSION['info']['phone'])?$_SESSION['info']['phone']:''?>"><br>
            <label for="">Email</label><br>
            <input type="text" name="email"  value="<?=isset($_SESSION['info']['email'])?$_SESSION['info']['email']:''?>"><br>><br>
            <input type="submit" name="next" value="Next">
            <a href="form1.php">Previous</a>

        </form>
    </body>
</html>