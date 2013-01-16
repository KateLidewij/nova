<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php echo text_output($msg);?>

<?php echo form_open('main/join');?>
	<?php echo form_hidden('agree', 'yes');?>
	
	<?php if (isset($position)): ?>
		<?php echo form_hidden('position', $position);?>
	<?php endif; ?>
	
	<div class="controls">
		<button type="submit" name="button_agree" class="btn btn-primary"><?php echo ucwords(lang('actions_agree'));?></button>
	</div>
<?php echo form_close();?>