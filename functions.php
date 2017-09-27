<?php

include_once __DIR__ . '/includes/theme-images.php';
include_once __DIR__ . '/includes/content-syndicate.php';

add_filter( 'spine_child_theme_version', 'internal_news_theme_version' );
/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function internal_news_theme_version() {
	return '0.0.2';
}

add_action( 'wp_enqueue_scripts', 'internal_news_enqueue_scripts' );
/**
 * Enqueues custom styles.
 *
 * @since 0.0.1
 */
function internal_news_enqueue_scripts() {
	wp_enqueue_style( 'source_sans_pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,900,900i' );

}

add_action( 'wp_footer', 'internal_news_social_media_icons' );
/**
 * Provides social media sharing icons.
 *
 * @since 0.0.1
 */
function internal_news_social_media_icons() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" class="social-media-icons">

		<symbol id="social-media-icon_linkedin" viewBox="0 0 20 20">
			<title>LinkedIn Icon</title>
			<path d="M20 20h-4v-6.999c0-1.92-.847-2.991-2.366-2.991-1.653 0-2.634 1.116-2.634 2.991V20H7V7h4v1.462s1.255-2.202 4.083-2.202C17.912 6.26 20 7.986 20 11.558V20zM2.442 4.921A2.451 2.451 0 0 1 0 2.46 2.451 2.451 0 0 1 2.442 0a2.451 2.451 0 0 1 2.441 2.46 2.45 2.45 0 0 1-2.441 2.461zM0 20h5V7H0v13z" fill="#007bb6" fill-rule="evenodd"/>
		</symbol>

		<symbol id="social-media-icon_twitter" viewBox="0 0 20 16">
			<title>Twitter Icon</title>
			<path d="M6.29 16c7.547 0 11.675-6.156 11.675-11.495 0-.175 0-.35-.012-.522A8.265 8.265 0 0 0 20 1.89a8.273 8.273 0 0 1-2.356.637A4.07 4.07 0 0 0 19.448.293a8.303 8.303 0 0 1-2.606.98 4.153 4.153 0 0 0-5.806-.175 4.006 4.006 0 0 0-1.187 3.86A11.717 11.717 0 0 1 1.392.738 4.005 4.005 0 0 0 2.663 6.13 4.122 4.122 0 0 1 .8 5.625v.051C.801 7.6 2.178 9.255 4.092 9.636a4.144 4.144 0 0 1-1.852.069c.537 1.646 2.078 2.773 3.833 2.806A8.315 8.315 0 0 1 0 14.185a11.754 11.754 0 0 0 6.29 1.812" fill="#00aced" fill-rule="evenodd"/>
		</symbol>

		<symbol id="social-media-icon_facebook" viewBox="0 0 10 20">
			<title>Facebook Icon</title>
			<path d="M6.821 20v-9h2.733L10 7H6.821V5.052C6.821 4.022 6.848 3 8.287 3h1.458V.14c0-.043-1.253-.14-2.52-.14C4.58 0 2.924 1.657 2.924 4.7V7H0v4h2.923v9h3.898z" fill="#3b5998" fill-rule="evenodd"/>
		</symbol>

	</svg>
	<?php
}
