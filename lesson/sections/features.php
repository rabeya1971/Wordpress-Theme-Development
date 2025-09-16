<?php  
$features_title = get_theme_mod('features_title','Learner outcomes through our awesome platform');
$features_description = get_theme_mod('features_description','87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.');
$features_description_two = get_theme_mod('features_description_two','Lesson Impact Report (2025)');
$features_button_text = get_theme_mod('features_button_text','sign up');
$features_button_url = get_theme_mod('features_button_url','#');
$features_image_one = get_theme_mod('features_image_one', get_template_directory_uri() . '/assets/images/features-img-1.png');
$features_image_two = get_theme_mod('features_image_two', get_template_directory_uri() . '/assets/images/features-img-2.png');
?>

<section class="features">
            <div class="container">
                <div class="features-wrapper">
                    <!----- img box ----->
                    <div class="features-img">
                       
                        <!-- <img class="img-1" src="<?php echo get_template_directory_uri(); ?> /assets/images/features-img-1.png" alt=""> -->
                        <?php if( $features_image_one): ?>
                            <<img class="img-1" src="<?php echo esc_url($features_image_one); ?>" alt="">
                        <?php endif; ?>
                        <!-- <img class="img-2" src="<?php echo get_template_directory_uri(); ?> /assets/images/features-img-2.png" alt=""> -->
                        <?php if( $features_image_two): ?>
                            <img class="img-2" src="<?php echo esc_url($features_image_two); ?>" alt="">
                        <?php endif; ?>      
                    </div>

                    <!----- text box ----->
                    <div class="features-text">
                        <!-- <h3>Learner outcomes through our awesome platform</h3> -->
                        <h3><?php echo esc_html($features_title); ?></h3>
                        <!-- <p>87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.</p> -->
                         <p><?php echo esc_html($features_description); ?></p>
                        <!-- <span>Lesson Impact Report (2022)</span> -->
                        <span><?php echo esc_html($features_description_two); ?></span>

                        <!-- <div class="yellow-bg-btn sign-up">sign up</div> -->
                        <?php if($features_button_text): ?>
                            <a href="<?php echo esc_url($features_button_url); ?>" class="yellow-bg-btn sign-up">
                                <?php echo esc_html($features_button_text); ?>
                            </a>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </section>