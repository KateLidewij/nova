<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row">
	<div class="span10 offset1">
		<div class="well">
			<div class="inner">
				<h3><?php echo $header;?></h3>

				<p><?php echo $label['genre_inst'];?></p>

				<?php echo form_open('install/genre/change');?>
					<?php foreach ($files as $f): ?>
						<label class="radio">
							<input type="radio" name="genre" value="<?php echo $f;?>" id="<?php echo $f;?>">
							<?php echo $f;?>
						</label>
					<?php endforeach;?>
			</div>

				<div class="controls">
					<button type="submit" name="submit" class="btn btn-large btn-block btn-primary">Submit</button>
				</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>