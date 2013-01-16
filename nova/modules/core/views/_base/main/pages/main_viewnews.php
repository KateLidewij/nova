<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if ($private == 'y' and ! Auth::is_logged_in()): ?>
	<?php echo text_output($label['error_pagetitle'], 'h1', 'red');?>
	<?php echo text_output($label['error_private_news'], 'h4');?>
<?php else: ?>
	<?php if (isset($next) or isset($prev)): ?>
		<div class="btn-group pull-right">
			<?php if (isset($prev)): ?>
				<?php echo anchor('main/viewnews/'.$prev, img($images['prev']), array('class' => 'btn'));?>
			<?php endif; ?>
			
			<?php if (isset($next)): ?>
				<?php echo anchor('main/viewnews/'.$next, img($images['next']), array('class' => 'btn'));?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	
	<?php echo text_output($title, 'h1', 'page-head');?>
	
	<p><?php echo link_to_if($edit_valid, 'manage/news/edit/'.$id, $label['edit'], array('class' => 'edit fontSmall bold'));?></p>
	
	<p class="muted">
		<span class="sub-icn sub-icn-user"><?php echo $author;?></span>
		<span class="sub-icn sub-icn-category"><?php echo $category;?></span>
		<span class="sub-icn sub-icn-date"><?php echo $date;?></span>
	</p>
	<p class="muted">
		<?php if ( ! empty($tags)): ?>
			<span class="sub-icn sub-icn-tags"><?php echo $tags;?></span>
		<?php endif;?>
		
		<?php if (isset($update)): ?>
			<span class="sub-icn sub-icn-update"><?php echo $update;?></span>
		<?php endif;?>
	</p>
	
	<?php echo content_output($content);?>
	
	<?php if (isset($next) or isset($prev)): ?>
		<div class="btn-group pull-right">
			<?php if (isset($prev)): ?>
				<?php echo anchor('main/viewnews/'.$prev, img($images['prev']), array('class' => 'btn'));?>
			<?php endif; ?>
			
			<?php if (isset($next)): ?>
				<?php echo anchor('main/viewnews/'.$next, img($images['next']), array('class' => 'btn'));?>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="btn-group">
		<?php echo anchor('feed/news', img($images['feed']), array('class' => 'btn'));?>
	
		<?php if (Auth::is_logged_in()): ?>
			<a class="btn" href="#" id="add_comment" rel="facebox" data-id="<?php echo $news_id;?>"><?php echo img($images['comment']);?></a>
		<?php endif; ?>
	</div>
	
	<?php if (isset($comments) and is_array($comments)): ?>
		<a name="comments"></a><h2 class="page-subhead"><?php echo $label['comments'].' (' . $comment_count . ')';?></h2>
		
		<?php foreach ($comments as $value): ?>
			<blockquote>
				<?php echo nl2p($value['content']);?>

				<small>
					<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
					<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
				</small>
			</blockquote>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>