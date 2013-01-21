<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

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
		<button type="submit" name="search" id="submit" class="btn btn-primary" value="search"><?php echo $label['submit'];?></button>
	</div>
<?php echo form_close();?>