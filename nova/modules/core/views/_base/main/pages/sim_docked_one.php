<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-toolbar">
	<div class="btn-group">
		<?php echo anchor('sim/docked', img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	</div>

	<?php if ($edit_valid): ?>
		<div class="btn-group">
			<?php echo anchor('manage/docked/edit/'.$docked['id'], img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
		</div>
	<?php endif;?>
</div>

<?php if (isset($docked)): ?>
	<div class="control-group">
		<label class="control-label"><?php echo $label['name'];?></label>
		<div class="controls">
			<?php echo $docked['sim_name'];?>
			<p class="help-block"><a href="<?php echo $docked['sim_url'];?>" target="_blank"><?php echo $docked['sim_url'];?></a></p>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label"><?php echo $label['gm_name'];?></label>
		<div class="controls"><?php echo $docked['gm_name'];?></div>
	</div>

	<div class="control-group">
		<label class="control-label"><?php echo $label['received'];?></label>
		<div class="controls"><?php echo $docked['date'];?></div>
	</div>
	
	<?php if (isset($sections)): ?>
		<?php foreach ($sections as $section): ?>
			<legend><?php echo $section['title'];?></legend>
			
			<?php if (isset($section['fields'])): ?>
				<?php foreach ($section['fields'] as $field): ?>
					<div class="control-group">
						<label class="control-label"><?php echo $field['field'];?></label>
						<div class="controls"><?php echo $field['data'];?></div>
					</div>
				<?php endforeach;?>
			<?php endif;?>
		<?php endforeach;?>
	<?php endif;?>
<?php else: ?>
	<?php echo text_output($label['nosim'], 'p', 'alert');?>
<?php endif;?>