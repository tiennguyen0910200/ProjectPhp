<?php 
$db = new mysqli("localhost", "root", "", "DanNhacTrinh");

    $sql = "SELECT * from employee";
    $result = $db->query($sql)->fetch_all();

if (isset($_POST['them'])) {{
	$db->query("INSERT INTO employee (name,image,address,phone,assignment) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['diachi']."','".$_POST['sdt']."','".$_POST['select']."')");
	}
	header('refresh:0');}

	if (isset($_POST['xoa'])) {
    $db->query("delete from employee where id = ".$_POST['xoa']);
    header('refresh:0');
}
if (isset($_POST['sua'])) { ?>
    <?php
	$sql = "SELECT * from employee WHERE id = '".$_POST['sua']."'";
	$result = $db->query($sql)->fetch_all();
	$_POST['ten']= $result[0][1];
	$_POST['anh']= $result[0][2]; 
	$_POST['diachi']= $result[0][3]; 
	$_POST['sdt']= $result[0][4];
	$_POST['select']= $result[0][5]; 
	
}

if(isset($_POST['sua']))
$db->query("UPDATE employee SET name='".$_POST['ten']."',image='".$_POST['anh']."',address='".$_POST['diachi']."',phone='".$_POST['sdt']."',assignment='".$_POST['select']."' WHERE id='".$_POST['sua']."'");
   ?>

