<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">
	a.image { display: inline-block; }
	a.image span { padding: 0px; display: inline-block; }
	a.image span img { margin: 0px; padding: 0px; }
</style>

<h1><?php echo $header;?></h1>

<?php echo anchor('sim/missions', $label['missions'], array('class' => 'btn btn-small pull-right'));?>

<?php if (isset($mission_img['src'])): ?>
	<div id="gallery">
		<?php echo text_output($label['open_gallery'], 'p', 'muted');?>
		<p><a href="<?php echo base_url() . $mission_img['src'];?>" class="image" rel="prettyPhoto[gallery]"><?php echo img($mission_img);?></a></p>
		
		<div class="hide">
			<?php if (count($image_array) > 0): ?>
				<?php foreach ($image_array as $image): ?>
					<a href="<?php echo base_url().$image['src'];?>" class="image" rel="prettyPhoto[gallery]"><?php echo img($image);?></a>
				<?php endforeach;?>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<ul class="nav nav-tabs" id="tabs">
	<li><a href="#basic" data-toggle="tab"><?php echo $label['basicinfo'];?></a></li>
	<li><a href="#posts" data-toggle="tab"><?php echo $label['posts'];?></a></li>
	<li><a href="#summary" data-toggle="tab"><?php echo $label['summary'];?></a></li>
</ul>

<div class="tab-content">
	<div id="basic" class="tab-pane">
		<?php if (isset($basic)): ?>
			<h2><?php echo $info_header;?></h2>

			<div class="form-horizontal">
				<div class="control-group">
					<label class="control-label"><?php echo $label['status'];?></label>
					<div class="controls"><?php echo $basic['status'] .' '. $label['mission'];?></div>
				</div>

				<?php if (is_array($basic['group'])): ?>
					<div class="control-group">
						<label class="control-label"><?php echo $label['group'];?></label>
						<div class="controls"><?php echo anchor('sim/missions/group/'.$basic['group']['misgroup_id'], $basic['group']['misgroup_name']);?></div>
					</div>
				<?php endif;?>

				<div class="control-group">
					<label class="control-label"><?php echo $label['desc'];?></label>
					<div class="controls"><?php echo $basic['desc'];?></div>
				</div>

				<div class="control-group">
					<label class="control-label"><?php echo $label['date_start'];?></label>
					<div class="controls"><?php echo $basic['start'];?></div>
				</div>

				<?php if (isset($basic['end'])): ?>
					<div class="control-group">
						<label class="control-label"><?php echo $label['date_end'];?></label>
						<div class="controls"><?php echo $basic['end'];?></div>
					</div>
				<?php endif;?>
			</div>
		<?php endif; ?>
	</div>
	
	<div id="posts" class="tab-pane">
		<?php if (isset($posts)): ?>
			<?php echo anchor('sim/listposts/mission/'. $mission, $label['view_all_posts'], array('class' => 'btn btn-small pull-right'));?>

			<h2><?php echo $posts_header;?></h2>

			<dl>
				<?php foreach ($posts as $post): ?>
					<dt><?php echo anchor('sim/viewpost/'. $post['id'], $post['title']);?></dt>
					<dd class="sub-icn sub-icn-user muted"><?php echo $post['authors'];?></dd>
					
					<?php if ( ! empty($post['timeline'])): ?>
						<dd class="sub-icn sub-icn-date muted"><?php echo $post['timeline'];?></dd>
					<?php endif;?>

					<?php if ( ! empty($post['location'])): ?>
						<dd class="sub-icn sub-icn-map muted"><?php echo $post['location'];?></dd>
					<?php endif;?>
				<?php endforeach;?>
			</dl>
		<?php else: ?>
			<?php echo text_output($label['noposts'], 'p', 'alert');?>
		<?php endif; ?>
	</div>
	
	<div id="summary" class="tab-pane">
		<?php if ( ! empty($summary['content'])): ?>
			<h2><?php echo $summary['title'];?></h2>
			
			<?php echo text_output($summary['content']);?>
		<?php else: ?>
			<?php echo text_output($label['nosummary'], 'p', 'alert');?>
		<?php endif; ?>
	</div>
</div>