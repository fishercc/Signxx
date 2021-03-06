<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Sign++免费网络验证</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="keywords" content="sign++ 云网络验证系统 软件验证 脚本验证">
    <meta name="description" content="免费的网络验证系统 提卡免费 可以管理多个软件 功能丰富">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/Public/css/index.css">
    <style type="text/css">
        div.content {
            padding: 30px 50px 30px 50px;
        }
        p {
            padding: 5px;
            letter-spacing: 2px;
        }
        h3 {
            padding-top: 10px;
        }
        dl {
            padding-left: 40px;
        }
        dl li {
            letter-spacing: 2px;
            padding: 3px;
        }
        h4 {
            margin-bottom: 3px;
            color: #333;
        }
        h4 a {
            color: #004F93;
            text-decoration: none;
        }
        h4 a:hover{
            color: #3090e4;
        }
        h5 {
            color: #666;
        }
        h1 {
            display: none;
        }
    </style>
</head>
<div style="display: none">
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260520261'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260520261' type='text/javascript'%3E%3C/script%3E"));</script>
</div>

<body>
<div class="container">
    <h1>Sign++免费网络验证</h1>
    <div class="navbar">
        <div class="logo"><img src="/Public/image/signxx.png"></div>
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/intro">功能</a></li>
            <li><a href="/sdk" class="select">下载</a></li>
            <li><a href="/Home">后台</a></li>
        </ul>
    </div>
    <div class="content">

        <h4>例子下载:</h4>
        <h4>2016-10-26更新 >> 1.5版本
            <a href="http://signxx.ys168.com">下载页面</a>
        </h4>

        <h5>如果例子中没有你所使用的语言可以结合易语言例子和文档开发</h5>

        <br><br>
        <div class="user_article_content">
            <p>参考文档:</p>
            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_init</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:初始化
 参数:
    s  软件编号
    v  软件版本
 返回值:
    无
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_reg</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:注册
 参数:
    code  注册码
 返回值:
    0=成功 -1=失败
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_try</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:试用
 参数:
    无
 返回值:
    0=成功 -1=失败
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_unbind</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:解绑
 参数:
    code  注册码
 返回值:
    0=成功 -1=失败
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_check</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:校验
 参数:
    无
 返回值:
    0=成功 -1=失败
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_offline</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:下线
 参数:
    无
 返回值:
    无
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> <strong><span
                    style="color:green">signxx_getmsg</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:获取上一个函数返回的提示文字
 参数:
    无
 返回值:
    字符串
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>
            <pre> <strong><span
                    style="color:green">signxx_recommend</span></strong>
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>

            <pre> 功能:推荐人加时
 参数:
    code  注册码
    recommendcode  推荐码
 返回值:
    0=成功 -1=失败
</pre>

            <p><span style="color:rgb(204, 204, 204)">--------------------------------------------------------------------------------------------------------------------------</span>
            </p>
        </div>
    </div>
    <div class="bottom">
    Copyright © 2016 浙ICP备16035010号-1 Sign++免费网络验证
</div>

</div>
</body>
</html>