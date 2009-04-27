<?php
/*****************************************************************
 *                                                               *
 * The Lord of the Rings Online Character Comparison System      *
 * Installation Script                                           *
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
include ('config.php');
require_once('functions.php');

// --> Make sure the paths are tidy.

rtrim('/', $dataDir);
rtrim('/', $kinshipsDir);
rtrim('/', $charactersDir);

// --> Set up the directories to store data.
setupDir($dataDir);
setupDir($kinshipsDir);
setupDir($charactersDir);

?>
