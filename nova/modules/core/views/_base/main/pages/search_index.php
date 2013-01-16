<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo text_output($header, 'h1', 'page-head');?>

<?php echo form_open('search/results');?>
	<div class="control-group">
		<label class="control-label"><?php echo $label['type'];?></label>
		<div class="controls">
			<?php echo form_dropdown('type', $type, false, 'class="span4"');?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label"><?php echo $label['search_in'];?></label>
		<div class="controls">
			<?php echo form_dropdown('component', $component, false, 'class="span4"');?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label"><?php echo $label['search_for'];?></label>
		<div class="controls">
			<input type="text" name="input" id="input" class="span4">
		</div>
	</div>
	
	<div class="controls">
		<button type="submit" name="submit" id="submit" class="btn btn-primary"><?php echo $label['submit'];?></button>
	</div>
<?php echo form_close();?>