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
function set_params ($file = "", $set = false, $params="") {
	if (false === ($link = @fopen ($file, "r+")))
		return false;
	if(!$set) {
		if (false === ($file = @fread($link, filesize($file))))
			return false;
		else
			return unserialize($file);
	} else {
		if (false === @fwrite($link, serialize($params)))
			return _MD_IPCAMERA_ADM9;
		else
			return _MD_IPCAMERA_ADM10;
	}
	@fclose($link);
}
?>