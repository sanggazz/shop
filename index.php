<!doctype html>
<html lang="en">
	<head>
	<?php include_once 'includes/header.php';?>
	<style>
			.card-img-right {
				height: 100%;
				border-radius: 0 3px 3px 0;
				object-fit: cover;
			}
			
			.h-250 {
				height: 300px;
			}
			
			@media (min-width: 768px) {
				.h-md-250 { height: 300px; }
			}
		</style>
    <?php
				$sqlds = "SELECT b.*, c.*
						FROM sanpham b, danhmucsanpham c
						WHERE b.id_dmsp = c.id_dmsp
						ORDER BY id DESC";
				$danhsach = mysqli_query($link, $sqlds);
				
				// Lấy bài viết mới nhất (đầu tiên)
				$moinhat = mysqli_fetch_array($danhsach);
			?>
		<title>Shop Điện Thoại</title>
	</head>
	<body>
        <div class="container">
			<?php
				include_once("includes/navbar.php");
			?>
			<main class="mt-3">
				<div class="row mb-2">
					<?php
						while($dong = mysqli_fetch_array($danhsach))
						{
							echo '<div class="col-md-6">
								<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
									<div class="col p-3 d-flex flex-column position-static">
										<strong class="d-inline-block mb-2 text-primary"><i class="bi bi-tag"></i> '.$dong['tensanpham'].'</strong>
										<h3 class="mb-0">'.$dong['tensanpham_slug'].'</h3>
										<p class="card-text mb-auto">Số Lượng: '.$dong['soluong'].'</p>
										<a href="sanpham_xem.php?id='.$dong['id'].'" class="stretched-link text-decoration-none">Xem Chi Tiết</a>
									</div>
									<div class="col-auto d-none d-lg-block">
										<img src="'.$dong['hinhanh'].'" class="card-img-right" width="200" />
									</div>
								</div>
							</div>';
						}
					?>
				</div>
			</main>
			<?php
				include_once("includes/footer.php");
			?>
		</div>
    <?php include_once 'includes/javascripts.php'; ?>
    </body>
</html>