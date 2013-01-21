<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-toolbar">
	<div class="btn-group">
		<?php echo anchor('sim/awards', img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	</div>

	<?php if ($edit_valid): ?>
		<div class="btn-group">
			<?php echo anchor('manage/awards/edit/'.$id, img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
		</div>
	<?php endif;?>
</div>

<p class="muted">
	<span class="sub-icn sub-icn-category"><?php echo $cat;?></span>
	<span class="sub-icn sub-icn-award"><?php echo $awardees_count;?></span>
</p>

<p><?php echo img($img);?></p>

<?php echo text_output($desc);?>

<?php if (isset($msg_error)): ?>
	<p class="alert"><?php echo $msg_error;?></p>
<?php endif; ?>

<?php if (isset($awardees)): ?>
	<h3><?php echo $label['awarded_to'];?></h3>

	<table class="table table-striped">
	<?php foreach ($awardees as $v): ?>
		<tr>
			<td class="span4">
				<p><strong><?php echo $v['person'];?></strong></p>
				<span class="sub-icn sub-icn-date muted"><?php echo $v['date'];?></span>
			</td>
			<td><?php echo text_output($v['reason'], '');?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>