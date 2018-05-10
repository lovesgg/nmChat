<?php
echo '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	<script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>
	<!-- 引入 jQuery Mobile 样式 -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

	<!-- 引入 jQuery 库 -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- 引入 jQuery Mobile 库 -->
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>


<style type="text/css">
.chat_wrap_one{
	width: 100%;
	padding: 10px;
	background: ;
}
.position_right{
	margin:auto;
	padding-right: 20px;
}
.local_user_div{
	max-width: 60%;
	background: #59E54D;
	word-wrap: break-word;
	padding:10px;
	border-radius: 10px;
	display: inline-block;
	text-align: left;
}
.from_user_div{
	max-width: 200px;
	background: white;
	word-wrap: break-word;
	padding:10px;
	border-radius: 10px;
	display: inline-block;

}
.chat_bg{
	background: #E2E2E2;
}
.input_chat{
	width: 100%;
	position: absolute;
	bottom: 0px;
	height: auto;
	background: #3385FF;
	padding-left: 1%;
}

.button_submit{
	width: 15%;
	height: 52px;
	padding: 8px;
	position: absolute;
	bottom: 0px;
	right: 0.5%;
}
.list_one_class{
	color: white;
	margin: auto;
	width: 70%;
	background: #2A2A2A;
	height: 45px;
	padding: 20px;
	font-size: 30px;
	text-align: center;
	border-radius: 20px;
	margin-top: 10px;
}
.ui-page-theme-a .ui-bar-inherit{
	background: #3385FF;
}
.ui-header .ui-title{
	color:white;
	font-weight: 400;
}
.ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
    color: #38c;
    font-weight: 400;
}
#div_people_sum{
	text-align: center;
	color: #3385FF;
	margin-top: 20px;
}
.class_user_list_c{
	height: 50px;
	width: 90%;
	background: #2A2A2A;
	color: white;
	margin-top: 10px;
	font-size: 36px;
	padding-left:5%;
	padding-right: 5%;
	padding-top: 10px;
	padding-bottom: 10px;
	border-radius: 20px;

}
a{
	text-decoration: none;
}
.bottom_ding{
	width: 100%;
	height: 70px;
	bottom: 0px;
	background: none;
}
.ui-btn,label.ui-btn{
	border:0px;
}
.ui-footer .ui-navbar .ui-btn{
	font-size: 15px;
}
.publish_div{
	position:fixed;
	bottom: 80px;
	right: 20px; 

}
.mimi_img_logo{
	width: 50px;
	height: 50px;
	border-radius: 50px;
}
#no_data_result{
	display: none;
	text-align: center;
}
.div_mimi_img{
	width: 20%;
	padding-left: 5px;
	float: left;
}
.div_mimi_content{
	width: 78%;
	background:;
	float: left;
	border-bottom:1px solid #D7D0D0;
	padding-top: 5px;
	word-wrap:break-word;
}
.list_one_mimi_div{
	padding-top: 10px;

	
}
.mimi_top_font{
	font-size: 15px;
	margin-top: 10px;
}
.mimi_title_font{
	font-size: 22px;
	color:#0E0707;
	line-height: 30px;
}
#litle_title_p{
	font-size: 15px;
	text-align: center;
	color: #3385FF;
}
#show_one_comment_jump_p{
	font-size: 22px;
}
.comment_img{
	width: 40px;
	height: 40px;
	border-radius: 40px;
}
.one_comment_div{
	padding: 5px;
	margin-top: 15px;
}
.comment_one_p_word{
	word-wrap: break-word;
	position: relative;
	margin-left: 70px;
	margin-top: -41px;
}















</style>

</head>
<body>


<div data-role="page" id="page_index">
	<div data-role="header" data-position="fixed">
		<h1 style="" id="indexpage_username">悄悄话</h1>
	</div>

	<div data-role="content">
		<div id="new_show" style="display: none;position: fixed;padding:10px;background: ;width:50px;border-radius: 10px;border:2px solid #3385FF;">新消息</div>
		<div id="div_people_sum">
			在线人数 [ <span id="people_sum"></span> ]
			<hr>
		</div>

		<div id="list_all_people">
			

			
			
		</div>
	</div>

	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
			<ul>
			<li><a href="#page_index" style="color:#3385FF;">推荐</a></li>
			<li><a href="#user_list">消息</a></li>
			<li onclick="show_mimi();"><a href="#mimi">秘密</a></li>
			</ul>
	    </div>
	</div>
</div> 

<div data-role="page" id="user_list">
	<div data-role="header" data-position="fixed">
		<h1>聊天列表</h1>
	</div>

	<div data-role="content">
		<div id="chat_all_list">
			<!--用户列表    with_user_id         -->
		</div>
	</div>

	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
			<ul>
			<li><a href="#page_index">推荐</a></li>
			<li><a href="#user_list" style="color:#3385FF;">消息</a></li>
			<li onclick="show_mimi();"><a href="#mimi">秘密</a></li>
			</ul>
	    </div>
	</div>
</div> 



<div data-role="page" id="mimi_comment_page">
	<div data-role="header" data-position="fixed">
		<a data-rel="back">返回</a>
		<h1>评论</h1>
	</div>

	<div data-role="content" id="mimi_comment_one" style="padding: 0px;">
		<div style="padding: 10px;">
			<div>
				<p id="litle_title_p"></p>
			</div>
			<div>
				<p id="show_one_comment_jump_p"></p>
			</div>
		</div>
		<hr>

		<div id="list_all_comments">
			
		</div>
	</div>

	<div data-role="footer" data-position="fixed">
		<textarea id="comment_text" style="width: 82%;float: left;margin-left: 1%;" placeholder="50字以内"></textarea>
		<button id="comment_btn" style="width: 15%;float: left;position: absolute;right: 1%;bottom: 4px;height: 49px;">评论</button>
	</div>
		

</div>

<div data-role="page" id="mimi">
	<div data-role="header" data-position="fixed">
		<h1>秘密</h1>
	</div>

	<div data-role="content" id="mimi_content" style="padding: 0px;">
		<!--按钮-->
		<div class="publish_div">
			<a href="#myPopupDialog" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" style="border-radius: 20px;font-size: 15px;background: #3385FF;	color: white;">+</a>
		</div>


		<!--弹框-->
		<div data-role="popup" id="myPopupDialog">
			<div data-role="header">
				<a id="close_box" href="#" class="" data-rel="back">关闭</a>
				<h1>你的秘密</h1>
			</div>

			<div data-role="main" class="ui-content">
				<textarea id="mimi_textarea"></textarea>
				<button id="publish_btn" onclick="publish_btn()" style="width: 100%;">发布</button>
			</div>

		</div>
		

		<div id="show_all_mimis">
			
		</div>

		<div id="no_data_result">
			<p style="margin-top: 10px;">没有更多数据</p>
		</div>


	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
			<ul>
			<li><a href="#page_index">推荐</a></li>
			<li><a href="#user_list">消息</a></li>
			<li onclick="show_mimi();"><a href="#mimi" style="color:#3385FF;">秘密</a></li>
			</ul>
	    </div>
	</div>
</div> 



<script type="text/javascript">
	var city_name;
	var user_id_fd;
	var user_ip;
	var comment_pid;

	var litle_title="";
	var show_one_comment_jump="";

	var wsServer = 'ws://127.0.0.1:4567';
	var websocket = new WebSocket(wsServer);
	websocket.onopen = function (evt) {
	    //console.log("Connected to WebSocket server.");
	    //when connect list all user
	};

	websocket.onclose = function (evt) {
	    //console.log("Disconnected");
	};

	websocket.onmessage = function (evt) {
	    var server_data=JSON.parse(evt.data);//转换成json对象
	    var type=server_data['type'];
	    if(type=="new_connect"){
	    	//new user connect
	    	var localuser=server_data['localuser'];
	    	if(localuser=="yes"){
	    		//local user
	    		var people_sum=server_data['people_sum'];
		    	$("#people_sum").text(people_sum);//show num
		    	var if_have_other_people=JSON.parse(server_data['all_people_fd']);
		    	var local_user_name=server_data['user_fd'];
		    	user_id_fd=local_user_name;

		    	var h1_c=$("#indexpage_username").text();
		    	$("#indexpage_username").text("悄悄话 @"+local_user_name+"号");
		    	if(if_have_other_people!='[]'){
		    		if(if_have_other_people!=''){
		    			//have others  add all people
			    		var all_people=if_have_other_people.toString();
			    		all_people=all_people.split(",");
			    		for(var i=0;i<all_people.length;i++){
			    			$("#list_all_people").prepend("<div onclick='toPage(this)' class='list_one_class' id='div_one_man_"+all_people[i]+"'><span id='username_"+all_people[i]+"'>逗逼["+all_people[i]+"号]</span></div>");
			    		}
		    		}
		    	}
		    	else{
		    		//only one user 
		    		$(".list_one_class").remove();
		    	}

	    	}
	    	else{
	    		//not localuser(add one new user)
	    		var people_sum=server_data['people_sum'];
		    	$("#people_sum").text(people_sum);//show num
		    	var user=server_data["user_fd"];
		    	$("#list_all_people").prepend("<div onclick='toPage(this)' class='list_one_class' id='div_one_man_"+user+"'><span id='username_"+user+"'>逗逼["+user+"号]</span></div>");
	    	}
	    	
	    }
	    else if(type=="user_close"){
	    	var close_user_fd=server_data['user_fd'];
	    	var div_one_man_id="div_one_man_"+close_user_fd;
	    	//var user_page_id="user_page_"+close_user_fd;
	    	var people_sum=server_data['people_sum'];
	    	$("#"+div_one_man_id).remove();
	    	//$("#"+user_page_id).remove();
	    	$("#people_sum").text("").text(people_sum);
	    	
	    }
	    else if(type=="receive"){
	    	var from_user=server_data['from'];
	    	var text=server_data['text'];
	    	//console.log(from_user+" "+text);
	    	$("#new_show").show();
	    	setTimeout(function(){
	    		$("#new_show").hide();
	    	},2000);
	    	setTimeout(function(){
	    		$("#new_show").show();
	    	},2000);
	    	setTimeout(function(){
	    		$("#new_show").hide();
	    	},2000);


	    	if($("#with_user_"+from_user).length>0){
				//已经存在 删除 重新建
				
				$("#with_user_"+from_user).remove();
				//创建列表
				
				
				$("#chat_all_list").prepend("\
					<a href='#user_page_"+from_user+"'><div id='with_user_"+from_user+"' href='#user_page_"+from_user+"' class='class_user_list_c'>逗逼 [ "+from_user+" ]</div></a>\
				");
			}
			else{
				//创建列表
				$("#chat_all_list").prepend("\
					<a href='#user_page_"+from_user+"'><div id='with_user_"+from_user+"' href='#user_page_"+from_user+"' class='class_user_list_c'>逗逼 ["+from_user+" ]</div></a>\
				");

			}

	    	if($("#user_page_"+from_user).length>0){
				//user page is cunzai
				$("#chat_main_"+from_user).append("\
					<div class='chat_wrap_one'>\
						<div align='left' class='from_user_div'>\
							"+text+"\
						</div>\
					</div>\
				");
				//滚动到底部
				$(function(){
				  var h = $(document).height()-$(window).height();
				  $(document).scrollTop(h);
				});
				//window.location.href="#user_page_"+from_user;
			}
			else{
				//user page not exits.create new user page
				$("#user_list").after("\
					<div data-role='page' id='user_page_"+from_user+"' class='chat_bg'>\
						<div data-role='header' class='user_chat_head' data-position='fixed'>\
							<a href='#user_list'>\
								返回\
							</a>\
							<h1>逗逼["+from_user+"]号</h1>\
						</div>\
						<div data-role='content' style='padding:0px;'>\
							<div id='chat_main_"+from_user+"'>\
							</div>\
							<div class='bottom_ding'></div>\
							<div class='input_chat'>\
								<textarea class='chat_textarea' style='width:82%;height:37px;' id='chat_msg_id_"+from_user+"'></textarea><button class='button_submit' id='button_submit_id_"+from_user+"' onclick='check_num(this);' data-inline='true'>发送</button>\
							</div>\
						</div>\
					</div>\
				");
				$("#chat_main_"+from_user).append("\
					<div class='chat_wrap_one'>\
						<div align='left' class='from_user_div'>\
							"+text+"\
						<div/>\
					</div>\
				");
				//滚动到底部
				$(function(){
				  var h = $(document).height()-$(window).height();
				  $(document).scrollTop(h);
				});
				//window.location.href="#user_page_"+from_user;
			}
	    }
	    else if(type=="not_only"){
	    	alert("对方不在线.发送失败.");
	    }
	    else{
	    	//no do
	    }

	};

	websocket.onerror = function (evt, e) {
	    console.log('Error occured: ' + evt.data);
	};


	//to new page ,get name(为了聊天)
	function toPage(obj){
		var page_id=obj.id.split("_");
		var id=page_id[page_id.length-1];//id
		var user_page_id="user_page_"+id;
		var username_id="username_"+id;
		var username=$("#"+username_id).text();//user name

		
		if($("#with_user_"+id).length>0){
			//
			
			$("#with_user_"+id).remove();
			
				//创建列表
			
			$("#chat_all_list").prepend("\
				<a href='#user_page_"+id+"'><div id='with_user_"+id+"' href='#user_page_"+id+"' class='class_user_list_c'>逗逼 ["+id+" ]</div></a>\
			");
		}
		else{
			//创建列表
			$("#chat_all_list").prepend("\
				<a href='#user_page_"+id+"'><div id='with_user_"+id+"' href='#user_page_"+id+"' class='class_user_list_c'>逗逼 [ "+id+" ]</div></a>\
			");

		}

		if($("#"+user_page_id).length>0){
			//user page is cunzai
			window.location.href="#"+user_page_id;
		}
		else{

			//user page not exits.create new user page
			$("#user_list").after("\
				<div data-role='page' id='"+user_page_id+"' class='chat_bg'>\
					<div data-role='header' class='user_chat_head' data-position='fixed'>\
						<a href='#user_list'>\
							返回\
						</a>\
						<h1>"+username+"</h1>\
					</div>\
					<div data-role='content' style='padding:0px;'>\
						<div id='chat_main_"+id+"'>\
						</div>\
						<div class='bottom_ding'></div>\
						<div class='input_chat'>\
							<textarea style='width:82%;height:37px;' class='chat_textarea' id='chat_msg_id_"+id+"'></textarea><button class='button_submit' id='button_submit_id_"+id+"' onclick='check_num(this);' data-inline='true'>发送</button>\
						</div>\
					</div>\
				</div>\
			");
			window.location.href="#"+user_page_id;
		}
		
	}

	//send msg
	//check number string when send msg
	function check_num(obj){
		var id=obj.id.split("_")[3];
		var send_msg=$("#chat_msg_id_"+id).val();
		var length=send_msg.length;
		if(length==0){
			alert("内容不能为空");
		}
		else if(length>=100){
			alert("字数不能大于100字");
		}
		else{
			$("#chat_main_"+id).append("\
				<div class='chat_wrap_one'>\
				<div class='position_right' align='right'>\
					<p class='local_user_div'>\
						"+send_msg+"\
					</p>\
				</div>\
				</div>\
			");
			websocket.send(JSON.stringify({
	          'touser': id,
	          'text': send_msg
	        }));
	        $.post('getChatMsg.php',{'touser':id,'text':send_msg,'from_id':user_id_fd,'ip':user_ip});
			$("#chat_msg_id_"+id).val("");
			//滚动到底部
			$(function(){
			  var h = $(document).height()-$(window).height();
			  $(document).scrollTop(h);
			});
		}
	}

	//logout
	window.onbeforeunload = function(event) {
    	event.returnValue = "离开此页会销毁您的所有聊天数据.确认离开吗?";
	};

	//get city
    city_name=remote_ip_info.city;
	//get user ip
	$.get('http://ipinfo.io/json',function(data){  
        user_ip=data.ip;  
    });  


    //publish
    function publish_btn(){
    	var num=$("#mimi_textarea").val();
    	if(num.length>=200){
    		alert("字数不大于200");
    	}
    	else if(num.length==0){
    		alert("内容不能为空");
    	}
    	else{
    		var data_publish={
    			from_id:user_id_fd,
    			ip:user_ip,
    			city_name:city_name,
    			title:num,
    		};
    		$.post('publish.php',data_publish,function(data){
    			if(data=="ok"){
    				$("#mimi_textarea").val("");
    				$("#close_box").click();
    				show_mimi();
    				
					//滚动到底部
					$(function(){
					  var h = $(window).height();
					  $(document).scrollTop(h);
					});



    				
    			}
    			else{
    				alert("发布失败");
    			}
    		});
    	}
    }

    //show_mimi
    //add mimi
    var pageId=0;//get page
  	$(document).on("pageshow","#mimi",function(){ 
		///滑动到底部事件
		$(document).unbind("scroll");
		$(document).bind("scroll", function(event){

			if( $(document).scrollTop() >= $(document).height()-$(window).height() ){
				pageId+=1;
		    	$.get('getMimi.php?pageId='+pageId,function(data){
		    		if(data=="no_data"){
		    			$("#no_data_result").show();
		    		}
		    		else{
		    			data=JSON.parse(data);
			    		for(var i=0;i<data.length;i++){
			    			$("#show_all_mimis").append("\
				    			<div class='list_one_mimi_div'>\
			    					<div class='div_mimi_img'>\
			    						<img src='./img/img.jpg' class='mimi_img_logo'>\
			    					</div>\
				    				<div class='div_mimi_content' id='url_"+data[i]['id']+"' onclick='jump(this);'>\
				    					<span class='mimi_top_font' id='c_one_"+data[i]['id']+"'>"+data[i]['city_name']+"市 | "+data[i]['uptime']+"</span>\
				    					<p class='mimi_title_font' id='title_one_"+data[i]['id']+"'>"+data[i]['title']+"</p>\
				    				</div>\
			    				</div>\
			    			");
		    			}
		    		}
		    		
		    	});
			}
		});
	});
    function show_mimi(){
    	pageId=0;
    	$("#no_data_result").hide();
    	$("#show_all_mimis").empty();
    	$.get('getMimi.php?pageId='+pageId,function(data){
    		if(data=="no_data"){
    			$("#no_data_result").show();
    		}
    		else{
    			data=JSON.parse(data);
	    		for(var i=0;i<data.length;i++){
	    			$("#show_all_mimis").append("\
	    													\
	    				<div class='list_one_mimi_div'>\
	    					<div class='div_mimi_img'>\
	    						<img src='./img/img.jpg' class='mimi_img_logo'>\
	    					</div>\
		    				<div class='div_mimi_content' id='url_"+data[i]['id']+"' onclick='jump(this);'>\
		    					<span class='mimi_top_font' id='c_one_"+data[i]['id']+"'>"+data[i]['city_name']+"市 | "+data[i]['uptime']+"</span>\
		    					<p class='mimi_title_font' id='title_one_"+data[i]['id']+"'>"+data[i]['title']+"</p>\
		    				</div>\
	    				</div>\
	    																\
	    			");
	    		}
    		}
    	});
    }
    //when load
    $("#no_data_result").hide();
	$("#show_all_mimis").empty();
	$.get('getMimi.php?pageId='+pageId,function(data){
		if(data=="no_data"){
			$("#no_data_result").show();
		}
		else{
			data=JSON.parse(data);
    		for(var i=0;i<data.length;i++){
    			$("#show_all_mimis").append("\
    													\
    				<div class='list_one_mimi_div'>\
    					<div class='div_mimi_img'>\
    						<img src='./img/img.jpg' class='mimi_img_logo'>\
    					</div>\
	    				<div class='div_mimi_content' id='url_"+data[i]['id']+"' onclick='jump(this);'>\
	    					<span class='mimi_top_font' id='c_one_"+data[i]['id']+"'>"+data[i]['city_name']+"市 | "+data[i]['uptime']+"</span>\
	    					<p class='mimi_title_font' id='title_one_"+data[i]['id']+"'>"+data[i]['title']+"</p>\
	    				</div>\
    				</div>\
    																\
    			");
    		}
		}
	});

	//jump to comment page
	function jump(obj){
		var id=obj.id.split('_')[1];
		comment_pid=id;
		litle_title=$("#c_one_"+id).text();
		show_one_comment_jump=$("#title_one_"+id).text();
		$("#litle_title_p").text(litle_title);
		$("#show_one_comment_jump_p").text(show_one_comment_jump);
		$("#list_all_comments").empty();
		$.get('get_comment.php?arti='+id,function(data){
			if(data=="no_data"){
				//console.log("no_data");
			}
			else{
				data=JSON.parse(data);
				for(var i=0;i<data.length;i++){
					$("#list_all_comments").append("\
						<div class='one_comment_div'>\
							<img src='./img/img.jpg' class='comment_img'>\
							<div>\
								<p class='comment_one_p_word'>"+data[i]+"</p>\
							</div>\
						</div>\
						");
				}
				
			}
		});
		window.location.href="#mimi_comment_page?pid="+id;
		//$("#show_pop_comment").click();
	}

	// up comment
	$("#comment_btn").click(function(){
		var text=$("#comment_text").val();
		var length=text.length;
		if(length>200){
			alert("啊字数太多我受不了哦");
		}
		else if(length==0){
			alert("内容不能为空.请勿刷新或返回上一个页面");
		}
		else{
			var posdata={
				'articalid':comment_pid,
				'from_id':user_id_fd,
				'text':text,
				'ip':user_ip
			};
			$.post('set_comment.php',posdata,function(data){
				if(data=="ok"){
					$("#comment_text").val("");
					$("#list_all_comments").prepend("\
						<div class='one_comment_div'>\
							<img src='./img/img.jpg' class='comment_img'>\
							<div>\
								<p class='comment_one_p_word'>"+text+"</p>\
							</div>\
						</div>\
					");
				}
				else{
					alert("评论失败");
				}
			});

		}
		
	});



</script>


</body>
</html>