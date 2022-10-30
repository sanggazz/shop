<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'includes/header.php'; ?>
		<title>Xử lý đăng xuất - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'includes/navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý đăng xuất</h5>
				<div class="card-body">
					<?php
						// Hủy SESSION
						unset($_SESSION['ID']);
						unset($_SESSION['HoVaTen']);
						unset($_SESSION['QuyenHan']);
						
						// Chuyển về trang chủ
						header('Location: index.php');
					?>
				</div>
			</div>
			
			<?php include_once 'includes/footer.php'; ?>
		</div>
		
		<?php include_once 'includes/javascripts.php'; ?>
	</body>
</html>