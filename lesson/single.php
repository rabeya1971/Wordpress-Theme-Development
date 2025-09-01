<?php get_header(); ?>

<!----- Blog Details Section ----->
<section class="blog-details">
    <div class="container">
        <div class="blog-details-wrapper">
            <!----- Main Blog Content ----->
            <div class="blog-content"> 
                <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="blog-meta">
                    <div class="date">
                        <div class="yellow-circle"></div>
                        <!-- <span>21 November 2021</span> -->
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                    <!-- <h1 class="blog-title"> Title of the blog </h1> -->
                    <h1 class="blog-title"> <?php echo the_title(); ?> </h1>
                    <div class="author">
                        <!-- <img src="https://avatars.githubusercontent.com/u/27496908?v=4" alt="Author" class="author-avatar"> -->
                        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                        <!-- <span class="author-name">By Nayemur Rahman</span> -->
                        <span class="author-name"> By <?php the_author(); ?></span>
                    </div>
                </div>
                
                <div class="featured-image">
                       <!-- <img src="assets/images/blog-1.png" alt="Blog Featured Image"> -->
                       <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                </div>
                
                <div class="blog-text">
                    <!-- <p>text</p>
                    <p>another text</p>
                    <h2>title</h2>
                    <p>another text2</p> -->
                    <?php the_content(); ?>
                    
                    <div class="blog-tags">
                        <span>Tags:</span>
                        <!-- <a href="#">Web Design</a>
                        <a href="#">Career</a>
                        <a href="#">2022</a> -->
                        <?php the_tags('',  '',  ''); ?>
                    </div>
                    
                    <div class="social-share">
                        <span>Share:</span>
                        <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                        
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=&text=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                
                <!----- Author Box ----->
                <div class="author-box">
                    <div class="author-avatar">
                        <!-- <img> src="https://avatars.githubusercontent.com/u/27496908?v=4" alt="Author"> -->
                        <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                    </div>
                    <div class="author-info">
                        <!-- <h3>About Nayemur Rahman</h3> -->
                        <h3>About <?php the_author(); ?> </h3>
                        <!-- <p>Rabeya Sultana is currently learning Web Development and Wordpress. She is still at the primary level and learning step by step. Her goal is to become a skilled web developer.</p> -->
                        <p><?php echo get_the_author_meta('description'); ?></p> 
                        <div class="author-social">

                            <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a> -->

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-facebook-f"></i></a>
                            <?php endif; ?>

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-instagram"></i></a>
                            <?php endif; ?>

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-linkedin-in"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!----- Comments Section ----->
                <div class="comments-section">
                <!-- <h2 class="section-title">Comments (3)</h2> -->

                    <?php 
                        $comments_count = get_comments_number();
                        if ( $comments_count > 0 ):
                            echo '<h2 class="section-title">Comments ('.$comments_count.')</h2>';
                        endif;

                        $parent_comments = get_comments(array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve',
                            'order'  => 'ASC',
                            'parent' => 0
                        ));
                    ?>

                     <?php if( $parent_comments ) : ?>
                         <div class="comment-list">
                             <?php foreach($parent_comments as $comment) : ?>
                                 <div class="comment" id="comment-<?php echo $comment->comment_ID; ?>">
                                    <!-- 1.comment avatar -->
                                     <div class="comment-avatar">
                                         <?php echo get_avatar($comment, 50); ?>
                                     </div>
                                     <!-- 2.comment content -->
                                     <div class="comment-content">
                                        <div class="comment-meta">
                                        <!-- 2.1 comment author -->
                                             <h4><?php echo esc_html($comment->comment_author); ?></h4>
                                        <!-- 2.2 comment date -->
                                             <span class="comment-date">
                                                 <?php echo human_time_diff(strtotime($comment->comment_date), current_time('timestamp')); ?> ago
                                             </span>
                                        </div>
                                      <!-- 2.comment content -->
                                         <p><?php echo esc_html($comment->comment_content); ?></p>
                                         <div class="comment-actions">
                                             <?php 
                                                 comment_reply_link(array(
                                                     'reply_text' => 'Reply',
                                                     'depth'      => 1,
                                                     'max_depth'  => get_option('thread_comments_depth'),
                                                     'class' => 'reply-btn'
                                                 ), $comment->comment_ID, get_the_ID());
                                                ?>
                                         </div>
                                     </div>
                                 </div>
                             <?php endforeach; ?>
                         </div>
                     <?php endif; ?>
                    
                    
                    <!----- Comment 1 ----->
                    <div class="comment">
                        <!-- <div class="comment-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raselahmed/" alt="Commenter">
                        </div>  -->
                        <div class="comment-content">
                            <!-- <div class="comment-meta">
                                <h4>Rasel Ahmed</h4>
                                <span class=""comment-date>2 days ago</span>
                            </div> -->
                            <!-- <p>Great article! i've been looking for resources to improve my web design skills and this was really helpful.</p>
                              </div> -->
                              <!-- <div class="comment-actions">
                                <a href="#" class="reply-btn">Reply</a>
                              </div> -->
                             
                       
                            
                            <!----- Reply to Comment 1 ----->
                            <!-- <div class="comment-reply"> -->
                                       <!-- avatar -->
                                <!-- <div class="comment-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/polashmahmud.jpg" alt="Commenter">
                                </div> -->
                                <!-- <div class="comment-content"> -->
                                    <!-- <div class="comment-meta"> -->
                                        <!-- author -->
                                        <!-- <h4>Polash Mahmud</h4> -->
                                        <!-- date -->
                                        <!-- <span class="comment-date">1 day ago</span> -->
                                    <!-- </div> -->
                                         <!-- content -->
                                    <!-- <p> I agree with Rasel Ahmed. The section about color theory was particularly insightful.</p> -->
                                    <!-- <div class="comment-actions">
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div> -->
                                <!-- </div>
                            </div> -->


                            <?php
                                $replies = get_comments(array(
                                    'post_id' => get_the_ID(),
                                    'status' => 'approve',
                                    'order'  => 'ASC',
                                    'parent' => $comment->comment_ID
                                ));
                            ?>

                            <?php if($replies) : ?>
                                <?php foreach($replies as $reply) : ?>
                                    <div class="comment reply" id="comment-<?php echo $reply->comment_ID; ?>">
                                                <!-- avatar -->
                                        <div class="comment-avatar">
                                            <?php echo get_avatar($reply, 50); ?>
                                        </div>

                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <!-- author -->
                                                <h4><?php echo esc_html($reply->comment_author); ?></h4>
                                                <!-- date -->
                                                <span class="comment-date">
                                                    <?php echo human_time_diff(strtotime($reply->comment_date), current_time('timestamp')); ?> ago
                                                </span>
                                            </div>
                                                <!-- content -->
                                            <p><?php echo esc_html($reply->comment_content); ?></p>
                                            <div class="comment-actions">
                                                <a href="#" class="reply-btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!----- Comment Form ----->

                <!-- <div class="comment-form">
                    <h2 class= "section-title">Leave a Comment</h2>
                    <form>
                        <div class="form-group">
                            <textarea placeholder="Write your comment here..." required></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <button type="submit" class="yellow-bg-btn submit-btn">Post Comment</button>
                    </form>
                </div> -->

                <!-- starting dynamic -->
                <div class="comment-form">
                    <h2 class="section-title">Leave a Comment</h2>

                    <?php
                        comment_form(array(
                            'fields' => array(
                                'author' => '<div class="form-row"><div class="form-group"><input id="author" name="author" type="text" placeholder="Name" required></div>',
                                'email'  => '<div class="form-group"><input id="email" name="email" type="email" placeholder="Email" required></div></div>'
                            ),
                            'comment_field' => '<div class="form-group"><textarea id="comment" name="comment" placeholder="Write your comment here..." required></textarea></div>',
                            'class_submit' => 'yellow-bg-btn submit-btn',
                            'label_submit' => 'Post Comment'
                        ));
                    ?>
                </div>

                <?php endwhile; endif; ?>

            </div>
            <!-- end dynamic form -->
            <!----- Sidebar ----->
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>