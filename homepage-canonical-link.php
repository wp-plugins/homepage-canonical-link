<?php
/**
 * @package Homepage_Canonical_Link
 * @version 0.1.1
 */
/*
Plugin Name: Homepage Canonical Link
Plugin URI: http://joostschuur.com/wordpress/
Description: Quick plugin to add a canonical link to the blog homepage, which WordPress 3.0 doesn't do for you. Good for SEO.
Author: Joost Schuur
Version: 0.1.1
Author URI: http://joostschuur.com/
*/

/*  Copyright 2010  Joost Schuur  (email : jschuur@jschuur.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/** Yeah, it's really this simple */
function homepage_canonical_link() {
	if (is_front_page())
		echo "<link rel='canonical' href='" . get_bloginfo('url') . "/' />\n";
}
add_action('wp_head', 'homepage_canonical_link');

?>
