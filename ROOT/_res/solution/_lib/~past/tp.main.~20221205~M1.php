<!DOCTYPE html>
<?php
/**
 * MainPage Template
 * 20221026 | @m | 최초작성
 * 20221205 | @m | 요구반영. 결함개선. 고도화
 */

include "../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="데이터에듀">
<meta name="keywords" content="데이터에듀 API">
<meta name="description" content="데이터에듀 API">
<title>데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

<link rel="stylesheet" href="<?=$sitePath?>/share/css/main.css?<?=time()?>">

</head>
<body data-layout="main">


<div id="skipnav">
	<ul>
	<li><a href="#body">본문 바로가기</a></li>
	</ul>
</div><hr class="dpn">


<!-- #container -->
<div id="container" tabindex="-1">
<noscript><p class="noscript">JavaScript has been disabled. This site requires JavaScript for full functionality, please enable.</p></noscript>


<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/head.php"; ?>
<!-- #wrap -->
<div id="wrap">
<?php //include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/head_visual.php"; ?>
<!-- container -->
<div class="container clearfix">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sidebar.php"; ?>
<!-- #body -->
<div id="body" tabindex="-1">





<!-- ◇◆ mainbody1 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody1">
<!-- container -->
<div class="container clearfix">


<!-- hgroup1 -->
<div id="hgroup1">
	<h2 class="h1">
		<span class="h1t1">DATAEDU.<em class="em">AI</em></span>
		<span class="h1t1">CLOUD API SERVICE</span>
	</h2>
</div>
<!-- /hgroup1 -->


</div>
<!-- /container -->
</div>
<!-- /mainbody1 -->
<!-- ◇◆ mainbody2 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody2">
<!-- container -->
<div class="container clearfix">


<!-- vpr1 -->
<div id="vpr1">
	<div class="bg1">
		<div class="p p1"></div>
		<div class="p p2"></div>
		<div class="p p3"></div>
	</div>
	<div class="container">
		<div class="w1">
			<div class="tg1">
				<span class="t1"><strong class="em">다양한 API엔진을 통해 비즈니스 맞춤형</strong></span>
				<span class="t1"><strong class="em">AI 솔루션</strong>을 제공합니다.</span>
			</div>
		</div>
		<div class="w2">
			<div class="tg2">
				<span class="t2">API</span>
				<span class="t2">TECHNOLOGY</span>
				<span class="t2">EXPERIENCE</span>
			</div>
		</div>
		<div class="w3">
			<a href="?#★" class="b1"><i class="b1ic1"></i><span class="b1t1">체험하기</span></a>
		</div>
	</div>
</div>
<!-- /vpr1 -->


<script>/*<![CDATA[*/
	$(function(){
		/** ◇◆ 비주얼효과. 20221205. @m.
		 */
		(function(){
			var $my = '#vpr1', // 래퍼
				$m = $('.bg1 .p', $my), // 동작할 항목
				config = {}; // 설정값

			$my.total = $m.length; // 항목 수

			console.log($m.length, $my.total);

			config = {
				onnum: 1, // 활성값
				oldonnum: 0, // 이전 활성값 (최초값은 없음)
				interval: 2000, //동작간격 밀리초
				duration: 400, // 동작시간 밀리초
				delay: 0, // 지연시간
				easing: 'swing', // 동작 완화
			};

			// 순번 액션
			var action = function(){
				$m.removeClass('on oldon').addClass('off');
				setTimeout(function(){
					$m.eq(config.onnum-1).removeClass('off').addClass('on');
					$m.eq(config.oldonnum-1).removeClass('off').addClass('oldon');
				}, 0);
				console.log(config.interval);
			};
			action(); // ★최초 실행

			// 다음 동작
			var nextAct = function(){
				config.oldonnum = config.onnum;
				config.onnum += 1;
				if(config.onnum > $my.total){
					config.onnum = 1;
				}
				console.log($m.length, config.oldonnum, ')))', config.onnum);
				action();
				restartInterval(timer1);
			};

			// 자동 순환 //
			// 자동 동작
			var autoAct = function(){
				nextAct();
			};

			// 자동 가동
			timer1 = setInterval(autoAct, config.interval);

			// 자동 재가동
			var restartInterval = function(timer){
				if(timer) clearInterval(timer);
				timer1 = setInterval(autoAct, config.interval);
			};


		})();
	});
/*]]>*/</script>


</div>
<!-- /container -->
</div>
<!-- /mainbody2 -->
<!-- ◇◆ mainbody3 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody3">
<!-- container -->
<div class="container clearfix">


<!-- vpr2 -->
<div id="vpr2">
<div class="wrap1">
	<div class="w1">

		<!-- tgroup1 -->
		<div id="tgroup1">
			<div class="t1">
				HELLO DATA!
			</div>
			<h3 class="h1">
				<span class="h1t1">나의 비즈니스에 딱 맞는</span>
				<span class="h1t1">최고의 <span class="en">API,</span></span>
				<span class="h1t1"><span class="en">DATAEDU.AI</span></span>
			</h3>
			<div class="t2">
				<span class="t2t1">다양한 API엔진을 통해 비즈니스 맞춤형</span>
				<span class="t2t1">AI 솔루션을 제공합니다.</span>
				<span class="t2t1">최첨단 인공지능을 이용한 API 엔진을 체험해보세요.</span>
			</div>
			<a href="?#★" class="b1"><span class="b1t1">자세히 보기</span></a>
		</div>
		<!-- /tgroup1 -->

	</div>
	<div class="w2">

		<!-- fcard1 -->
		<div id="fcard1">
		<div class="wrap1">
			<ul class="mns">
				<li class="m m1">
					<a class="a1">
						<i class="ic1"></i>
						<strong class="t1">Audio API</strong>
						<div class="t2">
							음성데이터를 인식 및 가공하여<br>
							다양한 형태의 서비스로 제공하는 기술<br>
						</div>
					</a>
				</li>
				<li class="m m2">
					<a class="a1">
						<i class="ic1"></i>
						<strong class="t1">Vision API</strong>
						<div class="t2">
							이미지 데이터의 특정 객체를<br>
							인식하여 정보를 추출하는 기술<br>
						</div>
					</a>
				</li>
				<li class="m m3">
					<a class="a1">
						<i class="ic1"></i>
						<strong class="t1">Language API</strong>
						<div class="t2">
							언어 데이터를 분석하여 교정/변환<br>
							/질의응답 형태의 서비스로 제공하는 기술<br>
						</div>
					</a>
				</li>
				<li class="m m4">
					<a class="a1">
						<i class="ic1"></i>
						<strong class="t1">Education API</strong>
						<div class="t2">
							음성데이터를 인식하여 정확도와<br>
							유창성을 측정하는 에듀테크 기술<br>
						</div>
					</a>
				</li>
				<li class="m m5">
					<a class="a1">
						<i class="ic1"></i>
						<strong class="t1">Video API</strong>
						<div class="t2">
							영상데이터의 텍스트 또는 객체를<br>
							인식하여 정보를 추출하는 기술<br>
						</div>
					</a>
				</li>
			</ul>
		</div>
		</div>
		<!-- /fcard1 -->

	</div>
</div>
</div>
<!-- /vpr2 -->


</div>
<!-- /container -->
</div>
<!-- /mainbody3 -->
<!-- ◇◆ mainbody4 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody4">
<!-- container -->
<div class="container clearfix">


<!-- tgroup2 -->
<div id="tgroup2">
<div class="wrap1">
	<div class="w1">
		<div class="t1">
			<span class="t1t1">We create</span>
			<span class="t1t1">innovative services</span>
			<span class="t1t1">with bigdata</span>
		</div>
		<div class="t2">
			<span class="t2t1">우리는 다양한 데이터를 통해</span>
			<span class="t2t1">혁신적인 서비스를 탄생시킵니다.</span>
		</div>
		<div class="t3">
			<span class="t3t1">당신의 비즈니스를 위한 최적화된 솔루션</span>
			<span class="t3t1">DATAEDU.AI 와 함께 성장하고 싶다면 지금 바로 문의주세요!</span>
		</div>
		<a href="?#★" class="b1"><span class="b1t1">Contact</span><i class="b1ic1"></i></a>
	</div>
</div>
</div>
<!-- /tgroup2 -->


</div>
<!-- /container -->
</div>
<!-- /mainbody4 -->
<!-- /◇◆ mainbody1~* ◇◆◇◆◇◆◇◆◇◆ -->





</div>
<!-- /#body -->
</div>
<!-- /container -->
</div>
<!-- /#wrap -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/foot.php"; ?>
</div>
<!-- /#container -->
</body>
</html>