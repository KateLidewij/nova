<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-toolbar">
	<div class="btn-group">
		<?php echo link_to_if(($this->uri->segment(3) != ''), 'sim/decks', img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	</div>

	<div class="btn-group">
		<?php echo link_to_if($edit_valid, 'manage/decks', img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
	</div>
</div>

<?php if (isset($specs)): ?>
	<?php if (count($specs) > 0): ?>
		<dl>
		<?php foreach ($specs as $key => $value): ?>
			<dt><?php echo anchor('sim/decks/'.$key, $value['name']);?></dt>
			<dd><?php echo text_output($value['desc'], 'p', 'muted');?></dd>
		<?php endforeach;?>
		</dl>
	<?php else: ?>
		<?php echo text_output($label['nodecks'], 'p', 'alert');?>
	<?php endif;?>
<?php else: ?>
	<?php if (isset($decks)): ?>
		<?php if (isset($decks_menu)): ?>
			<ul class="nav nav-pills">
			<?php foreach ($decks_menu as $d): ?>
				<li><?php echo $d;?></li>
			<?php endforeach;?>
			</ul>
		<?php endif;?>
		
		<dl>
		<?php foreach ($decks as $deck): ?>
			<dt><a name="<?php echo $deck['id'];?>"></a><?php echo $deck['name'];?></dt>
			<dd><?php echo text_output($deck['content']);?></dd>
		<?php endforeach;?>
		</dl>
	<?php else: ?>
		<?php echo text_output($label['nodecks'], 'p', 'alert');?>
	<?php endif; ?>
<?php endif;?>