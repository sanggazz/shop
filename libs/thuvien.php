<?php
	function ThongBao($noiDung)
	{
		echo '<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
				<i class="bi bi-info-circle"></i>
				'.$noiDung.'
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>';
	}
	
	function ThongBaoLoi($noiDung)
	{
		echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
				<i class="bi bi-exclamation-triangle-fill"></i>
				'.$noiDung.'
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>';
	}
	
	function LayHinhDauTien($strNoiDung)
	{
		$first_img = "";
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $strNoiDung, $matches);
		if(empty($output))
			return "images/noimage.png";
		else
			return $matches[1][0];
	}
	
	function DinhDangNgayGio($raw_date)
	{
		if(($raw_date == '0000-00-00 00:00:00') || empty($raw_date)) return false;
		
		$arr = explode(' ', $raw_date);
		$str_day = $arr[0];
		$str_time = $arr[1];
		
		$arr_day = explode('-', $str_day);
		$year	= (int)$arr_day[0];
		$month	= (int)$arr_day[1];
		$day	= (int)$arr_day[2];
		
		$ndow = date('w', mktime(0, 0, 0, $month, $day, $year));
		$dow = '';
		switch($ndow)
		{
			case 0:
				$dow = 'Chủ nhật, ';
				break;
			case 1:
				$dow = 'Thứ hai, ';
				break;
			case 2:
				$dow = 'Thứ ba, ';
				break;
			case 3:
				$dow = 'Thứ tư, ';
				break;
			case 4:
				$dow = 'Thứ năm, ';
				break;
			case 5:
				$dow = 'Thứ sáu, ';
				break;
			case 6:
				$dow = 'Thứ bảy, ';
				break;
		}
		
		$arr_time = explode(':', $str_time);
		$hour	= (int)$arr_time[0];
		$minute	= (int)$arr_time[1];
		$second	= (int)$arr_time[2];
		
		if(@date('Y', mktime(0, 0, 0, $month, $day, $year)) == $year)
		{
			return $dow . date('d/m/Y, H:i', mktime($hour, $minute, $second, $month, $day, $year)) . ' (GMT+7)';
		}
		else
		{
			return $dow . ereg_replace('2037' . '$', $year, date('d/m/Y, H:i', mktime($hour, $minute, $second, $month, $day, 2037))) . ' (GMT+7)';
		}
	}
	
	function PhanTrang($totalrows, $page, $limit, $link, $links, $list_class)
	{
		if($totalrows > $limit)
		{
			$last = ceil($totalrows / $limit);
			$start = (($page - $links) > 0) ? $page - $links : 1;
			$end = (($page + $links) < $last) ? $page + $links : $last;
			$html = "<ul class='$list_class'>";
			$class = ($page == 1) ? "disabled" : "";
			$html .= "<li class='page-item $class'><a class='page-link' href='$link?limit=$limit&page=" . ($page - 1) . "'>&laquo;</a></li>";
			if($start > 1)
			{
				$html .= "<li class='page-item'><a class='page-link' href='$link?limit=$limit&page=1'>1</a></li>";
				$html .= "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";
			}
			for($i = $start; $i <= $end; $i++)
			{
				$class = ($page == $i) ? "active" : "";
				$html .= "<li class='page-item $class'><a class='page-link' href='$link?limit=$limit&page=$i'>$i</a></li>";
			}
			if($end < $last)
			{
				$html .= "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";
				$html .= "<li class='page-item'><a class='page-link' href='$link?limit=$limit&page=$last'>$last</a></li>";
			}
			$class = ($page == $last) ? "disabled" : "";
			$html .= "<li class='page-item $class'><a class='page-link' href='$link?limit=$limit&page=" . ($page + 1) . "'>&raquo;</a></li>";
			$html .= '</ul>';
			echo $html;
		}
		else
		{
			echo "Danh sách có 01 trang.";
		}
	}
	
	function LayDiaChiIP()
	{
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
?>