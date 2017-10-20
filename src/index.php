<!--********************************
 * 电脑壁纸网站
 * 更新日志：
 * 2017-2-9 ver1.1
 *  新增 每日英语，展示金山词霸每日英语图片及英文句子（感谢 @266277）
 *  新增 点击壁纸分类后同步修改浏览器标题
 *  新增 数据加载时页面模糊化处理
 *
 * 2017-3-21 ver1.2
 *  新增 点击小图弹出大图浏览
 ********************************-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

    <title>高清电脑壁纸</title>

    <meta name="keywords" content="电脑桌面壁纸,高清电脑桌面壁纸,电脑桌面壁纸下载,电脑高清桌面壁纸" />
    <meta name="description" content="高清电脑壁纸下载,包括美女,游戏,动漫,动物,汽车,体育,广告,影视,明星,风景,绘画,节日,花卉等经典壁纸"/>

    <!-- jQuery文件 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <!--滚动加载插件-->
    <script type="text/javascript" src="wallpaper/js/jquery.lazyload.min.js"></script>

    <!--全屏滚动插件-->
    <script type="text/javascript" src="wallpaper/js/jquery.onepage-scroll.min.js"></script>

    <!--页面核心js文件-->
    <script type="text/javascript" src="wallpaper/js/wallpaper.js"></script>
    
    <link rel="stylesheet" href="wallpaper/css/wallpaper.css">
</head>
<body>

<div class="banner">
    <h1 class="webTitle" title="Copyright &copy;">高清电脑壁纸</h1>
    <ul id="banner">
        <li onclick="loadData('360new', true);changeTitle(this)">最新壁纸</li>
        <li class="tags">
            分类壁纸
            <ul id="tags"></ul>
        </li>
        
        <li onclick="loadData('ciba', true);changeTitle(this)" title="金山词霸每日一句壁纸">每日英语</li>
        <li><a href="/Player/index.html" target="_blank">音乐播放</a></li>
        <li><a href="/EditPlus/index.html" target="_blank">sn计算</a></li>
        <li><a href="wether.php" target="_blank">最近天气</a></li>
        
    </ul>
</div>

<div class="container">
    
    <div class="jigsaw" id="walBox"></div>  <!-- id="walBox" -->
    
    <a id="toolBall" target="_blank" href="javascript:void(0);" class="uptoTop"></a>
    
    <div id="loadmore">壁纸加载中……</div>

</div><!-- class="container" -->

</body>
