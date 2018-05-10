<?php
//通过php server.php运行。。服务器启动
//创建websocket服务器对象，监听端口
$ws = new swoole_websocket_server("0.0.0.0",4567);
//监听WebSocket连接打开事件
$ws->on('open', function ($ws, $request) {
    
    $people_sum=count($ws->connections);

    //获取所有fd 保存到数组，并json
    $all_people_fd=array();
    foreach($ws->connections as $fd){
    	if($request->fd!=$fd){
    		$all_people_fd[]=$fd;
    		
    	}
	}
	$json_all_people_fd=json_encode($all_people_fd);

    //不是本连接用户该接收到的数据
    $array_data_n=array('type'=>'new_connect','people_sum'=>$people_sum,'user_fd'=>$request->fd,'localuser'=>'no');
    $json_data_n=json_encode($array_data_n);
    //是本连接用户该收到的数据
    $array_data_y=array('type'=>'new_connect','people_sum'=>$people_sum,'user_fd'=>$request->fd,'localuser'=>'yes','all_people_fd'=>$json_all_people_fd);
    $json_data_y=json_encode($array_data_y);

    
    //新连接，广播给所有用户 “在线人数” "新用户fd"
    foreach($ws->connections as $fd){
		if($fd==$request->fd){
			//本连接用户
			$ws->push($fd,$json_data_y);
		}
		else{
			//非本连接用户
			$ws->push($fd,$json_data_n);
		}
	    
	}


});

//监听WebSocket消息事件
//用于收发转发消息
$ws->on('message', function ($ws, $frame) {
    
    $tx=json_decode($frame->data);
    $msg=array('type'=>'receive','from'=>$frame->fd,'text'=>$tx->text);
    if(!(strlen($tx->text)>100)){
        $msg=json_encode($msg);
        $touser=$tx->touser;//to user id
        if($ws->exist($touser)){
            $ws->push($touser,$msg);
            //insert_into($frame->fd,$touser,$tx->text);插入数据库
        }
        else{
            $msg=array('type'=>'not_only','e'=>'e');
            $msg=json_encode($msg);
            $ws->push($frame->fd,$msg);
        }
    }
    
    
});




//监听WebSocket连接关闭事件
$ws->on('close', function ($ws, $fd) {
    $people_sum=count($ws->connections)-1;
    $close_data=array('type'=>'user_close','user_fd'=>$fd,'people_sum'=>$people_sum);
    $json_close=json_encode($close_data);
    foreach($ws->connections as $close_fd){
    	$ws->push($close_fd,$json_close);
    }
});

$ws->start();






