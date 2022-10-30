<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'includes/header.php';?>
		<title>Xử lý đăng nhập - Shop Điện Thoại</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'includes/navbar.php'; ?>
			<div class="card mt-3">
				<h5 class="card-header">Xử lý đăng nhập</h5>
				<div class="card-body">
					<?php
						$TenDangNhap = $_POST['TenDangNhap'];
						$MatKhau = $_POST['MatKhau'];
						
						if(empty(trim($TenDangNhap)))
							ThongBaoLoi('Tên đăng nhập không được bỏ trống!');
						elseif(empty(trim($MatKhau)))
							ThongBaoLoi('Mật khẩu không được bỏ trống!');
						else
						{
							$MatKhau = sha1($MatKhau);
							
							$sql = "SELECT *
									FROM nguoidung
									WHERE TenDangNhap = '$TenDangNhap' AND MatKhau = '$MatKhau'";
							$kq = mysqli_query($link, $sql);
							if(mysqli_num_rows($kq) > 0)
							{
								$dong = mysqli_fetch_array($kq);
								if($dong['Khoa'] == 1)
									ThongBaoLoi('Tài khoản này đã bị tạm khóa. Liên hệ BQT để được hỗ trợ!');
								else
								{
									// Đăng ký SESSION
									$_SESSION['ID'] = $dong['ID'];
									$_SESSION['HoVaTen'] = $dong['HoVaTen'];
									$_SESSION['QuyenHan'] = $dong['QuyenHan'];
									// Chuyển về trang chủ
									header('Location: index.php');
								}
							}
							else
								ThongBaoLoi('Tên đăng nhập hoặc mật khẩu không chính xác!');
						}
					?>
				</div>
			</div>
			
			<?php include_once 'includes/footer.php'; ?>
		</div>
		
		<?php include_once 'includes/javascripts.php'; ?>
	</body>
</html>
