<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Main Header
 *
 * @package		Nova
 * @category	Assets
 * @author		Anodyne Productions
 * @copyright	2011 Anodyne Productions
 */

$path = explode('/', dirname(__FILE__));

// Windows servers user back slashes, so we have to capture for that
if (count($path) <= 1)
	$path = explode('\\', dirname(__FILE__));

$pcount = count($path);
$skinLoc = $pcount -1;
$currentSkin = $path[$skinLoc];

$faceboxcss = ( ! is_file(APPPATH."views/$currentSkin/main/css/jquery.facebox.css"))
	? base_url().MODFOLDER.'/assets/js/css/jquery.facebox.css'
	: base_url().APPFOLDER."/views/$currentSkin/main/css/jquery.facebox.css";
	
$uiTheme = ( ! is_file(APPPATH ."views/$currentSkin/main/css/jquery.ui.theme.css"))
	? base_url().MODFOLDER.'/assets/js/css/jquery.ui.theme.css'
	: base_url().APPFOLDER."/views/$currentSkin/main/css/jquery.ui.theme.css";

$bootstrapCss = ( ! is_file(APPPATH."views/$currentSkin/main/css/bootstrap.css"))
	? base_url().MODFOLDER.'/assets/js/css/bootstrap.min.css'
	: base_url().APPFOLDER."/views/$currentSkin/main/css/bootstrap.css";

$globalCss = ( ! is_file(APPPATH."views/$currentSkin/main/css/structure.css"))
	? base_url().MODFOLDER.'/core/views/_base/global.css'
	: base_url().APPFOLDER."/views/$currentSkin/main/css/structure.css";

?><style type="text/css">
			@import url('<?php echo $bootstrapCss;?>');
			@import url('<?php echo $faceboxcss;?>');
			@import url('<?php echo $uiTheme;?>');
		</style>