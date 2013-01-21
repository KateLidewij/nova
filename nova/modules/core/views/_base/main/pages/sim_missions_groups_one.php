<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo anchor('sim/missions/group', img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
</div>

<?php if (isset($group)): ?>
	<?php echo text_output($group['desc']);?>
	
	<p class="muted"><?php echo $label['count_posts_group'] .' '. $group['posts'];?></p>
	
	<?php if (isset($group['missions'])): ?>
		<hr>
		
		<h2><?php echo $label['included'];?></h2>
		
		<dl>
		<?php foreach ($group['missions'] as $m): ?>
			<dt><?php echo anchor('sim/missions/id/'. $m['id'], $m['title']);?></dt>
			<dd class="muted"><?php echo $label['count'] .' '. $m['count'];?></dd>
			<dd><?php echo text_output($m['desc']);?></dd>
		<?php endforeach;?>
		</dl>
	<?php endif;?>
	
	<?php if (isset($group['subgroups'])): ?>
		<hr>
		
		<h2><?php echo $label['included_groups'];?></h2>
		
		<dl>
		<?php foreach ($group['subgroups'] as $s): ?>
			<dt><?php echo anchor('sim/missions/group/'. $s['id'], $s['name']);?></dt>
			<dd class="muted"><?php echo $label['count_missions'] .' '. $s['count']['missions'];?></dd>
			<dd class="muted"><?php echo $label['count'] .' '. $s['count']['posts'];?></dd>
			<dd><?php echo text_output($s['desc']);?></dd>
		<?php endforeach;?>
		</dl>
	<?php endif;?>
<?php else: ?>
	<?php echo text_output($label['nogroup'], 'p', 'alert');?>
<?php endif;?>