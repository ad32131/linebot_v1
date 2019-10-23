<?php
date_default_timezone_set('Asia/Tokyo');
$Server_name = "localhost";
$Db_account = "linebot";
$Password = "F9fdGH9rr7E";
$Db_select = "linebot";
$connect=mysqli_connect( $Server_name, $Db_account, $Password,$Db_select) or die( "SQL server에 연결할 수 없습니다.");

function data_onerow($connect, $sql){
    $result = mysqli_query($connect, $sql);
    mysqli_data_seek($result, 0);
    return mysqli_fetch_array($result);
}

?>