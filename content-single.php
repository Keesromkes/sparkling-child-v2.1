<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- 
	<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
-->
	<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
 	
	<div class="post-inner-content">
		<header class="entry-header page-header">
			<div class="entry-meta">
				<div class="date">
					<?php the_date(); ?>
				</div>
				<div class="category">
					<?php the_category( ', ' ); ?>
				</div>
			</div><!-- .entry-meta -->
			<h1 class="entry-title "><?php the_title(); ?></h1>

			
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'            => '<div class="page-links">'.__( 'Pages:', 'sparkling' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>',
					'pagelink'          => '%',
					'echo'              => 1
	       		) );
	    	?>
	    	
		</div><!-- .entry-content -->

		<footer class="entry-meta">

	    	<?php if(has_tag()) : ?>
	      <!-- tags -->
	      <div class="tagcloud">

	          <?php
	              $tags = get_the_tags(get_the_ID());
	              foreach($tags as $tag){
	                  echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
	              } ?>

	      </div>
	      <!-- end tags -->
	      <?php endif; ?>

		</footer><!-- .entry-meta -->
	</div>
				<div class="post-inner-content secondary-content-box">
	        <!-- author bio -->
	        <div class="author-bio content-box-inner">

	          <!-- avatar -->
	          <div class="avatar">
	              <?php echo get_avatar(get_the_author_meta('ID') , '60'); ?>
	          </div>
	          <!-- end avatar -->

	          <!-- user bio -->
	          <div class="author-bio-content">

	            <h4 class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h4>
	            <p class="author-description">
	                <?php echo get_the_author_meta('description'); ?>
	            </p>

	          </div>
	          <!-- end author bio -->

	        </div>
	        <!-- end author bio -->
			</div>
</article><!-- #post-## -->