<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<?php echo text_output($message);?>

<?php if (count($lists) > 1): ?>
	<ul class="nav nav-tabs" id="tabs">
	<?php if (isset($lists['news'])): ?>
		<li><a href="#news" data-toggle="tab"><?php echo $label['news'];?></a></li>
	<?php endif;?>
	
	<?php if (isset($lists['posts'])): ?>
		<li><a href="#posts" data-toggle="tab"><?php echo $label['posts'];?></a></li>
	<?php endif;?>
	
	<?php if (isset($lists['logs'])): ?>
		<li><a href="#logs" data-toggle="tab"><?php echo $label['logs'];?></a></li>
	<?php endif;?>
	</ul>

	<div class="tab-content">
	<?php if (isset($lists['news'])): ?>
		<div id="news" class="tab-pane">
			<?php echo text_output($label['news'], 'h2', 'page-subhead');?>
			
			<?php foreach ($lists['news'] as $value): ?>
				<h4><?php echo anchor('main/viewnews/' . $value['id'], $value['title']);?></h4>
				
				<p class="muted">
					<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
					<span class="sub-icn sub-icn-category"><?php echo $value['category'];?></span>
					<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
				</p>
				
				<?php echo text_output($value['content'], 'p');?>

				<hr>
			<?php endforeach; ?>
		</div>
	<?php endif;?>
		
	<?php if (isset($lists['posts'])): ?>
		<div id="posts" class="tab-pane">
			<?php echo text_output($label['posts'], 'h2', 'page-subhead');?>
			
			<?php foreach ($lists['posts'] as $value): ?>
				<h4><?php echo anchor('sim/viewpost/'.$value['id'], $value['title']);?></h4>
				
				<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $value['authors'];?></span></p>
				<p class="muted">
					<span class="sub-icn sub-icn-category"><?php echo $value['mission'];?></span>
					<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
				</p>
				
				<?php echo text_output($value['content'], 'p');?>

				<hr>
			<?php endforeach; ?>
		</div>
	<?php endif;?>
		
	<?php if (isset($lists['logs'])): ?>
		<div id="logs" class="tab-pane">
			<?php echo text_output($label['logs'], 'h2', 'page-subhead');?>
			
			<?php foreach ($lists['logs'] as $value): ?>
				<h4><?php echo anchor('sim/viewlog/'.$value['id'], $value['title']);?></h4>
				
				<p class="muted">
					<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
					<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
				</p>
				
				<?php echo text_output($value['content'], 'p');?>

				<hr>
			<?php endforeach; ?>
		</div>
	<?php endif;?>
	</div>
<?php else: ?>
	<?php if (isset($lists['news'])): ?>
		<?php echo text_output($label['news'], 'h2', 'page-subhead');?>
		
		<?php foreach ($lists['news'] as $value): ?>
			<h4><?php echo anchor('main/viewnews/' . $value['id'], $value['title']);?></h4>
			
			<p class="muted">
				<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
				<span class="sub-icn sub-icn-category"><?php echo $value['category'];?></span>
				<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
			</p>
			
			<?php echo text_output($value['content'], 'p');?>

			<hr>
		<?php endforeach; ?>
	<?php endif;?>
	
	<?php if (isset($lists['posts'])): ?>
		<?php echo text_output($label['posts'], 'h2', 'page-subhead');?>
		
		<?php foreach ($lists['posts'] as $value): ?>
			<h4><?php echo anchor('sim/viewpost/' . $value['id'], $value['title']);?></h4>
			
			<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span></p>
			<p class="muted">
				<span class="sub-icn sub-icn-category"><?php echo $value['mission'];?></span>
				<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
			</p>
			
			<?php echo text_output($value['content'], 'p');?>

			<hr>
		<?php endforeach; ?>
	<?php endif;?>
	
	<?php if (isset($lists['logs'])): ?>
		<?php echo text_output($label['logs'], 'h2', 'page-subhead');?>
		
		<?php foreach ($lists['logs'] as $value): ?>
			<h4><?php echo anchor('sim/viewlog/' . $value['id'], $value['title']);?></h4>
			
			<p class="muted">
				<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
				<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
			</p>
			
			<?php echo text_output($value['content'], 'p');?>

			<hr>
		<?php endforeach; ?>
	<?php endif;?>
<?php endif;?>