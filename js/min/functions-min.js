$(function(){function i(){var i=!1;if($("#carousel").carouFredSel({pagination:".pagination",scroll:{duration:0,pauseDuration:900,wipe:!0},auto:!1,prev:{button:"#prev",key:"left",conditions:function(){return!i},onBefore:function(e,t){i=!0,$(this).delay(900),e.find("img.img-front").delay(50).animate({left:n.imgFront}),e.find("img.img-mid").delay(100).animate({left:n.imgMid}),e.find("img.img-back").delay(200).animate({left:n.imgBack}),e.find("h3").delay(400).animate({left:n.h3}),e.find("h5").delay(300).animate({left:n.h5}),e.find("p").delay(500).animate({left:n.p}),e.find("a").delay(600).animate({left:n.a})},onAfter:function(n,a){n.find("img.img-front").css({left:t.imgFront}),n.find("img.img-mid").css({left:t.imgMid}),n.find("img.img-back").css({left:t.imgBack}),n.find("h3").animate({left:t.h3}),n.find("h5").animate({left:t.h5}),n.find("p").css({left:t.p}),n.find("a").css({left:t.a}),a.find("img.img-front").css({left:e.imgFront}).delay(50).animate({left:t.imgFront},function(){i=!1}),a.find("img.img-mid").css({left:e.imgMid}).delay(100).animate({left:t.imgMid}),a.find("img.img-back").css({left:e.imgBack}).delay(200).animate({left:t.imgBack}),a.find("h3").css({left:e.h3}).delay(400).animate({left:t.h3}),a.find("h5").css({left:e.h5}).delay(300).animate({left:t.h5}),a.find("p").css({left:e.p}).delay(500).animate({left:t.p}),a.find("a").css({left:e.a}).delay(600).animate({left:t.a})}},next:{button:"#next",key:"right",conditions:function(){return!i},onBefore:function(t,n){i=!0,$(this).delay(900),t.find("img.img-front").delay(600).animate({left:e.imgFront}),t.find("img.img-mid").delay(500).animate({left:e.imgMid}),t.find("img.img-back").delay(400).animate({left:e.imgBack}),t.find("h3").delay(100).animate({left:e.h3}),t.find("h5").delay(50).animate({left:e.h5}),t.find("p").delay(200).animate({left:e.p}),t.find("a").delay(300).animate({left:e.a})},onAfter:function(e,a){e.find("img.img-front").css({left:t.imgFront}),e.find("img.img-mid").css({left:t.imgMid}),e.find("img.img-back").css({left:t.imgBack}),e.find("h3").animate({left:t.h3}),e.find("h5").animate({left:t.h5}),e.find("p").css({left:t.p}),e.find("a").css({left:t.a}),a.find("img.img-front").css({left:n.imgFront}).delay(600).animate({left:t.imgFront}),a.find("img.img-mid").css({left:n.imgMid}).delay(500).animate({left:t.imgMid}),a.find("img.img-back").css({left:n.imgBack}).delay(400).animate({left:t.imgBack}),a.find("h3").css({left:n.h3}).delay(100).animate({left:t.h3}),a.find("h5").css({left:n.h5}).delay(50).animate({left:t.h5}),a.find("p").css({left:n.p}).delay(200).animate({left:t.p}),a.find("a").css({left:n.a}).delay(300).animate({left:t.a},function(){i=!1})}}}),"undefined"!=typeof a&&a>0){window.clearInterval(f);var f=window.setInterval(function(){$("#next").trigger("click")},a)}}$(document).on("focusin",".field, textarea",function(){this.title==this.value&&(this.value="")}).on("focusout",".field, textarea",function(){""==this.value&&(this.value=this.title)});var e={imgFront:-990,imgMid:-990,imgBack:-990,h3:-990,h5:-990,p:-990,a:-990},t={imgFront:649,imgMid:572,imgBack:498,h3:32,h5:32,p:32,a:32},n={imgFront:990,imgMid:990,imgBack:990,h3:990,h5:990,p:990,a:990};i(),$(window).resize(function(){t=$(window).width()<1023&&$(window).width()>767?{imgFront:476,imgMid:425,imgBack:366,h3:10,h5:10,p:10,a:10}:$(window).width()<767?{imgFront:120,imgMid:80,imgBack:40,h3:10,h5:10,p:10,a:0}:{imgFront:649,imgMid:572,imgBack:498,h3:32,h5:32,p:32,a:32},$("#carousel").trigger("destroy",!1),setTimeout(function(){i(),$("#carousel").trigger("currentVisible",function(i){i.find("img.img-front").css({left:t.imgFront}),i.find("img.img-mid").css({left:t.imgMid}),i.find("img.img-back").css({left:t.imgBack}),i.find("h3").animate({left:t.h3}),i.find("h5").animate({left:t.h5}),i.find("p").css({left:t.p}),i.find("a").css({left:t.a})})},100)}).resize(),$("#partners-slider .slider-holder2").carouFredSel({align:"center",items:{visible:"variable",width:"variable"},scroll:1,prev:".prev-arr",next:".next-arr"}),$("#navigation a.nav-btn").click(function(){return $(this).closest("#navigation").find("ul").stop(!0,!0).slideToggle(),$(this).find("span").toggleClass("active"),!1});var a=8e3});