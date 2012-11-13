<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Layout File (Install)
 *
 * @package		Install
 * @author		Anodyne Productions
 */
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>">
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>">
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>">
		
		<?php if (isset($_redirect)): echo $_redirect; endif;?>

		<link rel="stylesheet" href="<?php echo base_url().MODFOLDER;?>/core/views/_base/install/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url().MODFOLDER;?>/core/views/_base/install/css/skin.css">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1>Nova 2 Installation Center</h1>
			</div>

			<h2><?php echo $label;?></h2>
			
			<div id="loading" class="hide">
				<div><img src="<?php echo base_url().MODFOLDER;?>/core/views/_base/install/images/loading-circle-large.gif" alt=""></div>
				<strong>Processing...</strong>
			</div>
			
			<div id="loaded">
				<?php if ($this->uri->segment(2) == 'step' and $this->uri->segment(3) > 0): ?>
					<div class="row">
						<div class="span11">
							<div class="progress progress-striped active">
								<div class="bar" style="width:60%;"></div>
							</div>
						</div>
						<div class="span1 progress-amount"><span id="percent"></span>%</div>
					</div>
				<?php endif;?>
			
				<?php echo $flash_message;?>
				<?php echo $content;?>
			</div>
			
			<?php if ($controls !== false): ?>	
				<div class="lower">
					<div class="control"><?php echo $controls;?></div>
				</div>
			<?php endif;?>
		</div>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url().MODFOLDER.'/assets/js/bootstrap.min.js';?>"></script>
		<?php echo $javascript;?>
	</body>
</html>