 $( window ).resize(function() {
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
});
//sticky header on scroll
$(document).ready(function () {
    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });
    
    //on hover dropdown menu
    //$(".navbar-nav>.dropdown").hover(function () {
    //$(this).toggleClass("open");
	//});
});

/* ==============================================
 WOW plugin triggers animate.css on scroll
 =============================================== */
$(document).ready(function () {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
    );
    wow.init();
});


$(document).ready(function () {
	$('[data-toggle="slide-collapse"]').on('click', function() {
		$navMenuCont = $($(this).data('target'));
		$navMenuCont.animate({
		'width': 'toggle'
		}, 100);
	$(".menu-overlay").fadeIn(200);

	});
		$(".menu-overlay").click(function(event) {
		$(".navbar-toggle").trigger("click");
		$(".menu-overlay").fadeOut(200);
	});
});

//parallax
$(document).ready(function () {
    $(window).stellar({
        horizontalScrolling: false,
        responsive: true/*,
         scrollProperty: 'scroll',
         parallaxElements: false,
         horizontalScrolling: false,
         horizontalOffset: 0,
         verticalOffset: 0*/
    });
});

//owl carousel for work
$(document).ready(function () {

    $("#work-carousel").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

});


//owl carousel for news
$(document).ready(function () {

    $("#news-carousel").owlCarousel({
        // Most important owl features
        items: 2,
        itemsCustom: false,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});



//owl carousel for testimonials
$(document).ready(function () {

    $("#testi-carousel").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
	});
    $("#item-carousel").owlCarousel({
	autoplay:true,
	autoplayTimeout:3000,
    loop:true,
    margin:15,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
	});
    $(".owl-yt-slider").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
	});

});
//featured work carousel slider

$(document).ready(function () {

    $("#featured-work").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
	});

});
/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 800
    });
});
//MAGNIFIC POPUP
$(document).ready(function () {
$('.show-image').magnificPopup({type: 'image'});
});

/* ==============================================
 flex slider
 =============================================== */

$(document).ready(function () {
	$('.main-flex-slider,.testi-slide').flexslider({
		slideshowSpeed: 4000,
		directionNav: false,
		animation: "fade"
	});
	$('.testi-slide').flexslider({
		slideshowSpeed: 5000,
		directionNav: false,
		animation: "fade",
		smoothHeight:true
	});
	$('.video-slide').flexslider({
		slideshowSpeed: 5000,
		directionNav: false,
		animation: "fade",
		smoothHeight:true
	});
});
//OWL CAROUSEL
$(document).ready(function () {
$("#clients-slider").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
	});
});


/*========tooltip and popovers====*/
$(document).ready(function () {
$("[data-toggle=popover]").popover();

$("[data-toggle=tooltip]").tooltip();
});

//transparent header

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.transparent-header').css("background", "#252525");
        } else {
            $('.transparent-header').css("background", "transparent");
        }
    });
});

 //Search         
    (function () {

        $('.top-search').on('click', function() {
            $('.search').fadeIn(500, function() {
              $(this).toggleClass('search-toggle');
            });     
        });

        $('.search-close').on('click', function() {
            $('.search').fadeOut(500, function() {
                $(this).removeClass('search-toggle');
            }); 
        });

    }());



/***********************************************************
* ACCORDION
***********************************************************/
    $('.panel-ico a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });
    
 
/***********************************************************
* owl-carousel
***********************************************************/
/*
$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		items:1,
		autoHeight:true,
		merge:true,
		loop:true,
		margin:20,
		video:true,
		lazyLoad:true,
		center:true,
		responsive:{
			480:{
				items:2
			},
			600:{
				items:5
			}
		}
	})
});
*/

$(document).ready(function(){
	var oowl1 = $('.owl-carousel').owlCarousel({
			autoplay:true, //오토플레이중지시 false
			autoplayTimeout:2000, // 딜레이시간 :  1000 -> 1초
			loop:true,
			items:1,
			autoHeight:true,
			merge:true,
			loop:true,
			margin:20,
			video:true,
			lazyLoad:true,
			center:true,
			responsive:{
				480:{
					items:2
				},
				600:{
					items:5 // 브라우저 가로크기 600 이상에서는 이미지가 5개
				}
			}
		});

		var length = $(".owl-stage-outer").length;

		var OWlT = setInterval(function(){
			var gotheight = true;
			for(var i=0; i<length; i++){
				if($(".owl-stage-outer").eq(i).height() < 2){
					gotheight = false;
					break;
				}
			}

			if(gotheight)
				clearInterval(OWlT);
			else
				oowl1.trigger('refresh.owl.carousel', [100]);         
	}, 300);
});

$(document).ready(function(){
	$("#select-1").change(function(){
		var a = $("#select-1 option:selected").val();
		var u = $("input[name=theme_url]").val();
		var url = u + "/ajax.php";
		var params = "mode=se&menu="+a;
		$.ajax({      
			type:"POST",  
			url:url,
			data:params,
			success:function(data){
				var ur = data.split('|');
				if(ur[0] == 'url'){
					if(ur[2] == 'self'){
						location.href = ur[1];
					}else{
						//var NWindow = window.open("about:blank");
						var NWindow = window.open("#","_self");
						NWindow.location.href = ur[1];
					}
				}else{
					$('#select-2').children('option').remove();
					$("#select-2").append("<option>선택</option>");
					$("#select-2").append(data).selectric();
					$('.ds').css("display","block");
				}
			}
		});
		
	});
});
$(document).ready(function(){
	$("#select-3").change(function(){
		var a = $("#select-3 option:selected").val();
		var u = $("input[name=theme_url]").val();
		var url = u + "/ajax.php";
		var params = "mode=se&menu="+a;
		$.ajax({      
			type:"POST",  
			url:url,
			data:params,
			success:function(data){
				var ur = data.split('|');
				if(ur[0] == 'url'){
					if(ur[2] == 'self'){
						location.href = ur[1];
					}else{
						//var NWindow = window.open("about:blank");
						var NWindow = window.open("#","_self");
						NWindow.location.href = ur[1];
					}
				}else{
					$('#select-4').children('option').remove();
					$("#select-4").append("<option>선택</option>");
					$("#select-4").append(data);
					$('.ds').css("display","block");
				}
			}
		});
		
	});
});

$('.menus-pc').selectric();


$("#msg").click(function(){
	var surl = $("#send_url").val();
	var bo_name = $("input[name=name]").val();
	var bo_email = $("input[name=email]").val();
	var bo_tel = $("input[name=tel]").val();
	var bo_content = $("#content").val();
	var secode = $("input[name=secode]").attr('placeholder');
	var se_code = $("input[name=secode]").val();
	var ckEmail = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if(bo_name == '')
	{
		alert('이름을 입력해주세요.');
		return false;
	}
	if(bo_email == '')
	{
		alert('이메일을 입력해주세요.');
		return false;
	}

	if(bo_email == '')
	{
		alert('이메일을 입력해주세요.');
		return false;
	}else{
		if(!ckEmail.test(bo_email)) {
			alert('이메일 주소를 정확히 입력해주세요.');
			return false;
		}
	}
	if(bo_tel == '')
	{
		alert('연락처를 입력해주세요.');
		return false;
	}
	if(bo_content == '')
	{
		alert('문의내용을 입력해주세요.');
		return false;
	}
	if(se_code == '')
	{
		alert('보안코드를 입력해주세요.');
		return false;
	}
	if(secode != se_code)
	{
		alert('보안코드가 맞지 않습니다. 정확히 입력해주세요.');
		return false;
	}

	if($("input:checkbox[name=agree]").is(":checked") != true) {
		alert('이용약관에 동의하셔야 합니다.');
		return false;
	}

	var url = surl + "/contact.php";
	var params = "bo_name=" + bo_name + "&bo_email=" + bo_email + "&bo_tel=" + bo_tel + "&bo_content=" + bo_content + "&code=" + se_code;

	$.ajax({      
		type:"POST",  
		url:url,
		data:params,
		success:function(data){	
			alert('문의가 등록되었습니다. 최대한 빠르게 연락드리겠습니다.')
			location.reload();
		}
	});

});


$(document).ready(function(){
	$('.breadcrumb-wrap').backstretch([
	  "/pages/img/etc/1.jpg",
	  "/pages/img/etc/2.jpg",
	  "/pages/img/etc/3.jpg"
	], {
		fade: 750,
		duration: 4000
	});
});



$(document).ready(function(){
	$("#select-1").change(function(){
		var a = $("#select-1 option:selected").val();
		var u = $("input[name=theme_url]").val();
		var url = u + "/ajax.php";
		var params = "mode=se&menu="+a;
		$.ajax({      
			type:"POST",  
			url:url,
			data:params,
			success:function(data){
				var ur = data.split('|');
				if(ur[0] == 'url'){
					if(ur[2] == 'self'){
						location.href = ur[1];
					}else{
						var NWindow = window.open("about:blank");
						NWindow.location.href = ur[1];
					}
				}else{
					$('#select-2').children('option').remove();
					$("#select-2").append("<option>선택</option>");
					$("#select-2").append(data);
				}
			}
		});
		
	});
});


$(function() {
	$("#btn-top").on("click", function() {
		$("html, body").animate({scrollTop:0}, '500');
		return false;
	});
});

 var urlmenu = document.getElementById('select-link');
 urlmenu.onchange = function() {
	  window.open( this.options[ this.selectedIndex ].value );
 };