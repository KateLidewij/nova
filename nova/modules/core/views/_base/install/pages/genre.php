<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row">
	<div class="span8 offset2">
		<div class="well">
			<div class="inner">
				<h3><?php echo $header;?></h3>

				<p><?php echo $label['text'];?></p>

				<?php echo form_open('install/genre/verify');?>
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input type="email" name="email" id="email" class="span4">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Password</label>
						<div class="controls">
							<input type="password" name="password" id="password" class="span4">
						</div>
					</div>
			</div>

				<div class="controls">
					<button type="submit" name="submit" class="btn btn-large btn-block btn-primary">Submit</button>
				</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>