<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
include_once(G5_THEME_PATH.'/head.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
	if(is_mobile()){
		include G5_THEME_PATH.'/mobile_popup.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
}
?>

	<div class="container no-padding"></div>
	<!-------------------------- 슬라이드 시작 -------------------------->
	<?php

	/* 
	
	3단슬라이드 세로크기 사이즈 조절 
	아래 두군데 620px  값을 원하시는 값으로 수정해주세요.

	[유튜브동영상주소 사용팁]

	주소창에 있는 주소의 url 중에서
	https://www.youtube.com/watch?v=o70MzTHHNbI
	뒷부분 o70MzTHHNbI 값만 넣어주세요.

	*/

	// 유튜브주소값 수정하는 곳
	$yt_url = 'o70MzTHHNbI';


	// 슬라이드 css 는 테마폴더/common.css : 646 번째줄부터 수정하시면 됩니다.

	?>

	<section class="main-slider">
		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('<?php echo G5_THEME_URL?>/img/bg/bg-1.jpg">
					<img data-lazy="<?php echo G5_THEME_URL?>/img/bg/bg-1.jpg" class="image-entity" />
				<!--<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920x620');"> 	
					<img data-lazy="https://via.placeholder.com/1920x620" class="image-entity" /> -->
				</div>
				<!-- <figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">fingerprint</i> 5.4 유튜브 3단 슬라이드<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption> -->
			</figure>
		</div>

		<!-- 유튜브 -->
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/<?php echo $yt_url?>?version=3&vq=hd1080&t=133s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<!-- <figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">live_tv</i> YOUTUBE<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption> -->
		</div>

		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('<?php echo G5_THEME_URL?>/img/bg/bg-2.jpg">
					<img data-lazy="<?php echo G5_THEME_URL?>/img/bg/bg-2.jpg" class="image-entity" />
				<!--<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920x620');"> 
					<img data-lazy="https://via.placeholder.com/1920x620" class="image-entity" /> -->
				</div>
				<!-- <figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">add_ic_call</i> 5.4 유튜브 3단 슬라이드<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption> -->
			</figure>
		</div>

	</section>

	<!-------------------------- 슬라이드 끝 -------------------------->

	<div class="mt60 hidden-sm hidden-xs"></div>
	<div class="mt20 hidden-lg hidden-md"></div>

	<!-------------------------- YOUR PARTNER -------------------------->	
	<?php
	/*

	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>

	[메인 아이콘박스]
	메인 아이콘 박스의 경우 일부 스타일시트를 조정하게 추가하였습니다.
	색상이나 위치등을 수정해서 사용해주세요.

	*/
	?>


	<!-------------------------- 메인 아이콘박스 -------------------------->
	<div class="container SF_main_icon">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="colored-boxed bg-blue" style="border: 1px solid #3b5998;">
					<i class="material-icons f60">post_add</i>
					<h3>타이틀 1</h3>
					<span class="center-line"></span>
					<p>
						수백개의 아이콘을 아주 쉽게 모두 사용할 수 있습니다.
					</p>
				</div>
				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				
				<a href="#"><!-- 링크 -->
				<div class="colored-boxed" style="background:#379683;color:#fff;border: 1px solid #379683;">
					<i class="material-icons f60">touch_app</i>
					<h3 class="color-white">타이틀 1</h3>
					<span class="center-line"></span>
					<p>
						수백개의 아이콘을 아주 쉽게 모두 사용할 수 있습니다.
					</p>
				</div>
				</a>

				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

				<a href="#"><!-- 링크 -->
					<div class="colored-boxed">
						<i class="material-icons f60">textsms</i>
						<h3>타이틀 3</h3>
						<span class="center-line"></span>
						<p>
							수백개의 아이콘을 아주 쉽게 모두 사용할 수 있습니다.
						</p>
					</div>
				</a>

				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

				<a href="#"><!-- 링크 -->
					<!-- 이미지 -->
					<img src="<?php echo G5_THEME_URL?>/img/002.png" class="img-responsive"><!-- 이미지 크기 290X280 -->
					<div class="hidden-lg hidden-md mb20"></div>
				</a>

			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

				<a href="#">
					<div class="colored-boxed dark">
						<i class="material-icons f60">image_search</i>
						<h3>타이틀 1</h3>
						<span class="center-line"></span>
						<p>
							수백개의 아이콘을 아주 쉽게 모두 사용할 수 있습니다.
						</p>
					</div>
				</a>

				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

				<a href="#">
					<!-- 이미지 -->
					<img src="<?php echo G5_THEME_URL?>/img/001.png" class="img-responsive"><!-- 이미지 크기 290X280 -->
				</a>
				<div class="hidden-lg hidden-md mb20"></div>

			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<a href="#">
					<div class="colored-boxed bg-gray" style="border: 1px solid #525252;">
						<i class="material-icons f60">linked_camera</i>
						<h3>타이틀 2</h3>
						<span class="center-line"></span>
						<p>
							수백개의 아이콘을 아주 쉽게 모두 사용할 수 있습니다.
						</p>
					</div>
				</a>
				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

				<a href="#">
					<div class="colored-boxed red bg-white">
						<i class="material-icons f60">electric_rickshaw</i>
						<h3>타이틀 4</h3>
						<span class="center-line"></span>
						<p>
							수백개의 아이콘을 아주 쉽게 모두 사용할 수 있습니다.
						</p>
					</div>
				</a>
				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->
		</div>
	</div><!-- /container -->
	<!-------------------------- 메인 아이콘박스 끝 -------------------------->

	<div class="mt60"></div>
	

	<div class="container mt60 mb60">
		<div class="row">
			<div class="col-md-6">
				<div class="tabs-container">
					<!-------------------------- tabs -------------------------->
					<ul class="nav nav-tabs nav-justified tab-list">
						<li class="active"><a data-toggle="tab" href="#tab-001" aria-expanded="true">공지사항</a></li>
						<li class=""><a data-toggle="tab" href="#tab-002" aria-expanded="false">고객센터</a></li>
						<li class=""><a data-toggle="tab" href="#tab-003" aria-expanded="false">자유게시판</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab-001" class="tab-pane active ko">
							<?php echo latest('theme/basic_tabs', 'notice', 5, 40);?>
						</div>
						<div id="tab-002" class="tab-pane ko">
							<?php echo latest('theme/basic_tabs', 'free', 5, 40);?>
						</div>
						<div id="tab-002" class="tab-pane ko">
							<?php echo latest('theme/basic_tabs', 'free', 5, 40);?>
						</div>
					</div>
				</div><!-- ./End tabs -->
			</div><!-- ./col -->
			<div class="col-md-6">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>
		</div>
	</div>

	<!-------------------------- 상품안내 -------------------------->
	<?php echo latest('theme/basic_gallery', 'gallery', 6, 20);?>
	<!-------------------------- //상품안내 -------------------------->

	<div class="container mt60 mb60">
		<div class="row">
			<div class="col-md-4">
				<?php echo latest('theme/basic_main_two', 'notice', 5, 40);?>
			</div><!-- ./col -->
			<div class="col-md-4">
				<?php echo latest('theme/basic_main_two', 'notice', 5, 40);?>
			</div>
			<div class="col-md-4">
				<?php echo latest('theme/basic_main_two', 'notice', 5, 40);?>
			</div>
		</div>
	</div>


	<!-------------------------- 소개페이지 -------------------------->
	<div class="wide-img-showcase">
		<div class="row margin-0 wide-img-showcase-row">
			<div class="col-sm-6 no-padding  img-2 " style="background: url(https://via.placeholder.com/1920x1080) scroll center no-repeat;"><!-- 배경이미지 -->
				<div class="no-padding-inner ">
					<div>&nbsp;</div>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-6 no-padding gray">
				<div class="no-padding-inner gray">
					<h3 class="wow animated fadeInDownfadeInRight animated" style="visibility: visible;">Core features of <span class="colored-text">SOFTZONE</span></h3>
					<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">commute</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(영문)</h4>
							<p>
								대한민국을 대표하는 글로벌 물류및운송회사인 소프트존 입니다. 물류의 전과정과 프로세스, 해운, KD 등의 모든 정보가 
								포함되어 있습니다.
							</p>
						</div>
					</div><!--service box-->
					<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">production_quantity_limits</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(한글)</h4>
							<p>
								This is Soft Zone, a global logistics and transportation company representing Korea. All information such as logistics process, process, shipping, and KD Included.
							</p>
						</div>
					</div><!--service box-->

					<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">pending_actions</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(중문)</h4>
							<p>
								这是代表韩国的全球物流和运输公司Soft Zone。 所有信息，如物流流程，流程，运输和KD 它是包括在内。
							</p>
						</div>
						<div class="divide30"></div>
						<p><a href="#" class="btn btn-theme-dark btn-lg">DOWNLOAD</a></p>
					</div><!--service box-->

				</div>
			</div>
		</div>
	</div>
	<!-------------------------- //소개페이지 -------------------------->


	<!-------------------------- 카운터 -------------------------->
	<section class="fun-fact-wrap parallax" data-stellar-background-ratio="0.5" style="background: url(https://via.placeholder.com/1920x1080);"><!-- 배경이미지 -->
		<div class="container">               
			<div class="row">
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"><span class="counter">400</span> +</h3>
					<h4 class="ko f20">주요협력사</h4>
				</div><!--facts in-->
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"><span class="counter">1900</span></h3>
					<h4 class="ko f20">클라이언트</h4>
				</div><!--facts in-->
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"><span class="counter">12421</span> +</h3>
					<h4 class="ko f20">해외발주실적</h4>
				</div><!--facts in-->
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"<span class="counter">30000</span></h3>
					<h4 class="ko f20">국내판매량</h4>
				</div><!--facts in-->
			</div>
		</div>
	</section>


	<div class="container mt80">
		<div class="row">
			<div class="col-md-12">
				<div class="center-heading">
					<h2 class="kos4">갤러리</h2>
					<span class="center-line"></span>
				</div>
			</div>                   
		</div>
		<div class="tabs-container">
			<ul class="nav nav-tabs tab-centers">
				<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> 갤러리 1</a></li>
				<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">갤러리 2</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab-1" class="tab-pane active">
					<?php echo latest('theme/gallery_list', 'gallery_image_1', 6, 10);?>
				</div>
				<div id="tab-2" class="tab-pane">
					<?php echo latest('theme/gallery_list', 'gallery', 6, 10);?>
				</div>
			</div>
		</div>
	</div>

	<!-------------------------- 공지사항 -------------------------->
	<?php echo latest('theme/basic_one', 'notice', 5, 30);?>
	<!-------------------------- //공지사항 -------------------------->


	<!-------------------------- 유튜브 -------------------------->
	<!-- 
	
	/theme/테마이름/skin/latest/basic_yt 스킨내 백그라운드 이미지 수정가능
	
	-->
	<?php echo latest('theme/basic_yt', 'gallery_movie', 6, 10);?>
	<!-------------------------- //유튜브 -------------------------->




	<!-------------------------- 폼메일 -------------------------->
	<!-- 
	
	관리자 - 기본환경설정 - 관리자메일주소를 사용합니다. 관리자 로그인후 이메일 주소를 변경해주세요.	
	
	-->

        <!--contact section-->
        <section id="contact" style="background: #f7f9fa;"><!-- 백그라운드 색상 -->
            <div class="container pt80">
				<div class="row">
					<div class="col-md-12">
						<div class="center-heading">
							<h2 class="kos4">SENDMAIL</h2>
							<span class="center-line"></span>
						</div>
					</div>                   
				</div>
                <div class="row">
                    <div class="col-md-6 margin30">
                        <div class="divide30"></div>
                        <div class="form-contact">
                            <form name="message" id="frm" class="contact-form" method="post" novalidate>
							<input type="hidden" id="send_url" value="<?php echo G5_THEME_URL?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label class="ko2">담당자<span>*</span></label>
                                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>E-mail<span>*</span></label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
								<div class="row control-group">
									<div class="form-group col-xs-12  controls">
										<label class="ko2">연락처</label>
										<input type="tel" class="form-control" placeholder="phone" name="tel" id="phone" autocomplete="off">
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-12 controls">
										<label class="ko2">아래 보안코드를 입력해주세요.<span>*</span></label>
										<input type="text" name="secode" id="secode" class="form-control" placeholder="<?php echo rand(0000,9999)?>" aria-describedby="sizing-addon2" required autocomplete="off">
									</div>
								</div> 

                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label class="ko2">문의내용<span>*</span></label>
                                        <textarea rows="5" class="form-control" placeholder="Message" name="content" id="content" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
								<div class="row control-group">
									<div class="form-group col-xs-12 controls">
										<a href="<?php echo G5_URL?>/content/privacy" target="_blank" class="btn btn-xs ko" style="color:#000">[개인정보처리방침안내]</a>
										<input type="checkbox" class="" name="agree" value=""> 동의
									</div>
								</div>
                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12 text-right">
                                        <button type="button" class="btn btn-lg ko" id="msg">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--contact form-->
                    </div><!-- ./col -->
					<div class="col-md-6">
						<!-------------------------- 구글지도 -------------------------->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.871281728863!2d127.63441595168212!3d37.29818437975004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35635d8af4a6c211%3A0x9b0b7257a5a5a5cc!2z7Jes7KO87Iuc7LKt!5e0!3m2!1sko!2skr!4v1627462470388!5m2!1sko!2skr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


					</div>
                </div><!-- ./row -->
            </div><!-- ./container -->
        </section>

	<!-------------------------- ./폼메일 -------------------------->









	<!-------------------------- 하단 배너 -------------------------->
	<!-- 
	
	테마폴더/js/custom.js : 323번째줄에서 수정가능

	-->
	<div class="container mt80 mb80">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl-theme">
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- 하단 배너 끝 -------------------------->


	<?php
	include_once(G5_THEME_PATH.'/tail.php');
	?>