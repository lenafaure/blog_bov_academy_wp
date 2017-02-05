<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			 <!--Background image top-->
		    

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
				
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="bg-background-image">
		      		<img src="<?php the_post_thumbnail_url(); ?>" alt="">
		      	<div class="bg-background-image-shade"></div>
		   		</div>
	
				<?php endif; ?>
 					
 				<div class="bg-content-wrap">
 					
 					<!--Shadow on top of article-->
			      <div class="bg-shadow"></div>
			      
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

							<?php echo the_content(); ?>

		                  </article>
		                  
		                  <div class="bg-link">
				            <label for="">Link:</label>
				            <div class="bg-url">
				              http://blog.bovacademy.com
				            </div>
				          </div>
		                
		                </div>
		                <!-- Close div.article-wrap -->
		              </section>
		              
	                  <!--Horizontal line between sections-->
  					  <hr class="article-comment-separator">
						
					  <!--Comment section-->
  					  <section class="bg-comment-section">
  					  	
  					  	 <header>
          					<h2>Comments</h2>
        				</header>
        				
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; ?>
					 </section>	
					
				</div>
				
			<?php endwhile; // End of the loop.	?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
