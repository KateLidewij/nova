<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php echo text_output($docking_inst);?>

<?php echo form_open('sim/dockingrequest');?>
	<div class="row">
		<div class="span5">
			<legend><?php echo $label['info'];?></legend>

			<div class="control-group">
				<label class="control-label"><?php echo $label['name'];?></label>
				<div class="controls"><input type="text" class="span5" name="docking_sim_name"></div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['url'];?></label>
				<div class="controls"><input type="text" class="span5" name="docking_sim_url"></div>
			</div>
		</div>

		<div class="span5">
			<legend><?php echo $label['gm_info'];?></legend>
			
			<div class="control-group">
				<label class="control-label"><?php echo $label['gm_name'];?></label>
				<div class="controls"><input type="text" class="span5" name="docking_gm_name"></div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo $label['gm_email'];?></label>
				<div class="controls"><input type="text" class="span5" name="docking_gm_email"></div>
			</div>
		</div>
	</div>
	
	<?php if (isset($docking)): ?>
		<?php foreach ($docking as $a): ?>
			<?php if (isset($a['fields'])): ?>
				<legend><?php echo $a['name'];?></legend>
				
				<?php foreach ($a['fields'] as $f): ?>
					<div class="control-group">
						<label class="control-label"><?php echo $f['field_label'];?></label>
						<div class="controls"><?php echo $f['input'];?></div>
					</div>
				<?php endforeach;?>
			<?php endif;?>
		<?php endforeach;?>
	<?php endif;?>

	<div class="controls"><?php echo form_input($inputs['check']);?></div>

	<div class="control-group">
		<div class="controls"><button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary"><?php echo $label['submit'];?></button></div>
	</div>
<?php echo form_close();?>