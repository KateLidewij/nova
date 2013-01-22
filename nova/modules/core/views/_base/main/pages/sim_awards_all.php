<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-toolbar">
	<?php if ($edit_valid): ?>
		<div class="btn-group">
			<?php echo anchor('manage/awards', img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
		</div>
	<?php endif;?>
</div>

<?php if (isset($awards)): ?>
	<?php foreach ($awards as $a): ?>
		<h4><?php echo $a['name'];?></h4>
		
		<div class="row">
			<div class="span7">
				<?php echo text_output($a['desc']);?>
				<?php echo anchor('sim/awards/'. $a['id'], $label['details'], array('class' => 'btn btn-small'));?>
			</div>
			<div class="span3 align-right"><?php echo anchor('sim/awards/'. $a['id'], img($a['img']), array('class' => 'image'));?></div>
		</div>

		<hr>
	<?php endforeach;?>
<?php else: ?>
	<?php echo text_output($label['noawards'], 'p', 'alert');?>
<?php endif; ?>