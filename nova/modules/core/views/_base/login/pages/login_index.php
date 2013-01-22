<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="page-header">
	<h1><?php echo $header;?></h1>
</div>

<?php echo form_open('login/check_login');?>
	<div class="control-group">
		<label class="control-label"><?php echo $label['email'];?></label>
		<div class="controls">
			<input type="email" name="email" id="email" autocomplete="off" placeholder="<?php echo $label['email'];?>" tabindex="1" class="span5">
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label"><?php echo $label['password'];?></label>
		<div class="controls">
			<input type="password" name="password" id="password" class="span5" placeholder="<?php echo $label['password'];?>" tabindex="2">
		</div>
	</div>
	
	<div class="control-group">
		<label class="checkbox">
			<input type="checkbox" value="yes" name="remember" id="remember" tabindex="3">
			<?php echo $label['remember'];?>
		</label>
	</div>
	
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-block btn-large btn-primary" name="login" value="login"><?php echo $label['login'];?></button>
		</div>
	</div>
<?php echo form_close();?>