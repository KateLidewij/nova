<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div id="loader" class="loader">
	<?php echo img($loader);?>
	<?php echo text_output($label['loading'], 'h3', 'muted');?>
</div>

<?php if (isset($news)): ?>
	<div id="news" class="hidden">
		<?php if (isset($categories)): ?>
			<ul class="nav nav-pills">
				<li><a href="#" class="all" data-title="<?php echo $header;?>"><?php echo $label['all_news'];?></a></li>

				<?php foreach ($categories as $cat): ?>
					<li><a href="#" class="show" data-id="<?php echo $cat['id'];?>" data-title="<?php echo $header.' '.NDASH.' '.$cat['name'];?>"><?php echo $cat['name'];?></a></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		
		<?php foreach ($news as $value): ?>
			<div class="news <?php echo $value['cat_id'];?>">
				<?php echo text_output(anchor('main/viewnews/'.$value['id'], $value['title']), 'h4');?>

				<p class="muted">
					<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
					<span class="sub-icn sub-icn-category"><?php echo $value['category'];?></span>
					<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
					
					<?php if ($value['comment_count'] > 0): ?>
						<span class="sub-icn sub-icn-comment"><?php echo $value['comment_count'];?></span>
					<?php endif;?>
				</p>
				
				<?php echo text_output(word_limiter($value['content'], 50));?>
				
				<hr>
			</div>
		<?php endforeach; ?>
	</div>
<?php else: ?>
	<?php echo text_output($label['nonews'], 'p', 'alert');?>

	<?php if (Auth::is_logged_in()): ?>
		<?php echo text_output($label['createnews'], 'p', 'muted lead');?>
	<?php endif;?>
<?php endif;?>