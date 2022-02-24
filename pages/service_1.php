<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/SF.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOFTZONE</title>

        <!-- Bootstrap -->
        <link href="<?php echo G5_THEME_URL ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="<?php echo G5_THEME_URL ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo G5_THEME_URL ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo G5_THEME_URL ?>/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/css/rev-style.css">
        <!--owl carousel css-->
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo G5_THEME_URL ?>/css/yamm.css" rel="stylesheet" type="text/css">
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
        
		<!-- 좌측에 고정되어 있는 메뉴를 사용하지 않을지 아래 스타일시트를 제거하시거나 주석처리 해주세요. -->
		<link href="<?php echo G5_THEME_URL?>/css/socialfloating.css" rel="stylesheet">		

		<!-- custom css-->
        <link href="<?php echo G5_THEME_URL ?>/css/style_aqours.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo G5_THEME_URL ?>/css/common.css" rel="stylesheet" type="text/css" media="screen">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
		<?php
		include_once(G5_THEME_PATH.'/navigation.php');
		?>
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Company</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Company</li>
                        </ol>
                    </div>
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
				<div class="col-md-12 no-padding">
					<h3>COMPANY</h3>
				</div>
			</div>
		</div>

		<div class="container ko">
            <div class="row">
                <div class="col-md-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>

                <div class="col-md-6 mt30">
					<div class="hidden-lg hidden-md mt40 mb40"></div><!-- 모바일시에만 상단,하단 마진값 40씩 -->

					<!--
					https://fonts.google.com/icons?selected=Material+Icons
					아이콘 변경
					-->

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">schedule</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">date_range</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<!-- icon list -->
					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">help_outline</span>
							</div>
						</div>
						
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Developer</h4>
								<p class="kn">
									필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.
									템플릿에 제한되지 않으며 모든 프로그램에 관련하여 상담해드리고 있습니다.
								</p>
							</div>
						</div>
                    </div>
					<!-- //icon list -->

				</div><!-- //col -->
			</div><!-- //row -->



            <div class="row mobile_height">
                <div class="col-md-6 col-md-push-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>
                <div class="col-md-6 col-md-pull-6 mt30">

					<div class="hidden-lg hidden-md mt40 mb40"></div><!-- 모바일시에만 상단,하단 마진값 40씩 -->

					<!--
					https://fonts.google.com/icons?selected=Material+Icons
					아이콘 변경
					-->

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">schedule</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">date_range</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<!-- icon list -->
					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">help_outline</span>
							</div>
						</div>
						
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Developer</h4>
								<p class="kn">
									필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.
									템플릿에 제한되지 않으며 모든 프로그램에 관련하여 상담해드리고 있습니다.
								</p>
							</div>
						</div>
                    </div>
					<!-- //icon list -->

				</div><!-- ./row -->
			</div>


            <div class="row mobile_height">
                <div class="col-md-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>
                <div class="col-md-6 mt30">
					<div class="hidden-lg hidden-md mt40 mb40"></div>

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">schedule</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">date_range</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<!-- icon list -->
					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">help_outline</span>
							</div>
						</div>
						
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Developer</h4>
								<p class="kn">
									필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.
									템플릿에 제한되지 않으며 모든 프로그램에 관련하여 상담해드리고 있습니다.
								</p>
							</div>
						</div>
                    </div>
					<!-- //icon list -->




				</div><!-- //col -->
			</div>


            <div class="row mobile_height">
                <div class="col-md-6 col-md-push-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>
                <div class="col-md-6 col-md-pull-6 mt30">

					<div class="hidden-lg hidden-md mt40 mb40"></div>

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">schedule</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">date_range</span><!-- 아이콘과 폰트 크기 입니다. -->
							</div>
						</div>
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p class="kn">
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>

					<!-- icon list -->
					<div class="row">
						<div class="col-md-1 col-sm-3 col-xs-3">
							<div class="pe-icon-box">
								<span class="material-icons f60">help_outline</span>
							</div>
						</div>
						
						<div class="col-md-11 col-sm-9 col-xs-9">
							<div class="services-box-info">
								<h4>Developer</h4>
								<p class="kn">
									필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.
									템플릿에 제한되지 않으며 모든 프로그램에 관련하여 상담해드리고 있습니다.
								</p>
							</div>
						</div>
                    </div>
					<!-- //icon list -->

				</div><!--./col-->
			</div>
		</div><!-- //container -->
		
		<div class="divide80"></div>
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>

        <!--must need plugin jquery-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo G5_THEME_URL?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.stellar.min.js" type="text/javascript"></script>


        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo G5_THEME_URL?>/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo G5_THEME_URL?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<!-- responsive-slider -->
		<script src="<?php echo G5_THEME_URL?>/slide/responsive-slider.js"></script>        
		<script src="<?php echo G5_THEME_URL?>/js/raphael-min.js"></script>
		<script src="<?php echo G5_THEME_URL?>/morris/morris.min.js"></script>   
		<script src="<?php echo G5_THEME_URL?>/js/jquery.backstretch.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.socialfloating.js"></script>
		<!-- select -->
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.selectric.min.js"></script>
        <script src="<?php echo G5_THEME_URL?>/js/custom.js" type="text/javascript"></script>



		<!-- 차트는 이곳에서 수정하세요. -->
		<script>
		  $(function () {
			"use strict";

			// AREA CHART
			var area = new Morris.Area({
			  element: 'revenue-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666, item2: 2666},
				{y: '2015 Q2', item1: 2778, item2: 2294},
				{y: '2015 Q3', item1: 4912, item2: 1969},
				{y: '2015 Q4', item1: 3767, item2: 3597},
				{y: '2016 Q1', item1: 6810, item2: 1914},
				{y: '2016 Q2', item1: 5670, item2: 4293},
				{y: '2016 Q3', item1: 4820, item2: 3795},
				{y: '2016 Q4', item1: 15073, item2: 5967},
				{y: '2017 Q1', item1: 10687, item2: 4460},
				{y: '2017 Q2', item1: 8432, item2: 5713}
			  ],
			  xkey: 'y',
			  ykeys: ['item1', 'item2'],
			  labels: ['Item 1', 'Item 2'],
			  lineColors: ['#a0d0e0', '#3c8dbc'],
			  hideHover: 'auto'
			});

			// LINE CHART
			var line = new Morris.Line({
			  element: 'line-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666},
				{y: '2015 Q2', item1: 2778},
				{y: '2015 Q3', item1: 4912},
				{y: '2015 Q4', item1: 3767},
				{y: '2016 Q1', item1: 6810},
				{y: '2016 Q2', item1: 5670},
				{y: '2016 Q3', item1: 4820},
				{y: '2016 Q4', item1: 15073},
				{y: '2017 Q1', item1: 10687},
				{y: '2017 Q2', item1: 8432}
			  ],
			  xkey: 'y',
			  ykeys: ['item1'],
			  labels: ['Item 1'],
			  lineColors: ['#3c8dbc'],
			  hideHover: 'auto'
			});

		  });
		</script>
    </body>
</html>
