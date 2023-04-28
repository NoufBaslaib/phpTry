<?php
session_start();
//here we will use isset to avoid the error
if(isset($_POST['submit'])){
    $username= filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password= $_POST['password'];
    if($username=='Nouf'&& $password=='password'){
        $_SESSION['username']= $username;
        header('Location: /phpTry/extras/dashboard.php');
    }else{
        echo 'incorrect login';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<!--use the method GET to search not to submit or forms
use POST instead for submit-->

<div>
    <label for="username"> username:</"label>
    <input type="text" name ="username">
</div>
<div>
    <label for="password">password:</label>
    <input typer="password" name="password">
</div>
<input type="submit" value="submit" name="submit">
</form>