<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php echo text_output($display, 'p', 'muted');?>

<?php if (isset($logs)): ?>
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
					<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $log['author'];?></span></p>
					<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $log['date'];?></span></p>
				</td>
				<td><?php echo $log['content'];?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo $pagination;?>
<?php else: ?>
	<?php echo text_output($label['nologs'], 'p', 'alert');?>
<?php endif;?>