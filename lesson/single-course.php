<?php get_header();?>
<?php if(have_posts()) : ?>
    <?php while( have_posts() ) : the_post(); ?>

    <?php
    $price = get_post_meta(get_the_ID(), 'price', true) ?: '0.00';
    $original_price = get_post_meta(get_the_ID(), 'original_price', true) ?: '';
    $video_hours = get_post_meta(get_the_ID(), 'video_hours', true) ?: '0';
    $article_count = get_post_meta(get_the_ID(), 'article_count', true) ?: '0';
    $downloadable_resources = get_post_meta(get_the_ID(), 'downloadable_resources', true) ?: '0';
    $language = get_post_meta(get_the_ID(), 'language', true) ?: 'English';
    $subtitles = get_post_meta(get_the_ID(), 'subtitles', true) ?: 'English';

    $discount = '';
    if (!empty($original_price) && $original_price > $price ){
        $discount = round((($original_price - $price)/$original_price) * 100);

    }

    ?>

    <section class= "single-course">
        <div class="container">
            <div class="course-header">
                 <!-- Breadcrumb -->
                <div class="breadcrumb">
                    <!-- <a href="courses.html">Courses</a> / <span>Web App Design</span> -->
                    <a href="<?php echo get_post_type_archive_link('course'); ?>">Courses</a> / <span><?php the_title(); ?></span>
                </div>
                <!-- Course Title -->
                <!-- <h1>Web App Design</h1> -->
                <h1><?php echo the_title(); ?></h1>
                <!-- Course Meta -->
                <div class="course-meta">
                     <!-- Rating -->
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span>4.8 (1,245 reviews)</span>
                    </div>
                    <!-- Enrolled -->
                    <div class="enrolled">
                        <i class="fas fa-users"></i>
                        <span>3,450 students enrolled</span>
                    </div>
                </div>
            </div>
            <div class="course-content">
                <div class="course-main">
                    <div class="course-hero">
                    <!-- <img src="assets/images/course-1.png" alt="Web App Design Course" class="course-image"> -->
                        <?php if (has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('full', array( 
                                'class'=> 'course-image', 
                                'alt'=> get_the_title() 
                                )); ?>
                        <?php endif; ?>
                        <img src="assets/images/course-1.png" alt="Web App Design Course" class="course-image">
                       
                        <div class="price-box">
                            <!-- <div class="current-price">$199.99</div>
                             <div class="original-price">$299.99</div>
                            <div class="discount-badge">33% OFF</div> -->
                            <div class="current-price">$<?php echo esc_html($price); ?></div>
                            <div class="original-price">$<?php echo esc_html($original_price); ?></div>
                            <div class="discount-badge"><?php echo esc_html($discount); ?> %OFF</div>
                            <div class="enroll-btn">Enroll Now</div>
                            <div class="includes">
                                <h4>This course includes:</h4>
                                <ul>
                                    
                                    <!-- <li><i class="far fa-file-vedio"></i> 42 hours on-demand video</li>
                                    <li><i class="far fa-file-alt"></i> 18 articles</li>
                                    <li><i class="fas fa-download"></i> 56 downloadable resources</li>
                                    <li><i class="fas fa-infinity"></i> full lifetime access</li>
                                    <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li> -->
                                    <li><i class="far fa-file-vedio"></i> <?php echo esc_html($video_hours); ?> hours on-demand video</li>
                                    <li><i class="far fa-file-alt"></i> <?php echo esc_html($article_count); ?> articles</li>
                                    <li><i class="fas fa-download"></i> <?php echo esc_html($downloadable_resources);?> downloadable resources</li>
                                    <li><i class="fas fa-infinity"></i> full lifetime access</li>
                                    <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li>
                                    <li><i class="fas fa-trophy"></i>Certificate of completion</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="course-tabs">
                        <nav class = "tabs-nav">
                            <button class= "tab-btn-active" data-tab="overview">Overview</button>
                            <button class= "tab-btn" data-tab="curriculm">Curriculm</button>
                            <button class= "tab-btn" data-tab="instructor">Instructor</button>
                            <button class= "tab-btn" data-tab="reviews">Reviews</button>
                        </nav>

                        <div class= "tab-content active" id="overview">
                            <h2>Course Description</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tempora voluptas laboriosam eius deserunt sed, aliquam alias ea sunt magnam iure? Repellendus sapiente nisi culpa molestiae perspiciatis tempore obcaecati doloremque nemo unde consequatur dicta, pariatur voluptatum sequi consequuntur vitae eaque!</p>
                            <h2>What You'll Learn</h2>
                            <ul class="learn-list">
                                <li><i class="fas fa-check"></i>Principles of effective web app design</li>
                                <li><i class="fas fa-check"></i>User experience research methods</li>
                                <li><i class="fas fa-check"></i>Creating wireframes and prototypes</li>
                                <li><i class="fas fa-check"></i>Design systems and component libraries</li>
                                <li><i class="fas fa-check"></i>Responsive design techniques</li>
                                <li><i class="fas fa-check"></i>Interaction design and micro-animations</li>
                                <li><i class="fas fa-check"></i>Handing off designs to developers</li>
                                
                            </ul>
                            <h2>Requirements</h2>
                                <ul class="requirements-list">
                                <li><i class="fas fa-circle"></i>Basic computer skills</li>
                                <li><i class="fas fa-circle"></i>Familiarity with any design tool(optional)</li>
                                <li><i class="fas fa-circle"></i>Passion for design and creativity</li>
                                </ul>

                        </div>
                        <div class="tab-content" id="curriculm">
                            <h2>Course Curriculm</h2>
                            <div class="accordion">
                                <div class="accordion-item">
                                    <button class= "accordion-header">
                                        <span>Section 1: Introduction to Web Design</span>
                                        <span> 6 lectures . 45 min</span>
                                    </button>
                                    <div class="accordion-content">
                                        <ul>
                                            <li><i class= "far fa-play-circle"></i>Welcome to the course <span>5:20</span></li>
                                            <li><i class= "far fa-play-circle"></i>What is web app design?<span>8:15</span></li>
                                            <li><i class= "far fa-play-circle"></i>Industry tools overview<span>12:40</span></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <button class= "accordion-header">
                                        <span>Section 2: User Research</span>
                                        <span> 8 lectures . 1 hr 20 min</span>
                                    </button>
                                    <div class="accordion-content">
                                        <ul>
                                            <li><i class= "far fa-play-circle"></i>Understanding user needs<span>15:20</span></li>
                                            <li><i class= "far fa-play-circle"></i>Creating user personals<span>18:30</span></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="tab-content" id="instructor">
                            <div class="instructor-profile">
                                <img src="assets/images/instructor.jpg" alt="Instructor">
                                <div class="instructor-info">
                                    <h3>Sarah Johnson</h3>
                                    <span class="title">Senior UI/UX Designer at TechCorp</span>
                                    <div class="rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>4.9 Instructor Rating</span>
                                    </div>
                                    <div class="stats">
                                        <div class="stat">
                                            <span class="number">12,540</span>
                                            <span class="label">Students</span>
                                        </div>
                                        <div class="stat">
                                            <span class="number">8</span>
                                            <span class="label">Courses</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium cumque optio aspernatur rem alias officiis quas quis beatae, placeat iste quidem ducimus corrupti cupiditate quos eum ab recusandae. Consectetur.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="course-sidebar">
                    <div class="sidebar-card">
                        <h3>Course Details</h3>
                        <ul class="course-details-list">
                            <li>
                                <i class="far fa-clock"></i>
                                <div>
                                    <span>Duration</span>
                                    <strong>42 hours</strong>
                                </div>
                            </li>
                            <li>
                                <i class="far fa-calender-alt"></i>
                                <div>
                                    <span>Last Updated</span>
                                    <strong>June 15, 2025</strong>
                                </div>
                            </li>
                            <li>
                                <i class="far fa-language"></i>
                                <div>
                                    <span>Language</span>
                                    <!-- <strong>English</strong> -->
                                    <strong><?php echo esc_html($language); ?></strong>
                                </div>
                            </li>
                            <li>
                                <i class="far fa-closed-captioning"></i>
                                <div>
                                    <span>Subtitles</span>
                                    <!-- <strong>English, Spanish</strong> -->
                                    <strong><?php echo esc_html($subtitles); ?></strong>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <?php endwhile; ?>
        <?php endif; ?>
<?php get_footer();?>