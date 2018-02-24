<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage ZpcThemes
 * @since ZpcThemes 1.0
 */

?>

	<!DOCTYPE html>
	<html>
	   <head>
	     <title>404 – сторінка не знайдена</title>
		 <meta charset="utf-8">
		 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		 <style type="text/css">
		  html, body {width:100%;height:100%;overflow:hidden;margin:0px;padding:0px;font-family:'Open Sans',sans-serif;font-size:16px}
			body {background:url('wp-content/themes/ZpcThemes/img/404.png') center no-repeat #fff}
			.content {width:100%;text-align:center;position:absolute;bottom:10%;left:0px;}
			.content a {display:inline-block;text-decoration:none}
			.content a:hover {opacity:0.7}
			.content a, .content a:hover {color:#000;}
			@media only screen and (max-width: 460px), screen and (max-height: 700px) {
			.content {position:static;}
			.content a {display:block;width:100%;height:100%;position:absolute;top:0px;left:0px;font-size:0px;opacity:0;}
			body {background-size:cover}
			}
			</style>
	    </head>
		    <body>
			   <div class="content">
				<a href="/">Перейти на головну сторінку</a>
			   </div>
			</body>
			</html>
