<?php

$sec = 'main';
$css = 'main.css';

$path = explode('/', dirname(__FILE__));

// Windows servers user back slashes, so we have to capture for that
if (count($path) <= 1)
	$path = explode('\\', dirname(__FILE__));

$pcount = count($path);
$skin_loc = $pcount -1;
$current_skin = $path[$skin_loc];

// set the final style location
$style_loc = base_url().APPFOLDER.'/views/'.$current_skin.'/'.$sec.'/css/'. $css;

// set up the link tag parameters
$link = array(
	'href'	=> 	$style_loc,
	'rel'	=> 	'stylesheet',
	'type'	=> 	'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);

// load the panel helper
$this->load->helper('panel');

// set up the locations of the icons
$panel = array(
	'inbox'		=> array('src' => APPFOLDER.'/views/'.$current_skin.'/'.$sec.'/images/panel-mail.png'),
	'writing'	=> array('src' => APPFOLDER.'/views/'.$current_skin.'/'.$sec.'/images/panel-writing.png'),
	'dashboard'	=> array('src' => APPFOLDER.'/views/'.$current_skin.'/'.$sec.'/images/panel-dashboard.png'),
);

$button_login = array(
	'class' => 'btn',
	'value' => 'submit',
	'type' => 'submit',
	'name' => 'submit',
	'content' => ucwords(lang('actions_login'))
);

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>" />
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>" />
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>" />
		
		<?php echo $_redirect;?>
		
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<?php include_once($this->config->item('include_head_main'));?>
		<link rel="stylesheet" href="<?php echo $style_loc;?>">
		
		<script type="text/javascript" src="<?php echo base_url() . APPFOLDER;?>/views/<?php echo $current_skin;?>/jquery.blockUI.js"></script>
		
		<?php echo $javascript;?>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('body').click(function(event){
					if (! $(event.target).closest('div').hasClass('signin-panel'))
					{
						$.unblockUI();
					}
				});
				
				$('a#userpanel').unbind('click').click(function(){
					$.blockUI({
						message: $('#panel'),
						css: { 
							border: '0', 
							cursor: 'cursor',
							background: 'transparent',
							width: '800px',
							top: '10%',
							left: '50%',
							margin: '0 0 0 -400px'
						}
					});
					
					return false;
				});
			});
			
			// if the escape key is pressed, close the menu
			$(document).keyup(function(event){
				if (event.keyCode == 27) {
					$.unblockUI();
				}
			});
		</script>
	</head>
	<body>
		<noscript>
			<div class="system_warning"><?php echo lang_output('text_javascript_off', '');?></div>
		</noscript>

		<div id="wrap">
			<div class="navbar navbar-static-top">
				<div class="navbar-inner">
					<div class="container">
						<?php if ( ! Auth::is_logged_in()): ?>
							<ul class="nav pull-right">
								<li><a href="<?php echo site_url('login/index');?>"><?php echo ucwords(lang('actions_login'));?></a></li>
							</ul>
						<?php else: ?>
							<ul class="nav pull-right">
								<li><?php echo panel_inbox(true, true, false, '(x)', img($panel['inbox']));?></li>
								<li><?php echo panel_writing(true, true, false, '(x)', img($panel['writing']));?></li>
								<li><?php echo panel_dashboard(false, img($panel['dashboard']));?></li>
							</ul>
						<?php endif;?>

						<?php echo $nav_main;?>
					</div>
				</div>
			</div>
			
			<?php if (Auth::is_logged_in()): ?>
				<div id="panel" class="hidden">
					<div class="panel-body">
						<table class="table100">
							<tbody>
								<tr>
									<td class="panel_1 align_top"><?php echo $panel_1;?></td>
									<td class="panel_spacer"></td>
									<td class="panel_2 align_top"><?php echo $panel_2;?></td>
									<td class="panel_spacer"></td>
									<td class="panel_3 align_top"><?php echo $panel_3;?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			<?php endif;?>

			<div class="container">
				<div class="hero-unit">
					<h1>Join the Adventure</h1>
				</div>

				<div class="row">
					<div class="span9">
						<?php echo $flash_message;?>
						<?php echo $content;?>
						<?php echo $ajax;?>
					
						<div style="clear:both;"></div>
					</div>

					<div class="span3">
						<div class="well">
							<?php echo $nav_sub;?>
						</div>
					</div>
				</div>
			</div>

			<div id="push"></div>
		</div>

		<footer id="footer">
			<div class="container">
				Powered by <strong><?php echo APP_NAME;?></strong> from <a href="http://www.anodyne-productions.com" target="_blank">Anodyne Productions</a> | 
				<?php echo anchor('main/credits', 'Site Credits');?>
			</div>
		</footer>

		<script type="text/javascript">
			$(document).ready(function(){
				$('[class*="button-"]').addClass('btn');
				$('[class*="button-main"]').addClass('btn-primary');
			});
		</script>
	</body>
</html>