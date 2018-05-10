<?php
//发布秘密
include('sql.php');

@$from_id=htmlspecialchars($_POST['from_id']);
@$ip=htmlspecialchars($_POST['ip']);
@$city_name=htmlspecialchars($_POST['city_name']);
@$title=htmlspecialchars($_POST['title']);
if(strlen($title)!=0){
	$sql="insert into mimi (from_id,ip,city_name,title) values ('$from_id','$ip','$city_name','$title')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 'ok';
	}
	else{
		echo 'error';
	}

}

