<?php
session_start();
if(isset($_SESSION['uname'])){
    echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
    echo "<a href = 'profile.php'>MyProfile</a><br>";
    echo "<a href='logout.php'><input type=button value=logout name=logout></a>";
}
?>