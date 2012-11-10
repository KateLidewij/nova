<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if ( ! $installed): ?>
	<div class="row">
		<div class="span6">
			<div class="well">
				<h3>Fresh Install</h3>
				<p>If you don't have Nova installed on your server yet, you canget started with a clean copy of the system. Make sure you don't have an existing Nova installation. If you want to re-install Nova fresh, you'll need to first uninstall the system then do a fresh install again.</p>
				<a href="<?php echo site_url('install/main');?>" class="btn btn-large btn-block btn-primary">Start the Install</a>
			</div>
		</div>

		<div class="span6">
			<div class="well">
				<h3>Upgrade from SMS 2</h3>
				<p>Nova includes an easy-to-use upgrade process that will take the information from a site running SMS 2.6.9 or higher and upgrade it to be usable by Nova. In order to do the upgrade, your SMS database has to be in the same database as where you're installing Nova.</p>
				<a href="<?php echo site_url('upgrade/index');?>" class="btn btn-large btn-block btn-primary">Start the Upgrade</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<a href="<?php echo site_url('install/readme');?>" class="btn btn-large btn-block btn-inverse">View the Readme</a>
		</div>

		<div class="span4">
			<a href="http://anodyne-productions.com/nova" target="_blank" class="btn btn-large btn-block btn-inverse">Go to the Nova Site</a>
		</div>

		<div class="span4">
			<a href="http://forums.anodyne-productions.com" target="_blank" class="btn btn-large btn-block btn-inverse">Go to the Anodyne Forums</a>
		</div>
	</div>
<?php endif;?>

<?php if ($installed): ?>
	<div class="row">
		<div class="span6">
			<div class="well">
				<h3>Update Nova</h3>
				<p>We're committed to continually making Nova better, and we accomplish that through regular updates to Nova. If you need to access the Update Center to check for and apply Nova software updates, use this option.</p>
				<a href="<?php echo site_url('update/index');?>" class="btn btn-large btn-block btn-primary">Start the Update</a>
			</div>
		</div>

		<div class="span6">
			<div class="well">
				<h3>Uninstall Nova</h3>
				<p>Sometimes it may be necessary to completely uninstall Nova from your server. Remember that this action is permanent and can't be undone, so make sure you have a backup of your database before you uninstall.</p>
				<a href="<?php echo site_url('install/remove');?>" class="btn btn-large btn-block btn-danger">Start the Uninstall</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<a href="<?php echo site_url('install/genre');?>" class="btn btn-large btn-block btn-inverse">Install a New Genre</a>
		</div>

		<div class="span4">
			<a href="<?php echo site_url('install/changedb');?>" class="btn btn-large btn-block btn-inverse">Add New Data Tables/Fields</a>
		</div>

		<div class="span4">
			<a href="<?php echo site_url('main/index');?>" class="btn btn-large btn-block btn-inverse">Go Back to the Site</a>
		</div>
	</div>
<?php endif;?>