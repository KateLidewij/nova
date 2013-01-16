<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<p><?php echo anchor('sim/missions', $label['missions'], array('class' => 'btn btn-small'));?></p>

<?php if (isset($groups)): ?>
	<ul class="thumbnails">
		<?php foreach ($groups as $g): ?>
			<li class="span10">
				<div class="thumbnail">
					<div class="caption">
						<h2><?php echo $g['name'];?></h2>
						
						<p class="muted">
							<?php echo $label['count_posts'].' '.$g['count']['posts'];?>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo $label['count_groups'].' '.$g['count']['groups'];?>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo $label['count_missions'].' '.$g['count']['missions'];?>
						</p>

						<?php echo content_output($g['desc']);?>

						<?php if (isset($g['missions']) or isset($g['subgroups'])): ?>
							<hr>
						<?php endif;?>

						<?php if (isset($g['missions'])): ?>
							<h4><?php echo $label['included'];?></h4>
							<dl>
							<?php foreach ($g['missions'] as $m): ?>
								<dt><?php echo anchor('sim/missions/id/'.$m['id'], $m['title']);?></dt>
								
								<?php if (isset($m['group'])): ?>
									<dd class="sub-icn sub-icn-category muted"><?php echo $m['group'];?></dd>
								<?php endif;?>

								<?php echo text_output($m['desc'], 'dd');?>
							<?php endforeach;?>
							</dl>
						<?php endif;?>
						
						<?php if (isset($g['subgroups'])): ?>
							<h4><?php echo $label['included_groups'];?></h4>
							<dl>
							<?php foreach ($g['subgroups'] as $s): ?>
								<dt><?php echo anchor('sim/missions/group/'.$s['id'], $s['name']);?></dt>
							<?php endforeach;?>
							</dl>
						<?php endif;?>
					</div>
				</div>
			</li>
		<?php endforeach;?>
	</ul>
<?php else: ?>
	<?php echo text_output($label['nogroups'], 'p', 'alert');?>
<?php endif;?>