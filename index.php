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

include ('../../mainfile.php');
include ('../../header.php');

OpenTable();


$thename = $xoopsModule->vars["name"]["value"];
echo "\n<div style=\"padding: 1px;\">
<fieldset>
<legend class=\"blockTitle\">".$thename."</legend>
<div class=\"blockContent\" align=\"center\">
&nbsp;";

$relative = "";
include("container.php");
echo $display;

echo "</div>
</fieldset>";

CloseTable();
include XOOPS_ROOT_PATH.'/footer.php';
?>