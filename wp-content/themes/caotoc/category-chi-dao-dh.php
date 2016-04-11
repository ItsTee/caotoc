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
                <div class="tai-lieu">
                <h5 class="title">THƯ VIỆN</h5>
                <div class="search-filter">
                    <div class="row">
                        <div class="large-4 columns">
                            <input type="text" placeholder="Nhập từ khóa tìm kiếm" />
                        </div>
                        <div class="large-4 columns">
                            <select>
                                <option value="husker">Chọn danh mục tài liệu</option>
                                <option value="starbuck">Tài liệu 1</option>
                                <option value="hotdog">Tài liệu 2</option>
                                <option value="apollo">Tài liệu 3</option>
                            </select>
                        </div>
                        <div class="large-3 columns">
                            <select>
                                <option value="husker">Năm ban hành</option>
                                <option value="starbuck">2015</option>
                                <option value="hotdog">2014</option>
                                <option value="apollo">2013</option>
                            </select>
                        </div>
                        <div class="large-1 columns">
                            <a href="#" class="button"><i class="fi-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
                <div class="document">
                    <ul class="tabs" data-tab role="tablist">
                        <li class="tab-title active" role="presentation"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">Văn bản pháp luật</a></li>
                        <li class="tab-title" role="presentation"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2">Tài liệu</a></li>
                        <li class="tab-title" role="presentation"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-3">Thư viện ảnh</a></li>
                    </ul>
                    <div class="tabs-content">
                        <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="30%">Tên Văn bản</th>
                                        <th width="50%">Trích yếu</th>
                                        <th width="15%">Năm BH</th>
                                        <th width="5%">Tải</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">TT số 34/2015/TT-BNNPTNT</a></td>
                                        <td>Thông tư sửa đổi, bổ sung một số nội dung của Thông tư số 03/2015/TT-BNNPTNT ngày 29/1/2015 của Bộ trưởng Bộ Nông nghiệp và Phát triển ...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">TT số 34/2015/TT-BNNPTNT</a></td>
                                        <td>Thông tư sửa đổi, bổ sung một số nội dung của Thông tư số 03/2015/TT-BNNPTNT ngày 29/1/2015 của Bộ trưởng Bộ Nông nghiệp và Phát triển ...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">TT số 34/2015/TT-BNNPTNT</a></td>
                                        <td>Thông tư sửa đổi, bổ sung một số nội dung của Thông tư số 03/2015/TT-BNNPTNT ngày 29/1/2015 của Bộ trưởng Bộ Nông nghiệp và Phát triển ...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">TT số 34/2015/TT-BNNPTNT</a></td>
                                        <td>Thông tư sửa đổi, bổ sung một số nội dung của Thông tư số 03/2015/TT-BNNPTNT ngày 29/1/2015 của Bộ trưởng Bộ Nông nghiệp và Phát triển ...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">TT số 34/2015/TT-BNNPTNT</a></td>
                                        <td>Thông tư sửa đổi, bổ sung một số nội dung của Thông tư số 03/2015/TT-BNNPTNT ngày 29/1/2015 của Bộ trưởng Bộ Nông nghiệp và Phát triển ...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">TT số 34/2015/TT-BNNPTNT</a></td>
                                        <td>Thông tư sửa đổi, bổ sung một số nội dung của Thông tư số 03/2015/TT-BNNPTNT ngày 29/1/2015 của Bộ trưởng Bộ Nông nghiệp và Phát triển ...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-centered">
                                <ul class="pagination">
                                    <li class="unavailable"><a href="">«</a></li>
                                    <li class="unavailable"><a href="">Trước</a></li>
                                    <li class="current unavailable"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li class="unavailable"><a href="">&hellip;</a></li>
                                    <li><a href="">12</a></li>
                                    <li><a href="">13</a></li>
                                    <li><a href="">Sau</a></li>
                                    <li class="arrow"><a href="">»</a></li>
                                </ul>
                            </div>
                        </section>
                        <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="30%">Tên Văn bản</th>
                                        <th width="50%">Trích yếu</th>
                                        <th width="15%">Năm BH</th>
                                        <th width="5%">Tải</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Hướng dẫn kỹ thuật về đánh giá rủi ro do phát thải hóa chất nguy hại của một số ngành công nghiệp</a></td>
                                        <td>Hướng dẫn là tài liệu cơ bản trong viêc xác định và đánh giá rủi ro gây tác động tới môi trường và sức khỏe con người do hóa chất phát thải từ các cơ sở sản xuất, kinh doanh có hoạt động hóa chất...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Hướng dẫn kỹ thuật về đánh giá rủi ro do phát thải hóa chất nguy hại của một số ngành công nghiệp</a></td>
                                        <td>Hướng dẫn là tài liệu cơ bản trong viêc xác định và đánh giá rủi ro gây tác động tới môi trường và sức khỏe con người do hóa chất phát thải từ các cơ sở sản xuất, kinh doanh có hoạt động hóa chất...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Hướng dẫn kỹ thuật về đánh giá rủi ro do phát thải hóa chất nguy hại của một số ngành công nghiệp</a></td>
                                        <td>Hướng dẫn là tài liệu cơ bản trong viêc xác định và đánh giá rủi ro gây tác động tới môi trường và sức khỏe con người do hóa chất phát thải từ các cơ sở sản xuất, kinh doanh có hoạt động hóa chất...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Hướng dẫn kỹ thuật về đánh giá rủi ro do phát thải hóa chất nguy hại của một số ngành công nghiệp</a></td>
                                        <td>Hướng dẫn là tài liệu cơ bản trong viêc xác định và đánh giá rủi ro gây tác động tới môi trường và sức khỏe con người do hóa chất phát thải từ các cơ sở sản xuất, kinh doanh có hoạt động hóa chất...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Hướng dẫn kỹ thuật về đánh giá rủi ro do phát thải hóa chất nguy hại của một số ngành công nghiệp</a></td>
                                        <td>Hướng dẫn là tài liệu cơ bản trong viêc xác định và đánh giá rủi ro gây tác động tới môi trường và sức khỏe con người do hóa chất phát thải từ các cơ sở sản xuất, kinh doanh có hoạt động hóa chất...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Hướng dẫn kỹ thuật về đánh giá rủi ro do phát thải hóa chất nguy hại của một số ngành công nghiệp</a></td>
                                        <td>Hướng dẫn là tài liệu cơ bản trong viêc xác định và đánh giá rủi ro gây tác động tới môi trường và sức khỏe con người do hóa chất phát thải từ các cơ sở sản xuất, kinh doanh có hoạt động hóa chất...</td>
                                        <td>2015</td>
                                        <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pdf.png"></a></td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-centered">
                                <ul class="pagination">
                                    <li class="unavailable"><a href="">«</a></li>
                                    <li class="unavailable"><a href="">Trước</a></li>
                                    <li class="current unavailable"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li class="unavailable"><a href="">&hellip;</a></li>
                                    <li><a href="">12</a></li>
                                    <li><a href="">13</a></li>
                                    <li><a href="">Sau</a></li>
                                    <li class="arrow"><a href="">»</a></li>
                                </ul>
                            </div>
                        </section>
                        <section role="tabpanel" aria-hidden="true" class="content" id="panel2-3">
                            <div class="row">
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                                <div class="large-4 columns">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/image1.png"></a>
                                    <h6>1</h6>
                                    <p>Danh mục: Dự án Cao Tốc</p>
                                    <p>Thời gian: 2015</p>
                                    <p>Địa điểm: Thành phố Hà Nội</p>
                                </div>
                            </div>
                            <div class="pagination-centered">
                                <ul class="pagination">
                                    <li class="unavailable"><a href="">«</a></li>
                                    <li class="unavailable"><a href="">Trước</a></li>
                                    <li class="current unavailable"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li class="unavailable"><a href="">&hellip;</a></li>
                                    <li><a href="">12</a></li>
                                    <li><a href="">13</a></li>
                                    <li><a href="">Sau</a></li>
                                    <li class="arrow"><a href="">»</a></li>
                                </ul>
                            </div>
                        </section>
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