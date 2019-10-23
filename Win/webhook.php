<?php
include_once "./send_api.php";
$k = fopen("test","a");

$data = json_decode(file_get_contents('php://input'),true);

if( !strcmp($data[events][0][type],"message") ){
    include_once("./dbcon.php");

    $sql = "INSERT INTO messagelog(replyToken,userId,type,id,text) values('".$data[events][0][replyToken]."','".$data[events][0][source][userId]."','".$data[events][0][message][type]."','".$data[events][0][message][id]."','".$data[events][0][message][text]."');";
    mysqli_query($connect, $sql);
    

    /*
    Message event
    fwrite($k, $data[events][0][type]."\n" );
    fwrite($k, $data[events][0][replyToken]."\n" );
    fwrite($k, $data[events][0][source][userId]."\n" );
    fwrite($k, $data[events][0][source][type]."\n" );
    fwrite($k, $data[events][0][message][type]."\n" );
    fwrite($k, $data[events][0][message][id]."\n" );
    fwrite($k, $data[events][0][message][text]."\n" );    
    */

    $sql="select AI from lineaimode;";
    $row = data_onerow($connect, $sql);
    if( !strcmp($row[AI],"Y")){
        $sql="select res from lineaireply where req='".$data[events][0][message][text]."';";
        $row = data_onerow($connect, $sql);
        $response = $row[res];
        
        if( strlen($response) < 1 ) $response = "No Database!";
        send_reply_text_msg($data[events][0][replyToken], $response );
    }

    mysqli_close($connect);
}
?>