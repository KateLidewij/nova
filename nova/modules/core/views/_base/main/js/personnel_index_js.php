<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* strip out the comma from the string */
$manifest_default_values = str_replace(',', '', $manifest_defaults);

if(isset($display))
{
	if($display == "crew")
	{
		$manifest_default_values = "$('tr.open').hide();";
		$manifest_default_values.= "$('tr.npc').hide();";
	}
	if($display == "npcs")
	{
		$manifest_default_values = "$('tr.active').hide();";
		$manifest_default_values.= "$('tr.npc').show();";
	}
	if($display == "past")
	{
		$manifest_default_values = "$('tr.active').hide();";
		$manifest_default_values.= "$('tr.inactive').show();";
	}
	if($display == "open")
	{
		$manifest_default_values = "$('tr.active').hide();";
		$manifest_default_values.= "$('tr.open').show();";
	}
}

?>

<script type="text/javascript">
	$(document).ready(function() {
		<?php echo $manifest_default_values; ?>
		
		$('#all').click(function() {
			$('tr.inactive').hide();
			$('tr.open').hide();
			$('#top-open').hide();
			
			$('tr.active').show();
			$('tr.npc').show();
			return false;
		});
		
		$('#active').click(function() {
			$('tr.inactive').hide();
			$('tr.npc').hide();
			$('tr.open').hide();
			$('#top-open').hide();
			
			$('tr.active').show();
			return false;
		});
		
		$('#npc').click(function() {
			$('tr.inactive').hide();
			$('tr.active').hide();
			$('tr.open').hide();
			$('#top-open').hide();
			
			$('tr.npc').show();
			return false;
		});
		
		$('#inactive').click(function() {
			$('tr.active').hide();
			$('tr.npc').hide();
			$('tr.open').hide();
			$('#top-open').hide();
			
			$('tr.inactive').show();
			return false;
		});
		
		$('#open').click(function() {
			$('tr.active').hide();
			$('tr.npc').hide();
			$('tr.inactive').hide();
			
			$('tr.open').show();
			$('#top-open').show();
			return false;
		});
		
		$('#toggle_open').click(function() {
			$('tr.open').toggle();
			return false;
		});
		
		$('#toggle_npc').click(function() {
			$('tr.npc').toggle();
			return false;
		});

		$('[rel="tooltip"]').tooltip({
			placement: 'top'
		});
		
		$('#loader').hide();
		$('#manifest').removeClass('hidden');
	});
</script>