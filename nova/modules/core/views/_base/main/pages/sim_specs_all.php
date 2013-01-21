<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo link_to_if($edit_valid, 'manage/specs', $label['edit'], array('class' => 'btn btn-small'));?>
	<?php echo link_to_if($edit_valid_form, 'site/specsform', $label['edit_form'], array('class' => 'btn btn-small'));?>
</div>

<?php if (isset($items)): ?>
	<dl>
	<?php foreach ($items as $item): ?>
		<dt><?php echo anchor('sim/specs/'. $item['id'], $item['name']);?></dt>
		<dd><?php echo text_output($item['summary'], '');?></dd>
	<?php endforeach;?>
	</dl>
<?php else: ?>
	<?php echo text_output($label['nospecs_all'], 'p', 'alert');?>
<?php endif;?>