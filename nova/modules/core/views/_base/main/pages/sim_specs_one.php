<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">
	a.image { display: inline-block; }
	a.image span { padding: 0px; display: inline-block; }
	a.image span img { margin: 0px; padding: 0px; }
</style>

<h1><?php echo $header;?></h1>

<?php if ($count > 1): ?>
	<div class="btn-group">
		<?php echo anchor('sim/specs', img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
	</div>
<?php endif;?>

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
<?php endif;?>

<?php if (isset($sections)): ?>
	<?php foreach ($sections as $section): ?>
		<legend><?php echo $section['title'];?></legend>
		
		<?php if (isset($section['fields'])): ?>
			<?php foreach ($section['fields'] as $field): ?>
				<div class="control-group">
					<label class="control-label"><?php echo $field['field'];?></label>
					<div class="controls"><?php echo text_output($field['data'], '');?></div>
				</div>
			<?php endforeach;?>
		<?php else: ?>
			<?php echo text_output($label['nospecs_all'], 'p', 'alert');?>
		<?php endif;?>
	<?php endforeach;?>
<?php else: ?>
	<?php echo text_output($label['nospecs_all'], 'p', 'alert');?>
<?php endif;?>