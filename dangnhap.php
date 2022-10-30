<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'includes/header.php'; ?>
		<title>Shop Điện Thoại</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'includes/navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Đăng nhập</h5>
				<div class="card-body">
					<form action="dangnhapxuly.php" method="post" class="needs-validation" novalidate>
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
						
						<button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Đăng nhập</button>
					</form>
				</div>
			</div>
			
			<?php include_once 'includes/footer.php'; ?>
		</div>
		
		<?php include_once 'includes/javascripts.php'; ?>
	</body>
</html>