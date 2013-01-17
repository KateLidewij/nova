<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">
	/*a.image { display: inline-block; }
	a.image span { padding: 0px; display: inline-block; }
	a.image span img { margin: 0px; padding: 0px; }
	
	.pp_pic_holder a {
		text-decoration: none;
		border-bottom: none;
	}*/
</style>

<div class="row">
	<?php if (isset($character)): ?>
		<div class="span3">
			<?php if (isset($character['image']['src'])): ?>
				<ul class="gallery thumbnails">
					<li class="span3"><div class="thumbnail"><a href="<?php echo $character['image']['src'];?>" class="image" rel="prettyPhoto[gallery]"><?php echo img($character['image']);?></a></div></li>
					
					<?php if (count($character['image_array']) > 0): ?>
						<?php foreach ($character['image_array'] as $image): ?>
							<li class="hide"><a href="<?php echo $image['src'];?>" class="image" rel="prettyPhoto[gallery]"><?php echo img($image);?></a></li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			<?php else: ?>
				<ul class="gallery thumbnails">
					<li class="span3"><div class="thumbnail"><?php echo img($character['noavatar']);?></div></li>
				</ul>
			<?php endif;?>
			
			<div class="btn-group-vertical btn-block">
				<?php if ($postcount > 0): ?>
					<?php echo anchor('personnel/viewposts/c/'.$character['id'], img(Location::img('write-post.png', $this->skin, 'main')).' '.$label['view_all_posts'], array('class' => 'btn'));?>
				<?php endif;?>
				
				<?php if ($logcount > 0): ?>
					<?php echo anchor('personnel/viewlogs/c/'.$character['id'], img(Location::img('write-post.png', $this->skin, 'main')).' '.$label['view_all_logs'], array('class' => 'btn'));?>
				<?php endif;?>
				
				<?php if ($awardcount > 0): ?>
					<?php echo anchor('personnel/viewawards/c/'.$character['id'], img(Location::img('medal.png', $this->skin, 'main')).' '.$label['view_all_awards'], array('class' => 'btn'));?>
				<?php endif;?>
				
				<?php if (Auth::is_logged_in() and $character['user'] !== null): ?>
					<?php echo anchor('personnel/user/'.$character['user'], img(Location::img('user.png', $this->skin, 'main')).' '.$label['view_user'], array('class' => 'btn'));?>
				<?php endif;?>
				
				<?php if ($edit_valid): ?>
					<?php echo anchor('characters/bio/'.$character['id'], img(Location::img('icon-edit.png', $this->skin, 'main')).' '.$label['edit'], array('class' => 'btn'));?>
				<?php endif;?>
			</div>
			
			<?php if ($postcount > 0 or $logcount > 0 or $newscount > 0): ?>
				<h3><?php echo $label['stats'];?></h3>
				
				<ul class="unstyled">
					<?php if ($postcount > 0): ?>
						<li><strong><?php echo $postcount;?></strong> <?php echo $label['mission_posts'];?></li>
					<?php endif;?>
					
					<?php if ($logcount > 0): ?>
						<li><strong><?php echo $logcount;?></strong> <?php echo $label['personal_logs'];?></li>
					<?php endif;?>
					
					<?php if ($newscount > 0): ?>
						<li><strong><?php echo $newscount;?></strong> <?php echo $label['news_items'];?></li>
					<?php endif;?>
				</ul>
			<?php endif;?>
			
			<h3><?php echo $label['last_post'];?></h3>
			
			<p><?php echo $last_post;?></p>
		</div>
		
		<div class="span7">
			<h1><?php echo $header;?></h1>
			
			<?php if (isset($msg_error)): ?>
				<?php echo text_output($msg_error, 'p', 'alert alert-error');?>
			<?php endif;?>
			
			<?php if (isset($character_info)): ?>
				<?php foreach ($character_info as $a): ?>
					<?php if ( ! empty($a['value'])): ?>
						<div class="control-group">
							<label class="control-label"><?php echo $a['label'];?></label>
							<div class="controls"><?php echo $a['value'];?></div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endif;?>
			
			<?php if (isset($tabs)): ?>
				<ul class="nav nav-tabs" id="tabs">
					<?php foreach ($tabs as $value): ?>
						<li><a href="#<?php echo $value['link'];?>" data-toggle="tab"><?php echo $value['name'];?></a></li>
					<?php endforeach; ?>
				</ul>

				<div class="tab-content">
					<?php foreach ($tabs as $id): ?>
						<div id="<?php echo $id['link'];?>" class="tab-pane">
							<?php if (isset($sections)): ?>
								<?php foreach ($sections[$id['id']] as $a): ?>
									<?php if ( ! empty($a['name'])): ?>
										<legend><?php echo $a['name'];?></legend>
									<?php endif;?>
									
									<?php if (isset($fields[$a['id']])): ?>
										<?php foreach ($fields[$a['id']] as $b): ?>
											<?php if ( ! empty($b['value'])): ?>
												<div class="control-group">
													<label class="control-label"><?php echo $b['label'];?></label>
													<div class="controls"><?php echo text_output($b['value'], '');?></div>
												</div>
											<?php endif;?>
										<?php endforeach;?>
									<?php endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php else: ?>
				<?php if (isset($sections)): ?>
					<?php foreach ($sections as $a): ?>
						<?php if ( ! empty($a['name'])): ?>
							<legend><?php echo $a['name'];?></legend>
						<?php endif;?>
						
						<?php if (isset($fields[$a['id']])): ?>
							<?php foreach ($fields[$a['id']] as $b): ?>
								<?php if ( ! empty($b['value'])): ?>
									<div class="control-group">
										<label class="control-label"><?php echo $b['label'];?></label>
										<div class="controls"><?php echo text_output($b['value'], '');?></div>
									</div>
								<?php endif;?>
							<?php endforeach;?>
						<?php endif;?>
					<?php endforeach;?>
				<?php endif;?>
			<?php endif;?>
		</div>
	<?php else: ?>
		<div class="span10">
			<h1><?php echo $header;?></h1>
			
			<?php echo text_output($msg_error);?>
		</div>
	<?php endif;?>
</div>