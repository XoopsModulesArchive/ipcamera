<?php
function b_ipcamera_main_show () {
	global $xoopsConfig;
	$relative = $xoopsConfig["root_path"]."modules/ipcamera/";
	include($relative."container.php");
	$block["all"] = $display;
	return $block;
}
?>