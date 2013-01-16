<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php if ($this->options['system_email'] == 'on'): ?>
	<?php echo text_output($message);?>
	
	<?php echo form_open('main/contact');?>
		<div class="control-group<?php if ( ! $validate){ echo ' error';}?>">
			<label class="control-label"><?php echo $label['name'];?></label>
			<div class="controls">
				<input type="text" name="name" id="name" class="span4" value="<?php echo set_value('name');?>">
				<?php echo form_error('name', '<div class="help-block">', '</div>'); ?>
			</div>
		</div>

		<div class="control-group<?php if ( ! $validate){ echo ' error';}?>">
			<label class="control-label"><?php echo $label['email'];?></label>
			<div class="controls">
				<input type="email" name="email" id="email" class="span4" value="<?php echo set_value('email');?>">
				<?php echo form_error('email', '<div class="help-block">', '</div>'); ?>
			</div>
		</div>

		<div class="control-group<?php if ( ! $validate){ echo ' error';}?>">
			<label class="control-label"><?php echo $label['subject'];?></label>
			<div class="controls">
				<input type="text" name="subject" id="subject" class="span4" value="<?php echo set_value('subject');?>">
				<?php echo form_error('subject', '<div class="help-block">', '</div>'); ?>
			</div>
		</div>

		<div class="control-group<?php if ( ! $validate){ echo ' error';}?>">
			<label class="control-label"><?php echo $label['message'];?></label>
			<div class="controls">
				<textarea name="message" id="message" rows="12" class="span8"><?php echo set_value('message');?></textarea>
				<?php echo form_error('message', '<div class="help-block">', '</div>'); ?>
			</div>
		</div>
		
		<div class="controls">
			<button type="submit" name="submit" class="btn btn-primary"><?php echo $label['submit'];?></button>
		</div>
	<?php echo form_close();?>
<?php else: ?>
	<?php echo text_output($label['nosubmit'], 'p', 'alert');?>
<?php endif;?>