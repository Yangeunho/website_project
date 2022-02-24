<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(G5_THEME_PATH.'/SF.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<style>
.flexslider {
    margin: 0px;
	border: 0px solid #fff;
}
</style>
<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4><?php echo $board['bo_subject']?></h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo G5_URL?>">Home</a></li>
					<li><?php echo $board['bo_subject']?></li>
				</ol>
			</div><!-- /col -->
		</div>
	</div>
</div><!--breadcrumbs-->
<div class="container-fluid hidden-sm hidden-xs top-bar">
	<div class="container">
		<div class="row">
			<div class="col-sm-1 home-btn"><a href="<?php echo G5_URL?>"><i class="fa fa-home f36" aria-hidden="true"></i></a></div>
			<div class="col-sm-4"><?php include_once(G5_THEME_PATH.'/left_top.php');?></div>
			<div class="col-sm-7">
				
			</div><!--sidebar col end-->
		</div>
	</div><!-- ./container -->
</div><!-- ./container-fulid -->
		<div class="divide80 hidden-sm hidden-xs"></div>
		<div class="container hidden-lg hidden-md">
			<div class="row">
				<div class="col-md-12">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="row">
				<div class="col-md-12">
				<!-- 게시물 읽기 시작 { -->
				<article id="bo_v" style="width:<?php echo $width; ?>">
					<header>
						<h2 class="ko f20">
							<?php if ($category_name) { ?>(<?php echo $view['ca_name']; // 분류 출력 끝 ?>)<?php } ?> 
							<?php echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력?>			
						</h2>
					</header>

					<section id="bo_v_info">
						<h2>페이지 정보</h2>
						<span class="sound_only">작성자</span><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
						<span class="sound_only">댓글</span><strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
						<span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
						<strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
					</section>

					<div class="row">
						<!-------------------------- 상품진열 -------------------------->
						<div class="col-md-6">
						  <section class="slider">
							<div id="slider" class="flexslider">
							  <ul class="slides">
								<?php
								$v_img_count = count($view['file']);
								if($v_img_count) {
									for ($i=0; $i<=count($view['file']); $i++) {
										if (isset($view['file'][$i]['view'])) {
											echo "<li>";
											echo "<img src=".$view['file'][$i]['path']."/".$view['file'][$i]['file'].">";
											echo "</li>";
										}
									}
								}
								?>
							  </ul>
							</div>
							<div id="carousel" class="flexslider">
							  <ul class="slides">
								<?php
								if(isset($view['file'][$i]['view'])){
									echo $view['file'][$i]['view'];
								}
								$v_img_count = count($view['file']);
								if($v_img_count) {
									for ($i=0; $i<=count($view['file']); $i++) {
										if (isset($view['file'][$i]['view'])) {
											echo "<li>";
											echo "<img src=".$view['file'][$i]['path']."/".$view['file'][$i]['file'].">";
											echo "</li>";
										}
									}
								}
								?>
							  </ul>
							</div>
						  </section>
						</div><!-- ./col -->

						<!-------------------------- 우측 상품소개 여분필드 -------------------------->
						<div class="col-md-6">
							<table class="tablecss ko" style="border-top:3px solid #454545">
								<tbody>
								<?php
								if($view['wr_1']){
								$arr = explode('|',$view['wr_1']);
								?>
									<tr>
										<td style="width:40%;background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_2']){
								$arr = explode('|',$view['wr_2']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_3']){
								$arr = explode('|',$view['wr_3']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_4']){
								$arr = explode('|',$view['wr_4']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_5']){
								$arr = explode('|',$view['wr_5']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_6']){
								$arr = explode('|',$view['wr_6']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_7']){
								$arr = explode('|',$view['wr_7']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_8']){
								$arr = explode('|',$view['wr_8']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_9']){
								$arr = explode('|',$view['wr_9']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>
								<?php
								if($view['wr_10']){
								$arr = explode('|',$view['wr_10']);
								?>
									<tr>
										<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
										<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
									</tr>
								<?php } ?>

								</tbody>
							</table>
							<br />

							<p class="ko">
								<a href="<?php echo $list_href ?>" class="btn btn-theme-dark">상품목록 바로가기</a>
							</p>							
						</div><!-- ./col -->
					</div><!-- ./row -->

					<section id="bo_v_atc">
						<h2 id="bo_v_atc_title">본문</h2>


						<!-- 본문 내용 시작 { -->
						<div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
						<?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
						<!-- } 본문 내용 끝 -->

						<?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>


						<!--  추천 비추천 시작 { -->
						<?php if ( $good_href || $nogood_href) { ?>
						<div id="bo_v_act">
							<?php if ($good_href) { ?>
							<span class="bo_v_act_gng">
								<a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
								<b id="bo_v_act_good"></b>
							</span>
							<?php } ?>
							<?php if ($nogood_href) { ?>
							<span class="bo_v_act_gng">
								<a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
								<b id="bo_v_act_nogood"></b>
							</span>
							<?php } ?>
						</div>
						<?php } else {
							if($board['bo_use_good'] || $board['bo_use_nogood']) {
						?>
						<div id="bo_v_act">
							<?php if($board['bo_use_good']) { ?><span class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
							<?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
						</div>
						<?php
							}
						}
						?>
						<!-- }  추천 비추천 끝 -->
					</section>

					<div id="bo_v_share">
						<?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 스크랩</a><?php } ?>

						<?php
						include_once(G5_SNS_PATH."/view.sns.skin.php");
						if($board['bo_use_sns'] == '1'){
							echo '<a href="javascript:void(0);" class="btn_share btn btn_b03"><i class="fa fa-share-alt" aria-hidden="true"></i> SNS 공유</a>';
						}
						?>
					</div>

					<?php
					$cnt = 0;
					if ($view['file']['count']) {
						for ($i=0; $i<count($view['file']); $i++) {
							if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
								$cnt++;
						}
					}
					 ?>

					<?php if($cnt) { ?>
					<!-- 첨부파일 시작 { -->
					<section id="bo_v_file">
						<h2>첨부파일</h2>
						<ul>
						<?php
						// 가변 파일
						for ($i=0; $i<count($view['file']); $i++) {
							if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
						 ?>
							<li>
								<i class="fa fa-download" aria-hidden="true"></i>
								<a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
									<strong><?php echo $view['file'][$i]['source'] ?></strong>
								</a>
								<?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
								<span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
							</li>
						<?php
							}
						}
						 ?>
						</ul>
					</section>
					<!-- } 첨부파일 끝 -->
					<?php } ?>

					<?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
					<!-- 관련링크 시작 { -->
					<section id="bo_v_link">
						<h2>관련링크</h2>
						<ul>
						<?php
						// 링크
						$cnt = 0;
						for ($i=1; $i<=count($view['link']); $i++) {
							if ($view['link'][$i]) {
								$cnt++;
								$link = cut_str($view['link'][$i], 70);
							?>
							<li>
								<i class="fa fa-link" aria-hidden="true"></i> <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
									
									<strong><?php echo $link ?></strong>
								</a>
								<span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
							</li>
							<?php
							}
						}
						?>
						</ul>
					</section>
					<!-- } 관련링크 끝 -->
					<?php } ?>

					<!-- 게시물 상단 버튼 시작 { -->
					<div id="bo_v_top">
						<?php
						ob_start();
						?>

						<ul class="bo_v_left">
							<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 수정</a></li><?php } ?>
							<?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> 삭제</a></li><?php } ?>
							<?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-files-o" aria-hidden="true"></i> 복사</a></li><?php } ?>
							<?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-arrows" aria-hidden="true"></i> 이동</a></li><?php } ?>
							<?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01 btn"><i class="fa fa-search" aria-hidden="true"></i> 검색</a></li><?php } ?>
						</ul>

						<ul class="bo_v_com">
						   <li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li>
							<?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn"><i class="fa fa-reply" aria-hidden="true"></i> 답변</a></li><?php } ?>
							<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
						</ul>

						<?php if ($prev_href || $next_href) { ?>
						<ul class="bo_v_nb">
							<?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-caret-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
							<?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-caret-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a>  <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
						</ul>
						<?php } ?>
						<?php
						$link_buttons = ob_get_contents();
						ob_end_flush();
						 ?>
					</div>
					<!-- } 게시물 상단 버튼 끝 -->

					<?php
					// 코멘트 입출력
					include_once(G5_BBS_PATH.'/view_comment.php');
					 ?>


				</article>
				<!-- } 게시판 읽기 끝 -->


		</div><!--/collapse col-->
	</div><!-- /row -->
</div><!-- /container -->
<div class="divide80"></div>



<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {

    //sns공유
    $(".btn_share").click(function(){
        $("#bo_v_sns").fadeIn();
   
    });




    $(document).mouseup(function (e) {
        var container = $("#bo_v_sns");
        if (!container.is(e.target) && container.has(e.target).length === 0){
        container.css("display","none");
        }	
    });

    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();

});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->
</div>