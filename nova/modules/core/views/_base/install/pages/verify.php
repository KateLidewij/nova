<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row">
	<div class="span8 offset2">
		<div class="well">
			<div class="inner">
				<h3><?php echo $header;?></h3>

				<p>Below are the results of the server verification test. If any of the items have <span class="label label-important">failed</span>, Nova won't install properly (or at all). If there are any <span class="label label-warning">warnings</span> listed, you should talk to your host about getting those items updated, but you'll still be able to install and use Nova despite the warnings.</p>

				<hr>

				<?php echo $table;?>
			</div>

			<?php echo form_open('install/step/1');?>
				<button type="submit" name="install" id="install" class="btn btn-primary btn-large btn-block">Start the Install</button>
			<?php echo form_close();?>
		</div>
	</div>
</div>