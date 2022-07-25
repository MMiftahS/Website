
<?php 
if (isset($_POST['submit'])) { 
    $user = $_POST['Username']; 
    $pass = $_POST['Password']; 
    if ($user == "123" && $pass == "123") 
    { 
        header("location: Website.php"); 
    } 
    else
    {
        header("location: Login.php");
    }
} 
?>