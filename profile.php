<?php
    session_start();
    if(isset($_SESSION['uname'])){
        echo "<h2>Welcome to My profile page</h2>";
        echo "<b>Username : </b>".$_SESSION['uname']."<br>";
        echo"<br><a href='loggedin.php'><input type=button name=back value=back></a>";
    }else{
        echo "<script>location.href='index.php'</script>";
    }
?>