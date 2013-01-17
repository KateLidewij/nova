<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo text_output($header, 'h1', 'page-head');?>

<p><?php echo link_to_if($edit_valid, 'characters/coc', $label['edit'], array('class' => 'edit fontSmall bold'));?></p>

<?php if (isset($coc)): ?>
	<table>
	<?php foreach ($coc as $v): ?>
		<tr>
			<td class="col_15"></td>
			<td class="col_150"><?php echo img($v['img_rank']);?></td>
			<td>
				<p><strong><?php echo $v['name'];?></strong></p>
				<?php echo $v['position'];?>
			</td>
			<td></td>
			<td class="col_75 align_right">
				<?php echo anchor('personnel/character/'.$v['id'], img($v['img_bio']), array('class' => 'bold image'));?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
	<?php echo text_output($error, 'p', 'alert');?>
<?php endif; ?>