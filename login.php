
<?php
    $account = "user";
    $password = "pass";
    //echo "{$_POST['inputAccount']}";
    session_start();
    if($_POST['inputAccount'] == $account&&$_POST['inputPassword'] == $password) {
        $_SESSION["login"] = 0;
        header('Location: backend.php');
    } else {
        $_SESSION["login"] = 1;
        header('Location: ./?p=login');
    }
    
?>