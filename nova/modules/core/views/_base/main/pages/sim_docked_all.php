<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php if ($edit_valid_form): ?>
		<?php echo anchor('site/dockingform', $label['edit_form'], array('class' => 'btn btn-small'));?>
	<?php endif;?>

	<?php if ($edit_valid_item): ?>
		<?php echo anchor('manage/docked', $label['edit_items'], array('class' => 'btn btn-small'));?>
	<?php endif;?>
</div>

<ul class="nav nav-tabs" id="tabs">
	<li><a href="#current" data-toggle="tab"><?php echo $label['docked_current'];?></a></li>
	<li><a href="#previous" data-toggle="tab"><?php echo $label['docked_previous'];?></a></li>
</ul>

<div class="tab-content">
	<div id="current" class="tab-pane">
		<?php if (isset($docked['active'])): ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $label['name'];?></th>
						<th><?php echo $label['gm_name'];?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($docked['active'] as $d): ?>
					<tr>
						<td>
							<p><strong><?php echo anchor('sim/docked/'.$d['id'], $d['sim_name']);?></strong></p>
							<p><a href="<?php echo $d['sim_url'];?>" target="_blank"><?php echo $d['sim_url'];?></a></p>
						</td>
						<td><?php echo $d['gm_name'];?></td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		<?php else: ?>
			<?php echo text_output($label['norequests'], 'p', 'alert');?>
		<?php endif;?>
	</div>
	
	<div id="previous" class="tab-pane">
		<?php if (isset($docked['inactive'])): ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $label['name'];?></th>
						<th><?php echo $label['gm_name'];?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($docked['inactive'] as $d): ?>
					<tr>
						<td>
							<p><strong><?php echo anchor('sim/docked/'.$d['id'], $d['sim_name']);?></strong></p>
							<p><a href="<?php echo $d['sim_url'];?>" target="_blank"><?php echo $d['sim_url'];?></a></p>
						</td>
						<td><?php echo $d['gm_name'];?></td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		<?php else: ?>
			<?php echo text_output($label['norequests'], 'p', 'alert');?>
		<?php endif;?>
	</div>
</div>