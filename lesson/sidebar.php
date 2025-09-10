<div class="blog-sidebar">
                <?php dynamic_sidebar('blog_sidebar');?>
                <div class="sidebar-widget search-widget">
                    <!-- <h3 class="widget-title">Search</h3> -->
                    <h3 class="widget-title"><?php _e('Search', 'lessonlms'); ?></h3>
                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <!-- <input type="text" placeholder="Search..."> -->
                        <input type="search" name="s" placeholder="<?php esc_attr_e('Search...','lessonlms'); ?>" value="<?php echo get_search_query(); ?>" required>
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                
                <div class="sidebar-widget recent-posts">
                    <h3 class="widget-title">Recent Posts</h3>
                    <!-- <ul>
                        <li>
                          <a href="#">How to become a pro web designer in 2025</a>
                          <span class="post-date">Nov 21, 2021</span>  
                        </li>
                    </ul> 
                </div> -->
                   
                    <ul>
                        <?php 
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 4,
                                'post_status' => 'publish'
                            ));
                         ?>

                        <?php foreach( $recent_posts as $post ) : ?>
                        <li>
                            <a href="<?php echo get_permalink($post['ID']); ?>">
                                <?php echo esc_html($post['post_title']); ?>
                            </a>
                            <span class="post-date"><?php echo get_the_date('M d, Y', $post['ID']); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- <div class="sidebar-widget categories">
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                        <li><a href="#"> Web Design <span>(12)</span></a></li>
                        <li><a href="#"> Development <span>(8)</span></a></li>
                        <li><a href="#"> UI/UX <span>(15)</span></a></li>
                        <li><a href="#"> Freelancing <span>(5)</span></a></li>
                        <li><a href="#"> Carrer <span>(7)</span></a></li>
                    </ul>
                </div>
                 -->
                <div class="sidebar-widget categories">
                    <h3 class="widget-title"><?php _e('Categories','lessonlms'); ?></h3>
                    <ul>
                        <?php 
                            wp_list_categories(array(
                                'title_li' => '',
                                'show_count' => true
                            )); 
                        ?>
                        
                    </ul>
                </div>

                <!-- <div class="sidebar-widget tags">
                    <h3 class="widget-title">Tags</h3>
                    <div class="tag-cloud">
                        <a href="#">Design</a>
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">JavaScript</a>
                        <a href="#">Carrer</a>
                        <a href="#">Freelance</a>
                        <a href="#">2025</a>
                        <a href="#">Tips</a>
                    </div>
                </div> -->

                
                <div class="sidebar-widget tags">
                    <h3 class="widget-title"><?php _e('Tags', 'lessonlms'); ?></h3>
                    <div class="tag-cloud">
                        <?php
                            wp_tag_cloud(array(
                                'smallest' => 12,
                                'largest'  => 12,
                                'unit'     => 'px',
                                'number'   => 10,
                                'format'   => 'flat'
                            ));
                        ?>
                    </div>
                </div>
            </div>