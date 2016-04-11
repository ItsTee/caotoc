<?php get_header(); ?>
<div class="row">
    <div class="small-12 large-12 columns container">
        <div class="maincontent">
            <div class="small-8 large-8 left-content">
                <div class="child-content">
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
                    <?php while (have_posts()) : the_post(); ?>                    
                        <h6><?php the_title(); ?></h6>
                        <hr />
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
