<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1><?php echo $header;?></h1>

<p><?php echo link_to_if($edit_valid, 'site/messages', $label['edit'], array('class' => 'edit fontSmall bold'));?></p>

<?php echo content_output($msg_credits_perm);?>

<hr>

<?php echo content_output($msg_credits);?>