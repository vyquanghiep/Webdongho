<?php require("include/header.php") ?>
<style>
    .main-content_wrapper {
        padding: 20px 30px;
        background: #fff;
        height: 1900px;
        width: 1522px;
    }
    .one-side__menu {
        float: left;
        width: 20%;
        text-align:center;
        background: #fff;
    }
    .one-side__menu ul li{
        list-style-type:none;
        color: #000;
        position: relative;
    font-weight: 400;
    display: inline-block;
           
    transition: all .3s ease;
    display: block;
    font-size: calc(14px + (20 - 14) * ((100vw - 375px)/ (1920 - 375)));
    line-height: calc(20px + (25 - 20) * ((100vw - 375px)/ (1920 - 375)));
    font-weight: 500;
    color: #383838;
    }
    .one-side_content {
        margin-top: 15px;
	    width: 60%;
	    padding: 0;
        margin-right: 150px;
        float: right;
	    border: none;
	    border-collapse: collapse;
	    background: #fff;
    }
    h3{
        margin-top: 20px;
     font-size: calc(14px + (24 - 14) * ((100vw - 375px)/ (1920 - 375)));
    line-height: 25px;
    padding-bottom: 10px;
    border-bottom: 1px solid #ddd;
    margin-bottom: 1.5625vw;
    font-family: "Playfair Display";
    color: inherit;
    }
    a{
	text-decoration: none;
    
    }
    a:hover{
        border-bottom: 5px solid #396;
        color: #396 !important;
    }
   
        
    .c-article-col-1{
        float: left;
        text-align: justify;
        width: 50%;
       
      
    }
    .c-article-col-2{
        float: right;
        text-align: justify;
        width: 50%;
           
    }
    .c-article__title{
        width: 90%;
        margin-top: 60px;
        font-size: 30px;
    line-height: calc(25px + (44 - 25) * ((100vw - 375px)/ (1920 - 375)));
    margin-bottom: calc(11px + (17 - 11) * ((100vw - 375px)/ (1920 - 375)));
    }
    .c-article__img {
        width: 400px;
        height:231px;
    }
    .c-article-normal{
        display: inline-block;
        border-bottom: 1px solid #ddd;
    }
    .e-title-title{
        
        margin: top 20px; 
        text-align: center;
        font-size: 1.82292vw;
        line-height: 2.55208vw;
        padding-bottom: 1.04167vw;
        border-bottom: 1px solid #ddd;
        
    }

    .c-aside_item{
        margin-top :10px;
    }
    .c-article-row{
        margin-top: 70px;
    }
    .support-wrapper{
        margin-top: 25px;
    }
    .c-article__para{
        width: 90%;
        margin-top: 30px;
        
    font-size: 20px;
    line-height: 31px;
    display: block;
    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 2.5vw;
    color: #858585;

    }
</style>

<div class="main-content_wrapper">
    <div class="one-side p-cate">
        <div class="one-side__menu">
            <div class="c-aside_">

                <div class="c-aside-block">
                    <div class="a-aside_title">
                        <h3>Dịch vụ Đồng Hồ & <br>Hỗ trợ</h3>
                    </div>
                    <div class="c-aside_inner">
                        <ul class="c-aside_list">
                            <li class="c-aside_item"><a href="hotro.php">Thay Pin Đồng Hồ</a></li>
                            <li class="c-aside_item"><a href="hotro.php">Điều chỉnh kích thước dây</a></li>
                            <li class="c-aside_item"><a href="hotro.php">vệ sinh đồng hồ</a></li>
                            <li class="c-aside_item"><a href="hotro.php">phục hồ kháng nước</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-aside-block"  >
                    <div class="a-aside_title">
                        <h3>CHĂM SÓC Đồng Hồ</h3>
                    </div>
                    <div class="c-aside_inner">
                        <ul class="c-aside_list">
                            <li class="c-aside_item"><a href="#">Bảo trì đồng hồ</a></li>
                            <li class="c-aside_item"><a href="#">Bảo hành sau mua</a></li>
                            <li class="c-aside_item"><a href="#">Các thắc mắt thường gặp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-aside-block" >
                    <div class="a-aside_title">
                        <h3>CHĂM SÓC KHÁCH HÀNG</h3>
                    </div>
                    <div class="c-aside_inner">
                        <ul class="c-aside_list">
                            <li class="c-aside_item"><a href="#">Kiểm tra </a></li>
                            <li class="c-aside_item"><a href="#">Chính sách đổi trả</a></li>
                            <li class="c-aside_item"><a href="#">Vận chuyển và quy trình</a></li>
                            <li class="c-aside_item"><a href="#">liên hệ</a></li>
                            <li class="c-aside_item"><a href="#">Chính sách sửa chữa</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="one-side_content">
            <div class="1-side_block">
                <div class="e-title-title">DỊCH VỤ DỒNG HỒ & SỮA CHỮA
                </div>
                <div class="support-wrapper">
                    <div class="support-article">
                        <div class="c-article-normal">
                            <div class="c-article-row">
                                <div class="c-article-col-1" style="width:50%">
                                    <div class="c-article__title">THAY PIN ĐỒNG HỒ</div>
                                    <div class="c-article__para">
                                        LikeWatch cung cấp dịch vụ thay pin miễn phí trọn đời cho khách hàng đã mua đồng hồ tại LikeWatch. Khi khách hàng mang sản phẩm đến LikeWatch, các kỹ thuật viên của chúng tôi sẽ tiến hành kiểm tra tổng thể đồng hồ, thay pin miễn phí và kiểm tra lại các chức năng đồng hồ cho khách hàng.
                                    </div>
                                </div>
                                <div class="c-article-col-2"style="width:50%">
                                    <div class="c-article__img"><img src="https://likewatch.com/cdn/show/asset/images/ar.png" alt="THAY PIN ĐỒNG HỒ" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="c-article-normal">
                            <div class="c-article-row">
                                <div class="c-article-col-1">
                                    <div class="c-article__img"><img src="https://likewatch.com/cdn/show/asset/images/ar.png" alt="VỆ SINH ĐỒNG HỒ" /></div>
                                </div>
                                <div class="c-article-col-2">
                                    <div class="c-article__title">VỆ SINH ĐỒNG HỒ</div>
                                    <div class="c-article__para">
                                        Các kỹ thuật viên sẽ tiến hành tháo rời hoàn toàn, vệ sinh, làm sạch các chi tiết đồng hồ kỹ lưỡng trước khi vệ sinh lần hai bằng công nghệ siêu âm để đảm bảo rằng đồng hồ của bạn sẽ được bảo dưỡng và vận hành một cách tốt nhất.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-article-normal">
                            <div class="c-article-row">
                                <div class="c-article-col-1">
                                    <div class="c-article__title">ĐIỀU CHỈNH KÍCH THƯỚC DÂY</div>
                                    <div class="c-article__para">
                                        Những kỹ thuật viên chuyên nghiệp của chúng tôi sẽ xác định những mắt xích cần tháo, từ đó tiến hành cắt mắt dây đồng hồ để điều chỉnh kích thước dây sao cho vừa vặn với tay khách hàng nhất.
                                    </div>
                                </div>
                                <div class="c-article-col-2">
                                    <div class="c-article__img"><img src="https://likewatch.com/cdn/show/asset/images/ar.png" alt="VỆ SINH ĐỒNG HỒ" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="c-article-normal" style="border-bottom:none">
                            <div class="c-article-row">
                                <div class="c-article-col-1">
                                    <div class="c-article__img"><img src="https://likewatch.com/cdn/show/asset/images/ar.png" alt="VỆ SINH ĐỒNG HỒ" /></div>
                                </div>
                                <div class="c-article-col-2">
                                    <div class="c-article__title">PHỤC HỒI KHÁNG NƯỚC</div>
                                    <div class="c-article__para">
                                        Khi đồng hồ khách hàng bị vào nước, các kỹ thuật viên LikeWatch sẽ thực hiện khử nước đồng hồ để tránh hư hỏng bộ máy và linh kiện. Sau đó, chúng tôi sẽ phục hồi kháng nước cho đồng hồ để tránh tình trạng nhiễm nước tiếp diễn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<?php require("include/footer.php") ?>