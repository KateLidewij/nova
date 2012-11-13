<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row">
	<div class="span12">
		<div class="well">
			<div class="inner">
				<h3>Server Requirements</h3>

				<ul>
					<li>PHP 5.1 or higher</li>
					<li>MySQL 4.1 or higher</li>
					<li>Apache (recommended, but any PHP-supported web server will work)</li>
					<li>Register globals should be turned off</li>
					<li>Memory limit of 8M or higher</li>
				</ul>

				<p>If you are new to PHP or website management, you cannot run Nova on your local machine without a web server installed.  You must have either a hosting provider with the above requirements or a local server (XAMPP, WAMP, MAMP, LAMP, etc.) to install and use Nova. If you are unsure whether your server will allow you to run Nova, you can run the <?php echo anchor('install/verify', 'verification tool');?> before beginning.</p><br>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="span6">
		<div class="well">
			<div class="inner">
				<h3>Clean Install Guide</h3>

				<p>If you want to do a fresh install of Nova, you should read the <a href="http://docs.anodyne-productions.com/index.php/nova2/start/install" target="_blank">install guide</a> before you begin. If you don't understand something in the install guide, you should ask any questions you have on the <a href="http://forums.anodyne-productions.com" target="_blank">Anodyne support forums</a> before you attempt to install Nova. If you've read the install guide and are ready to proceed, you'll need the following items:</p>

				<ul>
					<li>A webserver with at least 10MB of disk space</li>
					<li>A MySQL database</li>
					<li>The database connection information you received from your host when you signed up</li>
					<li>Basic information about the primary character you want to play</li>
				</ul>
			</div>

			<a href="<?php echo site_url('install/step/1');?>" class="btn btn-inverse btn-large btn-block">Start the Install</a>
		</div>
	</div>

	<div class="span6">
		<div class="well">
			<div class="inner">
				<h3>Upgrade Guide</h3>

				<p>If you want to upgrade from SMS 2 to Nova, you should read the <a href="http://docs.anodyne-productions.com/index.php/nova2/start/sms" target="_blank">upgrade guide</a> before you begin. If you don't understand something in the upgrade guide, you should ask any questions you have on the <a href="http://forums.anodyne-productions.com" target="_blank">Anodyne support forums</a> before you attempt to upgrade SMS to Nova. If you've read the upgrade guide and are ready to proceed, you'll need the following items:</p>

				<ul>
					<li>A webserver with at least 10MB of disk space</li>
					<li>A MySQL database</li>
					<li>An installation of SMS <?php echo SMS_UPGRADE_VERSION;?> in the same database you're installing Nova</li>
					<li>The database connection information</li>
				</ul>
			</div>

			<a href="<?php echo site_url('upgrade/index');?>" class="btn btn-inverse btn-large btn-block">Start the Upgrade</a>
		</div>
	</div>
</div>