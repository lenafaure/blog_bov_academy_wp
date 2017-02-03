<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_search_form( ); ?>



<div class="wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			
			// Query only posts that are in the "Upcoming" category

			
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

				<section id="post-<?php the_ID() ?>" class="jt-article-preview">
			        <div class="jt-article-preview__bg-wrap">
			          <div class="jt-article-preview__bg-overlay"></div>
			          <img class="jt-article-preview__bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			        </div>
			        <div class="jt-article-preview__content-wrap">
			          <div class="jt-article-preview__btn-close"><i class="material-icons">close</i></div>
			          <div class="jt-article-preview__shadow"></div>
			          <div class="jt-article-preview__content">
			            <div class="jt-gradient-sp"></div>
			            <div class="jt-article-preview__btn-compress"><i class="material-icons">vertical_align_center</i></div>
			            <div class="jt-article-preview__text-wrap">
			              <!--Article section-->
			              <section class="bg-article-section">
			                <div class="bg-article-date">
			                  <span class="bg-article-day"><?php echo get_the_date( 'j' ); ?></span><span class="bg-article-month bg-uppercase"><?php echo get_the_date( 'M' ); ?></span></div>
			                <div class="article-wrap">
			                  <div class="bg-author-profile bg-uppercase">
			                    <div class="lf-author-profile-pic" style="background: url(<?php echo get_cupp_meta( get_the_author_meta( 'ID' )); ?>) center; background-size: cover;"></div>
			                    <div class="bg-author-name-wrap">
			                      <span class="bg-author">Author:</span>
			                      <span class="bg-author-name"><?php echo get_the_author_firstname(); ?> <?php echo get_the_author_lastname(); ?></span>
			                    </div>
			                  </div>
			                  <article class="bg-article">
			                    <header>
			                      <h1 class="bg-article-header"><?php echo get_the_title(); ?></h1>
			                    </header>

			                    <div class="vg-article-content">
				                    <div class="vg-excerpt"><?php echo the_excerpt(); ?></div>
				                    <div class="vg-content"></div>
			                    </div>

			                  </article>
			                
			                </div>
			                <!-- Close div.article-wrap -->
			              </section>
			            </div>
			          </div>
			          <div class="jt-article-preview__buttons">
			            <div data-post-id="post-<?php the_ID() ?>" class="jt-article-preview__more">
			              <i class="material-icons">fullscreen</i>
			              <span>Quick Read</span>
			            </div>
			            <div class="jt-article-preview__goto">
			              <i class="material-icons">open_in_new</i>
			              <span><a href="<?php the_permalink(); ?>">Go to post</a></span>
			            </div>
			          </div>
			        </div>
			      </section>		

				<?php endwhile; ?>

				<?php the_posts_pagination( array(
						'prev_text' =>  '<span><i class="material-icons">keyboard_arrow_left</i>' . __( '', 'twentyseventeen' ) . '</span>',
						'before_page_number' => __( '', 'twentyseventeen' ),
						'next_text' => '<span>  <i class="material-icons">keyboard_arrow_right</i>' . __( '', 'twentyseventeen' ) . '</span>'
					) );
				?>	
			
		
		<?php else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer(); ?>
