<div class="footer">
    <div class="row">
        <div class="large-12 columns">
            <nav class="top-bar" data-topbar>
                <section class="top-bar-section">
                    <ul class="left">
                        <li class="active"><a href="#">CỤC QUẢN LÝ ĐƯỜNG BỘ CAO TỐC</a></li>
                        <span style=" width: 0;
                              height: 0 !important;
                              border-style: solid !important;
                              border-width: 2.656em 0 0 2.656em !important;
                              border-color: transparent transparent transparent #0760e7 !important;
                              float: left !important;"></span>
                        <li><a href="#">TIN TỨC</a></li>
                        <li><a href="#">ẢNH HOẠT ĐỘNG</a></li> 
                        <li><a href="#">VĂN BẢN PHÁP LUẬT</a></li> 
                        <li><a href="#">HỎI ĐÁP</a></li>  
                    </ul>
                </section>
            </nav>
        </div>
    </div>
    <div class="child-footer">
        <div class="row">
            <div class="small-10 large-centered columns">
                <div class="logo">
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
                </div>
                <div class="page">
                    <p>Trang thông tin điện tử tuyên truyền An Toàn Giao Thông </p>
                    <p>Cục Quản lý đường bộ cao tốc Việt Nam</p>
                    <p>Địa chỉ liên hệ: Lô D20 - Khu Đô thị Cầu Giấy - Hà Nội</p>
                    <p>Điện thoại (Tel.): 844 379 551 38</p>
                </div>
            </div>
        </div>
        <div class="license row">
            <hr />
            <div class="large-12 columns">
                <p>Giấy phép số ....</p>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Thăm dò ý kiến</h2>
    <form class="khaosat_form">
        <div class="modal-body">
            <!-- khaosat content -->
            <span>
                <strong>Nên ưu tiên biện pháp nào để giảm thiểu ô nhiễm POP?</strong>
            </span>
            <div class="cauhoi">

                <input id="checkbox1" type="checkbox"><label for="checkbox1">Tăng cường nâng cao nhận thức cộng đồng về các tác động nguy hại đến sức khỏe và môi trường do các hợp chất POP                                </label>
                <br>
                <input id="checkbox2" type="checkbox"><label for="checkbox2"> Tăng cường thanh tra các doanh nghiệp, cơ sở sản xuất kinh doanh có sử dụng và phát sinh các hợp chất POP                                </label>
                <br>
                <input id="checkbox3" type="checkbox"><label for="checkbox3">Áp dụng các quy định cưỡng chế, xử phạt nặng đối với hành vi cố tình sử dụng hoặc phát sinh các chất POP mà không được cho phép                                </label>
                <br>
                <input id="checkbox4" type="checkbox"><label for="checkbox4">Tìm ra các chất thay thế các hợp chất POP mà không gây các tác động nguy hại đến sức khỏe con người và môi trường                                </label>
                <br>
                <input id="checkbox5" type="checkbox"><label for="checkbox5">Áp dụng cơ chế sản xuất sạch hơn tại các doanh nghiệp, cơ sở sản xuất kinh doanh                                </label>
            </div>
    </form>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="myModal-1" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Kết quả bình chọn.</h2>
    <p>Tại đơn vị ông/bà đang công tác có sử dụng hoặc có lưu giữ thiết bị/vật liệu bị nhiễm/nghi nhiễm POP hay không?</p>
    <p>Nên ưu tiên biện pháp nào để giảm thiểu ô nhiễm POP?</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Initialize Foundation JS -->
<script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.orbit.js"></script>
<script>
    $(document).foundation({
        orbit: {
            next_class: false,
            prev_class: false
        }
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
