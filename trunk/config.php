<?php

/*****************************************************************
 *                                                               *
 * The Lord of the Rings Online Character Comparison System      *
 * Configuration File                                            *
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

$apilogin = ''; // data.lotro.com API login name.
$apikey = ''; // data.lotro.com API key.

$permgroup = ''; // A linux group with permissions to write to the directory.  eg 'apache'
$permuser = ''; // A linux user with permissions to write to the directory. eg 'apache'

$rootDir = '/var/www/lotrostats'; // Location of where the files are stored.

$dataDir = $rootDir.'/xmldata'; // Main folder where the xml data will be stored.  Default: xmldata
$kinshipsDir = $dataDir.'/kinships'; // Main folder where the kinship data will be stored.  Default: kinships
$charactersDir = $dataDir.'/characters'; // Main folder where the character data will be stored.  Default: characters

?>
