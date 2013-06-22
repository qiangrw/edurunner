<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624

Edit by Runwei Qiang
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url();?>" />
<meta name="description" content="Edurunner" />
<meta name="keywords" content="Edurunner" />
<meta name="author" content="redesigned by Runwei Qiang" />
<title><?php echo $title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/edurunnerlogo.ico" />
<link rel="stylesheet" type="text/css" href="csslib/style.css?rand=12" />
<script type="text/javascript" src="jslib/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jslib/jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jslib/jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
function detectBrowser()
{
    var browser=navigator.appName;
    var b_version=navigator.appVersion;
    var version=parseFloat(b_version);

    if (browser=="Microsoft Internet Explorer" && version<=4)
    {
        alert("为了更好的浏览本站，请选择下载IE(>=9),谷歌或者火狐浏览器.")
    }
}

$(function() {

    $('#menu > ul').dropotron({
        mode: 'fade',
            globalOffsetY: 11,
            offsetY: -15
    });
    $('#slider').slidertron({
        viewerSelector: '.viewer',
            indicatorSelector: '.indicator span',
            reelSelector: '.reel',
            slidesSelector: '.slide',
            speed: 'slow',
            advanceDelay: 4000
    });
    
    detectBrowser();
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40142107-1', 'edurunner.org');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="wrapper">
  <div id="header"> 
    <div id="logo"> 
            <h1> <a href="#" style="font-size:23px!important;">EduRunner</a> </h1>
            <h1> <a href="#" style="font-size:33px!important;">教育先行</a> </h1>
        </div>
    </div>
    <div id="menu">
    <ul> <!-- MENU LI -->
        <li><a href="<?php echo site_url('welcome'); ?>">首页</a></li> 
        <!-- FIRST -->
        <li class="first">
            <span class="opener">关于我们<b></b></span>
            <ul><li><a href="<?php echo site_url('about'); ?>">组织介绍</a></li>
                <li><a href="<?php echo site_url('about/core'); ?>">组织结构</a></li>
                <li><a href="<?php echo site_url('about/advisory_board'); ?>">顾问委员会</a></li>
                <li><a href="<?php echo site_url('about/contact'); ?>">联系我们</a></li>
            </ul>              
        </li> 
        <!-- SECOND -->
        <li><span class="opener">彩虹行动<b></b></span>
            <ul><li><a href="<?php echo site_url('activity/intro'); ?>">活动介绍</a></li>
                <li><a href="<?php echo site_url('activity/course'); ?>">课程理念</a></li>
                <li><span>导师及志愿者团队<b></b></span>
                    <ul>
                    <li><a href="<?php echo site_url('about/member2011'); ?>">2011年团队</a></li>
                    <li><a href="<?php echo site_url('about/member2012'); ?>">2012年团队</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('activity/retro'); ?>">往期活动回顾</a></li>
            </ul>
        </li>

        <!-- THIRD -->
        <li><span class="opener">新闻与资源<b></b></span>
            <ul>
                <li><a href="<?php echo site_url('resource/news'); ?>">彩虹行动相关新闻</a></li>
                <li><a href="<?php echo site_url('resource'); ?>">彩虹行动宣传材料</a></li>
                <li><a href="<?php echo site_url('resource/posts'); ?>">志愿者感言</a></li>
            </ul>
        </li>
                
        <li><span class="opener">支持我们<b></b></span>
            <ul><li><a href="<?php echo site_url('support/volunteer'); ?>">志愿者报名</a></li>
                <li><a href="<?php echo site_url('support/friend'); ?>">合作机构</a></li>
                <li><a href="<?php echo site_url('support/school'); ?>">合作机构报名</a></li>
                <li><a href="<?php echo site_url('support/donate'); ?>">捐赠和资助</a></li>
                <li><a href="<?php echo site_url('support/helplist'); ?>">爱心榜</a></li>
            </ul>
        </li>
        
        <!-- LAST -->
        <li class="last"><a href="http://www.edurunner.org/blog">博雅博思</a></li>
    </ul> <!-- MENU UL END -->
    <br class="clearfix" />
  </div>

