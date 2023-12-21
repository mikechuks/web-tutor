<?php
function myValidation(){
    if(isset($_POST["submit"]))
    {
    if(empty($_POST["username"])&&(empty($_POST["password"])))
    {
    echo 'You did not enter username and password';
    }
    elseif(empty($_POST["username"])||(empty($_POST["password"])))
    {
    echo 'You did not enter either username or password';
    }
    else{
    echo "registration successful";
    }
    }
}
?>