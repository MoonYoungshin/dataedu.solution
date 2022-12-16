<!DOCTYPE html>
<?php
/**
 * MainPage Template
 * 20221026 | @m | 최초작성
 * 20221028 | @m | 요구반영. 결함개선. 고도화
 * 20221107 | @m | 
 * 20221206 | @m | 메인 콘텐츠 변경
 * 20221212 | @m | 
 * 20221213 | @m | 
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


<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/head_before_login.php"; ?>
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
	<video autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline" poster="" class="video1full1" id="myVideo">
		<source src="<?=$sitePath?>/data/mp4/Wormhole-124593.mp4" type="video/mp4">
	</video>
	<div class="container">
		<div class="w1">
			<div class="tg1">
				<span class="t1 mj-ani"><strong class="em">더 나은 미래을 위한 AI 서비스</strong></span>
				<span class="t1 mj-ani"><strong class="em">차별화된 API 서비스로 당신이 꿈꾸는 비즈니스를 현실화</strong>시켜드립니다.</span>
			</div>
		</div>
		<div class="w2">
		</div>
		<div class="w3">
			<a href="?#★" class="b1"><i class="b1ic1"></i><span class="b1t1">체험하기</span></a>
		</div>
	</div>
</div>
<!-- /vpr1 -->

<script>/*<![CDATA[*/
	(function(){
		// 비디오제어. 20221212. @m.
		var vdo = document.getElementById('myVideo');
		vdo.playbackRate = 0.6;
	})();
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
		<div id="tgroup1" class="mj-scroll-cmid-act">
			<div class="t1 mj-ani">
				HELLO DATA!
			</div>
			<h3 class="h1 mj-ani">
				<span class="h1t1">나의 비즈니스에 딱 맞는</span>
				<span class="h1t1">최고의 <span class="en">API,</span></span>
				<span class="h1t1"><span class="en">DATAEDU.AI</span></span>
			</h3>
			<div class="t2 mj-ani">
				<span class="t2t1">다양한 API엔진을 통해 비즈니스 맞춤형</span>
				<span class="t2t1">AI 솔루션을 제공합니다.</span>
				<span class="t2t1">최첨단 인공지능을 이용한 API 엔진을 체험해보세요.</span>
			</div>
		</div>
		<!-- /tgroup1 -->

	</div>
	<div class="w2">

		<!-- fcard1 -->
		<div id="fcard1">
		<div class="wrap1">
			<ul class="mns">
				<li class="m m1">
					<a class="a1 mj-ani">
						<i class="ic1"></i>
						<strong class="t1">Audio API</strong>
						<div class="t2">
							음성데이터를 인식 및 가공하여<br>
							다양한 형태의 서비스로 제공하는 기술<br>
						</div>
					</a>
				</li>
				<li class="m m2">
					<a class="a1 mj-ani">
						<i class="ic1"></i>
						<strong class="t1">Vision API</strong>
						<div class="t2">
							이미지 데이터의 특정 객체를<br>
							인식하여 정보를 추출하는 기술<br>
						</div>
					</a>
				</li>
				<li class="m m3">
					<a class="a1 mj-ani">
						<i class="ic1"></i>
						<strong class="t1">Language API</strong>
						<div class="t2">
							언어 데이터를 분석하여 교정/변환<br>
							/질의응답 형태의 서비스로 제공하는 기술<br>
						</div>
					</a>
				</li>
				<li class="m m4">
					<a class="a1 mj-ani">
						<i class="ic1"></i>
						<strong class="t1">Education API</strong>
						<div class="t2">
							음성데이터를 인식하여 정확도와<br>
							유창성을 측정하는 에듀테크 기술<br>
						</div>
					</a>
				</li>
				<li class="m m5">
					<a class="a1 mj-ani">
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