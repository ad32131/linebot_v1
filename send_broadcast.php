<?php
    include_once "./Win/send_api.php";
    // msg_init
    if( empty($_POST["msg_content"]) ) exit(0);
    $msg_contents = base64_decode($_POST["msg_content"]);
    send_broadcast_flex_msg($msg_contents);
 
?>
