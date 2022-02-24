<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 360;
$thumb_height = 270;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="container margin-top-50 margin-bottom-50" id="003">
	<div class="row">
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
		$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive" style="width:100%;height:'.$thumb_height.'px">';
		?>
		<div class="col-sm-4 margin30">
			<div>
				<a href="<?php echo $list[$i]['href'] ?>">
					<div class="item-img-wrap">
						<a href="<?php echo $list[$i]['href'] ?>"><?php echo $img_content;?></a>
						
						<a href="<?php echo $list[$i]['href'] ?>">
						<div class="item-img-overlay">
							<span></span>
						</div>
						</a>

					</div>                       
				</a><!--news link--> 
				<div class="news-desc" style="height:90px;">
					<span>&nbsp;</span>
					<h4><a href="<?php echo $list[$i]['href'] ?>" class="ko"><?php echo $list[$i]['subject'] ?></a></h4>
					<span class="ko f14"><?php echo cut_str(strip_tags($list[$i]['wr_content']),'60','...') ?></span>
				</div><!--news desc-->
			</div> 
		</div>
		<?php }  ?>
		<?php if ($list_count == 0) { //게시물이 없을 때  ?>
		<li class="empty_li">게시물이 없습니다.</li>
		<?php }  ?>
	</div>
</div>