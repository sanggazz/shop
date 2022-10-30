<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'includes/header.php'; ?>
		<title>Xử lý thêm người dùng - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'includes/navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý thêm người dùng</h5>
				<div class="card-body">
					<?php
						$HoVaTen = $_POST['HoVaTen'];
						$TenDangNhap = $_POST['TenDangNhap'];
						$MatKhau = $_POST['MatKhau'];
						$XacNhanMatKhau = $_POST['XacNhanMatKhau'];
						
						if(empty(trim($HoVaTen)))
							ThongBaoLoi("Họ và tên không được bỏ trống.");
						elseif(empty(trim($TenDangNhap)))
							ThongBaoLoi("Tên đăng nhập không được bỏ trống.");
						elseif(empty(trim($MatKhau)))
							ThongBaoLoi("Mật khẩu không được bỏ trống.");
						elseif($MatKhau!= $XacNhanMatKhau)
							ThongBaoLoi("Xác nhận mật khẩu không chính xác.");
						else
						{
							$MatKhau = sha1($MatKhau);
							
							$sql = "INSERT INTO nguoidung(HoVaTen, TenDangNhap, MatKhau, QuyenHan, Khoa) 
									VALUES ('$HoVaTen', '$TenDangNhap', '$MatKhau', 2, 0)";
							$kq = mysqli_query($link, $sql);
							if($kq)
								ThongBao('Đăng ký thành công. Xin vui lòng nhấn <a href="dangnhap.php">vào đây</a> để đăng nhập!');
							else
								ThongBaoLoi(mysqli_error($link));
						}
					?>
				</div>
			</div>
			
			<?php include_once 'includes/footer.php'; ?>
		</div>
		
		<?php include_once 'includes/javascripts.php'; ?>
	</body>
</html>