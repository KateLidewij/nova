<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<h4><?php echo $label['personnel'];?></h4>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th><?php echo $label['lastmonth'];?></th>
			<th></th>
			<th><?php echo $label['thismonth'];?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="span3 lead"><?php echo $users['previous'];?></td>
			<td class="align_center span4"><?php echo $label['users'];?></td>
			<td class="span3 lead"><?php echo $users['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead"><?php echo $characters['previous'];?></td>
			<td class="align_center span4"><?php echo $label['playing_chars'];?></td>
			<td class="span3 lead"><?php echo $characters['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead"><?php echo $npcs['previous'];?></td>
			<td class="align_center span4"><?php echo $label['npcs'];?></td>
			<td class="span3 lead"><?php echo $npcs['current'];?></td>
		</tr>
	</tbody>
</table>

<h4><?php echo $label['posting'];?></h4>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th><?php echo $label['lastmonth'];?></th>
			<th></th>
			<th><?php echo $label['thismonth'];?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="span3 lead"><?php echo $posts['previous'];?></td>
			<td class="align_center span4"><?php echo $label['posts'];?></td>
			<td class="span3 lead"><?php echo $posts['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead"><?php echo $logs['previous'];?></td>
			<td class="align_center span4"><?php echo $label['logs'];?></td>
			<td class="span3 lead"><?php echo $logs['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead"><?php echo $post_totals['previous'];?></td>
			<td class="align_center span4"><?php echo $label['totals'];?></td>
			<td class="span3 lead"><?php echo $post_totals['current'];?></td>
		</tr>
	</tbody>
</table>

<h4><?php echo $label['averages'];?></h4>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th><?php echo $label['lastmonth'];?></th>
			<th></th>
			<th><?php echo $label['thismonth'];?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="span3 lead"><?php echo $avg_posts['previous'];?></td>
			<td class="align_center span4"><?php echo $label['avgposts'];?><sup>&dagger;</sup></td>
			<td class="span3 lead"><?php echo $avg_posts['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead"><?php echo $avg_logs['previous'];?></td>
			<td class="align_center span4"><?php echo $label['avglogs'];?><sup>&dagger;</sup></td>
			<td class="span3 lead"><?php echo $avg_logs['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead"><?php echo $avg_totals['previous'];?></td>
			<td class="align_center span4"><?php echo $label['avgentries'];?><sup>&dagger;</sup></td>
			<td class="span3 lead"><?php echo $avg_totals['current'];?></td>
		</tr>
		<tr>
			<td class="span3 lead">&mdash;</td>
			<td class="align_center span4"><?php echo $label['paceposts'];?><sup>&Dagger;</sup></td>
			<td class="span3 lead"><?php echo $pace['posts'];?></td>
		</tr>
		<tr>
			<td class="span3 lead">&mdash;</td>
			<td class="align_center span4"><?php echo $label['pacelogs'];?><sup>&Dagger;</sup></td>
			<td class="span3 lead"><?php echo $pace['logs'];?></td>
		</tr>
		<tr>
			<td class="span3 lead">&mdash;</td>
			<td class="align_center span4"><?php echo $label['pacetotal'];?><sup>&Dagger;</sup></td>
			<td class="span3 lead"><?php echo $pace['total'];?></td>
		</tr>
	</tbody>
</table>

<hr>

<?php echo text_output($label['statsavg'], 'p', 'muted');?>

<?php echo text_output($label['statspace'], 'p', 'muted');?>