<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SweetCourse
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130919

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="http://webprojects.eecs.qmul.ac.uk/dc306/blog/">Danielle's Fitness Blog</a></h1>
			<span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></span> </div>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Welcome to my blog!</h2>
			<span class="byline">Fitness and Nutrition Inspiration</span> </div>
		<div class="content">
			<p>My fitness blog is a place where you can find ideas for workouts and meals. The key to maintaining a healthy body is a combination of <strong>resistance training</strong>, <strong>high intensity interval training</strong> (HIIT), and <strong>healthy eating</strong>. I will post about my journey to keeping fit and my struggles along the way! Exercising on a consistent basis and eating clean foods is everyone's worst nightmare. I will show you how I overcame this obstacle!</p>
		</div>
	</div>
</div>
<div id="wrapper3">
	<div id="wrapper-blog" class="container">
		<div id="post">
			<?php

			//connect to database
				 $host   =   "dbprojects.eecs.qmul.ac.uk"  ;
				 $user   =   "dc306"  ;
				 $pass   =   "gwaVMf3z7Abff"  ;
				 $db   =   "dc306"  ;

				 $link = mysql_connect ( $host , $user , $pass );
				 @mysql_select_db($db) or die( "Unable to select database");

				 $query="SELECT * FROM entries";
				 $result=mysql_query($query);
				 $num=mysql_numrows($result);



				 //display entries
				 $query="SELECT * FROM entries";
				 $result=mysql_query($query);
				 $num=mysql_numrows($result);

				 if($num==0){
					 header("Location: http://webprojects.eecs.qmul.ac.uk/dc306/blog/login.html"); /* Redirect browser */
					 exit();
				 }

				 else
				 { $i = $num-1;
				 while ($i >= 0) {
				 $title=mysql_result($result,$i,"title");
				 $body=mysql_result($result,$i,"body");
				 $date=mysql_result($result,$i,"date");

				 echo "<div class='post'> <span class='date'>$date</span> <img src='images/img01.jpg' class='image image-full' />
		 						<h2>$title</h2>
		 						<p>$body</p>
		 					</div>";
				 $i--;
				 }
				 }

				 mysql_close ( $link );

		 ?>

		</div>
		<div id="list">
			<div id="lbox1">
				<ul class="style2">
					<li class="first">
						<h2>Lost?</h2>
						<p><a href="http://webprojects.eecs.qmul.ac.uk/dc306/blog/">Return to Home</a></p>
					</li>
					<li>
						<h2>Want to share ideas?</h2>
						<p><a href="http://webprojects.eecs.qmul.ac.uk/dc306/blog/login.html">Add Entry</a></p>
					</li>
				</ul>
			</div>
			<div id="lbox2">
				<h2>Useful Websites</h2>
				<ul class="style2">
					<li><a href="https://www.bodybuilding.com/">Bodybuilding</a></li>
					<li><a href="https://www.skinnytaste.com/recipes/">Skinny Taste</a></li>
					<li><a href="https://www.myprotein.com/">Myprotein</a></li>
					<li><a href="https://uk.gymshark.com/">Gymshark</a></li>
					<li><a href="https://www.pinterest.co.uk/">Pinterest</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="copyright">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
