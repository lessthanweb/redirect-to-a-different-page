<?php
/*
Plugin Name: Redirect To a Different Page
Plugin URI: https://www.lessthanweb.com/blog/redirect-to-a-different-page-in-wordpress
Description: lessthanweb. How To: Redirect To A Different Page
Version: 1.0
Author: lessthanweb.
Author URI: https://www.lessthanweb.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: lessthanweb
*/

/*
Redirect To a Different Page is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Redirect To a Different Page is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Add Additional Fields To The User Profile. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Make sure we don't expose any info if called directly
if ( ! function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	die();
}

/**
 * Redirect all anonymous users to login page.
 *
 * @param	void
 * @return	void
 * @since	1.0
 *
 */
function lessthanweb_template_redirect() {
	//	If user is not logged in.
	if ( ! is_user_logged_in() ) {
		//	Redirect to login page.
		wp_redirect( wp_login_url() );
	}
}
add_action( 'template_redirect', 'lessthanweb_template_redirect' );
	