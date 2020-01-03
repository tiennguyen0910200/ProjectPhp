<!DOCTYPE html>
<html>
<head>
	<title>Dịch vụ</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<div style="text-align: center;">
			<img src="..\Img\bia2.jpg" alt="" width="1100px" height="300px">
		</div>
		<h1>Thêm Dịch Vụ</h1>
		<div>	
		<form method="post">
			<div class="form-row">
				<div class="col">
					<label>Chọn</label><br>
					<select name="select" class="form-control">
						<option value="Nhạc" >Nhạc</option>
						<option value="MC" >MC</option>
						<option value="Trống">Trống</option>
						<option value="Pháo">Pháo</option>
						<option value="Đèn led">Đèn led</option>
						<option value="Kim tuyến">Kim tuyến</option>
						<option value="Máy chiếu">Máy chiếu</option>
						<option value="Máy nổ">Máy nổ</option>
						<option value="Phương tiện">Phương tiện</option>
						<option value="Đàn organ">Đàn organ</option>
						<option value="Toàn bộ">Toàn bộ</option>
						<option value="audi" selected>Dàn Nhạc Trịnh</option>
					</select>
				</div>
				<div class="col">
						<label>Ảnh</label>
						<input type="file" name="anhdv" class="form-control" placeholder="Địa chỉ ảnh">
					</div>
				<div class="col">
					<label>Nhân viên</label>
					<input type="text" name="tennv" class="form-control" placeholder="Tên nhân viên">
				</div>
				<div class="col">
					<label>Giá</label>
					<input type="text" name="gia" class="form-control" placeholder="Giá">
				</div>
				
				<br>
				<button type="submit" class="btn btn-info" name="them">Thêm</button>
				<button type="submit" class="btn btn-info" name="capnhat">Cập nhật</button>

				<button type="button" class="btn btn-info"><a href="../Php/Admin.php" title="">Quay lại</a></button>

			</div>

		</form>	
	</div>

</body>
</html>