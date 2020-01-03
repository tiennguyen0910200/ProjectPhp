<!DOCTYPE html>
<html>
<head>
	<title>Thêm</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/them.css">
</head>
<body>
	<div>
		<?php include 'db.php'; ?>
		<div style="text-align: center;">
			<img src="..\Img\bia.jpg" alt="" width="1100px" height="300px">
		</div>
		
		<h1>Thêm Nhân Viên</h1>
		<div>	
			<form method="post">
				<div class="form-row">
					<div class="col">
						<label>Ảnh</label>
						<input type="file" name="anh" class="form-control" placeholder="Địa chỉ ảnh">
					</div>
					<div class="col">
						<label>Tên</label>
						<input type="text" name="ten" class="form-control" placeholder="Tên">
					</div>
					<div class="col">
						<label>Địa chỉ</label>
						<input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
					</div>
					<div class="col">
						<label>Số điện thoại</label>
						<input type="text" name="sdt" class="form-control" placeholder="Số điện thoại">
					</div>
					<div class="col">
						<label>Chọn</label><br>
						<select name="select" class="form-control">
							<option value="Chỉnh âm" >Chỉnh âm</option>
							<option value="MC">MC</option>
							<option value="Nhạc công">Nhạc công</option>
							<option value="audi" selected>Dàn Nhạc Trịnh</option>
						</select>
					</div>
					<br>
					<button type="submit" class="btn btn-info" name="them">Thêm</button>
					<button type="submit" class="btn btn-info" name="capnhat">Cập nhật</button>

					<button type="button" class="btn btn-info"><a href="../Php/Admin.php" title="">Quay lại</a></button>

				</div>

			</form>
			<?php if (isset($_POST['them'])) {
				$sql_insert = 'INSERT INTO employee(name,image,address,phone,assignment) VALUES ('.$_POST['ten'].','.$_POST['anh'].','.$_POST['diachi'].','.$_POST['sdt'].','.$_POST['select'].')';
				$db->query($sql_insert);
			} ?>
			<br>
			<table align="center" border="1px" cellspacing="0" class="table table-hover">

				<tr>
					<th>Id</th>
					<th>Tên</th>
					<th>Ảnh</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Chuyên môn</th>
					<th></th>

				</tr>

				<tbody>
					<form method="POST">
						<?php
						for ($i=0; $i < count($result)  ; $i++) { 
							?>
							<tr>
								<td><?php  echo $result[$i][0]; ?></td>
								<td><?php  echo $result[$i][1]; ?></td>
								<td style="width: 300px"><img style="width: 200px; height: 200px" src="../Img/<?php  echo $result[$i][2]; ?>"></td>

								<td><?php  echo $result[$i][3]; ?></td>
								<td><?php  echo $result[$i][4]; ?></td>
								<td><?php  echo $result[$i][5]; ?></td>
								<td><button name="sua" value=<?php echo $result[$i][0] ?>>Sửa</button>
									<button name="xoa" value=<?php echo $result[$i][0] ?>> Xóa</button></td>
								</tr>
							<?php } ?>


						</form>


					</tbody>
				</table>
			</div>
		</div>

	</body>
	</html>