<?php
session_start();
if(isset($_SESSION['info'])){
    extract($_SESSION['info']);
    $conn=mysqli_connect('localhost','root','','survey');
    $sql=mysqli_query($conn,"INSERT INTO multistep(first_name,last_name,phone,email,address,age)VALUES('$fname','$lname','$phone','$email','$address','$age')");
    if($sql){
        unset($_SESSION['info']);
        echo'Data has been saved successfully!';
        echo'<a href="form1.php">Go Back!</a>';

    }else{
        echo mysqli_error($conn);
    }
}
?>
