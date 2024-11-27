<?php
 header("Access-Control-Allow-Origin: Same-origin");

if(isset($_POST['edition_id']) && isset($_POST['flag'])){

include('db.php');
// prepare and bind
$stmt = $conn->prepare("UPDATE  `udvaban_track_visitor` SET `visitor` = `visitor`+1 WHERE edition_id = ? AND flag = ?");
$stmt->bind_param('ss',$edition_id, $flag);

// set parameters and execute
$edition_id = filter_var( $_POST['edition_id'], FILTER_SANITIZE_STRING);
$flag = filter_var($_POST['flag'], FILTER_SANITIZE_STRING);


if($stmt->execute()){
    echo "success";
}else{
    echo "fail";
}



}else{
    echo "Error";
}