<?php get_header(); ?>
<div class="row">
    <div class="small-12 large-12 columns container">
        <div class="maincontent">
            <div class="small-8 large-8 left-content">
                <div class="newest-new">
                    <div class="slider-news">
                        <ul class="example-orbit" data-orbit data-options="pause_on_hover:false; timer_speed:5000;">
                            <?php
//                            $args = array(
//                                'tag' => 'slider',
//                                'showposts' => 5,
//                                'caller_get_posts' => 1
//                            );
//                            $my_query = new WP_Query($args);
//                            var_dump($my_query);die;
                            ?>
                            <?php query_posts('tag=slider&posts_per_page=3'); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?> 
                                    <div class="item active">
                                        <div class="large-7 columns">
                                            <a class="th" href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="large-5 columns">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="news-by-category">
                    <div class="news-by-category-title">
                        <span>Hành trình ATGT</span>
                    </div>
                    <div class="news-by-category-content">
                        <?php query_posts('cat=12&posts_per_page=1'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $main_id = get_the_ID(); ?> 
                                <div class="large-6 columns">
                                    <a class="th" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                        <?php endif; ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <span><?php the_title(); ?></span>
                                    </a>
                                    <br />
        <!--                                    <small><?php the_time(); ?></small>-->
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="large-6 columns tin-tuc">
                            <?php wp_list_pages('title_li=&depth=1&include=' . $main_id); ?>
                            <?php query_posts('cat=12&posts_per_page=10'); ?>
                            <div class="danh-sach-tin">
                                <div class="danh-sach">
                                    <ul>
                                        <?php if (have_posts()) : ?>
                                            <?php while (have_posts()) : the_post(); ?> 
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-by-category">
                    <div class="news-by-category-title">
                        <span>Tin nóng ATGT</span>
                    </div>
                    <div class="news-by-category-content">
                        <?php query_posts('cat=9&posts_per_page=1'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $main_id2 = get_the_ID(); ?> 
                                <div class="large-6 columns">
                                    <a class="th" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                        <?php endif; ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <span><?php the_title(); ?></span>
                                    </a>
                                    <br />
        <!--                                    <small><?php the_time(); ?></small>-->
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="large-6 columns tin-tuc">
                            <?php wp_list_pages('title_li=&depth=1&include=' . $main_id2); ?>
                            <?php query_posts('cat=12&posts_per_page=10'); ?>
                            <div class="danh-sach-tin">
                                <div class="danh-sach">
                                    <ul>
                                        <?php if (have_posts()) : ?>
                                            <?php while (have_posts()) : the_post(); ?> 
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-by-category">
                    <div class="news-by-category-title">
                        <span>Hoạt động lãnh đạo</span>
                    </div>
                    <div class="news-by-category-content">
                        <?php query_posts('cat=9&posts_per_page=1'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $main_id3 = get_the_ID(); ?> 
                                <div class="large-6 columns">
                                    <a class="th" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                        <?php endif; ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <span><?php the_title(); ?></span>
                                    </a>
                                    <br />
        <!--                                    <small><?php the_time(); ?></small>-->
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="large-6 columns tin-tuc">
                            <?php wp_list_pages('title_li=&depth=1&include=' . $main_id2); ?>
                            <?php query_posts('cat=12&posts_per_page=10'); ?>
                            <div class="danh-sach-tin">
                                <div class="danh-sach">
                                    <ul>
                                        <?php if (have_posts()) : ?>
                                            <?php while (have_posts()) : the_post(); ?> 
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer()?>