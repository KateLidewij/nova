<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo link_to_if($edit_valid, 'site/messages', $label['edit'], array('class' => 'btn btn-mini pull-right'));?>

<h1><?php echo $header;?></h1>

<p><?php echo $msg_credits_perm;?></p>

<p><?php echo $msg_credits_perm_skin;?></p>

<p><?php echo $msg_credits_perm_rank;?></p>

<hr>

<p><?php echo $msg_credits;?></p>