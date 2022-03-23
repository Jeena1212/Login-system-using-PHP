<?php

$uname = "Jeena";
$pwd = "@Jeena123";

session_start();
if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
    $_SESSION['uname'] = $uname;
    echo "<script>location.href='loggedin.php'</script>";
    // echo"<script>location.href='welcome.php'</script>";
}else{
    echo "<script>alert('username or password incorrect!')</script>";

    echo "<script>location.href='index.php'</script>";
}
?>