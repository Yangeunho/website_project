<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

// 유튜브 썸네일 이미지와 동일한 크기
$thumb_height = 277;

?>

<div class="pallax pt80 pb80" data-parallax="scroll" data-image-src="https://via.placeholder.com/2560x1080"><!-- 배경 이미지 변경 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="center-heading">
					<h2 class="kos4"><?php echo $bo_subject ?></h2>
					<span class="center-line"></span>
				</div>
			</div>                   
		</div>
		<div class="owl-yt-slider owl-carousel owl-theme">
		<?php for ($i=0; $i<count($list); $i++) {?>
			<div class="item" style="padding:5px;">
				<div class="construction-service-box">
				<?php
				if($list[$i]['wr_10']){
					$basename = basename($list[$i]['wr_10']);
					$url = str_replace("watch?v=","",$basename);
					$url = explode('&',$url);
				
				?>
					<a href="<?php echo $list[$i]['href'] ?>"><img src="https://img.youtube.com/vi/<?=$url[0]?>/0.jpg" class="img_selector"></a>
				<?php }else{ ?>

				<?php
				$mb = sql_fetch("select * from {$g5['board_file_table']} where bo_table = '".$bo_table."' and wr_id = '".$list[$i]['wr_id']."'");
					if($mb['bf_file']) {
						$img = "<img src=".G5_URL."/data/file/".$bo_table."/".$mb['bf_file']." class='img-responsive'>";
						$img_url = G5_URL."/data/file/".$bo_table."/".$mb['bf_file'];
					}else{
						$img = "<img src=".G5_THEME_URL."/img/no-img.png class='img-responsive'>";
					}
					
				?>
					<div class='service-thumb' style="width: 100%;background: url('<?php echo $img_url?>') no-repeat center center; height: <?php echo $thumb_height;?>px; background-size: cover;"></div>

				<?php } ?>

					<div class="services-desc text-center">
						<h3 class="kos4"><a href="<?php echo $list[$i]['href'] ?>"><?php echo strip_tags($list[$i]['subject'])?></a></h3> 
					</div>
				</div>
			</div><!--service column-->
		<?php } ?>
		<?php if (count($list) == 0) { //게시물이 없을 때  ?>
			게시물이 없습니다.
		<?php }  ?>
		</div>
	</div><!--container-->
</div>