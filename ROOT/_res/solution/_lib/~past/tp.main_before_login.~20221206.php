<!DOCTYPE html>
<?php
/**
 * MainPage Template
 * 20221026 | @m | 최초작성
 * 20221028 | @m | 요구반영. 결함개선. 고도화
 * 20221107 | @m | 
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


<!-- vbr1 -->
<div id="vbr1">
<div class="wrap1">
	<div class="w1">
		<h3 class="h1">DATAEDU API SERVICE</h3>
		<div class="t1">
			음성, 언어, 시각 등 40여개의 최첨단<br>
			AI 기술을 데이터에듀 AI에서 마음껏 활용해보세요.
		</div>
		<a href="?#★" class="b1">체험하기</a>
	</div>
	<div class="w2">
		<div class="f1">
			<div class="f1p1">
			</div>
		</div>
	</div>
</div>
</div>
<!-- /vbr1 -->


</div>
<!-- /container -->
</div>
<!-- /mainbody1 -->
<!-- ◇◆ mainbody2 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody2">
<!-- container -->
<div class="container clearfix">


<!-- case1 -->
<div id="case1">
<div class="wrap1">
	<div class="hg1">
		<h3 class="h1">API 서비스 소개 멘트 <!-- or 데이터에듀 사례 --></h3>
	</div>
</div>
</div>
<!-- /case1 -->


</div>
<!-- /container -->
</div>
<!-- /mainbody2 -->
<!-- ◇◆ mainbody3 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody3">
<!-- container -->
<div class="container clearfix">


<!-- menu1 -->
<div id="menu1">
<div class="wrap1">
	<div class="hg1">
		<h3 class="h1">
			데이터에듀 API를 통해 <span class="dpib">색다른 서비스를 만들어보세요.</span>
		</h3>
	</div>
	<ul class="mns">
		<li class="m m1">
			<a href="?#★" class="a1">
				<i class="ic1"></i>
				<strong class="t1">Audio API</strong>
				<div class="t2">
					24시간 고객 문의 응대 및 예약, 요청업무 처리, 조사, 판매 등 인바운드/아웃바운드 전화 업무 전반을 제공할 수 있습니다.
				</div>
			</a>
		</li>
		<li class="m m2">
			<a href="?#★" class="a1">
				<i class="ic1"></i>
				<strong class="t1">Vision API</strong>
				<div class="t2">
					24시간 고객 문의 응대 및 예약, 요청업무 처리, 조사, 판매 등 인바운드/아웃바운드 전화 업무 전반을 제공할 수 있습니다.
				</div>
			</a>
		</li>
		<li class="m m3">
			<a href="?#★" class="a1">
				<i class="ic1"></i>
				<strong class="t1">Language API</strong>
				<div class="t2">
					24시간 고객 문의 응대 및 예약, 요청업무 처리, 조사, 판매 등 인바운드/아웃바운드 전화 업무 전반을 제공할 수 있습니다.
				</div>
			</a>
		</li>
		<li class="m m4">
			<a href="?#★" class="a1">
				<i class="ic1"></i>
				<strong class="t1">Education API</strong>
				<div class="t2">
					24시간 고객 문의 응대 및 예약, 요청업무 처리, 조사, 판매 등 인바운드/아웃바운드 전화 업무 전반을 제공할 수 있습니다.
				</div>
			</a>
		</li>
		<li class="m m5">
			<a href="?#★" class="a1">
				<i class="ic1"></i>
				<strong class="t1">Video API</strong>
				<div class="t2">
					24시간 고객 문의 응대 및 예약, 요청업무 처리, 조사, 판매 등 인바운드/아웃바운드 전화 업무 전반을 제공할 수 있습니다.
				</div>
			</a>
		</li>
	</ul>
</div>
</div>
<!-- /menu1 -->


</div>
<!-- /container -->
</div>
<!-- /mainbody3 -->
<!-- ◇◆ mainbody4 ◇◆◇◆◇◆◇◆◇◆ -->
<div id="mainbody4">
<!-- container -->
<div class="container clearfix">


<!-- vbr2 -->
<div id="vbr2">
<div class="wrap1">
	<div class="w1">
		<h3 class="h1">문의 안내 및 문구</h3>
		<div class="t1">
			인공지능 엔진들을 내 마음대로 연결하고 <span class="dpib">테스트해 볼 수 있는 AI Builder입니다.</span><br>
			dataedu.ai 플랫폼 내 엔진들을 자유롭게 조합하여 <span class="dpib">고객이 원하는 서비스에</span><br>
			바로, 쉽게 적용할 수 있습니다.
		</div>
		<a href="?#★" class="b1">문의하기</a>
	</div>
	<div class="w2">
		<div class="f1">
			<div class="f1p1">
			</div>
		</div>
	</div>
</div>
</div>
<!-- /vbr2 -->


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