<?php
//获取秘密信息
include('sql.php');
//初始化0
$pageId=@$_GET['pageId'];
$pageNum=15;
$start=$pageId*$pageNum;

$sql_count="select id from mimi";
$data=mysqli_query($conn,$sql_count);
$num_row=mysqli_num_rows($data);//总条数
$count_page=(int)($num_row/$pageNum);//页数 末尾业
if($pageId>$count_page){
	echo 'no_data';//没有更多数据
}
else{
	$arr=array();
	$sql="select id,city_name,title,uptime from mimi order by id desc limit $start,$pageNum";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		$arr[]=array(
			'id'=>$row['id'],
			'city_name'=>$row['city_name'],
			'title'=>$row['title'],
			'uptime'=>$row['uptime']
		);
	}
	$data_return=json_encode($arr);
	echo $data_return;
}






















