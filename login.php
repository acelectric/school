
<?php
$account = "user";
$password = "pass";

if ($_POST['inputAccount'] == $account && $_POST['inputPassword'] == $password) {
    header('Location: ./?p=backend&pass=pass');
} else {
    header('Location: ./?p=login');
}

?>