<?php
/*****************************************************************
 *                                                               *
 * The Lord of the Rings Online Character Comparison System      *
 * Kinship Logger                                                *
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
include('lib.xml.php');
include ('config.php');
include('api.calls.php');
require_once('functions.php');


$xml = new Xml;

// --> TODO: Change to a GET from POST.
$WorldName = 'Windfola';
$KinshipName = 'Dawning Eclipse';

$XMLData = GetKinshipData($WorldName,$KinshipName, $apilogin, $apikey);

$out = $xml->parse($XMLData, NULL); // Puts the XML Data into an Array.
$XMLDataWorldName = $out['guild-ATTR']['world'];  // Finds the world name in the XML data.
$XMLKinshipName = $out['guild-ATTR']['name'];  // Finds the character name in the XML data.

if ($XMLKinshipName) { // If the kinship exists then we can proceed.
	$worldDir = $kinshipsDir.'/'.$WorldName;
	$kinDir = $worldDir.'/'.$KinshipName;

	// --> Makes sure the World and kinship directories exist and have the right permissions.
	setupDir($worldDir);
	setupDir($kinDir);

	// --> Sets up the time stamp for the filename
	date_default_timezone_set('Pacific/Auckland'); //Sets the default timezone.
	$today = date("YmdHis"); // Date formate in YearMonthDayHoursMinutesSeconds.

	$OutputFileName = $kinDir.'/'.$today.'.xml';  //Name of the file to output.

	// --> Writes out the file the file.
	print_r($XMLData); // For testing.
	if(file_put_contents($OutputFileName, $XMLData) === FALSE)
		echo 'There was an error creating '.$OutputFileName.'!';
	else
		system('chown -R '.$permuser.':'.$permgroup.' '.$OutputFileName);}
?>
