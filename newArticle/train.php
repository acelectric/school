<?php

$link = mysqli_connect("localhost", "root", "$mysql_pass", "pp_db");
if (mysqli_connect_errno()) {
    //有錯誤就代表連線失敗
    echo '無法連線資料庫 :<br/>' . mysqli_connect_errno();
} else {
    //設定連線編碼為UTF-8
    mysqli_query($link, "SET NAMES utf8");
}
$sql = createSQL($hash, $link);
echo "$sql";
echo "<hr>";
if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error($link));
}
//新增成功
header('Location: ../?p=backend&pass=pass');

function createSQL($hash, $link)
{
    $sql = "INSERT INTO `train`";
    $sql .= " (title,article,link,publish_date) VALUES(";
    $title = mysqli_real_escape_string($link, $_POST['learn-title']);
    //$title = str_replace(" ","%20",$title);
    $sql .= "'".$title . "',";
    $article = mysqli_real_escape_string($link, $_POST['learn-article']);
    //$article = str_replace(" ","%20",$tiarticletle);
    $sql .= "'".$article . "',";
    $link = mysqli_real_escape_string($link, $_POST['learn-link']);
    //$link = str_replace(" ","%20",$link);
    $sql .= "'".$link . "',";
    $sql .= "'".date("Y-m-d") ."')";
    return $sql;
}
