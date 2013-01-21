<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo link_to_if($edit_valid, 'manage/missions', img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
</div>

<ul class="nav nav-tabs" id="tabs">
	<li><a href="#current" data-toggle="tab"><?php echo $label['s_current'];?></a></li>
	<li><a href="#upcoming" data-toggle="tab"><?php echo $label['s_upcoming'];?></a></li>
	<li><a href="#completed" data-toggle="tab"><?php echo $label['s_completed'];?></a></li>
</ul>

<div class="tab-content">
	<div id="current" class="tab-pane">
		<?php if (isset($missions['current'])): ?>
			<?php foreach ($missions['current'] as $cur): ?>
				<h4><?php echo anchor('sim/missions/id/'. $cur['id'], $cur['title']);?></h4>
				
				<p class="muted"><?php echo $label['count'] .' '. $cur['count'];?></p>
				
				<?php echo text_output($cur['desc']);?>
				
				<?php if (is_array($cur['group'])): ?>
					<p class="muted">
						<em><?php echo $label['partof'] .' '. anchor('sim/missions/group/'. $cur['group']['misgroup_id'], $cur['group']['misgroup_name']);?></em>
					</p>
				<?php endif;?>

				<hr>
			<?php endforeach; ?>
		<?php else: ?>
			<?php echo text_output($label['nomissions'], 'p', 'alert');?>
		<?php endif; ?>
	</div>
	
	<div id="upcoming" class="tab-pane">
		<?php if (isset($missions['upcoming'])): ?>
			<?php foreach ($missions['upcoming'] as $upc): ?>
				<h4><?php echo anchor('sim/missions/id/'. $upc['id'], $upc['title']);?></h4>
				
				<p class="muted"><?php echo $label['count'] .' '. $upc['count'];?></p>
				
				<?php echo text_output($upc['desc']);?>
				
				<?php if (is_array($upc['group'])): ?>
					<p class="muted">
						<em><?php echo $label['partof'] .' '. anchor('sim/missions/group/'. $upc['group']['misgroup_id'], $upc['group']['misgroup_name']);?></em>
					</p>
				<?php endif;?>

				<hr>
			<?php endforeach; ?>
		<?php else: ?>
			<?php echo text_output($label['nomissions'], 'p', 'alert');?>
		<?php endif; ?>
	</div>
	
	<div id="completed" class="tab-pane">
		<?php if (isset($missions['completed'])): ?>
			<?php foreach ($missions['completed'] as $com): ?>
				<h4><?php echo anchor('sim/missions/id/'. $com['id'], $com['title']);?></h4>
				
				<p class="muted"><?php echo $label['count'] .' '. $com['count'];?></p>
				
				<?php echo text_output($com['desc']);?>
				
				<?php if (is_array($com['group'])): ?>
					<p class="muted">
						<em><?php echo $label['partof'] .' '. anchor('sim/missions/group/'. $com['group']['misgroup_id'], $com['group']['misgroup_name']);?></em>
					</p>
				<?php endif;?>

				<hr>
			<?php endforeach; ?>
		<?php else: ?>
			<?php echo text_output($label['nomissions'], 'p', 'alert');?>
		<?php endif; ?>
	</div>
</div>