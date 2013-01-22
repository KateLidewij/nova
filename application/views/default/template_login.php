<?php

$section = 'login';

$path = explode('/', dirname(__FILE__));

// Windows servers user back slashes, so we have to capture for that
if (count($path) <= 1)
	$path = explode('\\', dirname(__FILE__));

$pcount = count($path);
$skinLoc = $pcount -1;
$currentSkin = $path[$skinLoc];

// set up the link tag parameters
$link = array(
	'href'		=> APPFOLDER."/views/$currentSkin/$section/css/main.css",
	'rel'		=> 'stylesheet',
	'type'		=> 'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>">
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>">
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>">
		
		<?php echo $_redirect;?>

		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php include_once MODFOLDER.'/assets/global/login_head.php';?>
		
		<?php echo link_tag($link);?>
	</head>
	<body>
		<div class="signin">
			<header>
				<a class="brand"><?php echo $this->options['sim_name'];?></a>
			</header>

			<nav>
				<ul>
					<li><a href="<?php echo site_url('login/index');?>"<?php if ($this->uri->rsegment(2) != 'reset_password') { echo ' class="active"'; }?>><span><?php echo ucwords(lang('actions_login') .' '. lang('time_now'));?></span></a></li>
					<li><a href="<?php echo site_url('login/reset_password');?>"<?php if ($this->uri->rsegment(2) == 'reset_password') { echo ' class="active"'; }?>><span><?php echo ucwords(lang('actions_reset') .' '. lang('labels_password'));?></span></a></li>
					<li><a href="<?php echo site_url('main/index');?>"><span><?php echo ucfirst(lang('actions_back') .' '. lang('labels_to') .' '. lang('labels_site'));?></span></a></li>
				</ul>
			</nav>
			
			<section>
				<?php echo $flash_message;?>
				<?php echo $content;?>
			</section>
			
			<footer>
				Powered by <?php echo APP_NAME;?> from <a href="http://www.anodyne-productions.com" target="_blank">Anodyne Productions</a>
			</footer>
		</div>

		<?php include_once MODFOLDER.'/assets/global/login_foot.php';?>
	</body>
</html>