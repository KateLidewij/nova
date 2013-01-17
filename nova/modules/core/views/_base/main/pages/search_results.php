<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo text_output($header, 'h1', 'page-head');?>

<?php if (isset($msg)): ?>
	<?php echo text_output($msg, 'p', 'muted');?>
<?php endif; ?>

<p><?php echo anchor('search/index', $label['search'], array('class' => 'btn'));?></p>

<?php if (isset($msg)): ?>
	<hr>
<?php endif; ?>

<?php if (isset($results)): ?>
	<dl>
	<?php foreach ($results as $result): ?>
		<dt><?php echo $result['link'];?></dt>
		<dd><?php echo word_limiter(text_output($result['content']), 100);?></dd>
	<?php endforeach;?>
	</dl>
<?php else: ?>
	<?php echo text_output($label['noresult'], 'p', 'alert');?>
<?php endif; ?>