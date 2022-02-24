<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<div class="container mb80">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="center-heading">
				<h2 class="kos4 f20"><?php echo $bo_subject?></h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
				<div class="one" id="one">
					<div class="basic_one">
						<ul>
							<?php for ($i=0; $i<count($list); $i++) {  ?>
							<li class="clearfix">
								<a href="<?php echo $list[$i]['href']?>">
									<span class="basic_one_date">
										<span><?php echo substr($list[$i]['wr_datetime'],0,7)?><br>
											<span class="basic_one_day"><?php echo substr($list[$i]['wr_datetime'],8,2)?></span>
										</span>
									</span>
									<span class="basic_one_content">
										<?php
										echo "<a href=\"".$list[$i]['href']."\"> ";
										if (isset($list[$i]['is_one']))
											echo '<span class="basic_one_title kos4 f24"><strong>'.$list[$i]['subject'].'</strong></span>';
										else
											echo '<span class="basic_one_title kos4 f24">'.$list[$i]['subject'].'</span>';
										echo "</a>";
										?>

										<a href="<?php echo $list[$i]['href']?>" style="margin-top: 20px;"><span class="basic_one_p kos3 f15"><?php echo cut_str(strip_tags($list[$i]['wr_content']),'145','...')?></span></a>
									</span>
								</a>
							</li>
							<?php } ?>
							<?php if (count($list) == 0) { //게시물이 없을 때  ?>
							<li class="empty_li">게시물이 없습니다.</li>
							<?php }  ?>
						</ul>
					</div>
				</div>
		</div><!-- ./col -->
	</div><!-- ./row -->
	<!--
	<div class="row mt20">
		<div class="col-md-12 text-center">
			<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="btn border-black btn-lg ko">+ 더보기</a>
		</div>
	</div>
	-->
</div>