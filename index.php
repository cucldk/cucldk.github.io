<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<meta name="applicable-device" content="pc,mobile">
<link href="static/metro.css" rel="stylesheet" type="text/css" />
<title>Welcome</title>
</head>
<body style="background-color:#666">
<div class="demo-wrapper">
  <div class="dashboard clearfix">
      <div class="col1 clearfix">
        <div class="big todos-thumb" data-page=""><span class="icon-font" aria-hidden="true" data-icon="&#xe018;"></span>
          <p>Welcome
            <span class="todos-thumb-span">Welcome</span>
          </p>
        </div>
        <div class="big organizer-thumb" data-page="" onclick="javascript:window.open('http://weibo.com/ldksky')"><span class="icon-font" aria-hidden="true" data-icon=""><img src='static/weibo.png'/></span><p>WEIBO</p></div>
        <div class="big news-thumb" data-page="" onclick="javascript:window.open('static/wechat.jpg')"><span class="icon-font" aria-hidden="true" data-icon="&#xe00b;"></span><p>WECHAT</p></div>
        <div class="big weather-thumb" data-page="" onclick="alert('Email：me@cucldk.com');"><span class="icon-font" aria-hidden="true" data-icon=""><img src='static/email.png'/></span><p>E-MAIL</p></div>
        <div class="big favorites-thumb" data-page="" onclick="javascript:window.open('https://github.com/cucldk/')"><span class="icon-font" aria-hidden="true" data-icon="&#xe011;"></span><p>GITHUB</p></div>
        <div class="big code-thumb" data-page="" onclick="javascript:window.open('http://www.cuc.edu.cn/')"><span class="icon-font" aria-hidden="true" data-icon="&#xe006;"></span><p>UNIVERSITY</p></div>
        
      </div> 
       
      <div class="col2 clearfix">
        <div class="big calendar-thumb" data-page="" onclick="javascript:window.open('https://cucldk.com/')"><span class="icon-font" aria-hidden="true" data-icon="&#xe00f;"></span><p>BLOG</p></div>
        <div class="big weather-thumb" data-page="" onclick="javascript:window.open('https://cucldk.com/works.html')"><span class="icon-font" aria-hidden="true" data-icon="&#xe000;"></span><p>WORKS</p></div>
        <div class="big git-thumb" data-page="" onclick="javascript:window.open('http://nav.cucldk.com/')"><span class="icon-font" aria-hidden="true" data-icon="&#xe00d;"></span><p>NAVIGATION</p></div>
        <div class="big organizer-thumb" data-page="" onclick="javascript:window.open('http://pictures.cucldk.com/')"><span class="icon-font" aria-hidden="true" data-icon="&#xe001;"></span><p>PICTURES</p></div>
        <div class="big last code-thumb" data-page="" onclick="javascript:window.open('http://dict.cucldk.com/')"><span class="icon-font" aria-hidden="true" data-icon="&#xe007;"></span><p>DICTIONARY</p></div>
        <div class="big alarm-thumb" data-page="" onclick="javascript:window.open('https://ai.taobao.com/?pid=mm_24590344_5596457_21932657')"><span class="icon-font" aria-hidden="true" data-icon="&#xe013;"></span><p>AD: TAOBAO</p></div>
        
      </div>
  </div>

</div>
  <script src="static/jquery-1.8.2.min.js"></script>
  <script src="static/modernizr-1.5.min.js"></script>
  <script src="static/prefixfree.min.js"></script>
  <script>
    function showDashBoard(){
      for(var i = 1; i <= 3; i++) {
        $('.col'+i).each(function(){
            $(this).addClass('fadeInForward-'+i).removeClass('fadeOutback');
        });
      }
    }

    function fadeDashBoard(){
      for(var i = 1; i <= 3; i++) {
        $('.col'+i).addClass('fadeOutback').removeClass('fadeInForward-'+i);
      }
    }
    
   
    $(".lock-thumb").click(function(){
        fadeDashBoard();
        $('.login-screen').addClass('slidePageInFromLeft').removeClass('slidePageBackLeft');
    });
    
    $('#unlock-button').click(function(){
          $('.login-screen').removeClass('slidePageInFromLeft').addClass('slidePageBackLeft');
          showDashBoard();
    });

  $('.big, .small').each(function(){
    var $this= $(this),
        page = $this.data('page');
    $this.on('click',function(){
      $('.page.'+page).addClass('openpage');
      fadeDashBoard();
    })
  });
  $('.close-button').click(function(){
    $(this).parent().addClass('slidePageLeft')
          .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
                $(this).removeClass('slidePageLeft').removeClass('openpage');
              });
      showDashBoard();
  });
  $('.view-demo-button').click(function(){
    $(this).parent().addClass('slideDemoOverlayUp');
      showDashBoard();
  });

  </script>
  
<script>var _hmt = _hmt || [];(function() {  var hm = document.createElement("script");  hm.src = "https://hm.baidu.com/hm.js?93b3ac4c60583b62a03e7d0a340088d1";  var s = document.getElementsByTagName("script")[0];   s.parentNode.insertBefore(hm, s);})();</script>
</body>
</html>