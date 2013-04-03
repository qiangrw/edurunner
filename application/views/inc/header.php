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
<base href="<?php echo base_url();?>">
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
});
</script>
</head>
<body>
<div id="wrapper">
  <div id="header"> 
    <div id="logo"> 
            <h1> <a href="#" style="font-size:20px!important;">EduRunner</a> </h1>
            <h1> <a href="#" style="font-size:30px!important;">教育先行</a> </h1>
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
                <li><a href="<?php echo site_url('about/advisory_board'); ?>">顾问团队</a></li>
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
            <ul><li><a href="<?php echo site_url('resource/news'); ?>">彩虹行动相关新闻</a></li>
            </ul>
        </li>

        <!-- LAST -->
        <li class="last"><span class="opener">支持我们<b></b></span>
            <ul><li><a href="<?php echo site_url('support/volunteer'); ?>">志愿者报名</a></li>
                <li><a href="<?php echo site_url('support/school'); ?>">学校报名</a></li>
                <li><a href="<?php echo site_url('support/donate'); ?>">捐赠和资助</a></li>
            </ul>
        </li>
    </ul> <!-- MENU UL END -->
    <br class="clearfix" />
  </div>

