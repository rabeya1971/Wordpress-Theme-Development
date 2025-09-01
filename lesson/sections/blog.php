<section class="blog">
            <div class="container">

                <div class="blog-heading">
                    <!-- <h3>Our blog</h3> -->
                    <h3><?php echo esc_html(get_theme_mod('blog_section_title', 'Our blog')); ?></h3>
                    <!-- <p>Read our regular travel blog and know the latest update of tour and travel</p> -->
                    <p>
                        <?php echo esc_html(get_theme_mod('blog_section_description', 'Read our regular travel blog and know the latest update of tour and travel')); ?> 
                    </p>
                </div>


                <div class="blog-wrapper">

                    <?php
                        $posts = new WP_Query(array(
                            'post_type' => 'post',
                            'post_per_page' => 3,
                            'order' => 'DESC'
                        ));
                        if($posts->have_posts()):
                            while($posts->have_posts()) : $posts->the_post();
                    ?>
                    <!----- blog-1 ----->
                    <div class="sngle-blog blog-1">
                        <div class="img">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-1.png" alt="course-1"> -->

                            <a href= "<?php the_permalink(); ?>" >
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('large');
                                    }else{
                                        echo'<img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-1.png" alt="course-1">';
                                    }  
                                ?>
                            </a>
                        </div>

                        <div class="single-blog-details">
                            <!----- blog-details ----->
                            <div class="date">
                                <div class="yellow-cercel"></div>
                                <!-- <span>21 November 2021</span> -->

                                <span> <?php echo get_the_date('d F Y'); ?></span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <!-- <span>How to become a pro web designer in 2022 and get remot job?</span> -->
                                <span>
                                    <a href="<?php the_permalink(); ?> ">
                                        <?php the_title(); ?>

                                    </a>
                                </span>
                            </div>

                            <!----- btn ----->
                            <!-- <div class="yellow-bg-btn read-more">Read More</div> -->
                            <div class="yellow-bg-btn read-more">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php _e('Read More', 'lessonlms'); ?>
                                    </a>
                            </div>
                        </div>
                    </div>

                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>' . __('No blog post found', 'lessonlms') . '</p>';
                    endif;
                    ?>

                    <!-- --- blog-2 --- -->
                    <!-- <div class="sngle-blog blog-2">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-2.png" alt="course-1">
                        </div>

                        <div class="single-blog-details"> -->
                            <!----- blog-details ----->
                            <!-- <div class="date">
                                <div class="yellow-cercel"></div>
                                <span>21 November 2021</span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <span>How to become a pro web designer in 2022 and get remot job?</span>
                            </div> -->

                            <!----- btn ----->
                            <!-- <div class="yellow-bg-btn black-btn read-more">Read More</div>
                        </div>
                    </div> -->

                    <!----- blog-3 ----->
                    <!-- <div class="sngle-blog blog-3">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-3.png" alt="course-1">
                        </div>

                        <div class="single-blog-details"> -->
                            <!----- blog-details ----->
                            <!-- <div class="date">
                                <div class="yellow-cercel"></div>
                                <span>21 November 2021</span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <span>How to become a pro web designer in 2022 and get remot job?</span>
                            </div> -->

                            <!----- btn ----->
                            <!-- <div class="yellow-bg-btn black-btn read-more">Read More</div>
                        </div>
                    </div> -->

                    <!----- blog-1 ----->
                    <!-- <div class="sngle-blog blog-4">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-1.png" alt="course-1">
                        </div>

                        <div class="single-blog-details"> -->
                            <!----- blog-details ----->
                            <!-- <div class="date">
                                <div class="yellow-cercel"></div>
                                <span>21 November 2021</span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <span>How to become a pro web designer in 2022 and get remot job?</span>
                            </div> -->

                            <!----- btn ----->
                            <!-- <div class="yellow-bg-btn black-btn read-more">Read More</div>
                        </div>
                    </div> -->

                    <!----- blog-2 ----->
                    <!-- <div class="sngle-blog blog-4">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-2.png" alt="course-1">
                        </div>

                        <div class="single-blog-details"> -->
                            <!----- blog-details ----->
                            <!-- <div class="date">
                                <div class="yellow-cercel"></div>
                                <span>21 November 2021</span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <span>How to become a pro web designer in 2022 and get remot job?</span>
                            </div> -->

                            <!----- btn ----->
                            <!-- <div class="yellow-bg-btn black-btn read-more">Read More</div>
                        </div>
                    </div> -->

                    <!----- blog-3 ----->
                    <!-- <div class="sngle-blog blog-6">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/blog-3.png" alt="course-1">
                        </div>

                        <div class="single-blog-details"> -->
                            <!----- blog-details ----->
                            <!-- <div class="date">
                                <div class="yellow-cercel"></div>
                                <span>21 November 2021</span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <span>How to become a pro web designer in 2022 and get remot job?</span>
                            </div> -->

                            <!----- btn ----->
                            <!-- <div class="yellow-bg-btn black-btn read-more">Read More</div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>