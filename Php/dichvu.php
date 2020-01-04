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
		<?php include 'db.php'; ?>
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
							<option value="Guitar">Guitar</option>
							<option value="Toàn bộ">Toàn bộ</option>
							<option value="audi" selected>Dàn Nhạc Trịnh</option>
						</select>
					</div>
					<div class="col">
						<label>Tên dịch vụ</label>
						<input type="text" name="tennv" class="form-control" placeholder="Tên nhân viên">
					</div>
					<div class="col">
						<label>Ảnh</label>
						<input type="file" name="anhdv" class="form-control" placeholder="Địa chỉ ảnh">
					</div>
					<div class="col">
						<label>Tên nhân viên</label>
						<input type="text" name="tennv" class="form-control" placeholder="Tên nhân viên">
					</div>
					<div class="col">
						<label>Giá</label>
						<input type="text" name="gia" class="form-control" placeholder="Giá">
					</div>

					<br>
					<button type="submit" class="btn btn-info" name="them2">Thêm</button>
					<button type="submit" class="btn btn-info" name="capnhat2">Cập nhật</button>

					<button type="button" class="btn btn-info"><a href="../Php/Admin.php" title="">Quay lại</a></button>

				</div>

			</form>	
		<!-- 	<?php if (isset($_POST['them2'])) {
				$sql_insert = 'INSERT INTO service(name,image,emp,price) VALUES ('.$_POST['tendv'].','.$_POST['anhnv'].','.$_POST['gia'].','.$_POST['sdt'].','.$_POST['select'].')';
				$db->query($sql_insert);
			} ?> -->
			<br>
			<table align="center" border="1px" cellspacing="0" class="table table-hover">

				<tr>
					<th>Id</th>
					<th>Tên dịch vụ</th>
					<th>Ảnh</th>
					<th>Tên nhân viên</th>
					<th>Giá</th>
					<th></th>

				</tr>

				<tbody>
					<form method="POST">
						<?php
						for ($i=0; $i < count($result2)  ; $i++) { 
							?>
							<tr>
								<td><?php  echo $result2[$i][0]; ?></td>
								<td><?php  echo $result2[$i][1]; ?></td>
								<td style="width: 300px"><img style="width: 200px; height: 200px" src="../Img/<?php  echo $result2[$i][2]; ?>"></td>

								<td><?php  echo $result2[$i][3]; ?></td>
								<td><?php  echo $result2[$i][4]; ?></td>
								<td><button name="sua" value=<?php echo $result2[$i][0] ?>>Sửa</button>
									<button name="xoa" value=<?php echo $result2[$i][0] ?>> Xóa</button></td>
								</tr>
							<?php } ?>


						</form>


					</tbody>
				</table>
			</div>

		</body>
		</html>