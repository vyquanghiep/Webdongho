	</main>

    <footer>    
        <div class="col1">
            <div class="logo">
                <br>
                <img id="logo-img" src="images/logodh.png" alt="logo" width="100" height="100"><br>
            </div>
        </div>
        <div class="col2">
            <ul>
                  <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                 <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="col3">
            <ul>
                 <li><a href="trang-chu.php">Trang Chủ</a></li>
                 <li><a href="gioithieu.php">Về Chúng Tôi</a></li>
                 <li><a href="lienhe.php">Thông Tin Liên Lạc</a></li>
                 <li><a href="#">Dịch Vụ</a></li>
                 <li><a href="#">Điều Kiện Chính Sách</a></li>
            </ul>
        </div>
        <div class="col4">
            <ul>
                 <li>
                     <span style="color: #fff; "><i class="fa fa-map-marker"></i></span>
                     <a>02 Thanh Sơn<br />
                         Quận Hải Châu, Thành Phố Đà Nẵng<br />
                         Việt Nam</a>
                 </li>
                 <li>
                     <span style="color: #fff;"><i class="fa fa-phone"></i></span>
                     <p><a href="#">+84 123 456 789</a>
                         <br />
                         <a href="#">+84 987 654 321</a></p>
                 </li>
                 <li>
                     <span style="color: #fff;"><i class="fa fa-envelope"></i></span>
                     <p><a href="#">diachiemail@gmail.com</a></p>
                </li>
             
            </ul>
        </div>
    </footer>
		<style>

.social-network {
  position: fixed;
  bottom: 200px;
  right: 17px;
}
.social-network ul {
  display: flex;
  flex-direction: column;
}
.social-network ul li {
  margin-bottom: 15px;
}
.social-network ul li a img {
  width: 60px;
  height: auto;
}
		</style>
		<div class="social-network">
		
        <ul>
            <li><a href="https://www.facebook.com/messages/t/4469248233165288"><img
                        src="https://www.thethaothientruong.vn/public/frontend/images/icons/widget_icon_messenger.svg"
                        alt="Instagram" /></a></li>
			<li><a href="https://www.facebook.com/"><img
                        src="https://i.pinimg.com/originals/79/0d/29/790d29ac20dc5fc7cd5c2a61cbddb9f7.png"
                        alt="Instagram" /></a></li>			
            <li><a href="https://chat.zalo.me/"><img
                        src="https://www.thethaothientruong.vn/public/frontend/images/icons/widget_icon_zalo.svg"
                        alt="Instagram" /></a></li>
            <li><a href="trang-chu.php"><img
                        src="https://www.thethaothientruong.vn/public/frontend/images/icons/widget_icon_map.svg"
                        alt="Instagram" /></a></li>
        </ul>
    </div>
	</footer>
	<script src="https://code.jquery.com/jquery.js"></script>
<script src="../admin/js/jquery.dataTables.min.js"></script>
<script>
     $('#my-table').DataTable({
        "pageLength": 5,
        "lengthMenu": [ 5, 10, 15, 20, 25 ]
     });
</script>
</body>
</html>