<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>天气预报</title>

<link rel="stylesheet" type="text/css" href="wether/normalize.css" />
<link rel="stylesheet" type="text/css" href="wether/demo.css" />
<link rel="stylesheet" type="text/css" href="wether/style1.css" />

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body class="demo-1">

    <div class="image-preload">
        <img src="weather/drop-color.png" alt="">
        <img src="weather/drop-alpha.png" alt="">
        <img src="weather/texture-rain-fg.png" />
        <img src="weather/texture-rain-bg.png" />
        <img src="weather/texture-sun-fg.png" />
        <img src="weather/texture-sun-bg.png" />
        <img src="weather/texture-fallout-fg.png" />
        <img src="weather/texture-fallout-bg.png" />
        <img src="weather/texture-drizzle-fg.png" />
        <img src="weather/texture-drizzle-bg.png" />
    </div>
    
    <div class="container">
        <header class="codrops-header">
            <h1>天气预报</h1>
        </header>
        <div class="slideshow">
            <canvas width="1" height="1" id="container" style="position:absolute"></canvas>
            
            
                <div class="slide" id="day-1" data-weather="sunny">
                    <div class="slide__element slide__element--date">2017-10-21&nbsp;&nbsp;&nbsp;星期六</div>
                    <div class="slide__element slide__element--temp">20°<small>C</small></div>
                </div>
                <div class="slide" id="day-2" data-weather="sunny">
                    <div class="slide__element slide__element--date">2017-10-22&nbsp;&nbsp;&nbsp;星期日</div>
                    <div class="slide__element slide__element--temp">19°<small>C</small></div>
                </div>
                <div class="slide" id="day-3" data-weather="sunny">
                    <div class="slide__element slide__element--date">2017-10-23&nbsp;&nbsp;&nbsp;星期一</div>
                    <div class="slide__element slide__element--temp">18°<small>C</small></div>
                </div>
                <div class="slide" id="day-4" data-weather="sunny">
                    <div class="slide__element slide__element--date">2017-10-24&nbsp;&nbsp;&nbsp;星期二</div>
                    <div class="slide__element slide__element--temp">17°<small>C</small></div>
                </div>
                <div class="slide" id="day-5" data-weather="sunny">
                    <div class="slide__element slide__element--date">2017-10-25&nbsp;&nbsp;&nbsp;星期三</div>
                    <div class="slide__element slide__element--temp">18°<small>C</small></div>
                </div>			
            <nav class="slideshow__nav">
                
                        <a class="nav-item" href="#day-1">
                            <i class="icon icon--sunny"></i>
                            <span>10/21</span>
                        </a>
                        <a class="nav-item" href="#day-2">
                            <i class="icon icon--sunny"></i>
                            <span>10/22</span>
                        </a>
                        <a class="nav-item" href="#day-3">
                            <i class="icon icon--sunny"></i>
                            <span>10/23</span>
                        </a>
                        <a class="nav-item" href="#day-4">
                            <i class="icon icon--sunny"></i>
                            <span>10/24</span>
                        </a>
                        <a class="nav-item" href="#day-5">
                            <i class="icon icon--sunny"></i>
                            <span>10/25</span>
                        </a>            
            </nav>
        </div>
        
        <p class="nosupport">对不起，您的浏览器不支持WebGL！</p>
    </div>
    <!-- /container -->
    <script src="wether/index.min.js"></script>


</body>
</html>
