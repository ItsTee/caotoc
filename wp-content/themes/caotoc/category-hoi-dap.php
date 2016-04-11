<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>
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
                <div class="question">
                    <?php
                    if (have_posts()) :
                        $run = 0;
                        while (have_posts()) : the_post();
                            $run++;
                            ?>
                            <h6><?php the_title(); ?></h6>
                            <ul class="accordion" data-accordion>
                                <li class="accordion-navigation">
                                    <a href="#panel<?php echo $run; ?>a">Trả lời</a>
                                    <div id="panel<?php echo $run; ?>a" class="content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </li>
                            </ul>
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
<?php get_footer() ?>
