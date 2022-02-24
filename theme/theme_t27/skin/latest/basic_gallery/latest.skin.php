<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_height = '100%';
?>

<div class="our-team-v-2 pt100 pb100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="center-heading">
					<h2 class="kos4"><?php echo $bo_subject ?></h2>
					<span class="center-line"></span>
				</div>
			</div>                   
		</div>
		<div  id="item-carousel" class="owl-carousel owl-theme">
			<?php
			for ($i=0; $i<count($list); $i++) {
				$mb = sql_fetch("select * from {$g5['board_file_table']} where bo_table = '".$bo_table."' and wr_id = '".$list[$i]['wr_id']."'");
				if($mb['bf_file']) {
					$img = "<img src=".G5_URL."/data/file/".$bo_table."/".$mb['bf_file']." class='img-responsive' style='max-width:100%'>";
					$img_path = G5_URL."/data/file/".$bo_table."/".$mb['bf_file'];
				}else{
					//$img = "<img src=".G5_THEME_URL."/img/no-img.png class='img-responsive'>";
					$list[$i]['wr_content'];
					preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $list[$i]['wr_content'], $match);
					$img = $match[0];
					$img_path = $match[1];
				}
			?>
			<div class="item" style="padding:5px;">
				<div>
					<a href="<?php echo $list[$i]['href'] ?>" class="lt_img">

					    <!-- 기본 height 100% : 상단 $thumb_height 를 이용하여 이미지의 세로 사이즈를 지정할 수 있습니다. -->

						<div class="item-img-wrap" style="background-image: url('<?php echo $img_path?>'); max-width:100%; height:<?php echo $thumb_height?>;">
							<img src="<?php echo $img_path?>" height:<?php echo $thumb_height?>;>
							<div class="item-img-overlay">
								<span></span>
							</div>
						</div>                       
					</a><!--news link--> 
					<div class="news-desc">
						<span>DATE : <?php echo $list[$i]['datetime2']?></span>
						<h4><a href="<?php echo $list[$i]['href'] ?>" class="lt_img kos4"><?php echo strip_tags($list[$i]['subject'])?></a></h4>
						
					</div><!--news desc-->
				</div> 
			</div>
			<?php }  ?>
			<?php if (count($list) == 0) { //게시물이 없을 때  ?>
				게시물이 없습니다.
			<?php }  ?>
		</div>
	</div><!-- ./container -->
</div>
