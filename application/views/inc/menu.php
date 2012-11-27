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
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>EduRunner</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../csslib/style.css" />
<script type="text/javascript" src="../jslib/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../jslib/jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="../jslib/jquery.slidertron-1.1.js"></script>
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
			<h1><a href="#">EduRunner</a></h1>
		</div>
		<div id="slogan">
			<h2>RainBow Action</h2>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.php">首页</a></li>
			<li class="first">
				<span class="opener">关于我们<b></b></span>
				<ul>
					<li><a href="about.php">组织介绍</a></li>
					<li><a href="activity.php">活动介绍</a></li>
					<li><a href="member.php">核心成员</a></li>
					<li><a href="">顾问委员会</a></li>
					<li>
						<span>团队<b></b></span>
						<ul>
							<li><a href="#">2011团队</a></li>
							<li><a href="#">2012团队</a></li>
						</ul>
					</li>
					<li><a href="#">战略支持和合作伙伴</a></li>
					<li><a href="#">问题与回答</a></li>
					<li><a href="#">联系方式</a></li>
				</ul>
			</li>
			
			<li>
				<span class="opener">彩虹行动<b></b></span>
				<ul>
					<li><a href="#">活动设置</a></li>
					<li>
						<span>活动回顾<b></b></span>
						<ul>
							<li><a href="#">2011活动回顾</a></li>
							<li><a href="#">2012活动回顾</a></li>
						</ul>
					</li>
					<li><a href="#">2012彩虹学生</a></li>
				</ul>
			</li>
			<li><a href="#">新闻与资源</a></li>
			<li><a href="#">彩虹天地</a></li>
			<li class="last"><a href="#">支持我们</a></li>
		</ul>
		<br class="clearfix" />
  </div>

