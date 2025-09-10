<?php get_header();?>

<section class="blog search-results">
    <div class="container">
        <!-- Search Title -->
         <div class="section-header">
            <h2 class="section-title">
                <?php printf( esc_html__('Search Results for %s', 'lessonlms'), get_search_query() ); ?>
            </h2>
         </div>
         <?php if(have_posts() ) : ?>
            <div class="blog-list">
                <?php  while( have_posts() ) : the_post();?>
                    <div class="blog-item">
                        <div class="blog-heading">
                            <h3 class="blog-title">
                                <a href=" <?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
         <?php else : ?> 
            <p class="no-results">
                <?php _e('No results found','lessonlms');  ?>

            </p>      
         <?php endif; ?>
    </div>
</section>

<?php get_footer();?>