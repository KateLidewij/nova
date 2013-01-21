<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if ($private == 'y' and ! Auth::is_logged_in()): ?>
	<h1><?php echo $label['error_pagetitle'];?></h1>
	<?php echo text_output($label['error_private_news'], 'p', 'alert alert-error');?>
<?php else: ?>
	<h1><?php echo $title;?></h1>
	
	<div class="btn-toolbar">
		<?php if (isset($next) or isset($prev)): ?>
			<div class="btn-group">
				<?php if (isset($prev)): ?>
					<?php echo anchor('main/viewnews/'.$prev, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
				<?php endif; ?>
				
				<?php if (isset($next)): ?>
					<?php echo anchor('main/viewnews/'.$next, img(Location::img('next.png', $this->skin, 'main')), array('class' => 'btn'));?>
				<?php endif; ?>
			</div>
		<?php endif;?>

		<?php if ($edit_valid): ?>
			<div class="btn-group">
				<?php echo anchor('manage/news/edit/'.$id, img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
			</div>
		<?php endif;?>

		<div class="btn-group">
			<?php if (isset($comments) and is_array($comments)): ?>
				<a class="btn" href="#comments"><?php echo img(Location::img('comment.png', $this->skin, 'main'));?></a>
			<?php endif;?>

			<?php if (Auth::is_logged_in()): ?>
				<a class="btn" href="#" id="add_comment" rel="facebox" data-id="<?php echo $news_id;?>"><?php echo img(Location::img('comment-add.png', $this->skin, 'main'));?></a>
			<?php endif;?>
		</div>

		<div class="btn-group">
			<?php echo anchor('feed/news', img(Location::img('feed.png', $this->skin, 'main')), array('class' => 'btn'));?>
		</div>
	</div>
	
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
	
	<?php echo text_output($content);?>

	<div class="btn-toolbar">
		<?php if (isset($next) or isset($prev)): ?>
			<div class="btn-group">
				<?php if (isset($prev)): ?>
					<?php echo anchor('main/viewnews/'.$prev, img(Location::img('previous.png', $this->skin, 'main')), array('class' => 'btn'));?>
				<?php endif;?>
				
				<?php if (isset($next)): ?>
					<?php echo anchor('main/viewnews/'.$next, img(Location::img('next.png', $this->skin, 'main')), array('class' => 'btn'));?>
				<?php endif;?>
			</div>
		<?php endif;?>

		<div class="btn-group">
			<?php if (Auth::is_logged_in()): ?>
				<a class="btn" href="#" id="add_comment" rel="facebox" data-id="<?php echo $news_id;?>"><?php echo img(Location::img('comment-add.png', $this->skin, 'main'));?></a>
			<?php endif;?>
		</div>
	</div>

	<?php if (isset($comments) and is_array($comments)): ?>
		<a name="comments"></a><h2><?php echo $label['comments'].' (' . $comment_count . ')';?></h2>
		
		<?php foreach ($comments as $value): ?>
			<blockquote>
				<?php echo text_output($value['content']);?>

				<small>
					<span class="sub-icn sub-icn-user"><?php echo $value['author'];?></span>
					<span class="sub-icn sub-icn-date"><?php echo $value['date'];?></span>
				</small>
			</blockquote>
		<?php endforeach;?>
	<?php endif;?>
<?php endif;?>