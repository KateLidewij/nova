<div class="controls pull-right">
	<div class="input-prepend">
		<span class="add-on"><div class="icn icn16 icn-50" data-icon="s"></div></span><input type="text" id="user-search" class="span4" placeholder="<?php echo lang('action.search for users', 1);?>">
	</div>
</div>

<div class="btn-toolbar">
	<div class="btn-group">
		<?php if (Sentry::user()->hasAccess('user.create')): ?>
			<a href="#" class="btn tooltip-top user-action" data-action="create" title="<?php echo lang('action.add user', 1);?>"><div class="icn icn-75" data-icon="+"></div></a>
		<?php endif;?>

		<?php if (Sentry::user()->hasLevel('user.update', 2)): ?>
			<a href="#" class="btn tooltip-top user-action" data-action="link" title="<?php echo lang('action.link character to user', 1);?>"><div class="icn icn-75" data-icon="-"></div></a>
		<?php endif;?>
	</div>
</div><br>

<div id="actives">
	<table class="table table-striped" id="users-active">
		<tbody>
		<?php foreach($active as $a): ?>
			<tr>
				<td>
					<span class="lead"><?php echo $a->name;?></span><br>
					<span class="muted"><?php echo $a->email;?></span>
				</td>
				<td class="span2">
					<div class="btn-toolbar pull-right">
						<?php if ((Sentry::user()->hasLevel('user.update', 1) and Sentry::user()->id == $a->id)
								or Sentry::user()->hasLevel('user.update', 2)): ?>
							<div class="btn-group">
								<a href="<?php echo Uri::create('admin/user/edit/'.$a->id);?>" class="btn btn-mini tooltip-top" title="<?php echo lang('action.edit user', 1);?>"><div class="icn icn-50" data-icon="p"></div></a>
							</div>
						<?php endif;?>

						<?php if (Sentry::user()->hasAccess('user.delete')): ?>
							<div class="btn-group">
								<a href="#" class="btn btn-mini btn-danger tooltip-top user-action" title="<?php echo lang('action.delete user', 1);?>" data-action="delete" data-id="<?php echo $a->id;?>"><div class="icn icn-50" data-icon="x"></div></a>
							</div>
						<?php endif;?>
					</div>
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>

<div id="all" class="hide">
	<p><em><?php echo lang('[[short.users.done_searching|active|users]]');?></em></p>
	
	<div id="results" class="hide">
		<div id="results-name" class="hide">
			<h3><?php echo lang('results by name', 1);?></h3>
			<ul class="unstyled"></ul>
		</div>
		
		<div id="results-email" class="hide">
			<h3><?php echo lang('results by email_address', 2);?></h3>
			<ul class="unstyled"></ul>
		</div>
		
		<div id="results-characters" class="hide">
			<h3><?php echo lang('results by action.linked characters', 2);?></h3>
			<ul class="unstyled"></ul>
		</div>
	</div>
	
	<div id="no-results" class="hide">
		<p class="alert"><?php echo lang('[[error.not_found|results]]');?></p>
	</div>
</div>