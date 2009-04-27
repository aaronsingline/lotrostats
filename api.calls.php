<?php

/*****************************************************************
 *                                                               *
 * The Lord of the Rings Online Character Comparison System      *
 * API Calls                                                     *
 * Copyright Aaron Singline 2009                                 *
 *                                                               *
 *****************************************************************/
/*************************************************************************
 * This file is part of LotroStats.                                      *
 *                                                                       *
 * LotroStats is free software: you can redistribute it and/or modify    *
 * it under the terms of the GNU General Public License as published by  *
 * the Free Software Foundation, either version 2 of the License, or     *
 * (at your option) any later version.                                   *
 *                                                                       *
 * LotroStats is distributed in the hope that it will be useful,         *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of        *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         *
 * GNU General Public License for more details.                          *
 *                                                                       *
 * You should have received a copy of the GNU General Public License     *
 * along with LotroStats.  If not, see <http://www.gnu.org/licenses/>.   *
 *                                                                       *
 *************************************************************************/

function GetKinshipData ($World, $Guild, $apilogin, $apikey) {
	$GuildWebDir = str_replace(' ', '%20', $Guild);
	$XMLSourceData = file_get_contents('http://data.lotro.com/'.$apilogin.'/'.$apikey.'/guildroster/w/'.$World.'/g/'.$GuildWebDir.'/');
	$XMLDocument = str_replace(array("\r\n", "\n", "\r"),'',$XMLSourceData);
	$XMLDocument = str_replace('> <','><',$XMLDocument);

	return $XMLDocument;
}

function GetCharacterData ($World, $Character, $apilogin, $apikey) {
	$XMLSourceData = file_get_contents('http://data.lotro.com/'.$apilogin.'/'.$apikey.'/charactersheet/w/'.$World.'/c/'.$Character.'/');
	$XMLDocument = str_replace(array("\r\n", "\n", "\r"),'',$XMLSourceData);
	$XMLDocument = str_replace('> <','><',$XMLDocument);

	return $XMLDocument;
}
?>
