<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

get_header(); ?>
	<!-- this is a comment that v2.1 exists -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
	
			<div class="biggerthanmobile">
				<?php /* Start the Loop */ ?>
				<?php $i = 1; ?>
				<?php while (have_posts() && $i < 2) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
				<?php $i++; ?>
				<?php endwhile; ?>
				<?php rewind_posts(); ?>
				<div class="row">
					
						<?php $i = 1; ?>
						<div class="col-md-6 smallarticle">
						<?php while (have_posts()) : the_post(); ?>
							
							<?php if (($i >= 1) && ($i % 2 == 0)) { ?>
							
								
									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content-small' );
									?>
								
							<?php } 
							
							?>
							
						<?php $i++; ?>
						<?php endwhile; ?>
						</div>
						<?php rewind_posts(); ?>
						<?php $i = 1; ?>
						<div class="col-md-6 smallarticle">
						<?php while (have_posts()) : the_post(); ?>
							
							
								<?php if (($i > 1) && ($i % 2 == 1)) { ?>
									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content-small' );
									?>
								
							<?php } 
							
							?>
							
						<?php $i++; ?>
						<?php endwhile; ?>
						</div>
					
				</div>
			</div>	
			<?php rewind_posts(); ?>
			<div class="mobile">
				<div class="row">
					
						<div class="col-xs-12 smallarticle">
						<?php while (have_posts()) : the_post(); ?>
							
								
									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content-small' );
									?>
							
						<?php endwhile; ?>
						</div>
						
					
				</div>
			</div>
			<?php sparkling_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>