<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#tabs a:first').tab('show');

		$('#nextTab').click(function(){
			
			// Find the active tab
			var active = $("#tabs li.active");

			// Show the next tab
			active.next().children('a').tab('show');
			
			return false;
		});
		
		$('#submitJoin').click(function(){
			return confirm('<?php echo lang('confirm_join');?>');
		});
		
		$('#position').change(function(){
			
			var id = $('#position option:selected').val();
			
			$('#loading_update').ajaxStart(function(){
				$(this).show();
			});
			
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('ajax/info_show_position_desc');?>",
				data: { position: id, 'nova_csrf_token': $('input[name=nova_csrf_token]').val() },
				success: function(data){
					$('#position_desc').html('');
					$('#position_desc').append(data);
				}
			});
			
			$('#loading_update').ajaxStop(function(){
				$(this).hide();
			});
			
			return false;
		});
	});
</script>