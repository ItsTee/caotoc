<?php get_header(); ?>
<div class="row">
    <div class="small-12 large-12 columns container">
        <div class="maincontent">
            <div class="small-8 large-8 columns left-content">
                <?php
                $defaults = array(
                    'container' => 'nav',
                    'before' => '',
                    'after' => '',
                    'show_on_front' => true,
                    'network' => false,
                    'show_title' => true,
                    'show_browse' => FALSE,
                    'echo' => true,
                    'labels' => array(
                        'home' => __('Trang chủ', 'breadcrumb-trail'),
                    )
                );
                if (function_exists('breadcrumb_trail'))
                    breadcrumb_trail($defaults);
                ?>
                <div class="categories">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="row">
                                <div class="large-3 columns">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                        <?php endif; ?>                                        
                                    </a>
                                </div>
                                <div class="large-9 columns">
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
<!--                                    <small class="date"><?php the_time(); ?></small>-->
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <hr />
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <?php
                $args = array(
                    'prev_text' => __('Trước'),
                    'next_text' => __('Sau'),
                );
                ?>

                <?php echo paginate_links($args); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer()?>