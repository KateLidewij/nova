<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php if (isset($logs)): ?>
		<?php echo anchor('personnel/character/'.$charid, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	<?php endif;?>

	<?php if (isset($char)): ?>
		<?php echo anchor('personnel/user/'.$user, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	<?php endif;?>
</div>

<?php if (isset($msg_error)): ?>
	<?php echo text_output($msg_error, 'p', 'alert');?>
<?php endif; ?>

<?php if (isset($logs)): ?>
	<?php echo text_output($display, 'p', 'muted');?>
	
	<?php echo $pagination;?>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo $label['title'];?></th>
				<th><?php echo $label['blurb'];?></th>
			</tr>
		</thead>
		
		<tbody>
		<?php foreach ($logs as $log): ?>
			<tr>
				<td class="span4">
					<p><strong><?php echo anchor('sim/viewlog/'.$log['id'], $log['title']);?></strong></p>
					<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $log['date'];?></span></p>
				</td>
				<td><?php echo word_limiter($log['content'], 25);?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo $pagination;?>
<?php elseif (isset($char)): ?>
	<?php foreach ($char as $c): ?>
		<?php echo text_output($c['character'], 'h2');?>
		
		<?php if (isset($c['logs'])): ?>
			<table class="table table-striped">
				<tbody>
				<?php foreach ($c['logs'] as $log): ?>
					<tr>
						<td class="span4">
							<p><strong><?php echo anchor('sim/viewlog/'.$log['id'], $log['title']);?></strong></p>
							<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $log['date'];?></span></p>
						</td>
						<td><?php echo word_limiter($log['content'], 25);?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		<?php else: ?>
			<?php echo text_output($label['nologs'], 'p', 'alert');?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>