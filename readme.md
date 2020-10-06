# Wordpress Boilerplate that has HTML5Blank theme, Bootstrap 4, Grunt, SASS, and some cool components.

Rapidly deploy your Wordpress site using this stack. The cool components other than the stack mentioned above, are a side drawer menu(mobile) and a form that sends the data directly to a Google sheet.

* HTML5Blank repo: [https://github.com/toddmotto/html5blank](https://github.com/toddmotto/html5blank)
* Author: Jayson Ronald Obos // [@19atpressured](http://twitter.com/19atpressured)
* Contact: [joboswd@gmail.com](mailto:joboswd@gmail.com)

## Getting started
* Run 'npm install' to install dependencies.
* You may change the html5blank folder name from 'yourtheme' to your preferred name. Change the theme image in the admin as well. Please take note that if you change it, please update **Gruntfile.js** according to your changes.
* You may change the theme css from 'yourtheme.css' to your preferred name. Please take note that if you change it, update **Gruntfile.js** according to your changes.

## Features

### SASS
* All SASS files are imported thru 'yourtheme/sass/styles.scss'.
* To watch your SASS changes, run 'grunt watch'.
* SASS is converted to css via grunt and concatenated to the html5blank css via grunt as well.

### Bootstrap 4
* Bootstrap 4 is installed via npm instead of using it via CDN.
* Bootstrap 4 documentation [here](https://getbootstrap.com/docs/4.5/getting-started/introduction/).

### Grunt
* Grunt automates the task of converting the SASS to css, concatenating the converted css with the theme css and minifying the output css.
* Run 'grunt watch' to run the tasks.

### Mobile Side Drawer Menu
* A side drawer menu that displays 'Header Menu' by default. It's displayed up to 767px viewport.
* Call this component by using this hook: ```<?php get_template_part('template-parts/burgermenu'); ?>```

### HTML5 Form that submits to Google Sheet
* A highly modified form that's built from this [tutorial here](https://medium.com/@dmccoy/how-to-submit-an-html-form-to-google-sheets-without-google-forms-b833952cc175). It has all proper validation for all the fields.
* Configure your Google Sheet as per the link above.
* Insert your Google Sheet script URL on line 23 of '/template-parts/contact-form.php'.
* Call this component by using this hook: ```<?php get_template_part('template-parts/home/contact-form'); ?>```

