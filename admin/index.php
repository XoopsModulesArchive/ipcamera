<?php
///////////////////////////////////////////////////////////////////////////////
//                                                                           //
// IpCamera module for XOOPS                                                 //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  Author: F.Cosso <contacto@fernandocosso.com.ar>                          //
//                                                                           //
///////////////////////////////////////////////////////////////////////////////
include "../../../include/cp_header.php";
include "../functions.php";
function display_menu() {
	$data = set_params("../config.dat", false);
	if (false === $data) {
		$url  = "";
		$size = array ("width"=>"", "hight"=>"");
		$desc = "";
	} else {
		$url  = $data["url"];
		$size = array ("width"=>$data["width"], "height"=>$data["height"]);
		$desc = $data["desc"];
	}
	echo "<form action=\"#\" method=\"post\">
	<table class=\"outer\">
	<tr>
	<th colspan=\"2\">"._MD_IPCAMERA_ADM1."</th>
	</tr><tr>
	<td class=\"head\">"._MD_IPCAMERA_ADM2.":</td>
	<td class=\"even\"><input type=\"text\" name=\"url\" size=\"50\" value=\"".$url."\" /></td>
	</tr><tr>
	<td class=\"head\">"._MD_IPCAMERA_ADM3.":</td>
	<td class=\"even\"><input type=\"text\" name=\"width\" size=\"3\" value=\"".$size["width"]."\" /></td>
	</tr><tr>
	<td class=\"head\">"._MD_IPCAMERA_ADM4.":</td>
	<td class=\"even\"><input type=\"text\" name=\"height\" size=\"3\" value=\"".$size["height"]."\" /></td>
	</tr><tr>
	</tr><tr>
	<td class=\"head\">"._MD_IPCAMERA_ADM11.":</td>
	<td class=\"even\"><textarea name=\"desc\">".$desc."</textarea></td>
	</tr><tr>
	<td class=\"head\"></td>	
	<td class=\"even\">&nbsp;</td>
	</tr><tr>
	<td class=\"head\"></td>
	<td class=\"even\"><input type=\"submit\" name= \"checker\" value=\""._MD_IPCAMERA_ADM5."\" /></td>
	</tr>
	</table>
	</form>\n";
}
function display_results() {
	if (@$_POST["url"] == "") {
		echo "<p>"._MD_IPCAMERA_ADM6."</p>\n";
		display_menu();
		return;
	}
	if (@$_POST["width"] == "" || @$_POST["height"] == "") {
		echo "<p>"._MD_IPCAMERA_ADM7."</p>\n";
		display_menu();
		return;
	}
	if (@$_POST["desc"] == "") {
		echo "<p>"._MD_IPCAMERA_ADM12."</p>\n";
		display_menu();
		return;
	}
	$data = array( "url"    =>$_POST["url"],
				   "height" =>$_POST["height"],
				   "width"  =>$_POST["width"],
				   "desc"   =>$_POST["desc"],
					);
	echo set_params("../config.dat", true, $data);
}
xoops_cp_header();
OpenTable();
echo "<h4>"._MD_IPCAMERA_ADM8."</h4>\n";
if (isset($_POST["checker"]))
	display_results();
else
	display_menu();
CloseTable();
xoops_cp_footer(); 
?>