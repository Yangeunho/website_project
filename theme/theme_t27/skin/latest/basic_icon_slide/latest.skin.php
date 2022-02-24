<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 285;
$thumb_height = 280;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<style>
.color-white{color:#fff;}
.color-white:hover{color:#fff;}
.icon-slide-desc{position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}
@media only screen and (max-width: 320px) {
	.icon-img{
		  width:100%; height:280px;
		  background-size: 100%;
	}
}
@media only screen and (min-width: 321px) and (max-width: 768px){
	.icon-img{
		  width:100%; height:280px;
		  background-size: 100%;
	}
}
@media only screen and (min-width: 769px) and (max-width: 1200px){
	.icon-img{
		  width:100%; height:280px;
		  background-size: 700px;
	}
}

@media only screen and (min-width: 1201px) {
	.icon-img{
		  width:285px; height:280px;
		  background-size: 700px;
	}
}
</style>

<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
	<div class="slides" data-group="slides">
		<ul>
			<div class="slide-body" data-group="slide" >
				<?php
				for ($i=0; $i<$list_count; $i++) {
				$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

				if($thumb['ori']) {
					$img = $thumb['ori'];
				} else {
					$list[$i]['wr_content'];
					preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $list[$i]['wr_content'], $match);
					$img = $match[1];
				}
				//$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive" style="width:'.$thumb_width.';height:'.$thumb_height.'px">';
				$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive">';
				?>
				<li class="img-responsive icon-img" style="position: relative;  background:url('<?php echo $img?>') no-repeat;background-position: center;">
					<div class="icon-slide-desc">
						<span>&nbsp;</span>
						<h4><a href="<?php echo $list[$i]['href'] ?>" class="ko color-white"><?php echo $list[$i]['subject'] ?></a></h4>
					</div>
				</li>
				<?php }  ?>
			</div>
		</ul>
			<a class="slider-control left" href="javascript:void(0)" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
			<a class="slider-control right" href="javascript:void(0)" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
	</div>
</div>	
<?php if ($list_count == 0) { //게시물이 없을 때  ?>
<li class="empty_li">게시물이 없습니다.</li>
<?php }  ?>


