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
   header("Location:form2.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="style.css">
       <title>Form1</title>
    </head>
    <body>
        <div class="container">
        <h3>Name</h3>
        <form action="" method="POST">
            <label for="">First Name</label><br>
            <input type="text" name="fname" value="<?=isset($_SESSION['info']['fname'])?$_SESSION['info']['fname']:''?>"><br>
            <label for="">Last Name</label><br>
            <input type="text" name="lname" value="<?=isset($_SESSION['info']['lname'])?$_SESSION['info']['lname']:''?>"><br>
            <div class="btn-box"><button type="submit" name="next" value="Next">Next</button></div>
        </form>
        </div>
    </body>
</html>