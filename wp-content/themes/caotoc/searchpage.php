<?php
/*
Template Name: Search Page
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
                <?php get_search_form(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer()?>