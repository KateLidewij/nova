<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo text_output($header, 'h1', 'page-head');?>

<p><?php echo link_to_if($edit_valid, 'manage/awards', $label['edit'], array('class' => 'edit fontSmall bold'));?></p>

<?php if (isset($awards)): ?>
	<?php foreach ($awards as $v): ?>
		<h4><?php echo $v['name'];?></h4>
		<div class="row">
			<div class="span7">
				<?php echo text_output($v['desc']);?>
				<?php echo anchor('sim/awards/'. $v['id'], $label['details'], array('class' => 'btn btn-small'));?>
			</div>
			<div class="span3 align_right"><?php echo anchor('sim/awards/'. $v['id'], img($v['img']), array('class' => 'image'));?></div>
		</div>

		<hr>
	<?php endforeach;?>
<?php else: ?>
	<?php echo text_output($label['noawards'], 'p', 'alert');?>
<?php endif; ?>