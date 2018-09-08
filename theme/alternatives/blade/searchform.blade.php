<?php
/**
 * Search form partial.
 *
 * @link https://codex.wordpress.org/Styling_Theme_Forms#The_Search_Form
 *
 * @package WPEmergeTheme
 */

?>
<form action="{{ esc_url( home_url( '/' ) ) }}" class="search-form" method="get" role="search">
	<label>
		<span class="screen-reader-text">{{ __( 'Search for:', 'app' ) }}</span>

		<input type="text" title="{{ __( 'Search for:', 'app' ) }}" name="s" value="" id="s" placeholder="{{ __( 'Search &hellip;', 'app' ) }}" class="search-form__field" />
	</label>

	<input type="submit" value="{{ __( 'Search', 'app' ) }}" class="search-form__submit-button screen-reader-text" />
</form>
