<?php
/**
 * A helper object for string operations.
 *
 * @package Yoast\YoastSEO\Helpers
 */

namespace Yoast\WP\Free\Helpers;

/**
 * Class String_Helper
 */
class String_Helper {

	/**
	 * Strips all HTML tags including script and style.
	 *
	 * @param string $string The string to strip the tags from.
	 *
	 * @return string The processed string.
	 */
	public function strip_all_tags( $string ) {
		return \wp_strip_all_tags( $string );
	}
}
