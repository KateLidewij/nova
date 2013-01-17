<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<div class="btn-group">
	<?php echo link_to_if($edit_valid, 'user/account/'. $userid, img(Location::img('icon-edit.png', $this->skin, 'main')), array('class' => 'btn'));?>
</div>

<?php if (isset($msg_error)): ?>
	<?php echo text_output($msg_error, 'p', 'alert');?>
<?php else: ?>
	<div class="control-group">
		<label class="control-label"><?php echo $label['name'];?></label>
		<div class="controls"><?php echo $name;?></div>
	</div>
	<div class="control-group">
		<label class="control-label"><?php echo $label['email'];?></label>
		<div class="controls"><?php echo $email;?></div>
	</div>
	<div class="control-group">
		<label class="control-label"><?php echo $label['timezone'];?></label>
		<div class="controls">
			<?php echo $timezone;?>
			<p class="help-block"><?php echo $timezone_span;?></p>
		</div>
	</div>
	
	<ul class="nav nav-tabs" id="tabs">
		<li><a href="#one" data-toggle="tab"><?php echo $label['basicinfo'];?></a></li>
		<li><a href="#two" data-toggle="tab"><?php echo $label['stats'];?></a></li>
		<li><a href="#three" data-toggle="tab"><?php echo $label['charinfo'];?></a></li>
		<li><a href="#four" data-toggle="tab"><?php echo $label['rankhistory'];?></a></li>
		<li><a href="#five" data-toggle="tab"><?php echo $label['postinginfo'];?></a></li>
		<li><a href="#six" data-toggle="tab"><?php echo $label['awards'];?></a></li>
	</ul>

	<div class="tab-content">
		<!-- BASIC INFO -->
		<div id="one" class="tab-pane">
			<?php if ( ! empty($dob)): ?>
				<div class="control-group">
					<label class="control-label"><?php echo $label['dob'];?></label>
					<div class="controls"><?php echo $dob;?></div>
				</div>
			<?php endif;?>
			
			<?php if ( ! empty($location)): ?>
				<div class="control-group">
					<label class="control-label"><?php echo $label['location'];?></label>
					<div class="controls"><?php echo $location;?></div>
				</div>
			<?php endif;?>
			
			<?php if (count($im) > 0): ?>
				<div class="control-group">
					<label class="control-label"><?php echo $label['im'];?></label>
					<div class="controls"><?php foreach ($im as $value): ?></div>
						<?php echo $value;?><br>
					<?php endforeach;?>
				</div>
			<?php endif;?>
			
			<?php if ( ! empty($interests)): ?>
				<div class="control-group">
					<label class="control-label"><?php echo $label['interests'];?></label>
					<div class="controls"><?php echo text_output($interests, '');?></div>
				</div>
			<?php endif;?>
			
			<?php if ( ! empty($bio)): ?>
				<div class="control-group">
					<label class="control-label"><?php echo $label['bio'];?></label>
					<div class="controls"><?php echo text_output($bio, '');?></div>
				</div>
			<?php endif;?>
			
			<?php if (empty($dob) and empty($location) and count($im) == 0 and empty($interests) and empty($bio)): ?>
				<?php echo text_output($label['nobasic'], 'p', 'alert');?>
			<?php endif;?>
		</div> <!-- end BASIC INFO -->
		
		<!-- STATS -->
		<div id="two" class="tab-pane">
			<div class="control-group">
				<label class="control-label"><?php echo $label['joined'];?></label>
				<div class="controls">
					<?php echo $join_date_time;?>
					<p class="help-block"><?php echo $join_date;?></p>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo $label['lastlogin'];?></label>
				<div class="controls">
					<?php if (isset($last_login_time)): ?>
						<?php echo $last_login_time;?>
						<p class="help-block"><?php echo $last_login;?></p>
					<?php else: ?>
						<?php echo text_output($label['nologin'], 'span', 'label label-warning');?>
					<?php endif;?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo $label['lastpost'];?></label>
				<div class="controls">
					<?php if (isset($last_post_time)): ?>
						<?php echo $last_post_time;?>
						<p class="help-block"><?php echo $last_post;?></p>
					<?php else: ?>
						<?php echo text_output($label['nopost'], 'span', 'label label-warning');?>
					<?php endif;?>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label"><?php echo $label['totalposts'];?></label>
				<div class="controls">
					<?php echo $post_count;?>
					<p class="help-block"><?php echo $label['average'].' '.$avg_posts.' '.$label['perweek'];?></p>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo $label['totallogs'];?></label>
				<div class="controls">
					<?php echo $log_count;?>
					<p class="help-block"><?php echo $label['average'].' '.$avg_logs.' '.$label['perweek'];?></p>
				</div>
			</div>
		</div> <!-- end STATS -->
		
		<!-- CHARACTER INFO -->
		<div id="three" class="tab-pane">
			<legend><?php echo $label['activechars'];?></legend>
			<?php if (isset($characters['active'])): ?>
				<dl>
				<?php foreach ($characters['active'] as $a): ?>
					<dt><?php echo anchor('personnel/character/'.$a['id'], $a['name']);?></dt>
					<dd class="muted"><?php echo $label['activefor'] .' '. $a['active_time'];?></dd>
					<dd class="muted"><?php echo $a['active_date'];?></dd>
				<?php endforeach; ?>
				</dl>
			<?php else: ?>
				<?php echo text_output($label['none'], 'p', 'alert');?>
			<?php endif;?>
		
			<legend><?php echo $label['npcs'];?></legend>
			<?php if (isset($characters['npcs'])): ?>
				<dl>
				<?php foreach ($characters['npcs'] as $n): ?>
					<dt><?php echo anchor('personnel/character/'.$n['id'], $n['name']);?></dt>
				<?php endforeach; ?>
				</dl>
			<?php else: ?>
				<?php echo text_output($label['none'], 'p', 'alert');?>
			<?php endif;?>
		
			<legend><?php echo $label['inactivechars'];?></legend>
			<?php if (isset($characters['inactive'])): ?>
				<dl>
				<?php foreach ($characters['inactive'] as $i): ?>
					<dt><?php echo anchor('personnel/character/'.$i['id'], $i['name']);?></dt>
				<?php endforeach; ?>
				</dl>
			<?php else: ?>
				<?php echo text_output($label['none'], 'p', 'alert');?>
			<?php endif;?>
		</div> <!-- end CHARACTER INFO -->
		
		<!-- RANK HISTORY -->
		<div id="four" class="tab-pane">
			<?php if (is_array($rank_history) and count($rank_history) > 0): ?>
				<?php foreach ($rank_history as $row): ?>
					<legend><?php echo $row['name'];?></legend>
					
					<dl>
					<?php foreach ($row['history'] as $item): ?>
						<dt>
							<?php if ($item['old_order'] > $item['new_order']): ?>
								<?php echo $label['promoted'];?>
								<?php echo $item['new_rank'];?>
								<?php echo $label['from'];?>
								<?php echo $item['old_rank'];?>
							<?php else: ?>
								<?php echo $label['demoted'];?>
								<?php echo $item['old_rank'];?>
								<?php echo $label['to'];?>
								<?php echo $item['new_rank'];?>
							<?php endif;?>
						</dt>
						<dd class="muted"><?php echo $item['date'];?></dd>
					<?php endforeach;?>
					</dl>
				<?php endforeach;?>
			<?php else: ?>
				<?php echo text_output($label['norankhistory'], 'p', 'alert');?>
			<?php endif;?>
		</div> <!-- end RANK HISTORY -->
		
		<!-- POSTING INFO -->
		<div id="five" class="tab-pane">
			<ul class="nav nav-pills" id="subnav">
				<?php if (isset($posts)): ?>
					<li><a href="#sub_posts" data-toggle="pill"><?php echo $label['missionposts'];?></a></li>
				<?php endif;?>

				<?php if (isset($logs)): ?>
					<li><a href="#sub_logs" data-toggle="pill"><?php echo $label['personallogs'];?></a></li>
				<?php endif;?>

				<?php if (isset($news)): ?>
					<li><a href="#sub_news" data-toggle="pill"><?php echo $label['newsitems'];?></a></li>
				<?php endif;?>
			</ul>

			<div class="pill-content">
				<div id="sub_posts" class="pill-pane">
					<?php if (isset($posts)): ?>
						<?php echo anchor('personnel/viewposts/u/'. $userid, $label['viewposts'], array('class' => 'btn btn-small pull-right'));?>
					<?php endif;?>

					<h2><?php echo $label['missionposts'];?></h2>

					<?php if (isset($posts)): ?>
						<dl>
						<?php foreach ($posts as $p): ?>
							<dt><?php echo anchor('sim/viewpost/'. $p['post_id'], $p['title']);?></dt>
							<dd class="muted"><span class="sub-icn sub-icn-user"><?php echo $p['authors'];?></span></dd>
							<dd class="muted">
								<span class="sub-icn sub-icn-category"><?php echo anchor('sim/missions/id/'. $p['mission_id'], $p['mission']);?></span>
								<span class="sub-icn sub-icn-date"><?php echo $p['date'];?></span>
							</dd>
						<?php endforeach; ?>
						</dl>
					<?php else: ?>
						<?php echo text_output($label['noposts'], 'p', 'alert');?>
					<?php endif; ?>
				</div>

				<div id="sub_logs" class="pill-pane">
					<?php if (isset($logs)): ?>
						<?php echo anchor('personnel/viewlogs/u/'. $userid, $label['viewlogs'], array('class' => 'btn btn-small pull-right'));?>
					<?php endif;?>

					<?php echo text_output($label['personallogs'], 'h2');?>
					
					<?php if (isset($logs)): ?>
						<dl>
						<?php foreach ($logs as $l): ?>
							<dt><?php echo anchor('sim/viewlog/'. $l['log_id'], $l['title']);?></dt>
							<dd class="muted"><span class="sub-icn sub-icn-user"><?php echo $l['author'];?></span></dd>
							<dd class="muted"><span class="sub-icn sub-icn-date"><?php echo $l['date'];?></span></dd>
						<?php endforeach; ?>
						</dl>
					<?php else: ?>
						<?php echo text_output($label['nologs'], 'p', 'alert');?>
					<?php endif; ?>
				</div>

				<div id="sub_news" class="pill-pane">
					<?php if (isset($news)): ?>
						<?php echo anchor('personnel/viewnews/u/'.$userid, $label['viewnews'], array('class' => 'btn btn-small pull-right'));?>
					<?php endif;?>

					<?php echo text_output($label['newsitems'], 'h2');?>
					
					<?php if (isset($news)): ?>
						<dl>
						<?php foreach ($news as $n): ?>
							<dt><?php echo anchor('main/viewnews/'.$n['news_id'], $n['title']);?></dt>
							<dd class="muted"><span class="sub-icn sub-icn-user"><?php echo $n['author'];?></span></dd>
							<dd class="muted">
								<span class="sub-icn sub-icn-category"><?php echo $n['category'];?></span>
								<span class="sub-icn sub-icn-date"><?php echo $n['date'];?></span></dd>
						<?php endforeach; ?>
						</dl>
					<?php else: ?>
						<?php echo text_output($label['nonews'], 'p', 'alert');?>
					<?php endif; ?>
				</div>
			</div>
		</div> <!-- end POSTING INFO -->
		
		<!-- AWARDS -->
		<div id="six" class="tab-pane">
			<?php if (isset($awards)): ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><?php echo $label['award'];?></th>
							<th><?php echo $label['reason'];?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($awards as $a): ?>
						<tr>
							<td class="span4">
								<p><strong><?php echo anchor('sim/awards/'.$a['award_id'], $a['award']);?></strong></p>

								<p class="muted"><span class="sub-icn sub-icn-user"><?php echo $a['name'];?></span></p>
								<p class="muted"><span class="sub-icn sub-icn-date"><?php echo $a['given'];?></span></p>
							</td>
							<td><?php echo text_output($a['reason'], '');?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<div class="btn-group">
					<?php echo anchor('personnel/viewawards/u/'.$userid, $label['viewawards'], array('class' => 'btn btn-small'));?>
				</div>
			<?php else: ?>
				<?php echo text_output($label['noawards'], 'p', 'alert');?>
			<?php endif; ?>
		</div> <!-- end AWARDS -->
	</div>
<?php endif;?>