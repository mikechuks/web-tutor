<?php
if(isset($_POST["submit"]))
{
if(empty($_POST["username"])&&(empty($_POST["password"])))
{
$message = 'You did not enter username and password';
}
elseif(empty($_POST["username"])||(empty($_POST["password"])))
{
$message = 'You did not enter either username or password';
}
else{
$message = "registration successful";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Validation Form</title>
</head>
<body>

    <br>
    <div class="contact__form" style="display:flex; justify-content: center;">
        <div>
        <h1>Register</h1>
        <br>
        <h3 id="display-message"><?php echo $message ?></h3>
        <br>
        <form action="" method="POST">
            <input type="text"  name="username" id="name" style="width:400px; height: 30px;" />
            <br/>
            <br/>
            <br>
            <input type="password"  name="password" id="password" style="width:400px; height: 30px;">
            <br/>
            <br/>
            <br>
            <input type="submit" name="submit" class="site-btn" value="submit">
        </form>
     </div>
    </div>
</body>
</html>