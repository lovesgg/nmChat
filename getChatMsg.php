<?php
//插入聊天数据
include('sql.php');
function insert_into($from_id,$to_id,$content,$ip){
    global $conn;
    $sql = "INSERT INTO u_chat_msg (from_id, to_id, content,ip) VALUES ('$from_id','$to_id', '$content','$ip')";
    mysqli_query($conn, $sql);
}



@$from_id=$_POST['from_id'];
@$to_id=$_POST['touser'];
@$content=$_POST['text'];
@$ip=$_POST['ip'];
insert_into($from_id,$to_id,$content,$ip);


















