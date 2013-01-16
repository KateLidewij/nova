<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<script type="text/javascript">
	$(document).ready(function(){
		
		$("#tabs a:first").tab('show');
		
		$("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'dark_rounded',
			social_tools: '<div class="pp_social"></div>'
		});
	});
</script>