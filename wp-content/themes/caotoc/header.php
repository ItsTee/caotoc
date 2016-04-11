<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="row">
            <div class="large-12 columns nav-bar">
                <div class="top">
                    <nav class="top-bar" data-topbar>
                        <ul class="title-area">
                            <li class="toggle-topbar menu-icon">
                                <a href="#"><span>Menu</span></a>
                            </li>
                        </ul>

                        <section class="top-bar-section">
                            <ul class="right">
                                <li><a href="#">Hotline: (+84)437227678</a></li>
                                <li class="divider"></li>
                                <li><a href="">
                                        <?php
                                        pll_the_languages(array(
                                            'show_flags' => 0,
                                            'dropdown' => 0,
                                            'hide_if_empty' => 0,
                                            'show_names' => 1,
                                        ));
                                        ?>
                                    </a></li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
            <!-- END TOP -->
        </div>
        <div class="row">
            <div class="large-12 columns page-header">
                <div class="header">
                    <div class="logo">
                        <a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
                    </div>
                    <div class="company">
                        <h3>CỤC QUẢN LÝ ĐƯỜNG BỘ CAO TỐC</h3>
                        <p>Vietnam Expressway Administration</p>
                    </div>
                    <div class="banner right">
                        <ul class="orbitSlider2 text-center" data-orbit data-options="animation:fade; timer_speed: 5000; pause_on_hover:false; navigation_arrows:true;bullets:false ;slide_number: false; next_class: next-btn; prev_class: prev-btn;circular:true; ">
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/img/h1.png" alt="slide 1" />
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/img/H2.png" alt="slide 2" />
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/img/H3.png" alt="slide 3" />
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/img/H4.png" alt="slide 4" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END HEADER -->
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns nav-bar">
                <div class="mainmenu">
                    <nav class="top-bar" data-topbar>            
                        <section class="top-bar-section"> 
                            <!-- Right Nav Section -->                 
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'primary',
                                'menu_class' => 'top-bar-menu left',
                                'container' => '',
                                'depth' => '0',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'fallback_cb' => 'wp_page_menu',
                                'link_after' => '',
                                'walker' => new top_bar_walker()
                            ));
                            ?>                 
                            <!-- Left Nav Section -->     
                            <ul class="right">
                                <div title="Tìm kiếm" id="search">
                                    <form action="index.php?page_id=179" id="searchform" method="get"> 
                                        <input type="text" onfocus="if (this.value == 'Tìm kiếm') {
                                                    this.value = '';
                                                }" onblur="if (this.value == '') {
                                                            this.value = 'Tìm kiếm';
                                                        }" id="s" name="s" placeholder="Tìm kiếm" />
                                        <button type="submit" class="search-icon"><i class="fi-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </ul>
                        </section>             
                    </nav>
                </div>
            </div>
        </div>