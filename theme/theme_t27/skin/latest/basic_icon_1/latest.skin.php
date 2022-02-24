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
.icon-desc{position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}
@media only screen and (max-width: 320px) {
	.icon_img_1{
		  width:100%; height:280px;
		  background-size: 100%;
	}
}
@media only screen and (min-width: 321px) and (max-width: 768px){
	.icon_img_1{
		  width:100%; height:280px;
		  background-size: 100%;
	}
}
@media only screen and (min-width: 769px) and (max-width: 1200px){
	.icon_img_1{
		  width:100%; height:280px;
		  background-size: 500px;
	}
}

@media only screen and (min-width: 1201px) {
	.icon_img_1{
		  width:285px; height:280px;
		  background-size: 500px;
	}
}
</style>
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
$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive" style="width:'.$thumb_width.';height:'.$thumb_height.'px">';
?>
<div class="icon_img_1" style="position: relative;  background:url('<?php echo $img?>') no-repeat;background-position: center;background-size: 500px;">
	<div>
		<div>
			<?php //echo $img_content;?>
		</div>         
		<div class="news-desc icon-desc">
			<span>&nbsp;</span>
			<h4><a href="<?php echo $list[$i]['href'] ?>" class="ko color-white"><?php echo $list[$i]['subject'] ?></a></h4>
		</div>
	</div> 
</div>
<?php }  ?>
<?php if ($list_count == 0) { //게시물이 없을 때  ?>
<li class="empty_li">게시물이 없습니다.</li>
<?php }  ?>
