<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Serif" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo get_bloginfo( 'template_directory' );?>/script.js"></script>
</head>

<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<a href="https://anotheruninformedopinion.com/">
					<img class="img-responsive" alt="Another Uninformed Opinion" src="<?php echo get_bloginfo( 'template_directory' );?>/AUO Title.png">
				</a>
			</div>
			<div class="col-sm-6"></div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="blog-masthead">
				
				<nav class="blog-nav">
					<li>
						<a href="/">Home</a>
					</li>
					<?php wp_list_pages( '&title_li=' ); ?>
					<li style="float: right;">
						<?php get_search_form(); ?>
					</li>
				</nav>
			</div>
		</div>
	</div>
	
	<div class="container">
		<br>
		<!-- <div class="blog-header">
			<h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div> -->