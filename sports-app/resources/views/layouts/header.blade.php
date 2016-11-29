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
                    <li><a @yield('mainPageActive') href="{{ url('/') }}">主页</a></li>
                    <li><a @yield('activityActive') href="{{ url('/activity') }}">活动</a></li>
                    <li><a @yield('exerciseActive') href="{{ url('/exercise') }}">健身与动态</a></li>
                    <li><a @yield('friendActive') href="{{ url('/friend') }}">好友</a></li>
                    <li><a @yield('personActive') href="{{ url('/person') }}">个人</a></li>
                    <li><a @yield('accountActive') href="{{ url('/account') }}">账户</a></li>
                    <li><a id="logout" href="{{ url('/logout') }}">Logout</a></li>
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
@yield('content')
<!--footer start here-->
<div class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-navg">
                <ul>
                    <li><a @yield('mainPageActive') href="{{ url('/') }}">主页</a></li>
                    <li><a @yield('activityActive') href="{{ url('/activity') }}">活动</a></li>
                    <li><a @yield('exerciseActive') href="{{ url('/exercise') }}">健身与动态</a></li>
                    <li><a @yield('friendActive') href="{{ url('/friend') }}">好友</a></li>
                    <li><a @yield('personActive') href="{{ url('/person') }}">个人</a></li>
                    <li><a @yield('accountActive') href="{{ url('/account') }}">账户</a></li>
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