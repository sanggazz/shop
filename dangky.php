<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'includes/header.php'; ?>
		<title>Đăng ký tài khoản - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'includes/navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Đăng ký tài khoản</h5>
				<div class="card-body">
					<form action="dangky_xuly.php" method="post" class="needs-validation" novalidate>
						<div class="mb-3">
							<label for="HoVaTen" class="form-label">Họ và tên</label>
							<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" required>
							<div class="invalid-feedback">Họ và tên không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="TenDangNhap" class="form-label">Tên đăng nhập</label>
							<input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" required>
							<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="MatKhau" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control" id="MatKhau" name="MatKhau" required>
							<div class="invalid-feedback">Mật khẩu không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="XacNhanMatKhau" class="form-label">Xác nhận mật khẩu</label>
							<input type="password" class="form-control" id="0" name="XacNhanMatKhau" required>
							<div class="invalid-feedback">Xác nhận mật khẩu không được bỏ trống.</div>
						</div>
						
						<button type="submit" class="btn btn-primary"><i class="bi bi-person-plus"></i> Đăng ký</button>
					</form>
				</div>
			</div>
			
			<?php include_once 'includes/footer.php'; ?>
		</div>
		
		<?php include_once 'includes/javascripts.php'; ?>
	</body>
</html>