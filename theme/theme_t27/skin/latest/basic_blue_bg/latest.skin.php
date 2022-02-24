<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

/**************************************************

https://material.io/resources/icons/?style=outline
위 주소를 참고하시어 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

아래 예처럼 zoom_in 이나 fingerprint 처럼 이름만 변경해주세요.

<i class="material-icons f60">zoom_in</i>
<i class="material-icons f60">fingerprint</i>

***************************************************/

?>
<div class="blue-bg">
	<div class="container">
		<div class="row">
			<?php 
			for ($i=0; $i<count($list); $i++) {  
			// 아이콘 변경
			if($i == '0')
				$icon = 'zoom_in';
			if($i == '1')
				$icon = 'fingerprint';
			?>
			<div class="col-sm-6 margin30">
				<div class="services-box wow animated fadeInDown">
					<div class="services-box-icon">
						<i class="material-icons f60"><?php echo $icon?></i>
					</div>
					<div class="services-box-info">
					<?php
					echo "<a href=\"".$list[$i]['href']."\"> ";
					if ($list[$i]['is_one'])
						echo '<h4 class="kos4"><strong>'.$list[$i]['subject'].'</strong></h4>';
					else
						echo '<h4 class="kos4">'.$list[$i]['subject'].'</h4>';
					echo "</a>";
					?>
						<p>
							<a href="<?php echo $list[$i]['href']?>"><span class="basic_one_p kos3 f15"><?php echo cut_str(strip_tags($list[$i]['wr_content']),'145','...')?></span></a>
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>