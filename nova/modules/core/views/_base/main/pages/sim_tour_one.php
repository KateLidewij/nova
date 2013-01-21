<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">
	a.image { display: inline-block; }
	a.image span { padding: 0px; display: inline-block; }
	a.image span img { margin: 0px; padding: 0px; }
</style>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo anchor('sim/tour', img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
</div>

<h2><?php echo $label['summary'];?></h2>

<?php echo text_output($summary);?>

<?php if (isset($images['main_img'])): ?>
	<div id="gallery">
		<?php echo text_output($label['opengallery'], 'p', 'muted');?>
		
		<a href="<?php echo base_url() . $images['main_img']['src'];?>" class="image" rel="prettyPhoto[gallery]"><?php echo img($images['main_img']);?></a>
		
		<div class="hide">
			<?php if (count($images['image_array']) > 0): ?>
				<?php foreach ($images['image_array'] as $image): ?>
					<a href="<?php echo base_url() . $image['src'];?>" class="image" rel="prettyPhoto[gallery]"><?php echo img($image);?></a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<?php if (isset($fields)): ?>
	<h2><?php echo $label['info'];?></h2>

	<dl>
	<?php foreach ($fields as $field): ?>
		<dt><?php echo $field['label'];?></dt>
		<dd><?php echo text_output($field['data'], '');?></dd>
	<?php endforeach;?>
	</dl>
<?php endif; ?>