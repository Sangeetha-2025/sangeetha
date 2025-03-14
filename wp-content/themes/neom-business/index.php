<?php
/**
 * Index file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package neom_business
 */

get_header();
?>
<section id="post-section" class="post-section theme-default">
	<div class="container-full" style="display: flex;">
		<?php
			$neom_business_archive_blog_pages_layout = get_theme_mod( 'neom_archive_blog_pages_layout', 'neom_right_sidebar' );
			if ( 'neom_left_sidebar' === $neom_business_archive_blog_pages_layout ) :
				get_sidebar();
					endif;
			?>
		<div id="awp-main-content" class="<?php echo esc_attr( neom_post_layout() ); ?>">

			<div class="theme-columns-area">

				<?php
					$neom_business_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args       = array(
						'post_type' => 'post',
						'paged'     => $neom_business_paged,
					);
					?>
				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
							get_template_part( 'template-pages/content/content', '' );
					endwhile;
					?>

					<!-- Pagination -->
						<?php
						$posts_pagination = get_the_posts_pagination(
							array(
								'mid_size'  => 1,
								'prev_text' => '<i class="fa fa-angle-double-left"></i>',
								'next_text' => '<i class="fa fa-angle-double-right"></i>',
							)
						);
						echo wp_kses_post( $posts_pagination );
						?>
					<!-- Pagination -->	

				<?php else : ?>
					<?php get_template_part( 'template-pages/content/content', 'none' ); ?>
				<?php endif; ?>
			</div>
			
		</div>	
		<?php if ( 'neom_right_sidebar' === $neom_business_archive_blog_pages_layout ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>
