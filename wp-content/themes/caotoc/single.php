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
                <div class="child-content">
                    <?php while (have_posts()) : the_post(); ?>                    
                        <h6><?php the_title(); ?></h6>
                        <hr />
                        <small>Ngày đăng: <?php the_time('d - m - Y'); ?> <?php the_time('H:i'); ?> </small>
                        <?php if(function_exists('kc_add_social_share')) kc_add_social_share(); ?>
                        <hr />
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <?php comment_form(); ?>
                <!--                <div class="comment">
                                    <h6>Viết bình luận</h6>
                                    <hr />
                                    <h6>Bình luận của bạn sẽ được biên tập trước khi xuất bản</h6>
                                    <div class="row">
                                        <div class="large-6 columns">
                                            <div class="row collapse prefix-radius">
                                                <div class="small-4 columns">
                                                    <span class="prefix">Họ và tên:</span>
                                                </div>
                                                <div class="small-8 columns">
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="large-6 columns">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-4 columns">
                                                    <span class="postfix">Địa chỉ Email:</span>
                                                </div>
                                                <div class="small-8 columns">
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <label>
                                                <textarea placeholder=""></textarea>
                                            </label>
                                        </div>
                                    </div>
                                    <a href="#" class="button">Gửi bình luận</a>
                                </div>-->
                <div class="new-receive">
                    <h6>Tin mới nhận</h6>
                    <hr id="underlined" />
                    <hr />
                    <a href="#"><p>Bộ trưởng Thăng trả lời chất vấn về tiết giảm chi phí dự án 18/11/2015</p></a>
                    <a href="#"><p>Bộ trưởng Đinh La Thăng giải trình việc xây dựng cầu treo Khe Tây 18/11/2015</p></a>
                    <a href="#"><p>Tưởng niệm nạn nhân tử vong do TNGT: Hành động vì người đang sống 16/11/2015</p></a>
                    <a href="#"><p>Chia sẻ kinh nghiệm, giải pháp tăng cường ATGT đường bộ Việt Nam 13/11/2015</p></a>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
