<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="page-header">
	<h1><?php echo $header;?></h1>
</div>

<?php echo text_output($message);?>

<?php echo form_open('login/reset_password');?>
	<div class="control-group">
		<label class="control-label"><?php echo $label['email'];?></label>
		<div class="controls">
			<input type="email" name="email" id="email" class="span5" placeholder="<?php echo $label['email'];?>">
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label"><?php echo $label['question'];?></label>
		<div class="controls"><?php echo form_dropdown('question', $questions, false, 'class="span5"');?></div>
	</div>
	
	<div class="control-group">
		<label class="control-label"><?php echo $label['answer'];?></label>
		<div class="controls">
			<input type="text" name="answer" id="answer" class="span5">
		</div>
	</div>
	
	<div class="control-group">
		<div class="controls">
			<button type="submit" name="submit" id="submit" value="submit" class="btn btn-large btn-block btn-primary"><?php echo $label['submit'];?></button>
		</div>
	</div>
<?php echo form_close();?>