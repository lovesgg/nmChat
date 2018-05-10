<?php
//获取评论信息
//需要安装Redis
$redis=new Redis();
$redis->connect('127.0.0.1',6379);

$arti_id=@$_GET['arti'];
$arti='arti_'.$arti_id;
$data=$redis->lrange($arti,0,50);
if(count($data)==0){
	echo 'no_data';
}
else{
	echo json_encode($data);
}

























