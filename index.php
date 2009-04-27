<?php
header('Content-type: text/html');
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

?>
<html>
<head>
<title>Sparthir's LotRO Character Comparisons</title>
<style>
	body {font-family: verdana, helvetica;}
	td {padding: 10px; text-align:right;}
</style>
</head>
<body>
<div align="center"><img src="images/logo.jpg" alt="logo" title="logo" border="0" /></div><br />
<?php
include('lib.xml.php');
$xml = new Xml;

// -- First Character -- //
$XMLSourceData = file_get_contents('http://data.lotro.com/'.$apilogin.'/'.$apikey.'/charactersheet/w/Windfola/c/Omennz/');
$XMLDocument = str_replace(array("\r\n", "\n", "\r"),'',$XMLSourceData);
$XMLDocument = str_replace('> <','><',$XMLDocument);

//Get the XML data and put it into an array.
$out = $xml->parse($XMLDocument, NULL);
$CharacterName[0] = $out['character-ATTR']['name'];
$Morale[0] = $out['character']['stats']['stat-ATTR']['0']['value'];
$Power[0] = $out['character']['stats']['stat-ATTR']['1']['value'];
$Might[0] = $out['character']['stats']['stat-ATTR']['3']['value'];
$Agility[0] = $out['character']['stats']['stat-ATTR']['4']['value'];
$Vitality[0] = $out['character']['stats']['stat-ATTR']['5']['value'];
$Will[0] = $out['character']['stats']['stat-ATTR']['6']['value'];
$Fate[0] = $out['character']['stats']['stat-ATTR']['7']['value'];

// -- Second Character -- //
$XMLSourceData = file_get_contents('http://data.lotro.com/'.$apilogin.'/'.$apikey.'/charactersheet/w/Windfola/c/Sparthir/');
$XMLDocument = str_replace(array("\r\n", "\n", "\r"),'',$XMLSourceData);
$XMLDocument = str_replace('> <','><',$XMLDocument);

// Get the XML data and put it into an array.
$out = $xml->parse($XMLDocument, NULL);

$CharacterName[1] = $out['character-ATTR']['name'];
$Morale[1] = $out['character']['stats']['stat-ATTR']['0']['value'];
$Power[1] = $out['character']['stats']['stat-ATTR']['1']['value'];
$Might[1] = $out['character']['stats']['stat-ATTR']['3']['value'];
$Agility[1] = $out['character']['stats']['stat-ATTR']['4']['value'];
$Vitality[1] = $out['character']['stats']['stat-ATTR']['5']['value'];
$Will[1] = $out['character']['stats']['stat-ATTR']['6']['value'];
$Fate[1] = $out['character']['stats']['stat-ATTR']['7']['value'];

 ?>
<table  style="padding: 10px;">
	<tr>
		<td>Character Name:</td>
		<td><?php echo $CharacterName[0]; ?></td>
		<td><?php echo $CharacterName[1]; ?></td>
	</tr>
	<tr>
		<td>Morale:</td>
		<td><?php echo $Morale[0]; ?></div></td>
		<td><?php echo $Morale[1]; ?></div></td>
	</tr>
	<tr>
		<td>Power:</td>
		<td><?php echo $Power[0]; ?></div></td>
		<td><?php echo $Power[1]; ?></div></td>
	</tr>
	<tr>
		<td>Might:</td>
		<td><?php echo $Might[0]; ?></div></td>
		<td><?php echo $Might[1]; ?></div></td>
	</tr>
	<tr>
		<td>Agility:</td>
		<td><?php echo $Agility[0]; ?></div></td>
		<td><?php echo $Agility[1]; ?></div></td>
	</tr>
	<tr>
		<td>Vitality:</td>
		<td><?php echo $Vitality[0]; ?></div></td>
		<td><?php echo $Vitality[1]; ?></div></td>
	</tr>
	<tr>
		<td>Will:</td>
		<td><?php echo $Will[0]; ?></div></td>
		<td><?php echo $Will[1]; ?></div></td>
	</tr>
	<tr>
		<td>Fate:</td>
		<td><?php echo $Fate[0]; ?></div></td>
		<td><?php echo $Fate[1]; ?></div></td>
	</tr>
</table>
</body>
</html>
