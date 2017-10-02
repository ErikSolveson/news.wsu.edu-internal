<?php

include_once __DIR__ . '/includes/theme-images.php';
include_once __DIR__ . '/includes/content-syndicate.php';
include_once __DIR__ . '/includes/featured-stories.php';

add_filter( 'spine_child_theme_version', 'internal_news_theme_version' );
/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function internal_news_theme_version() {
	return '0.1.5';
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
	if ( ! is_single() ) {
		return;
	}
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

add_action( 'wsu_register_inline_svg', 'internal_news_register_masthead_svg' );
/**
 * Register the masthead SVG for the WSU Inline SVG plugin.
 *
 * @since 0.1.4
 */
function internal_news_register_masthead_svg() {
	ob_start();
	?>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494.22 296.07">
		<title>WSU Insider Beta</title>
		<g fill="#393839">
			<path d="M2.1,3.2H27.68l5.23,41.27c1,9.88,2.18,19.77,3.2,29.65h.58c1.74-9.88,3.49-19.91,5.23-29.65l9-41.27H71.86l9,41.27c1.74,9.45,3.49,19.62,5.23,29.65h.58c1-10,2.18-20.06,3.2-29.65L95.11,3.2h23.84l-15.7,94.47H71.57L64.3,60.17c-1.45-7.27-2.62-15.11-3.49-22.09h-.58c-1,7-2,14.82-3.49,22.09l-7,37.5H18.67Z"/>
			<path d="M117.79,85.9,132,68.75c6.68,5.38,15.11,9.16,22.09,9.16,7.56,0,10.75-2.47,10.75-6.69,0-4.5-4.8-6-12.79-9.16l-11.77-4.94c-10.17-4.07-19-12.64-19-26.31,0-16.13,14.53-29.36,35.17-29.36A45.41,45.41,0,0,1,187.84,14.1l-12.5,15.7c-6.39-4.5-11.92-6.83-18.89-6.83-6.1,0-9.88,2.18-9.88,6.39,0,4.51,5.38,6.1,14,9.45L172,43.31C183.77,48,190.45,56.1,190.45,69.18c0,16-13.37,30.23-36.91,30.23A54.71,54.71,0,0,1,117.79,85.9Z"/>
			<path d="M197.72,52V3.2h25V54.94c0,16.86,4.36,23,14.24,23s14.53-6.1,14.53-23V3.2h24.13V52c0,32.26-12.21,47.38-38.66,47.38S197.72,84.3,197.72,52Z"/>
			<path d="M11.11,123.11h25v94.47h-25Z"/>
			<path d="M49.77,123.11H75.35l20.93,42.15,9,21.22h.58c-1.16-10.17-3.2-24.42-3.2-36V123.11H126.5v94.47H100.93L80,175.29l-9-21.07h-.58c1.16,10.76,3.2,24.42,3.2,36v27.32H49.77Z"/>
			<path d="M134.35,205.81l14.24-17.15c6.68,5.38,15.11,9.16,22.09,9.16,7.56,0,10.75-2.47,10.75-6.69,0-4.5-4.8-6-12.79-9.16L156.88,177c-10.17-4.07-19-12.64-19-26.31,0-16.13,14.53-29.36,35.17-29.36A45.41,45.41,0,0,1,204.41,134l-12.5,15.7c-6.39-4.5-11.92-6.83-18.89-6.83-6.1,0-9.88,2.18-9.88,6.39,0,4.51,5.38,6.1,14,9.45l11.48,4.5C200.34,167.88,207,176,207,189.1c0,16-13.37,30.23-36.91,30.23A54.71,54.71,0,0,1,134.35,205.81Z"/>
			<path d="M214.87,123.11h25v94.47h-25Z"/>
			<path d="M253.53,123.11h27.9c28.78,0,48.54,13.37,48.54,46.8s-19.77,47.67-47.09,47.67H253.53ZM280,197.52c13.66,0,24.42-5.52,24.42-27.61S293.64,143.17,280,143.17h-1.45v54.36Z"/>
			<path d="M337.72,123.11h61V144h-36v14.82h30.81v20.93H362.72v16.86h37.5v20.93H337.72Z"/>
			<path d="M411.26,123.11H447c20.35,0,37.79,7,37.79,30.52,0,13.52-6.1,22.38-15.26,27.32L490,217.58h-27.9L445.85,185.9h-9.59v31.68h-25Zm34,43c9.88,0,15.12-4.36,15.12-12.5s-5.23-10.76-15.12-10.76h-9v23.25Z"/>
		</g>
		<g fill="#a61d2f">
			<path d="M23.66,286.31h-.3l-1.06,4.08H12.16V237.75h13V250l-.3,5.45a13.91,13.91,0,0,1,9.3-3.78c8.92,0,14.75,7.56,14.75,19.14,0,13.08-7.72,20.5-15.73,20.5C29.86,291.3,26.53,289.64,23.66,286.31Zm12-15.28c0-6.2-1.82-8.77-5.29-8.77-2,0-3.48.75-5.14,2.72V278.9A6.94,6.94,0,0,0,30,280.71C33,280.71,35.61,278.29,35.61,271Z"/>
			<path d="M52.21,271.49c0-12.25,8.92-19.82,18.15-19.82,11.19,0,16.49,8.17,16.49,18.3a27,27,0,0,1-.53,5.45H64.77c1.21,4.54,4.54,6.05,8.77,6.05a15.52,15.52,0,0,0,7.72-2.27l4.24,7.71a25.47,25.47,0,0,1-13.77,4.39C60.69,291.3,52.21,284,52.21,271.49Zm23.6-4.54c0-2.88-1.21-5.45-5.14-5.45-2.87,0-5.29,1.66-6.05,5.45Z"/>
			<path d="M94.87,275.87V262.71h-5V253l5.75-.45,1.51-9.83h10.74v9.83h8.62v10.13h-8.62v12.94c0,4.16,2.12,5.52,4.54,5.52a10.87,10.87,0,0,0,3.33-.61l2,9.38a28.55,28.55,0,0,1-8.92,1.36C99,291.3,94.87,285.1,94.87,275.87Z"/>
			<path d="M122.28,279.65c0-7.87,6.05-12.25,20.57-13.77-.3-2.72-2-3.93-5.29-3.93-2.72,0-5.6,1.06-9.53,3.18l-4.54-8.47a31.86,31.86,0,0,1,16.64-5c9.83,0,15.73,5.29,15.73,17.7v21H145.28l-.91-3.63h-.3c-3,2.72-6.35,4.54-10.44,4.54C126.52,291.3,122.28,285.86,122.28,279.65Zm20.57-.91V273.6c-6.2.91-8.17,2.88-8.17,5,0,1.74,1.21,2.72,3.48,2.72C140.29,281.32,141.5,280.26,142.86,278.75Z"/>
		</g>
	</svg>
	<?php
	$masthead = ob_get_clean();

	wsu_register_inline_svg( 'masthead', $masthead );
}
