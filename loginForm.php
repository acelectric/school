<?php
/*if ($_SESSION['login'] == 1) {
    header('Location: ./?p=backend');
}*/
?>
<form class="w-50 ml-auto mr-auto pt-3" action="login.php" method="post">
    <div class="form-group">
        <label for="inputAccount">Email address</label>
        <input type="text" class="form-control" name="inputAccount" id="inputAccount" placeholder="Enter Account">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
    </div>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-secondary">登入</button>
    </div>
</form>
