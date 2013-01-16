<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('a.show').click(function() {
			var id = $(this).data('id');
			var header = $(this).data('title');
			
			$('.news').hide();
			$('h1.page-head').html(header);
			$('.' + id).show();
			
			return false;
		});
		
		$('a.all').click(function(){
			var header = $(this).data('title');
			
			$('h1.page-head').html(header);
			$('.news').show();
			
			return false;
		});
		
		$('#loader').hide();
		$('#news').removeClass('hidden');
	});
</script>