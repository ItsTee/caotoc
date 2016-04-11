<?php
/*
  Template Name: Leader Page
 */
?>
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
                );
                if (function_exists('breadcrumb_trail'))
                    breadcrumb_trail($defaults);
                ?>
                <div class="leader-area">
                    <h5>LÃNH ĐẠO CỤC CAO TỐC</h5>
                    <?php query_posts('cat=61&showposts=4'); ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?> 
                            <div class="leader">
                                <p class="leader-name"><?php the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>">                                    
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(array(200, 200)); ?>
                                    <?php else: ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                    <?php endif; ?>
                                </a>
                                <p class="leader-info"><?php the_excerpt(); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="subleader">
                        <div class="row">
                            <?php query_posts('cat=51&showposts=8'); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?> 
                                    <div class="item small-6 medium-6 columns">

                                        <p class="leader-name"><?php the_title(); ?></p>
                                        <a href="<?php the_permalink(); ?>">                                    
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail(array(200, 200)); ?>
                                            <?php else: ?>
                                                <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                            <?php endif; ?>
                                        </a>
                                        <p class="leader-info"><?php the_excerpt(); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
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