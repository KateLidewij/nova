<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php echo text_output($msg);?>

<?php echo form_open('main/join');?>
	<ul class="nav nav-tabs" id="tabs">
		<li><a href="#userInfo" data-toggle="tab"><?php echo $label['user_info'];?></a></li>
		<li><a href="#character" data-toggle="tab"><?php echo $label['character'];?></a></li>
		<li><a href="#characterInfo" data-toggle="tab"><?php echo $label['character_info'];?></a></li>
		
		<?php if ($this->options['use_sample_post'] == 'y'): ?>
			<li><a href="#samplePost" data-toggle="tab"><?php echo $label['samplepost'];?></a></li>
		<?php endif;?>
	</ul>

	<div class="tab-content">
		<div id="userInfo" class="tab-pane">
			<div class="control-group">
				<label class="control-label"><?php echo $label['name'];?></label>
				<div class="controls">
					<input type="text" name="name" id="name" class="span4">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['email'];?></label>
				<div class="controls">
					<input type="email" name="email" id="email" class="span4">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['password'];?></label>
				<div class="controls">
					<input type="password" name="password" id="password" class="span4">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['dob'];?></label>
				<div class="controls">
					<input type="text" name="date_of_birth" id="date_of_birth" class="span2">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['im'];?></label>
				<div class="controls">
					<textarea name="instant_message" id="instant_message" rows="4" class="span4"></textarea>
					<?php echo text_output($label['im_inst'], 'p', 'help-block');?>
				</div>
			</div>
		</div>
		
		<div id="character" class="tab-pane">
			<div class="control-group">
				<label class="control-label"><?php echo $label['fname'];?></label>
				<div class="controls">
					<input type="text" name="first_name" id="first_name" class="span4">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['mname'];?></label>
				<div class="controls">
					<input type="text" name="middle_name" id="middle_name" class="span4">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['lname'];?></label>
				<div class="controls">
					<input type="text" name="last_name" id="last_name" class="span4">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['suffix'];?></label>
				<div class="controls">
					<input type="text" name="suffix" id="suffix" class="span1">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['position'];?></label>
				<div class="controls">
					<?php echo form_dropdown_position('position_1', $selected_position, 'id="position" class="span4"', 'open');?>
					&nbsp; <span id="loading_update" class="hide muted"><?php echo img($loading);?></span>
					<p id="position_desc" class="help-block"><?php echo text_output($pos_desc, '');?></p>
				</div>
			</div>
		</div>
		
		<div id="characterInfo" class="tab-pane">
			<?php if (isset($join)): ?>
				<?php foreach ($join as $a): ?>
					<?php if (isset($a['fields'])): ?>
						<?php echo text_output($a['name'], 'legend');?>
						
						<?php foreach ($a['fields'] as $f): ?>
							<div class="control-group">
								<label class="control-label"><?php echo $f['field_label'];?></label>
								<div class="controls"><?php echo $f['input'];?></div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		
		<?php if ($this->options['use_sample_post'] == 'y'): ?>
			<div id="samplePost" class="tab-pane">
				<?php echo text_output($label['samplepost'], 'legend');?>
				
				<?php echo text_output($sample_post_msg, 'p', 'help-block');?>
				<textarea name="sample_post" id="sample_post" class="span10" rows="20"></textarea>
			</div>
		<?php endif; ?>
	</div>

	<div class="btn-toolbar">
		<div class="btn-group"><button type="submit" name="submit" id="submitJoin" class="btn btn-primary"><?php echo $label['submit'];?></button></div>

		<div class="btn-group"><button type="submit" name="submit" id="nextTab" class="btn"><?php echo $label['next_step'];?></button></div>
	</div>
<?php echo form_close();?>