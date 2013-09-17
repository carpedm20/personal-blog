<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
	<meta name="description" content="<?php echo config('blog.description')?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />

	<link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

  <!-- Syntax -->
  <link rel="stylesheet" href="<?php echo site_url()?>highlighter/prettify.css" />
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>

	<aside>

    <a href="<?php echo site_url() ?>"><img src="<?php echo config('site.url')?>assets/img/middle.png" style="margin-bottom:15px; opacity:0.8; max-width:220px" width="90%"></a>
		<!--<h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>-->

		<p class="description"><?php echo config('blog.description')?></p>

		<ul>
			<li><a href="<?php echo site_url() ?>">Home</a></li>
			<li><a href="<?php echo site_url() ?>about/">About</a></li>
			<li><a href="<?php echo site_url() ?>tools/">Tools</a></li>
			<li><a href="<?php echo site_url() ?>etc/">ETC</a></li>
		</ul>

		<p class="author"><?php echo config('blog.authorbio') ?></p>

	</aside>

	<section id="content">

		<?php echo content()?>

	</section>

</body>
</html>
