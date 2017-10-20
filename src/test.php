<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>今日天气</title>


<style>  
body {  
    font-family: microsoft yahei;  
}  
</style>  
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>  
</head>  
<body>  
  
<div id="output"></div>  
  
<script type="text/javascript" charset="utf-8">  
      
    $.ajax({  
        type: "GET",   
        url: "http://cdn.weather.hao.360.cn/sed_api_weather_info.php?app=360chrome",  
        dataType : "jsonp",  
        jsonp: "_jsonp",//参数名  
        success: function(jsonData){  
            var html;  
            html = '数据更新时间：' + jsonData.pubdate + ' ' + jsonData.pubtime + '<br>';  
              
            html += '地区：' + jsonData.area[0][0] + ' ' + jsonData.area[1][0] + ' ' + jsonData.area[2][0] + '<br>';  
            html += '天气情况：<br>';  
              
            for(var i =0; i<jsonData.weather.length; i++) {  
                html += jsonData.weather[i].date + '<br>';  
                  
                if(jsonData.weather[i].info.dawn !== undefined) {  
                    html += '早晨天气：' + jsonData.weather[i].info.dawn[1] +   
                    ' 气温：' + jsonData.weather[i].info.dawn[0] + '~' + jsonData.weather[i].info.dawn[2] + '℃ ' +  
                    jsonData.weather[i].info.dawn[3] +' '+ jsonData.weather[i].info.dawn[4] + '<br>';  
                }  
                  
                if(jsonData.weather[i].info.day !== undefined) {  
                    html += '白天天气：' + jsonData.weather[i].info.day[1] +   
                    ' 气温：' + jsonData.weather[i].info.day[0] + '~' + jsonData.weather[i].info.day[2] + '℃ ' +  
                    jsonData.weather[i].info.day[3] +' '+ jsonData.weather[i].info.day[4] + '<br>';  
                }  
                  
                if(jsonData.weather[i].info.night !== undefined) {  
                    html += '夜间天气：' + jsonData.weather[i].info.night[1] +   
                    ' 气温：' + jsonData.weather[i].info.night[0] + '~' + jsonData.weather[i].info.night[2] + '℃ ' +  
                    jsonData.weather[i].info.night[3] +' '+ jsonData.weather[i].info.night[4] + '<br>';  
                }  
                html += '<br>';  
            }  
              
            html += '穿衣：<br>';  
            html += '【' + jsonData.life.info.chuanyi[0] + '】 ' + jsonData.life.info.chuanyi[1] + '<br><br>';  
              
            html += '感冒：<br>';  
            html += '【' + jsonData.life.info.ganmao[0] + '】 ' + jsonData.life.info.ganmao[1] + '<br><br>';  
              
            html += '空调：<br>';  
            html += '【' + jsonData.life.info.kongtiao[0] + '】 ' + jsonData.life.info.kongtiao[1] + '<br><br>';  
              
            html += '污染：<br>';  
            html += '【' + jsonData.life.info.wuran[0] + '】 ' + jsonData.life.info.wuran[1] + '<br><br>';  
              
            html += '洗车：<br>';  
            html += '【' + jsonData.life.info.xiche[0] + '】 ' + jsonData.life.info.xiche[1] + '<br><br>';  
              
            html += '运动：<br>';  
            html += '【' + jsonData.life.info.yundong[0] + '】 ' + jsonData.life.info.yundong[1] + '<br><br>';  
              
            html += '紫外线：<br>';  
            html += '【' + jsonData.life.info.ziwaixian[0] + '】 ' + jsonData.life.info.ziwaixian[1] + '<br><br>';  
              
            html += 'PM2.5： ' + jsonData.pm25.pm25[0];  
              
            $("#output").html(html);  
        }  
    });  
</script>  
  
</body>  
</html>  