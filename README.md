# nmChat  v2
"""
author:克里斯苏
time:2018-05-10
微信:jdk010
邮箱:993285153@qq.com
"""





（一）使用说明
    （1）请确保安装好php7 Mysql Swoole Redis (作者在Ubuntu中开发)
    （2）将解压出来的文件中的qiaoqiaohua.sql导入Mysql中
    （3）配置Mysql文件是sql.php .其中配置好数据库名，数据库用户名，数据库密码等
    （4）打开终端执行server.php文件（目的是启动服务端的程序，用于监听 接收 发送消息） sudo php server.php
    （5）启动server.php后，就可以通过浏览器访问apache目录下的此项目代码的index.php文件。这是首页，也是所有页面存在的文件，各种交互基本在此文件中改         动。
    （6）通过浏览器打开多个index.php页面进行测试，表示有多个用户在线。这样才能进行相互通信。
    （7）注意:index.php代码中的js代码 var wsServer = 'ws://127.0.0.1:4567'; 4567是端口号。server.php中的$ws = new             swoole_websocket_server("0.0.0.0",4567); 4567依然是端口号。可见这两个端口需要保持一致。
    
    
    
    
    
    
（二）各文件所代表的意思
    （1）get_comment.php是获取评论内容
    （2）getChatMsg.php是插入聊天消息到Mysql
    （3）getMimi.php是获取用户发布的秘密（相当于说说）
    （4）idnex.php 应用首页
    （5）publis.php用户发布的秘密（相当于空间说说）
    （6）server.php 服务端代码（核心代码）
    （7）set_comment.php 评论
    （8）sql.php数据库配置文件








（三）如果遇到问题，可微信或者邮箱联系，本人热心回答各种有关问题。祝各位生活愉快。














