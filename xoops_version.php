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
$modversion['name']        = "IpCamera";
$modversion['version']     = 0.26;
$modversion['description'] = "IpCamera allows your users to watch in real-time a Ip camera. It suits any kind of internet connection";
$modversion['author']      = "F. COSSO <yo@fernandocosso.com.ar>";
$modversion['license']     = "GNU GPL";
$modversion['image']       = "images/logo.png";
$modversion['dirname']     = "ipcamera";

$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu']  = "admin/menu.php";

$modversion['hasMain']    = 1;

// Blocks
$modversion['blocks'][1]['file'] = "ipcamera_main.php";
$modversion['blocks'][1]['name'] = "Ipcamera";
$modversion['blocks'][1]['description'] = "Shows ipcamera as a block";
$modversion['blocks'][1]['show_func'] = "b_ipcamera_main_show";
$modversion['blocks'][1]['template'] = 'ipcamera_block_main.html';
?>