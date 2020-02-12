/*
* add this code to themes function.php or child themes function.php to modify robots.txt file for multisite
* site id is to get differnet site for multisite that is optional
*/

add_filter( 'robots_txt', 'modify_robots_txt', 20, 2 );
function modify_robots_txt( $output, $public ) {
	$site_id = get_current_blog_id();
	if ( $site_id == 1 ) {
		$output .= "User-agent: *";
		$output .= "Disallow: /wp-admin/";
		$output .= "Sitemap: https://vsaent.com/sitemap_index.xml";
	} elseif($site_id==2){
		$output .= "User-agent: *";
		$output .= "Disallow: /wp-admin/";
		$output .= "Disallow: /wp-includes/";
		$output .= "Sitemap: https://sidingmounts.com/sitemap_index.xml";
	}

	return $output;
}

