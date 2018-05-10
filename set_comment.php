<?php
//插入评论信息
include('sql.php');

$articalid=@$_POST['articalid'];
$from_id=@$_POST['from_id'];
$text=@$_POST['text'];
$ip=@$_POST['ip'];
if(!(strlen($text)>200)){
	$sql="insert into comment (articalid,from_id,text,ip) values ('$articalid','$from_id','$text','$ip')";
	$result=mysqli_query($conn,$sql);
	if($result){
		$redis=new Redis();
		$redis->connect('127.0.0.1',6379);
		$redis_artical_id='arti_'.$articalid;
		$redis->lpush($redis_artical_id,$text);
		echo 'ok';
	}
	else{
		echo 'error';
	}
}
else{
	echo 'error  text';
}





























