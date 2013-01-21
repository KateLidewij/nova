<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php if (isset($posts)): ?>
		<?php echo anchor('personnel/character/'.$charid, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	<?php endif;?>

	<?php if (isset($char)): ?>
		<?php echo anchor('personnel/user/'.$user, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	<?php endif;?>
</div>

<?php if (isset($msg_error)): ?>
	<?php echo text_output($msg_error, 'p', 'alert');?>
<?php endif; ?>

<?php if (isset($posts)): ?>
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
		<?php foreach ($posts as $post): ?>
			<tr>
				<td class="span4">
					<p><strong><?php echo anchor('sim/viewpost/'.$post['id'], $post['title']);?></strong></p>

					<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $post['authors'];?></span></p>
					<p class="muted"><span class="sub-icn sub-icn-category"><?php echo anchor('sim/missions/id/'. $post['mission_id'], $post['mission']);?></span></p>
					<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $post['date'];?></span></p>
				</td>
				<td><?php echo word_limiter($post['content'], 50);?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo $pagination;?>
<?php elseif (isset($char)): ?>
	<?php foreach ($char as $c): ?>
		<?php echo text_output($c['character'], 'h2');?>
		
		<?php if (isset($c['posts'])): ?>
			<table class="table table-striped">
				<tbody>
				<?php foreach ($c['posts'] as $post): ?>
					<tr>
						<td class="span4">
							<p><strong><?php echo anchor('sim/viewpost/'. $post['id'], $post['title']);?></strong></p>

							<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $post['authors'];?></span></p>
							<p class="muted"><span class="sub-icn sub-icn-category"><?php echo anchor('sim/missions/id/'. $post['mission_id'], $post['mission']);?></span></p>
							<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $post['date'];?></span></p>
						</td>
						<td><?php echo word_limiter($post['content'], 50);?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		<?php else: ?>
			<?php echo text_output($label['noposts'], 'p', 'alert');?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>