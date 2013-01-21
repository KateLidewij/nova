<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo link_to_if($edit_valid_dept, 'manage/depts', $label['edit_dept'], array('class' => 'btn btn-small'));?>
	<?php echo link_to_if($edit_valid_pos, 'manage/positions', $label['edit_pos'], array('class' => 'btn btn-small'));?>
</div>

<?php if (isset($msg_error)): ?>
	<?php echo $msg_error;?>
<?php else: ?>
	<ul class="unstyled">
		
	<?php foreach ($depts as $value): ?>
		<li>
			<h2><?php echo $value['name'];?></h2>

			<?php echo text_output($value['desc']);?>
			
			<?php if (isset($value['positions'])): ?>
				<p><?php echo anchor('#', $label['toggle'], array('data-id' => $value['id'], 'class' => 'toggle btn btn-small'));?></p>
				
				<div id="<?php echo $value['id'];?>" class="hide">
					<table class="table table-striped">
					<?php foreach ($value['positions'] as $pos1): ?>
						<tr>
							<td class="span3"><?php echo $pos1['name'];?></td>
							<td><?php echo text_output($pos1['desc'], '');?></td>
						</tr>
					<?php endforeach;?>
					</table>
				</div>
			<?php endif;?>
			
			<?php if (isset($value['subs'])): ?>
				<ul class="unstyled nested-left">
				<?php foreach ($value['subs'] as $sub): ?>
					<li>
						<h3><?php echo $sub['name'];?></h3>
						
						<?php echo text_output($sub['desc']);?>
						
						<?php if (isset($sub['positions'])): ?>
							<p><?php echo anchor('#', $label['toggle'], array('data-id' => $sub['id'], 'class' => 'toggle btn btn-small'));?></p>
							
							<div id="<?php echo $sub['id'];?>" class="hide">
								<table class="table table-striped">
								<?php foreach ($sub['positions'] as $pos2): ?>
									<tr>
										<td class="span3"><?php echo $pos2['name'];?></td>
										<td><?php echo text_output($pos2['desc'], '');?></td>
									</tr>
								<?php endforeach;?>
								</table>
							</div>
						<?php endif;?>
					</li>
				<?php endforeach;?>
				</ul>
			<?php endif;?>
		</li>
	<?php endforeach;?>
	</ul>
<?php endif;?>