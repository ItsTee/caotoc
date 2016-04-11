<?php get_header(); ?>
<div class="row">
    <div class="small-12 large-12 columns container">
        <div class="maincontent">
            <div class="small-8 large-8 columns left-content">
                <div class="slider-home">
                    <ul class="example-orbit" data-orbit data-options="pause_on_hover:false; timer_speed:5000;">
                        <?php query_posts('tag=slider&posts_per_page=3'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?> 
                                <li>
                                    <div class="slider">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                        <?php endif; ?>                                 
                                    </div>
                                    <div class="container">
                                        <div class="orbit-caption">
                                            <div class="title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </div>
                                            <div class="short-content">
                                                <!--<small>Ngày đăng: <?php the_time(); ?></small>-->
                                                <p><span class="entry"><?php the_excerpt(); ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- SLIDER-HOME -->
                <div class="hotnews">
                    <div class="row">
                        <nav class="top-bar" data-topbar role="navigation">
                            <ul class="title-area">
                                <li class="name">
                                    <h1>Tin nổi bật</h1>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row new">
                        <div class="hotnews-slider">
                            <ul class="example-orbit">
                                <li class="active">
                                    <?php query_posts('cat=8&showposts=4'); ?>
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) : the_post(); ?> 
                                            <div class="news-item">
                                                <div class="images">
                                                    <a href="<?php the_permalink(); ?>">                                    
                                                        <?php if (has_post_thumbnail()): ?>
                                                            <?php the_post_thumbnail(); ?>
                                                        <?php else: ?>
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                                <!--<small><?php the_time(); ?></small>-->
                                                <a class="title-links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END HOTNEWS -->
                <div class="tab-news">
                    <ul class="tabs" data-tab>
                        <li class="tab-title active"><a href="#home">Điểm tin nóng</a></li>
                        <li class="tab-title"><a href="#menu1">Hoạt động các dự án</a></li>
                        <li class="tab-title"><a href="#menu2">Hợp tác quốc tế</a></li>
                        <li class="tab-title"><a href="#menu3">Chuyên đề</a></li>
                    </ul>
                    <div class="tabs-content">
                        <div class="content active" id="home">
                            <div class="row">                                
                                <?php $my_query = query_posts('cat=10&showposts=4'); ?>
                                <?php global $post; ?>
                                <div class="left-news small-6 large-7 columns">
                                    <?php foreach ($my_query as $key => $post): ?>                                
                                        <?php setup_postdata($post); ?>
                                        <?php if ($key == 0): ?>                                                                                
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                <?php endif; ?>
                                            </a>
                                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <!--                                            <small class="date"><?php the_time(); ?></small>-->
                                            <p><?php the_excerpt(); ?></p>
                                        <?php else: ?>
                                        </div>
                                        <div class="right-news small-6 large-5 columns">
                                            <div class="items">
                                                <div class="news-item-1">
                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <!--                                                    <small class="date"><?php the_time(); ?></small>-->
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>                                        
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="content" id="menu1">
                            <div class="row">                                
                                <?php $my_query = query_posts('cat=11&showposts=4'); ?>
                                <?php global $post; ?>
                                <div class="left-news small-6 large-6 columns">
                                    <?php foreach ($my_query as $key => $post): ?>                                
                                        <?php setup_postdata($post); ?>
                                        <?php if ($key == 0): ?>                                                                                
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                <?php endif; ?>
                                            </a>
                                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <!--                                            <small class="date"><?php the_time(); ?></small>-->
                                            <p><?php the_excerpt(); ?></p>                                        
                                        <?php else: ?>
                                        </div>
                                        <div class="right-news small-6 large-6 columns">
                                            <div class="items">
                                                <div class="news-item-1">
                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    <!--<small class="date"><?php the_time(); ?></small>-->
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>                                        
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="content" id="menu2">
                            <div class="row">                                
                                <?php $my_query = query_posts('cat=12&showposts=4'); ?>
                                <?php global $post; ?>
                                <div class="left-news small-6 large-6 columns">
                                    <?php foreach ($my_query as $key => $post): ?>                                
                                        <?php setup_postdata($post); ?>
                                        <?php if ($key == 0): ?>                                                                                
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                <?php endif; ?>
                                            </a>
                                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                            <!--<small class="date"><?php the_time(); ?></small>-->
                                            <p><?php the_excerpt(); ?></p>                                        
                                        <?php else: ?>
                                        </div>
                                        <div class="right-news small-6 large-6 columns">
                                            <div class="items">
                                                <div class="news-item-1">
                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    <!--<small class="date"><?php the_time(); ?></small>-->
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>                                        
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="content" id="menu3">
                            <div class="row">                                
                                <?php $my_query = query_posts('cat=13&showposts=4'); ?>
                                <?php global $post; ?>
                                <div class="left-news small-6 large-6 columns">
                                    <?php foreach ($my_query as $key => $post): ?>                                
                                        <?php setup_postdata($post); ?>
                                        <?php if ($key == 0): ?>                                                                                
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                <?php endif; ?>
                                            </a>
                                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                            <!--<small class="date"><?php the_time(); ?></small>-->
                                            <p><?php the_excerpt(); ?></p>                                        
                                        <?php else: ?>
                                        </div>
                                        <div class="right-news small-6 large-6 columns">
                                            <div class="items">
                                                <div class="news-item-1">
                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    <!--<small class="date"><?php the_time(); ?></small>-->
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>                                        
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TAB-NEWS -->
                <div class="album">
                    <div class="row">
                        <nav class="top-bar" data-topbar role="navigation">
                            <ul class="title-area">
                                <li class="name">
                                    <h1>Ảnh tổng hợp</h1>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row gallery">
                        <div class="large-12 columns">
                            <div class="row">                                
                                <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
                                    <?php query_posts('cat=8&showposts=4'); ?>
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) : the_post(); ?> 
                                            <li>
                                                <a href="<?php the_title(); ?>">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <?php the_post_thumbnail(); ?>
                                                    <?php else: ?>
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/no-image.png">
                                                    <?php endif; ?>
                                                    <a href="#"><?php the_title(); ?></a>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/banner1.png"></a>
                </div>
                <!--            <div class="media">
                                <div class="row">
                                    <div class="large-6 columns">
                                        <nav class="top-bar" data-topbar role="navigation">
                                            <ul class="title-area">
                                                <li class="name">
                                                    <h6>Media</h6>
                                                </li>
                                                 Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone 
                                                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                                            </ul>
                
                                            <section class="top-bar-section">
                                                 Right Nav Section 
                                                <ul class="right">
                                                    <li class="has-dropdown">
                                                        <a href="#">Danh sách Video</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Video 1</a></li>
                                                            <li><a href="#">Video 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                 Left Nav Section 
                                            </section>
                                        </nav>
                                    </div>
                                    <div class="large-6 columns">
                                        <nav class="top-bar" data-topbar role="navigation">
                                            <ul class="title-area">
                                                <li class="name">
                                                    <h6>Audio</a></h6>
                                                </li>
                                                 Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone 
                                                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-6 columns">
                                        <div class="video">
                                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/media.png" /></a>
                                            <a href="#">»Ám ảnh 'một giây và cuộc đời' của nhân chứng taxi tông liên hoàn 09/11/2015</a>
                                        </div>
                                    </div>
                                    <div class="large-6 columns">
                                        <div class="audio">
                                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/audio.png" /></a>
                                            <p><a class="active" href="#">Đang chạy: Cần phải làm gì để tránh những tai nạn đáng tiếc xảy ra .</a></p>
                                            <p><a href="#">» Xe container “làm xiếc” gần cầu Phú Mỹ</a></p>
                                            <p><a href="#">» Trung Quốc nói gì?Xe trước thắng gấp, 4 xe tải sau tông nhau liên hoàn</a></p>
                                            <p><a href="#">» Hàng nghìn người cầu siêu cho nạn nhân tai nạn   giao thông</a></p>
                                            <p><a href="#">» Ám ảnh 'một giây và cuộc đời' của nhân chứng taxi </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>