-= LOTROSTATS =-
README FILE

**NOTICE**
I need help with this software.  Especially in testing and patch submissions.

Please send patches or bug reports for now to sparthir@gmail.com


1. Current Features
2. Roadmap
3. Installation Instructions
4. License
5. Acknowledgements


1. Current Features
	Currently LotroStats can:
		* Poll the data.lotro.com server
		* Collect and store XML data with a timestamp for the filename.
		* Parse an XML File and show the difference between two characters with basic statistics.

2. Roadmap
	In the future LotroStats will:
		* Be able to store and retrieve data from a MySQL database.
		* Be able to do more comprehensive statistics comparisons with characters.
		* Watch for changes in Kinship roles for example:
			- Number of members over time.
			- Watch for new members.
			- Watch for levelling of members.
			- Watch for members status changes (eg Membershis and Officerships). 

3. Installation Instructions
	Editing config.php file.
		- Open the config.php file and change the following.
			$apilogin variable should be set to your API login for the data.lotro.com server.
			$apikey variable should be set to your API key for the data.lotro.com server.
			$rootDir is the absolute path on the server to where you can find your LotroStats install folder.
			$dataDir This directory is the main storage folder.  Default is 'xmldata'.
			$kinshipsDir This directory is the kinship storage folder that is inside the $dataDir.  Default is 'kinships'.
			$charactersDir This directory is the character storage folder that is inside the $dataDir.  Default is 'characters'.
			
	Now browse to the file 'install.php'.  This will create the folders needed to store the XML data.
	
	For storing data you will need to set up a cron job.  I am assuming you have a linux setup so these two lines I would suggest you insert into your crontab.
	Linux users should type in the following command at a terminal.
		crontab -e
	Then insert something like the following two lines.  You will need to replace the paths for php and where the polling files reside suit your server.
		* 12 * * * /usr/bin/php -q /var/www/lotrostats/poll-kin-info.php
		* 12 * * * /usr/bin/php -q /var/www/lotrostats/poll-char-info.php


4. License
	LotroStats is released under the GPL version 2 license.  Hence:

		This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

		This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

		You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.

5. Acknowledgements
	LotroStats includes lib.xml.php by Ivan Enderlin.  See the comments in this file for full details on the author of this.

