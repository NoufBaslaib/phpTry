<?php
//here we will use isset to avoid the error
if(isset($_POST['submit'])){
    $name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $age= filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name, $age;
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<!--use the method GET to search not to submit or forms
use POST instead for submit-->

<div>
    <label for="name"> Name:</"label>
    <input type="text" name ="name">
</div>
<div>
    <label for="age">Age:</label>
    <input typer="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
</form>