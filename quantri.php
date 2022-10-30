<?php
    include_once('includes/header.php');
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shop Điện Thoại - Trang chủ quản trị</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="quantri.php">
        <img src="images/logo.jpg" style=width:50px>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-person-workspace"></i> <?php echo $_SESSION['HoVaTen'];?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dangxuat.php"><i class="bi bi-box-arrow-right"></i> Đăng Xuất</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 <?php include_once('includes/footer.php') ?>
 <?php include_once 'includes/javascripts.php'; ?>
</body>
</html>
