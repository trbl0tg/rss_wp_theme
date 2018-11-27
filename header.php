<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php wp_head(); ?>
</head>
<body>


<!-- header -->

<div class="header" id="myHeader">

<div class="row justify-content-center">
<div class="col-sm col-md col-lg-6 mt-5">
<div class="intro">
<div class="logo mx-auto my-3">
<a href="<?php echo site_url(); ?>">
	<img class="mr-3"  style="width: 100%;" src="<?php echo get_stylesheet_directory_uri().'/img/logov2.png'; ?>"/> 
</a>
</div>
<div class="text">
<a class="nav-link" href="<?php echo site_url(); ?>">
<p class="text-center" style="font-size: 25px">Рада студентського самоврядування</p>
<p class="text-center" style="opacity: .7;position: relative; top: -14px;">Національного транспортного університету</p>
</a>
</div>
</div>
</div>
</div>


</div>


<nav class="navbar sticky-top navbar-expand-lg"  style="padding-top: 0; z-index: 300; -webkit-box-shadow: 0px 11px 25px 0px rgba(0,0,0,0.14);
-moz-box-shadow: 0px 11px 25px 0px rgba(0,0,0,0.14);
box-shadow: 0px 11px 25px 0px rgba(0,0,0,0.14);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="width: 100%; background-color: #ff6262; color: #fff; margin-top: 1%;">
    <span style="text-align: center; width: 100%;">Меню</span>
  </button>

<style>
	button:focus {outline:0;}
</style>

  <div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mx-auto">
	<li <?php if (is_home()) { echo ' class="nav-active-page nav-item px-3"'; } ?> class="nav-item px-3">
		<a class="nav-link" href="<?php echo site_url(); ?>">Головна</a>
	</li>
	<li <?php if (is_page('team')) { echo ' class="nav-active-page nav-item px-3"'; } ?> class="nav-item px-3"  >
		<a class="nav-link" href="<?php echo get_site_url(); ?>/team/">Команда</a>
	</li>
	<li <?php if (is_page('news')) { echo ' class="nav-active-page nav-item px-3"'; } ?> class="nav-item px-3">
		<a class="nav-link" href="<?php echo get_site_url(); ?>/news/">Новини</a>
	</li>
	<li <?php if ((is_category('states'))||(is_category('estimates'))||(is_category('protocols'))) { echo ' class="nav-active-page nav-item"'; } ?> class="nav-item">
		<div class="dropdown show">
		  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Документи
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="<?php echo get_site_url(); ?>/category/states/">Положення</a>
		    <a class="dropdown-item" href="<?php echo get_site_url(); ?>/category/estimates/">Кошториси</a>
		    <a class="dropdown-item" href="<?php echo get_site_url(); ?>/category/protocols/">Протоколи засідання РСС</a>
		  </div>
		</div>
	</li>

	<li <?php if ((is_category('work-plan'))||(is_category('appeal'))||(is_category('be-nearby'))) { echo ' class="nav-active-page nav-item"'; } ?> class="nav-item">
		<div class="dropdown show">
		  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Діяльність
		  </a>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="<?php echo get_site_url(); ?>/category/work-plan/">Плани роботи</a>
		    <a class="dropdown-item" href="<?php echo get_site_url(); ?>/category/appeal/">Звернення</a>
		    <a class="dropdown-item" href="<?php echo get_site_url(); ?>/category/be-nearby/">Благодійний проект "Бути поруч"</a>
		  </div>
		</div>
	</li>

	<li <?php if (is_page('contactus')) { echo ' class="nav-active-page nav-item px-3"'; } ?> class="nav-item px-3">
		<a class="nav-link" href="<?php echo get_site_url(); ?>/contactus/">Контактна інформація</a>
	</li>
</ul>
</div>
</nav>

