<!DOCTYPE html>
<html>
<head>
	<title>rice store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../Css/TrangChu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>
	<div class="container1" >
		<div class="header">
			<div class="header1">
				<div class="flex">
					<ul class="flex1">
						<li><img src="../Img/telephone.png">(+84)983 942 707</li>
						<li><img src="../Img/map.png">Xuân Phú - Hòa Sơn - Hòa Vang - TP. Đà Nẵng</li>
						<li><img src="../Img/fb.png">Dàn Nhạc Trịnh</li>
					</ul>
					<ul class="flex2">
						<li><img src="../Img/user.png">Đăng kí</li>
						<li><img src="../Img/user.png">Đăng nhập</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="header2">
				<div class="logo">
					<img width="150px" height="150px" src="../Img/logo.png">
					
				</div>
				<div class="menu">
					<div>
						<img src="../Img/home.png">
						<br>
						<h4>Trang chủ</h4>
					</div>
					<div>
						<img src="../Img/contact.png">
						<br>
						<h4>Liên hệ</h4>
					</div>
					<div>
						<img src="../Img/phone.png">
						<br>
						<h4>Tư vấn</h4>
					</div>
					<div>
						<img src="../Img/percen.png">
						<br>
						<h4>Khuyến mãi</h4>
					</div>
					<div>
						<img src="../Img/detail.png">
						<br>
						<h4>Chi tiết</h4>
					</div>
					<div>
						<img src="../Img/time.png">
						<br>
						<h4>Thời gian</h4>
					</div>
					<div>
						<img src="../Img/new.png">
						<br>
						<h4>Dịch vụ mới</h4>
					</div>
					<div>
						<img src="../Img/more.png">
						<br>
						<h4>Khác</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="menubar">
			<ul>
				<li><a href="#">ĐÁM CƯỚI</a>
					<ul class="sub-menu">
						<li><a href="#">Nhà trai</a></li>
						<li><a href="#">Nhà gái</a></li>
						
					</ul>
				</li>

				<li><a href="#">LIÊN HOAN</a></li>
				<li><a href="#">TIỆC</a>
					<ul class="sub-menu">
						<li><a href="#"><500 khách</a></li>
							<li><a href="#">>500 khách</a></li>
							<li><a href="#">Khác</a></li>
						</ul>
					</li>
					<li style="margin-right: 450px;"><a href="#">KHÁC</a></li>
					<input autocomplete="off" class="search" placeholder="Tìm kiếm bài viết" spellcheck="false" type="text">


			</ul>
				<br>



</div>
				<div class="w3-content w3-display-container" style="max-width:1150px">
					<img class="mySlides" src="../Img/nhac1.jpg" style="width:1150px; height: 400px">
					<img class="mySlides" src="../Img/nhac2.jpg" style="width:1150px; height: 400px">
					<img class="mySlides" src="../Img/nhac3.jpg" style="width:1150px; height: 400px">
					<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
						<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
						<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
					</div>
				</div>

				<script>
					var slideIndex = 1;
					showDivs(slideIndex);

					function plusDivs(n) {
						showDivs(slideIndex += n);
					}

					function currentDiv(n) {
						showDivs(slideIndex = n);
					}

					function showDivs(n) {
						var i;
						var x = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("demo");
						if (n > x.length) {slideIndex = 1}
							if (n < 1) {slideIndex = x.length}
								for (i = 0; i < x.length; i++) {
									x[i].style.display = "none";  
								}
								for (i = 0; i < dots.length; i++) {
									dots[i].className = dots[i].className.replace(" w3-white", "");
								}
								x[slideIndex-1].style.display = "block";  
								dots[slideIndex-1].className += " w3-white";
							}

						</script>
						<hr>

						<div class="introduce">
							<div class="name">
								<h3 >DÀN NHẠC</h3>
								<h1 style="color:#a83250; margin-top:-20px;"> <img src="../Img/nhac.png" alt=""> TRỊNH  <img src="../Img/nhac.png" alt=""></h1>
								<img src="../Img/hoatiet.png" alt="" style="margin-top:-15px; ">
							</div>
							<br>
							<div style="display: flex; justify-content: center;">
							<div class="chao">
								<h3>TRÂN TRỌNG KÍNH CHÀO QUÝ KHÁCH</h3>
								<p>Dàn nhạc Trịnh tại Xuân Phú - Hòa Sơn - Hòa Vang - TP Đà Nẵng, rất hân hạnh được chào đón và phục vụ quý khách. 

								Với đội ngũ nhân viên trong dàn nhạc được đào tạo chuyên nghiệp và có kinh nghiệm làm nhạc lâu năm. Luôn lắng nghe và ghi nhận ý kiến đóng góp của Quý khách . Luôn đổi mới và hoàn thiện nâng cao chất lượng phục vụ. Luôn đổi mới những công cụ làm nhạc mới mẻ theo kịp thời đại. Luôn hết mình phục vụ tạo ra những âm thanh hay nhất và luôn hết mình phục vụ quý khách.<br><br>

								<i style="font-size: 17px; color:black"><b>"Ở thời điểm hạnh phúc, thứ chúng ta nghe thấy là âm nhạc, vào những lúc buồn bã, chúng ta bắt đầu hiểu được ca từ"</b></i>
							</p>
							

                            </div>
                            
                            </div>
                  

                            <div class="donghe">
                            	<h3 >Dàn Nhạc Trịnh</h3>
                            	<h2 style="color:#a83250; margin-top:-20px;"> <img src="../Img/nhac.png" alt=""> ĐỒ NGHỀ <img src="../Img/nhac.png" alt=""></h2>
                            </div>
                            <br>
                            <div style="justify-content: center; display: flex;">
                            <div class="dannhac">
                            	<h1>Dàn Loa chuyên nghiêp</h1>
                            	<p>
                            		Với công nghệ tiên tiến như hiện nay,dàn nhạc Trịnh luôn cố gắng thay đổi bộ dàn nhạc của mình theo kịp thời đại để phục vụ mọi người theo cách chuyên nghiệp nhất tất cả cộng cụ đều là những thứ mới nhất, tốt nhất, đặc biệt không sử dụng những vật dụng đã quá cũ nên mọi người hãy yên tâm về chất lượng khi chọn dàn nhạc chúng tôi. 
                            	</p>
                            	<br>
                            	<i style="color: #a83250" >"Luôn nâng cấp để trở nên hoàn hảo"</i>
                            </div>
                            <div>
                            	<img src="../Img/loa.jpg" alt="" width="400px;" height="250px;">
                            </div>
                            </div>
                            <div class="nhanvien">
                            	<h3 >Dàn Nhạc Trịnh</h3>
                            	<h2 style="color:#a83250; margin-top:-20px;"> <img src="../Img/nhac.png" alt=""> ĐỘI NGŨ NHÂN VIÊN <img src="../Img/nhac.png" alt=""></h2>
                            </div>
                            <br>
                            <div style="justify-content: center; display: flex;">
                            	<div>
                            	<img src="../Img/team.png" alt="" width="400px;" height="250px;">
                                </div>
                            	<div class="gtnhanvien">
                            		<h3>Nhân Viên Nhiệt Tình</h3>
                            		<p>
                            			Dàn Nhạc Trịnh nơi quy tụ những người nhân viên ưu tú, nhiệt tình,luôn hết mình vì khách hàng.Hãy đến với chúng tôi và góp ý chúng tôi sẽ sửa để nên hoàn thiện.

                            		</p>
                            		<br>
                            		<i style="color: #a83250">
                            			"Chúng tôi luôn cố gắng hết mình để cho bạn nghe những âm thanh du dương nhất"
                            		</i>
                            		
                            	</div>
                            </div>
                            <div class="donghe">
                            	<h3 >Dàn Nhạc Trịnh</h3>
                            	<h2 style="color:#a83250; margin-top:-20px;"> <img src="../Img/nhac.png" alt=""> LIÊN HỆ <img src="../Img/nhac.png" alt=""></h2>
                            	<img src="../Img/hoatiet.png" alt="" style="margin-top:-15px; ">
                            	<h4>Quý khách có thể đến để đặt tại địa điểm sau:</h4>
                            	<img src="../Img/nha.PNG" alt="" width="1150px;" height="500px" >
                            </div>
                            
                    </div>

	</div>
</body>
</html> 