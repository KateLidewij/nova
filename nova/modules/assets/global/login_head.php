<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Login Header
 *
 * @package		Nova
 * @category	Assets
 * @author		Anodyne Productions
 * @copyright	2013 Anodyne Productions
 */

$path = explode('/', dirname(__FILE__));

// Windows servers user back slashes, so we have to capture for that
if (count($path) <= 1)
	$path = explode('\\', dirname(__FILE__));

$pcount = count($path);
$skinLoc = $pcount -1;
$currentSkin = $path[$skinLoc];

$bootstrapCss = ( ! is_file(APPPATH."views/$currentSkin/login/css/bootstrap.css"))
	? base_url().MODFOLDER.'/assets/js/css/bootstrap.min.css'
	: base_url().APPFOLDER."/views/$currentSkin/login/css/bootstrap.css";

$globalCss = ( ! is_file(APPPATH."views/$currentSkin/login/css/structure.css"))
	? base_url().MODFOLDER.'/core/views/_base/global.css'
	: base_url().APPFOLDER."/views/$currentSkin/login/css/structure.css";

?><style type="text/css">
			@import url('<?php echo $bootstrapCss;?>');
			@import url('<?php echo $globalCss;?>');
		</style>