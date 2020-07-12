<?php

include($relative."functions.php");
$data = set_params($relative."config.dat", false);

$display ="<script language=\"JavaScript\" type=\"text/javascript\">
function work(id) {
	if (id == 1) loader = 2;
	else		 loader = 1;
	rand = Math.random();
	path = \"".$xoopsConfig["xoops_url"]."/modules/ipcamera/\";
	document.getElementById(\"visor_\"+id).style.display     = \"block\";
	document.getElementById(\"visor_\"+loader).style.display = \"none\";
	document.getElementById(\"visor_\"+loader).src =path+\"gateway.php?\"+rand+\"=\"+rand;
}
function zoom (factor) {
	width  = document.getElementById(\"visor_1\").width*factor;
	height = document.getElementById(\"visor_1\").height*factor;
	document.getElementById(\"visor_1\").width  = width;
	document.getElementById(\"visor_2\").width  = width;
	document.getElementById(\"visor_1\").height = height;
	document.getElementById(\"visor_2\").height = height;
}
</script>";

//_MD_IPCAMERA_MAIN

if (false === $data)
	$display .= _MD_IPCAMERA_MAIN;
else
	$display .= "<img alt=\"Error: IpCamera offline\"  src=\"".$xoopsConfig["xoops_url"]."/modules/ipcamera/images/default.png\"  id=\"visor_1\" width=\"".$data["width"]."\" height=\"".$data["height"]."\" onload=\"work(1)\" style=\"display:none\" />
<img alt=\"Error: IpCamera offline\"  src=\"".$xoopsConfig["xoops_url"]."/modules/ipcamera/images/default.png\"  id=\"visor_2\" width=\"".$data["width"]."\" height=\"".$data["height"]."\" onload=\"work(2)\" style=\"display:none\" />
<img alt=\"zoom in\"  src=\"".$xoopsConfig["xoops_url"]."/modules/ipcamera/images/zoom_in.png\"  onclick=\"zoom(1.25)\" /><img alt=\"zoom out\" src=\"".$xoopsConfig["xoops_url"]."/modules/ipcamera/images/zoom_out.png\" onclick=\"zoom(0.75)\" />
<p>".nl2br($data["desc"])."</p>\n";
?>