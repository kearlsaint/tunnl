<?php
/*******************************************************************
* PHProxy++ is copyright 2007-2012 PHProxy++ Team
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of PHProxy++ is subject to the terms of the Software License Agreement.
* http://phproxy-plus.sourceforge.net/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: PHProxy++
* Website: http://phproxy-plus.sourceforge.net/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = $_SERVER['HTTP_HOST'].'Garlic';

// Meta description
$themeReplace['meta_description'] = <<<OUT
A web application designed to give you anonimity in visiting various internet sites.
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT

OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT

OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT

OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT

OUT;
