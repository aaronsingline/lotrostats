<?php
/*****************************************************************
 *                                                               *
 * The Lord of the Rings Online Character Comparison System      *
 * Functions File                                                *
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

function setupDir($dir) {  // --> Checks if the directory exists.  If it doesn't it creates it.
	if (!is_dir($dir)) {
		echo 'Creating Setting up <strong>'.$dir.'</strong> directory...';
		if (@mkdir($dir, 0777)==FALSE) {
			die("ERROR: Can't create directory.  Please check permissions.");
		}
		else {
			system('chown -R '.$permuser.':'.$permgroup.' '.$dir);
			system('chmod 777 '.$dir);
			echo ' done.<br />';
		}
	}
}

?>
