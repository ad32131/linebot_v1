<?php
include_once("./dbcon.php");


if( empty($_GET['ticket']) )  exit(0);
if( empty($_GET['couponkey']) ) exit(0);

$ticket = $_GET['ticket'];
$couponkey = $_GET['couponkey'];
$ciper_text = "";

$sql="select max(idx) as idn from instantkey;";
$result = mysqli_query($connect, $sql);
mysqli_data_seek($result, 0);
$row = mysqli_fetch_array($result);

if( !empty($start_idx)) $start_idx=0;
else $start_idx = $row['idn'];

$ticket = $ticket + $start_idx;


$list_data = array();
$sql = "INSERT INTO instantkey values ";
for($i=1 + $start_idx ;$i<=$ticket;$i++){
    //echo md5(md5(md5(rand()*rand()+$i)+$i)+$i);
    $ciper_text = md5(md5(md5(rand()*rand()+$i)+$i)+$i);
    
    if( !array_search($ciper_text,$list_data) )
    {
        array_push( $list_data , $ciper_text );
        $sql = $sql."($i,'$ciper_text','N','$couponkey')";
        if($i != $ticket) $sql = $sql." , ";
        else $sql = $sql.";";
    }
    else{
        $i= $i-1;
        continue;
    }
    
}
$result = mysqli_query($connect, $sql);
mysqli_close($connect);
?>