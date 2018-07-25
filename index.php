<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title></title>
<style type="text/css">
body {
	background:url(images/skin/default/bg/body.jpg) #f8ff83;
	font-family:trebuchet ms;
	font-size:13px;
}
#container {
	width:100%;
	position:absolute;
	top:0px;
	left:0px;
}
#top {
	background:#006d31;
	width:100%;
	height:90px;
	box-shadow:0px 0px 10px black;
	color:white;
	z-index:999px;
}
#top #wrapper {
	width:950px;
	position:relative;
	height:100%;
}
#top #wrapper #logo {
	background:url(images/skin/default/logo/top.png) no-repeat center center;
	position:absolute;
	left:10px;
	width:365px;
	height:100%;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
}
#top #wrapper #logo:hover {
	left:20px;
}
#top #wrapper #search {
	position:absolute;
	right:10px;
	top:7px;
}
#top #wrapper #search input {
	padding:8px;
	font-size:13px;
	width:110px;
	font-family:trebuchet ms;
	border-radius:5px;
	border:1px solid #005d2c;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	-o-transition: all .5s ease-in-out;
	-ms-transition: all .5s ease-in-out;
}
#top #wrapper #search input:hover {
	width:200px;
}
#top #wrapper #account {
	position:absolute;
	right:10px;
	bottom:4px;
	overflow:hidden;
}
#top #wrapper #account a {
	text-decoration:none;
	font-weight:bold;
	text-shadow:0px 1px 2px black;
}
#top #wrapper #account a #account_op {
	padding:10px;
	color:white;
	float:right;
	border-radius:5px;
	margin-left:10px;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	-o-transition: all .5s ease-in-out;
	-ms-transition: all .5s ease-in-out;
}
#top #wrapper #account a #account_op:hover {
	background:#005d2c;
	text-shadow:0px 0px 2px black;
}
#container #header {
	width:950px;
	height:350px;
	position:relative;
}
#container #header #latest_news {
	background:#006d31;
	height:100%;
	width:280px;
	position:absolute;
	right:0px;
	border-radius:0px 0px 10px 10px;
	box-shadow:0px 5px 10px -2px #3f3f3f;
	text-align:left;
	padding:10px;
	padding-left:15px;
}
h2, p {
	color:white;
	text-shadow:0px 2px 3px black;
}
#container #header #latest_news hr {
	border:0px solid transparent;
	border-top:2px dashed white;
	box-shadow:0px 1px 5px black;
}
#container #header #latest_news #news {
	height:55%;
	overflow:hidden;
	margin-bottom:15px;
}
#container #header #latest_news #news p span {
	font-size:18px;
	font-weight:bold;
	color:#f8ff83;
}
#container #header #latest_news .info {
	color:#f8ff83;
	font-style:italic;
}
#container #header #flash {
	background:white;
	border-radius:10px;
	width:620px;
	height:400px;
	position:absolute;
	top:25px;
	box-shadow:0px 0px 10px black;
}
img {
	vertical-align:text-top;
	margin-right:5px;
}
a {
	color:#f8ff83;
	text-decoration:none;
}
#container #content {
	background:#007236;
	box-shadow:0px 0px 10px black;
	margin-top:150px;
	position:relative;
}
#container #content #base {
	width:950px;
	position:relative;
}
#container #content #base #dlsudgs {
	background:url(images/skin/default/bg/dlsudgs.png);
	width:320px;
	height:124px;
	position:absolute;
	right:0px;
	top:-124px;
}
#container #content #base #wrap_col {
	text-align:left;
	padding-top:20px;
	overflow:hidden;
}
#container #content #base #wrap_col #left_sb {
	float:left;
	width:230px;
	border-right:1px dashed white;
}
#container #content #base #wrap_col #center {
	float:left;
	width:479px;
	border-left:1px dashed white;
	border-right:1px dashed white;
}
#container #content #base #wrap_col #right_sb {
	float:left;
	width:230px;
	border-left:1px dashed white;
}
#container #content #base #wrap_col .wrap {
	padding:15px;
}
#container #content #base #navigation {
	position:absolute;
	top:-48px;
	width:100%;
}
#container #content #base #navigation div.main a.main {
	color:white;
}
#container #content #base #navigation div.main {
	float:left;
	margin-right:10px;
	color:white;
}
#container #content #base #navigation div.main:hover div.sub {
	display:block;
}
#container #content #base #navigation div.main a.main .main_txt {
	padding:15px;
	background:#007236;
	border-radius:0px 10px 0px 0px;
	text-shadow:0px 2px 3px black;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
}
#container #content #base #navigation div.main:hover a.main .main_txt{
	background:#004c24;
	text-shadow:0px 2px 3px green;
	color:#f8ff83;
}
#container #content #base #navigation div.main div.sub {
	display:none;
	position:absolute;
	text-align:left;
	width:200px;
}
#container #content #base #navigation div.main div.sub a.sub {
	color:white;
	background:#004c24;
	float:left;
	width:100%;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
}
#container #content #base #navigation div.main div.sub a.sub:last-child {
	border-radius:0px 0px 40px 10px;
}
#container #content #base #navigation div.main div.sub a.sub:hover {
	color:#f8ff83;
	background:#00371a;
}
#container #content #base #navigation div.main div.sub a.sub .sub_txt {
	padding:15px;
	float:left;
}
</style>
</head>
<body><center>
<div id="container">
	<div id="top">
		<div id="wrapper">
			<a href="#"><div id="logo">
			</div></a>
			<div id="search">
				<input type="text" name="q" placeholder="Search Here">
			</div>
			<div id="account">
			<a href="#"><div id="account_op">Log in</div></a>
			<a href="#"><div id="account_op">Register</div></a>
			</div>
		</div>
	</div>
	<div id="header">
		<div id="flash">
		
		</div>
		<div id="latest_news">
			<h2><img src="images/skin/default/bg/lss.png">Latest News</h2><hr>
			<div id="news">
			<p><span>title | </span>content</p>
			</div>
			<span class="info"><p align="right"><a href="posts.php?read='.$id.'">Read more...</a></p>Posted by: '.$posted_by.'<br>'.$date_added.'</span>
		</div>
	</div>
	<div id="content">
		<div id="base">
			<div id="navigation">
				<div class="main">
					<a href="#" class="main"><div class="main_txt">main 1</div></a>
					<div class="sub">
						<a href="#" class="sub"><div class="sub_txt">sub 1</div></a>
						<a href="#" class="sub"><div class="sub_txt">sub 1</div></a>
					</div>
				</div>
				<div class="main">
					<a href="#" class="main"><div class="main_txt">main 2</div></a>
					<div class="sub">
						<a href="#" class="sub"><div class="sub_txt">sub 2</div></a>
						<a href="#" class="sub"><div class="sub_txt">sub 2</div></a>
					</div>
				</div>
				<div class="main">
					<a href="#" class="main"><div class="main_txt">main 3</div></a>
					<div class="sub">
						<a href="#" class="sub"><div class="sub_txt">sub 3</div></a>
						<a href="#" class="sub"><div class="sub_txt">sub 3</div></a>
					</div>
				</div>
				<div class="main">
					<a href="#" class="main"><div class="main_txt">main 4</div></a>
					<div class="sub">
						<a href="#" class="sub"><div class="sub_txt">sub 4</div></a>
						<a href="#" class="sub"><div class="sub_txt">sub 4</div></a>
					</div>
				</div>
				<div class="main">
					<a href="#" class="main"><div class="main_txt">main 5</div></a>
					<div class="sub">
						<a href="#" class="sub"><div class="sub_txt">sub 5</div></a>
						<a href="#" class="sub"><div class="sub_txt">sub 5</div></a>
					</div>
				</div>
			</div>
			<div id="dlsudgs">
				
			</div>
			<div id="wrap_col">
				<div id="left_sb">
					<div class="wrap">
					<h2><img src="images/skin/default/bg/lss.png">Title</h2><p>content</p>
					</div>
				</div>
				<div id="center">
					<div class="wrap">
					<h2><img src="images/skin/default/bg/lss.png">Title</h2><p>content</p>
					</div>
				</div>
				<div id="right_sb">
					<div class="wrap">
					<h2><img src="images/skin/default/bg/lss.png">Title</h2><p>content</p>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="base_footer">
			<img src="images/skin/default/logo/footer.png" class="logo" align="left"><br>De La Salle University Dasmari&ntilde;as (DLSU-D)<br>Copyright 2012.<br>Last update: '.$last_update.'.
			</div>
			<div id="footer_img">
			
			</div>
		</div>
	</div>
</div>
<style type="text/css">
#footer {
	width:950px;
	height:150px;
	bottom:0px;
	position:relative;
}
#footer_img {
	background:url(images/skin/default/bg/footer.png) no-repeat;
	width:381px;
	height:203px;
	position:absolute;
	bottom:-80px;
}
#footer #base_footer {
	color:white;
	font-size:12px;
	font-style:italic;
	text-align:left;
	position:absolute;
	top:40px;
	left:400px;
	width:500px;
}
#footer #base_footer .logo {
	display:block;
	margin-right:20px;
}
</style>
</body>
</html>