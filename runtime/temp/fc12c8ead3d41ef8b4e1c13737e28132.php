<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\index\mine.html";i:1484019435;}*/ ?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes" />
    <link rel="stylesheet" href="/AHalf/application/index/view/dist/css/jquery.mobile-1.4.5.css" />
    <script src="/AHalf/application/index/view/dist/js/jquery.js"></script>
    <script src="/AHalf/application/index/view/dist/js/jquery.mobile-1.4.5.js"></script>
    <script src="/AHalf/application/index/view/dist/js/jquery-1.6.4.min.js"></script>
    <link rel="stylesheet" href="/AHalf/application/index/view/dist/css/bootstrap.min.css" />
    <script src="/AHalf/application/index/view/dist/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 799px)" href="/AHalf/application/index/view/dist/css/mobile-tablet.css" />

</head> 
<body>


<div data-role="page" id="minepage">
    <div data-role="header"data-position="fixed">
        <a href=""data-icon="home"></a>
        <h1 class="ui-title">半对半</h1>
        <a href=""data-icon="home"></a>
    </div>
	<div data-role="content">
    	<div>
            <ul data-role="listview"data-inset="true">
                <li><a href="#"data-role="button"><img src="2012.jpg"/><h2>用户昵称</h2>
                    <p>照片2张，拼照1次，赞3次</p>
                    </a>
                </li>
            </ul>
        </div>
        <div>
             <ul data-role="listview" data-inset="true">
            <li><a href="message.html" data-role="button" data-icon="audio">任务通知</a></li>
             <li><a href="friends.html"data-role="button" data-icon="comment">我的好友</a></li>
            </ul>
        </div>
        <div>
          <ul data-role="listview" data-inset="true">
            <li><a href="focuson.html"data-role="button" data-icon="recycle">摇一摇</a></li>
             <li><a href="fans.html"data-role="button" data-icon="calendar">我的时间轴</a></li>
             <li><a href="fans.html"data-role="button" data-icon="cloud">我的关系网</a></li>

            </ul>
        </div>
        <div>
            <ul data-role="listview"data-inset="true">
                <li><a href="setting.html"data-role="button" data-icon="gear">设置</a></li>
            </ul>
        </div>
        <div>
            <ul data-role="listview"data-inset="true">
                <button type="button" class="btn btn-danger">退出</button>
            </ul>
        </div>

    </div>
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="http://localhost/AHalf/public/index.php/index/index/index/"data-icon="home">首页</a></li>
                <li><a href="discover.html"data-icon="heart">对对拼</a></li>
                <li><a href="chat.html"data-icon="camera">我要拍</a></li>
                <li><a href="chat.html"data-icon="comment">聊天</a></li>
                <li><a href="http://localhost/AHalf/public/index.php/index/index/mine/"data-icon="user">我的</a></li>

            </ul>
        </div>
    </div>
</div>



</body>
</html>
