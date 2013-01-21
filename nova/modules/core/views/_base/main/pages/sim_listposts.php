<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php echo text_output($display, 'p', 'muted');?>

<?php if (isset($posts)): ?>
	<?php echo $pagination;?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo $label['title'];?></th>
				<th><?php echo $label['blurb'];?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($posts as $post): ?>
			<tr>
				<td class="span4">
					<p><strong><?php echo anchor('sim/viewpost/'.$post['id'], $post['title']);?></strong></p>
					<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $post['authors'];?></span></p>
					<p class="muted"><span class="sub-icn sub-icn-category"><?php echo anchor('sim/missions/id/'.$post['mission_id'], $post['mission']);?></span></p>
					<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $post['date'];?></span></p>
				</td>
				<td><?php echo $post['content'];?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo $pagination;?>
<?php else: ?>
	<?php echo text_output($label['noposts'], 'p', 'alert');?>
<?php endif; ?>