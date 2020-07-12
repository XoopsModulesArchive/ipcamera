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
include("functions.php");
$pepe = rand();
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
$data = set_params("config.dat", false);
if (false === $data)
	header("Location: images/default.png");
else
	header("Location: ".$data["url"]."?".($pepe+$pepe/2)."=$pepe");
?>