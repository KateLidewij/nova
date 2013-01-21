<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php if (isset($awards)): ?>
		<?php echo anchor('personnel/character/'.$charid, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	<?php endif;?>

	<?php if (isset($char)): ?>
		<?php echo anchor('personnel/user/'.$user, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	<?php endif;?>
</div>

<?php if (isset($msg_error)): ?>
	<?php echo text_output($msg_error, 'p', 'alert');?>
<?php endif; ?>

<?php if (isset($awards)): ?>
	<?php echo text_output($label['awards'], 'h2');?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo $label['award'];?></th>
				<th><?php echo $label['reason'];?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($awards as $key => $value): ?>
			<tr>
				<td class="span4">
					<p><strong class="tooltip-right" title="<?php echo $value['desc'];?>"><?php echo $value['award'];?></strong></p>
					<p><?php echo anchor('sim/awards/'. $value['award_id'], img($value['img']), array('class' => 'image'));?></p>

					<?php if ( ! empty($value['date'])): ?>
						<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span></p>
					<?php endif;?>
						
					<?php if ( ! empty($value['nom'])): ?>
						<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $value['nom'];?></span></p>
					<?php endif;?>
				</td>
				<td><?php echo text_output($value['reason'], '');?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
	
<?php if (isset($char)): ?>
	<?php if (count($char) > 1): ?>
		<ul class="nav nav-pills">
		<?php foreach ($char as $key => $value): ?>
			<li><a href="#c<?php echo $key;?>"><?php echo $value['character'];?></a></li>
		<?php endforeach;?>
		</ul>
	<?php endif;?>

	<?php foreach ($char as $key => $value): ?>
		<a name="c<?php echo $key;?>"></a><?php echo text_output($value['character'], 'h2');?>
		
		<table class="table table-striped">
			<tbody>
			<?php foreach ($value['awards'] as $b): ?>
				<tr>
					<td class="span4">
						<p><strong class="tooltip-right" title="<?php echo $b['desc'];?>"><?php echo $b['award'];?></strong></p>
						<p><?php echo anchor('sim/awards/'.$b['award_id'], img($b['img']), array('class' => 'image'));?></p>
						
						<?php if ( ! empty($b['date'])): ?>
							<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $b['date'];?></span></p>
						<?php endif;?>
							
						<?php if ( ! empty($b['nom'])): ?>
							<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $b['nom'];?></span></p>
						<?php endif;?>
					</td>
					<td><?php echo text_output($b['reason']);?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	<?php endforeach; ?>
<?php endif; ?>