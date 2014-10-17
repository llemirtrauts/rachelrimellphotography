<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Meta-Data Template-Part File
 *
 * @file           portfolio-meta-page.php
 * @package        Responsive-child
 * @filesource     wp-content/themes/responsive-child/portfolio-meta-page.php
 */
?>

	<!--h1 class="entry-title post-title"><?php the_title(); ?></h1-->

<?php if( comments_open() ) : ?>
	<!--div class="post-meta">
		<?php responsive_post_meta_data(); ?>

	</div-->
<?php endif; ?>