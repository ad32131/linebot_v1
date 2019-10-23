<?php
include_once("./dbcon.php");

function genstring($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function genkey(){
    return genstring(5)."-".genstring(5)."-".genstring(5)."-".genstring(5)."-".genstring(5);
}

if( empty($_GET['coupon']) )  exit(0);
if( empty($_GET['coupon_name']) )  exit(0);

$coupon = $_GET['coupon'];
$coupon_name = $_GET['coupon_name'];
$code_key = "";

$sql="select max(idx) as idn from couponcode;";
$result = mysqli_query($connect, $sql);
mysqli_data_seek($result, 0);
$row = mysqli_fetch_array($result);

if( !empty($start_idx)) $start_idx=0;
else $start_idx = $row['idn'];

$coupon = $coupon + $start_idx;


$list_data = array();
$sql = "INSERT INTO couponcode values ";
for($i=1 + $start_idx ;$i<=$coupon;$i++){
    //echo md5(md5(md5(rand()*rand()+$i)+$i)+$i);
    $code_key = genkey();
    echo $code_key;
    echo "<br>";

    if( !array_search($code_key,$list_data) )
    {
        array_push( $list_data , $code_key );
        $sql = $sql."($i,'N','$code_key','$coupon_name')";
        if($i != $coupon) $sql = $sql." , ";
        else $sql = $sql.";";
    }
    else{
        $i= $i-1;
        continue;
    }
    
}
$result = mysqli_query($connect, $sql);
mysqli_close($connect);
//echo $sql;
?>