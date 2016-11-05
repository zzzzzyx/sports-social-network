<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->

<!DOCTYPE html>
<html>
<head>
    <title>My Charity A Charity  category Flat bootstrap Responsive  Website Template| Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--web-fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!--js-->
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <meta name="keywords" content="My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="mothergrid">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.html"> <img src="images/logo.png" alt=""/> </a>
            </div>
            <span class="menu"> <img src="images/icon.png" alt=""/></span>
            <div class="clear"> </div>
            <div class="navg">
                <ul class="res">
                    <li><a class="active" href="index.html">主页</a></li>
                    <li><a href="events.html">活动</a></li>
                    <li><a href="blog.html">健身与动态</a></li>
                    <li><a href="projects.html">好友</a></li>
                    <li><a href="myself.html">个人</a></li>
                    <li><a href="gallery.html">账户</a></li>
                    <li><a href="contact.html">意见反馈</a></li>
                </ul>
                <script>
                    $( "span.menu").click(function() {
                        $(  "ul.res" ).slideToggle("slow", function() {
                            // Animation complete.
                        });
                    });
                </script>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--heder end here-->
<!--banner start here-->
<div class="banner">
    <div class="container">
        <div class="banner-main">
            <h1>{{$exerciseHour}}</h1>
            <p>总健身小时数</p>
            <div class="bwn">
                <a href="recordNew.html"> 立即健身 </a>
            </div>
        </div>
    </div>
</div>
<!--banner end here-->
<!--below banner start here-->
<div class="section1">
    <div class="col-md-4 below-coloum">
        <h1>{{$continuousExer}}</h1>
        <p>连续锻炼天数</p>
    </div>
    <div class="col-md-3 below-grace">
        <h1>{{$overallExer}}</h1>
        <p>总锻炼天数</p>
    </div>
    <div class="col-md-5 below-side">
        <h1>{{$kilometers}}</h1>
        <p>锻炼量相当于已跑的公里数</p>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="section2">
    <div class="col-md-7 below-left">
        <div class="below-top">
            <h2>全站搜索</h2>
            <form>

                <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                <!--<input type="submit" value="搜索">-->
                <a href="search.html"><button type="button" class="btn">搜索</button></a>
            </form>
            <p>快速搜索活动，好友，健身数据，功能设置等内容</p>
        </div>
        <div class="below-bottom">
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-5 below-right">
        <div class="bg">
            <h1>{{$grade}}</h1>
            <p>等阶</p>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--below banner end here-->
<!--news end here-->
<div class="news">
    <div class="container">
        <div class="news-main">
            <div class="news-top">
                <h3>最近健身</h3>
            </div>
            <div class="news-bottom">
                <div class="col-md-4 new-left">
                    <div class="notch-b">
                        <small class="brown">22</small>
                    </div>
                    <div class="notch-b-h"> </div>
                    <h3>October</h3>
                    <h4>Rigi山登山</h4>
                    <p>从琉森坐包含在通票内的游船到Rigi山脚的小镇，然后坐免费的小火车到Rigi山顶。然后观光之后徒步走了下来。空气很清新！</p>
                    <div class="button-b">
                        <a href="#">MORE</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 new-left">
                    <div class="notch">
                        <small>08</small>
                    </div>
                    <div class="notch-h"> </div>
                    <h3>October</h3>
                    <h4>足协杯软院vs地海</h4>
                    <p>12:30-14:00的60分钟足球赛，运动量大，今晚就不跑步了！另外2:0赢了，很开心。各位共勉！</p>
                    <div class="button">
                        <a href="#">MORE</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 new-left">
                    <div class="notch">
                        <small>25</small>
                    </div>
                    <div class="notch-h"> </div>
                    <h3>September</h3>
                    <h4>鼓楼操场第一跑！</h4>
                    <p>自从搬到鼓楼一个月来还没跑步。因此愉快地决定感受一下鼓楼老大爷运动的氛围！首战5公里热身一下吧！</p>
                    <div class="button">
                        <a href="#">MORE</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--/news end here-->
<!--footer start here-->
<div class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-navg">
                <ul>
                    <li><a class="active" href="index.html">主页</a></li>
                    <li><a href="events.html">活动</a></li>
                    <li><a href="blog.html">健身与动态</a></li>
                    <li><a href="projects.html">好友</a></li>
                    <li><a href="myself.html">个人</a></li>
                    <li><a href="gallery.html">账户</a></li>
                    <li><a href="contact.html">意见反馈</a></li>
                </ul>
            </div>
            <div class="footer-top">
                <div class="col-md-4 footer-left">
                    <h3>在社交网站上关注拜运动团队</h3>
                    <ul>
                        <li><a href="#"><span class="a"> </span></a></li>
                        <li><a href="#"><span class="b"> </span></a></li>
                        <li><a href="#"><span class="c"> </span></a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-middle">
                    <h3>邮件订阅</h3>
                    <input type="text" value="输入邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '输入邮箱';}"/>
                    <input type="submit" value="订阅">
                </div>
                <div class="col-md-4 footer-right">
                    <h3>联系我们</h3>
                    <p>地址 : 南京大学鼓楼校区</p>
                    <p>电邮 : zzzzzyx@outlook.com</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="footer-bottom">
                <p>2014 &copy Template by <a href="http://w3layouts.com/"> W3layouts </a> </p>
            </div>
            <div class="clearfix"> </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear'
                     };
                     */

                    $().UItoTop({ easingType: 'easeOutQuart' });

                });
            </script>
            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
    </div>
</div>
<!--/footer end here-->
</body>
</html>