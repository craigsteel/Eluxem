<?php
/**
 *  Add social media icons to menu
 *
 * @package Eluxem
 */

function eluxem_social_array() {

	$social_sites = array(
		'twitter'       => 'eluxem_twitter_profile',
		'facebook'      => 'eluxem_facebook_profile',
		'google-plus'   => 'eluxem_googleplus_profile',
		'pinterest'     => 'eluxem_pinterest_profile',
		'linkedin'      => 'eluxem_linkedin_profile',
		'youtube'       => 'eluxem_youtube_profile',
		'vimeo'         => 'eluxem_vimeo_profile',
		'tumblr'        => 'eluxem_tumblr_profile',
		'instagram'     => 'eluxem_instagram_profile',
		'flickr'        => 'eluxem_flickr_profile',
		'dribbble'      => 'eluxem_dribbble_profile',
		'rss'           => 'eluxem_rss_profile',
		'reddit'        => 'eluxem_reddit_profile',
		'soundcloud'    => 'eluxem_soundcloud_profile',
		'spotify'       => 'eluxem_spotify_profile',
		'vine'          => 'eluxem_vine_profile',
		'yahoo'         => 'eluxem_yahoo_profile',
		'behance'       => 'eluxem_behance_profile',
		'codepen'       => 'eluxem_codepen_profile',
		'delicious'     => 'eluxem_delicious_profile',
		'stumbleupon'   => 'eluxem_stumbleupon_profile',
		'deviantart'    => 'eluxem_deviantart_profile',
		'digg'          => 'eluxem_digg_profile',
		'github'        => 'eluxem_github_profile',
		'hacker-news'   => 'eluxem_hacker-news_profile',
		'steam'         => 'eluxem_steam_profile',
		'vk'            => 'eluxem_vk_profile',
		'weibo'         => 'eluxem_weibo_profile',
		'tencent-weibo' => 'eluxem_tencent_weibo_profile',
		'500px'         => 'eluxem_500px_profile',
		'foursquare'    => 'eluxem_foursquare_profile',
		'slack'         => 'eluxem_slack_profile',
		'slideshare'    => 'eluxem_slideshare_profile',
		'qq'            => 'eluxem_qq_profile',
		'whatsapp'      => 'eluxem_whatsapp_profile',
		'skype'         => 'eluxem_skype_profile',
		'wechat'        => 'eluxem_wechat_profile',
		'xing'          => 'eluxem_xing_profile',
		'paypal'        => 'eluxem_paypal_profile',
		'email-form'    => 'eluxem_email_form_profile'
	);

	return apply_filters( 'eluxem_social_array_filter', $social_sites );
}

function eluxem_add_customizer_sections( $wp_customize ) {

	$social_sites = eluxem_social_array();

	// set a priority used to order the social sites
	$priority = 5;

	// section
	$wp_customize->add_section( 'eluxem_social_media_icons', array(
		'title'       => __( 'Social Media Icons', 'eluxem' ),
		'priority'    => 25,
		'description' => __( 'Add the URL for each of your social profiles.', 'eluxem' )
	) );

	// create a setting and control for each social site
	foreach ( $social_sites as $social_site => $value ) {

		$label = ucfirst( $social_site );

		if ( $social_site == 'google-plus' ) {
			$label = 'Google Plus';
		} elseif ( $social_site == 'rss' ) {
			$label = 'RSS';
		} elseif ( $social_site == 'soundcloud' ) {
			$label = 'SoundCloud';
		} elseif ( $social_site == 'slideshare' ) {
			$label = 'SlideShare';
		} elseif ( $social_site == 'codepen' ) {
			$label = 'CodePen';
		} elseif ( $social_site == 'stumbleupon' ) {
			$label = 'StumbleUpon';
		} elseif ( $social_site == 'deviantart' ) {
			$label = 'DeviantArt';
		} elseif ( $social_site == 'hacker-news' ) {
			$label = 'Hacker News';
		} elseif ( $social_site == 'whatsapp' ) {
			$label = 'WhatsApp';
		} elseif ( $social_site == 'qq' ) {
			$label = 'QQ';
		} elseif ( $social_site == 'vk' ) {
			$label = 'VK';
		} elseif ( $social_site == 'wechat' ) {
				$label = 'WeChat';
		} elseif ( $social_site == 'tencent-weibo' ) {
			$label = 'Tencent Weibo';
		} elseif ( $social_site == 'paypal' ) {
			$label = 'PayPal';
		} elseif ( $social_site == 'email-form' ) {
			$label = 'Contact Form';
		}
		// setting
		$wp_customize->add_setting( $social_site, array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		// control
		$wp_customize->add_control( $social_site, array(
			'type'     => 'url',
			'label'    => $label,
			'section'  => 'eluxem_social_media_icons',
			'priority' => $priority
		) );
		// increment the priority for next site
		$priority = $priority + 5;
	}
}
add_action( 'customize_register', 'eluxem_add_customizer_sections' );

function eluxem_social_icons_output() {

	$social_sites = eluxem_social_array();

	foreach ( $social_sites as $social_site => $profile ) {

		if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[ $social_site ] = $social_site;
		}
	}

	if ( ! empty( $active_sites ) ) {

		echo '<ul class="social-media-icons">';
		foreach ( $active_sites as $key => $active_site ) { 
        	$class = 'csd-icon csd-' . $active_site; ?>
		 	<li>
				<a class="<?php echo esc_attr( $active_site ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
					<i class="<?php echo esc_attr( $class ); ?>" title="<?php echo esc_attr( $active_site ); ?>"></i>
				</a>
			</li>
		<?php } 
		echo "</ul>";
	}
}