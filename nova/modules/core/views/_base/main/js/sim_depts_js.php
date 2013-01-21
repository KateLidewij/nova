<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('.toggle').click(function(){
			var id = $(this).data('id');
			var div = '#' + id;
			
			if ($(div).is(':visible'))
			{
				$(div).slideUp('fast');
				$(this).html('<?php echo ucwords(lang("actions_show")." ".lang("global_positions"));?>');
			}
			else
			{
				$(div).slideDown('fast');
				$(this).html('<?php echo ucwords(lang("actions_hide")." ".lang("global_positions"));?>');
			}
			
			return false;
		});
	});
</script>