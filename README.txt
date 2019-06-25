## Genesis Sample Six Peak Capital Theme

##Design Handoff
Design Style Guide (Presentational PDF by Ludlow Kingsly) is at: https://drive.google.com/open?id=1y1J01fhQJRkPL2F86uMIJDYGpvGbn5Jc 

##Tech Overview
Tech is WordPress with Genesis Framework and a Genesis Child Theme.
Genesis child theme is an adaptation from Genesis-sample theme 2.10.0 (May 2019).
Git is used on this project, and there is a .gitignore file that contains exemptions for the node-packages.

Browser Compatibility Checked on Chrome Version 74.0.3729.169 & Safari Version 12.1.

#Functions.php
Functions.php contains all the structural changes to the theme as well as a code snippet to install Google Tag Manager.
Google Analytics has been installed through Google Tag Manager.

#Styling
Styling is done with Sass using Node-Sass (an NPM Package from NPM version v10.16.0). 
There’s a watch script in package.json to give somewhat hot reloading when the styles.scss file is saved.

To run Node-Sass, use command “npm run scss“ in the root folder of the theme “genesis-sample”.

Sass is organized into Components (Common, Molecules, and Pages). 
The _all.scss file in molecules is not imported into styles.scss, and contains a copy of the styling in WordPress’ Customizer panel. This styling css needs to be loaded last for it to work. (this is something that could and should be cleaned up). 

##Code Quality
Sass files were formatted with “Prettier - Code formatter” Visual Studio plugin. Further linting should be done both for SCSS and PHP code.

## External Plugins & Scripts
To comply with the EU’s GDPR, current U.S. state data protection laws, and the upcoming California CCPA law, we are using a notification script called Cookie Consent by Osano. This prompts a popup in the lower right corner of the screen, letting users know that the site uses cookies. This script is inserted into the head of the site using the Genesis insert scripts pannel in WordPress.