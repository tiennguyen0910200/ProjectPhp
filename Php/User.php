<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/a.css">
</head>
<body>
	<div>
		<div class="top">
			<ul class="flex">
				<li><img src="../Img/telephone.png">(+84)983 942 707</li>
				<li><img src="../Img/map.png">Xuân Phú - Hòa Sơn - Hòa Vang - TP. Đà Nẵng</li>
				<li><img src="../Img/fb.png">Dàn Nhạc Trịnh</li>
			</ul>
		</div>
		<div style="display: flex; justify-content: center;background-color: #f5e3c1" >
			<img width="250px" height="250px" src="../Img/logo.png">

			<div style="font-size: 67px; text-shadow: 0.1em 0.1em #333; margin-top: 70px;">
				DÀN NHẠC TRỊNH
			</div>
		</div>
		<div>
			<nav class="navbar navbar-light bg-light">
				<div style="display: flex; justify-content: center;">
					<form style="margin-right: 500px;"  class="form-inline">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

					</form>
					<form >
						<img src="../Img/cart.png">
					</form>
				</div>
			</nav>
		</div>
		<center>
			<div style="width: 870px; ">
				<div class="month">      
					<ul>
						<li class="prev">&#10094;</li>
						<li class="next">&#10095;</li>
						<li>
							August<br>
							<span style="font-size:18px">2017</span>
						</li>
					</ul>
				</div>

				<ul class="weekdays">
					<li>Mon</li>
					<li>Tue</li>
					<li>Wed</li>
					<li>Thur</li>
					<li>Fri</li>
					<li>Sat</li>
					<li>Sun</li>
				</ul>

				<ul class="days">  
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
					<li><span class="active">10</span></li>
					<li>11</li>
					<li>12</li>
					<li>13</li>
					<li>14</li>
					<li>15</li>
					<li>16</li>
					<li>17</li>
					<li>18</li>
					<li>19</li>
					<li>20</li>
					<li>21</li>
					<li>22</li>
					<li>23</li>
					<li>24</li>
					<li>25</li>
					<li>26</li>
					<li>27</li>
					<li>28</li>
					<li>29</li>
					<li>30</li>
					<li>31</li>
				</ul>
			</div>

		</center>
		<h1>Mời bạn chọ dịch vụ</h1>
		<?php include 'db.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 effect_up" style="display: flex">

					<?php 
					for ($i=0; $i < count($result2)  ; $i++) { 
						?>



						<div  class="border">
							<p><b><?php  echo $result2[$i][1]; ?></b></p>
							<p><img style="width: 200px; height: 200px" src="../Img/<?php  echo $result2[$i][2]; ?>"></p>
							<button type="button" class="btn btn-info">Chi tiết</button>
							<button type="button" class="btn btn-success">Chọn</button>
						</div>


						<?php 
					}
					?>

				</div>
			</div>
		</div>
	</div>

</div>

</body>
</html>