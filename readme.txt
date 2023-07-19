=== Installation Instructions ===
Setting Up the Database:

Access your hosting account: Log in to the control panel of your hosting provider. This might be cPanel, Plesk, Xampp or another interface, depending on your hosting service.

Open phpMyAdmin: Locate the "Databases" section in your hosting control panel and click on the "phpMyAdmin" option. This will open the database management interface.

Create a new database: In phpMyAdmin, click on the "Databases" tab, enter a name for your database in the "Create database" field, and click the "Create" button.

Import the SQL data: After creating the database, select it from the left-hand sidebar. Then, click on the "Import" tab at the top of the page.

Import the SQL file: On the Import page, click on the "Choose File" button, navigate to the folder where you have the SQL data file saved from this repo, select it, and click "Open." Finally, click the "Go" button to import the SQL data into your database.

Update the WordPress configuration file: Locate the "wp-config.php" file in the root folder of your WordPress installation. Make a backup of this file, then open it in a text editor.

Modify the database settings: Look for the lines that define the database settings in the wp-config.php file. They should look similar to the following:

define('DB_NAME', 'dadams_localwordpress');
define('DB_USER', 'dadams50');
define('DB_PASSWORD', 'kingdarius1995');
define('DB_HOST', 'localhost');

Save the changes: Save the wp-config.php file after updating the database settings.

Downloading and Installing the WordPress Theme:

Download the theme: Click on the download button or link for the theme file, and save it to your computer. Remember the location where you saved the file.

Access your WordPress website: Open a new tab in your browser and navigate to your WordPress website's admin area. Usually, you can access it by adding "/wp-admin" to your website's URL (e.g., www.yourwebsite.com/wp-admin or localhost/wordpress).

Log in: Enter your WordPress username and password to log in to the admin area.

Go to the Themes section: In the WordPress admin dashboard, locate the "Appearance" menu on the left-hand side and click on "Themes."

Add a new theme: On the Themes page, click on the "Add New" button at the top.

Look for the theme file you downloaded from this repository. It should typically be in a .zip format.

Upload the theme file: Click on the "Upload Theme" button at the top. Then, click on the "Choose File" button, navigate to the location where you saved the theme file, select it, and click "Open." Finally, click on the "Install Now" button.

Activate the theme: Once the theme is uploaded and installed, you'll see a success message. Click on the "Activate" button to make the theme active on your WordPress website.


=== Twenty Twenty-Two ===
Contributors: wordpressdotorg
Requires at least: 5.9
Tested up to: 6.2
Requires PHP: 5.6
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Built on a solidly designed foundation, Twenty Twenty-Two embraces the idea that everyone deserves a truly unique website. The theme’s subtle styles are inspired by the diversity and versatility of birds: its typography is lightweight yet strong, its color palette is drawn from nature, and its layout elements sit gently on the page.

The true richness of Twenty Twenty-Two lies in its opportunity for customization. The theme is built to take advantage of the Site Editor features introduced in WordPress 5.9, which means that colors, typography, and the layout of every single page on your site can be customized to suit your vision. It also includes dozens of block patterns, opening the door to a wide range of professionally designed layouts in just a few clicks.

Whether you’re building a single-page website, a blog, a business website, or a portfolio, Twenty Twenty-Two will help you create a site that is uniquely yours.

== Changelog ==

= 1.4 =
* Released: March 28, 2023

https://wordpress.org/documentation/article/twenty-twenty-two-changelog/#Version_1.4

= 1.3 =
* Released: November 1, 2022

https://wordpress.org/documentation/article/twenty-twenty-two-changelog/#Version_1.3

= 1.2 =
* Released: May 24, 2022

https://wordpress.org/documentation/article/twenty-twenty-two-changelog/#Version_1.2

= 1.1 =
* Released: February 22, 2022

https://wordpress.org/documentation/article/twenty-twenty-two-changelog/#Version_1.1

= 1.0 =
* Released: January 25, 2022

https://wordpress.org/documentation/article/twenty-twenty-two-changelog/#Version_1.0

== Copyright ==

Twenty Twenty-Two WordPress Theme, 2021-2023 WordPress.org
Twenty Twenty-Two is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

This theme bundles the following third-party resources:

DM Sans Font
Copyright 2014-2017 Indian Type Foundry (info@indiantypefoundry.com)
Copyright 2019 Google LLC
Copyright 2014-2018 Adobe (http://www.adobe.com/)
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://github.com/googlefonts/dm-fonts

IBM Plex Font
Copyright 2017 IBM Corp.
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://github.com/IBM/plex

Inter Font
Copyright (c) 2016-2020 The Inter Project Authors.
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://github.com/rsms/inter

Source Serif Font
Copyright 2014-2021 Adobe (http://www.adobe.com/)
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://github.com/adobe-fonts/source-serif

Block Pattern Images:

"White Bellied Flycatcher" illustrated by Elizabeth Gould. Public Domain.
https://www.rawpixel.com/image/321474/free-illustration-image-bird-vintage-birds
Includes modified versions created specifically for Twenty Twenty-Two.

Colorful vintage hummingbird illustrations. CC0.
https://www.rawpixel.com/image/2281674/free-illustration-image-bird-hummingbird-flying
https://www.rawpixel.com/image/2281671/free-illustration-image-bird-hummingbird-flying
https://www.rawpixel.com/image/2281679/free-illustration-image-bird-hummingbird-animals
https://www.rawpixel.com/image/2281665/free-illustration-image-hummingbird-ernst-haeckel-birds

"Green-tailed Jacamar" by Jacques Barraband. CC0.
https://www.rawpixel.com/image/328508/free-illustration-image-jacques-barraband-paradise

"Ducks" by Goyō Hashiguchi. CC0
https://www.rawpixel.com/image/3813787/illustration-image-flower-art-floral

"Colombes et lis, étoffe imprimée" illustrated by Maurice Pillard Verneuil.
https://www.rawpixel.com/image/2053817/illustration-from-lanimal-dans-decoration
Included as a short video clip.

Modified versions of the above images, as well as additional "flight path" illustrations were created specifically for Twenty Twenty-Two. CC0.
