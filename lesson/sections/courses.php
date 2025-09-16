<section class="courses">
            <div class="container">
                <div class="heading courses-heading">
                    <h2>Our popular courses</h2>
                    <p>Build new skills with new trendy courses and shine for the next future career.</p>
                </div>

                <div class="courses-wrapper slick-items"> <!----- added slick this line ----->

                <?php
                    $courses = new WP_Query(array(
                        'post_type' => 'course',
                        'posts_per_page' => 6,
                ));
                    if($courses->have_posts() ) :
                        while($courses->have_posts() ) : $courses->the_post();

                        $rating = get_post_meta(get_the_ID(), 'rating', true);
                        $price = get_post_meta(get_the_ID(), 'price', true);

                        $price = !empty($price) ? $price : '0.00';
                        $rating = !empty($rating) ?$rating : '0.0';

                ?>
                    <!----- course-1 ----->
<!-- 
                    <div class="course course-1 active-btn">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-1.png" alt="course-1">
                           </div> -->

                    <div class="course course-1 active-btn">
                        <div class="img">
                            <?php if( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-1.png" alt="course-1">
                            <?php endif; ?>
                        </div>

                        <div class="course-details">
                            <!----- course title and rating ----->
                            <!-- <div class="flex">
                                <span class="c-title">Basic web design</span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span>4.5</span>
                                </div>
                            </div>

                            <p>Get the best course, gain knowledge and shine for your future career.</p> -->

                            <div class="flex">
                                <span class="c-title"><?php the_title();?></span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span><?php echo esc_html($rating); ?></span>
                                </div>
                            </div>

                            <p><?php echo wp_trim_words(get_the_excerpt(),15);?></p>



                            <!----- price and btn ----->
                            <!-- <div class="price-btn">
                                <span class="price">$120.75</span>

                                <div class="yellow-bg-btn book-now">Book Now</div>
                            </div> -->
                            <div class="price-btn">
                                <span class="price">$<?php echo esc_html($price); ?></span>

                                <div class="yellow-bg-btn book-now">Book Now</div>
                            </div>
                        </div>
                    </div>

                        <?php endwhile; ?>
                    <?php else : ?> 
                        <h2>No course found.</h2>
                    <?php endif; wp_reset_postdata(); ?>

                    <!----- course-2 ----->
                    <!-- <div class="course course-2">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-2.png" alt="course-1">
                        </div>

                        <div class="course-details"> -->
                            <!----- course title and rating ----->
                            <!-- <div class="flex">
                                <span class="c-title">UI/UX design</span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span>4.5</span>
                                </div>
                            </div>

                            <p>Get the best course, gain knowledge and shine for your future career.</p> -->


                            <!----- price and btn ----->
                            <!-- <div class="price-btn">
                                <span class="price">$120.75</span>

                                <div class="yellow-bg-btn black-btn book-now">Book Now</div>
                            </div>
                        </div>
                    </div> -->

                    <!----- course-3 ----->
                    <!-- <div class="course course-3">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-3.png" alt="course-1">
                        </div>

                        <div class="course-details"> -->
                            <!----- course title and rating ----->
                            <!-- <div class="flex">
                                <span class="c-title">Web App design</span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span>4.5</span>
                                </div>
                            </div>

                            <p>Get the best course, gain knowledge and shine for your future career.</p>
 -->

                            <!----- price and btn ----->
                            <!-- <div class="price-btn">
                                <span class="price">$120.75</span>

                                <div class="yellow-bg-btn black-btn book-now">Book Now</div>
                            </div>
                        </div>
                    </div> -->

                    <!-- --- course-1 ---
                    <div class="course course-1 active-btn">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-1.png" alt="course-1">
                        </div>

                        <div class="course-details">
                            <!----- course title and rating ----->
                            <div class="flex">
                                <span class="c-title">Basic web design</span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span>4.5</span>
                                </div>
                            </div>

                            <p>Get the best course, gain knowledge and shine for your future career.</p>


                            <!----- price and btn ----->
                            <div class="price-btn">
                                <span class="price">$120.75</span>

                                <div class="yellow-bg-btn book-now">Book Now</div>
                            </div>
                        </div>
                    </div>

                    <!----- course-2 ----->
                    <!-- <div class="course course-2">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-2.png" alt="course-1">
                        </div>

                        <div class="course-details"> -->
                            <!----- course title and rating ----->
                            <!-- <div class="flex">
                                <span class="c-title">UI/UX design</span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span>4.5</span>
                                </div>
                            </div>

                            <p>Get the best course, gain knowledge and shine for your future career.</p> -->


                            <!----- price and btn ----->
                            <!-- <div class="price-btn">
                                <span class="price">$120.75</span>

                                <div class="yellow-bg-btn black-btn book-now">Book Now</div>
                            </div>
                        </div>
                    </div> -->

                    <!----- course-3 ----->
                    <!-- <div class="course course-3">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/course-3.png" alt="course-1">
                        </div>

                        <div class="course-details"> -->
                            <!----- course title and rating ----->
                            <!-- <div class="flex">
                                <span class="c-title">Web App design</span>

                                <div class="rating">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B"/>
                                    </svg>

                                    <span>4.5</span>
                                </div>
                            </div>

                            <p>Get the best course, gain knowledge and shine for your future career.</p>
 -->

                            <!----- price and btn ----->
                            <!-- <div class="price-btn">
                                <span class="price">$120.75</span>

                                <div class="yellow-bg-btn black-btn book-now">Book Now</div>
                            </div> -->
                        <!-- </div>
                    </div> -->

                </div>
                    <div class="price-btn" style="margin-top:30px;">
                        <a href="<?php echo get_post_type_archive_link('course'); ?>" class="yellow-bg-btn" style="padding:10px 20px; border-radius:50px; margin:0 auto;">see all courses</a>
                    </div>
            </div>
        </section>