<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo link_to_if($edit_valid, 'manage/tour', $label['edit'], array('class' => 'btn btn-small'));?>
	<?php echo link_to_if($edit_valid_form, 'site/tourform', $label['edit_form'], array('class' => 'btn btn-small'));?>
</div>

<?php if (isset($items)): ?>
	<?php foreach ($items as $key => $value): ?>
		<?php if (isset($tour[$key])): ?>
			<h4><?php echo $value;?><?php if ($key != 0): ?> <small><?php echo anchor('sim/specs/'.$key, $label['viewspec']);?></small><?php endif;?></h4>
			
			<dl>
			<?php foreach ($tour[$key] as $t): ?>
				<dt><?php echo anchor('sim/tour/'.$t['id'], $t['name']);?></dt>
				<dd><?php echo text_output($t['summary'], '');?></dd>
			<?php endforeach;?>
			</dl>
		<?php endif;?>
	<?php endforeach;?>
<?php endif;?>

<?php if ( ! isset($tour)): ?>
	<?php echo text_output($label['notour_all'], 'p', 'alert');?>
<?php endif; ?>