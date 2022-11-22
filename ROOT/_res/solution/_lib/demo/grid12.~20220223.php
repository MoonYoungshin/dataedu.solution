<!DOCTYPE html>
<?php
/**
 * 20220223 | @m | connect.php 추가
 */

include "../../share/inc/connect.php";
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="12 Grid System"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>


<style>/*<![CDATA[*/
	/* ◇◆ _Demo Page_ ◇◆◇◆◇ */
	h2.demo{display:block;
		margin:2em 0;padding:.75em .875em;
		border-radius:2px;
		border-left:.5em solid #357;
		background:#579;
		color:#fff;
		font-weight:600;
		font-size:1em;
		letter-spacing:0;
		box-shadow: inset 0 1px 0 0 rgba(0,0,0, .1),
			0 2px 0 0 rgba(0,0,0, .05);
	}


	.column .wrap1{display:block;
		padding:2.5px; /* [CR]big) .166em 하면 높이 1px 오차 발생하기도 함. */
		border:1px solid #000;
		background:#def;
		text-align:center;
		min-height:0; /* [IE7]fix */
	}
	/* polyfill [~IE8] selectivizr.js 로 미디어쿼리 안에서 nth-child(2n-1) 동작하려면.. 외부파일.css 이어야 한다.  */
	.column:nth-child(5n-3) .wrap1{background:#dec;}
	.column:nth-child(5n-2) .wrap1{background:#fde;}
	.column:nth-child(5n-1) .wrap1{background:#fed;}
	.column:nth-child(5n) .wrap1{background:#edf;}

/*]]>*/</style>


</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<!-- 
/*! Style Demo Code. v.20170413~ 20170626. 20200608 | by MoonYoungshin[myshin@naver.com] | MIT License
 * Note) 
 * Task) 
 */ -->
<hr /><!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->
<h1 class="hb1 h1">12 Grid System</h1>


<!-- 본문영역 -->
<div class="contentsBlock" style="background:#f7f7f7;">


<hr /><!-- ◇◆◇◆◇◆◇◆◇◆ -->
<h2 class="hb1 h2" id="HotDemo">Hot Demo</h2>


<!-- <hr /> --><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">even-grid evenmix-1234</h3>
<!-- contentsBlock -->
<div style="background:#579;">
<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">
		<div class="wrap1">01</div>
	</div>
	<div class="column">
		<div class="wrap1">02</div>
	</div>
	<div class="column">
		<div class="wrap1">03</div>
	</div>
	<div class="column">
		<div class="wrap1">04</div>
	</div>
	<div class="column">
		<div class="wrap1">05</div>
	</div>
	<div class="column">
		<div class="wrap1">06</div>
	</div>
	<div class="column">
		<div class="wrap1">07</div>
	</div>
	<div class="column">
		<div class="wrap1">08</div>
	</div>
	<div class="column">
		<div class="wrap1">09</div>
	</div>
	<div class="column">
		<div class="wrap1">10</div>
	</div>
	<div class="column">
		<div class="wrap1">11</div>
	</div>
	<div class="column">
		<div class="wrap1">12</div>
	</div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">tac</b></h4>
<!-- contentsBlock -->
<div style="background:#579;">
<!-- even-grid -->
<div class="even-grid evenmix-1234 tac">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b></h4>
<p><em class="em2">좌우 맨끝을 정확하게 맞춘다.</em></p>
<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid evenmix-1234 float-left" style="background:#fb3;">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">mgl0 mgr0</b></h4>
<p><em class="em2">좌우 맨끝에 여백을 만든다.</em></p>
<!-- contentsBlock -->
<div style="background:#579;">
<!-- even-grid -->
<div class="even-grid evenmix-1234 mgl0 mgr0">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em0">mgl0 mgr0</b> + 외부 래퍼에 padding:0 1%; overflow:hidden; 추가</h4>
<p><em class="em2">상하좌우 여백을 동일하게 만든다.</em></p>
<!-- contentsBlock -->
<div style="padding:0 1%;background:#579;overflow:hidden;">
	<!-- even-grid -->
	<div class="even-grid evenmix-1234 float-left mgl0 mgr0">
		<div class="column"><div class="wrap1">01</div></div>
		<div class="column"><div class="wrap1">02</div></div>
		<div class="column"><div class="wrap1">03</div></div>
		<div class="column"><div class="wrap1">04</div></div>
		<div class="column"><div class="wrap1">05</div></div>
		<div class="column"><div class="wrap1">06</div></div>
		<div class="column"><div class="wrap1">07</div></div>
		<div class="column"><div class="wrap1">08</div></div>
		<div class="column"><div class="wrap1">09</div></div>
		<div class="column"><div class="wrap1">10</div></div>
		<div class="column"><div class="wrap1">11</div></div>
		<div class="column"><div class="wrap1">12</div></div>
	</div>
	<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">gap and collapse</h3>

<p><b class="em2">좌우 간격 오차 :</b>
	퍼센트 계산에서 .even-grid 와 .column 은 각각 부모로 부터 계산되므로..
	.gap4pct 인 경우 전체 가로폭 좌우가 2% 차이 나므로 2 - 2*(100/(2+100+2)) = 0.07692307692307692307692307692308% 의 오차가 발생한다.
	가로 폭이 1000px 이라면 0.8px 정도 차이가 이므로 소수점 계산에서 1px 오차가 생긴다.
	보통 화면에서 잘 감지되지 않으므로 그대로 사용하여도 무방하지만, 더 견고한 배치를 위해..<br />
	정확한 계산 값을 만들었다.<br />
	그리고, .gap2px ~ .gap40px 도 추가하였다.<br />
</p>

<h4 class="hb1 h4">even-grid evenmix-1234 gap8pct <b class="em0">float-left</b></h4>

<!-- even-grid -->
<div class="even-grid evenmix-1234 gap8pct float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap7pct <b class="em0">float-left</b></h4>

<!-- even-grid -->
<div class="even-grid evenmix-1234 gap7pct float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap6pct <b class="em0">float-left</b></h4>

<!-- even-grid -->
<div class="even-grid evenmix-1234 gap6pct float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap5pct <b class="em0">float-left</b></h4>

<!-- even-grid -->
<div class="even-grid evenmix-1234 gap5pct float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap4pct <b class="em0">float-left</b></h4>

<!-- even-grid -->
<div class="even-grid evenmix-1234 gap4pct float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap4pct</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap4pct">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap3pct</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap3pct">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">gap2pct</b> <!-- (기본값) --></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap2pct">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap1pct</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap1pct">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 gap0</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap0">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">collapse</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 collapse">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> collapse</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 float-left collapse">
	<div class="column"><div class="wrap1	">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<hr /><!-- ◇◆◇◆◇◆◇◆◇◆-->
<h3 class="hb1 h3" id="GapPX">gap40px ~ gap2px</h2>


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap40px</b> <!-- (기본값) --></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap40px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap30px</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap30px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap20px</b> (기본값)</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap20px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap10px</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap10px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap8px</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap8px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap6px</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap6px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap4px</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap4px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<h4 class="hb1 h4">even-grid evenmix-1234 <b class="em0">float-left</b> <b class="em2">gap2px</b></h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234 gap2px float-left">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->


<hr /><!-- ◇◆◇◆◇◆◇◆◇◆-->
<h2 class="hb1 h2" id="DemoEvenGrid">Demo Even Grid</h2>


<!-- <hr /> --><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="DemoEvenGrid_Basic">Basic</h3>


<h4 class="hb1 h4">even-grid evenmix-1</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-2</h4>
<!-- even-grid -->
<div class="even-grid evenmix-2">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-3</h4>
<!-- even-grid -->
<div class="even-grid evenmix-3">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-12</h4>
<!-- even-grid -->
<div class="even-grid evenmix-12">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-13</h4>
<!-- even-grid -->
<div class="even-grid evenmix-13">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-23</h4>
<!-- even-grid -->
<div class="even-grid evenmix-23">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-14</h4>
<!-- even-grid -->
<div class="even-grid evenmix-14">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-24</h4>
<!-- even-grid -->
<div class="even-grid evenmix-24">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-123</h4>
<!-- even-grid -->
<div class="even-grid evenmix-123">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-124</h4>
<!-- even-grid -->
<div class="even-grid evenmix-124">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-234</h4>
<!-- even-grid -->
<div class="even-grid evenmix-234">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-135</h4>
<!-- even-grid -->
<div class="even-grid evenmix-135">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-246</h4>
<!-- even-grid -->
<div class="even-grid evenmix-246">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1234</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-2345</h4>
<!-- even-grid -->
<div class="even-grid evenmix-2345">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1246</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1246">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-1357</h4>
<!-- even-grid -->
<div class="even-grid evenmix-1357">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->

<h4 class="hb1 h4">even-grid evenmix-2468</h4>
<!-- even-grid -->
<div class="even-grid evenmix-2468">
	<div class="column"><div class="wrap1">01</div></div>
	<div class="column"><div class="wrap1">02</div></div>
	<div class="column"><div class="wrap1">03</div></div>
	<div class="column"><div class="wrap1">04</div></div>
	<div class="column"><div class="wrap1">05</div></div>
	<div class="column"><div class="wrap1">06</div></div>
	<div class="column"><div class="wrap1">07</div></div>
	<div class="column"><div class="wrap1">08</div></div>
	<div class="column"><div class="wrap1">09</div></div>
	<div class="column"><div class="wrap1">10</div></div>
	<div class="column"><div class="wrap1">11</div></div>
	<div class="column"><div class="wrap1">12</div></div>
</div>
<!-- /even-grid -->



<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Advanced</h3>





<hr /><!-- ◇◆◇◆◇◆◇◆◇◆-->
<h2 class="hb1 h2" id="DemoEachGrid">Demo Each Grid</h2>


<!-- <hr /> --><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Basic</h3>


<div class="even-grid">
	<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
	<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
	<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
</div>
<div class="even-grid">
	<div class="small-12 large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
	<div class="small-12 large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
	<div class="small-12 large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
</div>
<div class="even-grid">
	<div class="small-6 large-2 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">2</span></div>
	<div class="small-6 large-8 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">8</span></div>
	<div class="small-12 large-2 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">2</span></div>
</div>
<div class="even-grid">
	<div class="small-3 column"><span class="wrap1">3</span></div>
	<div class="small-9 column"><span class="wrap1">9</span></div>
</div>
<div class="even-grid">
	<div class="small-12 large-4 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">4</span></div>
	<div class="small-12 large-8 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">8</span></div>
</div>
<div class="even-grid">
	<div class="small-6 large-5 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">5</span></div>
	<div class="small-6 large-7 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">7</span></div>
</div>
<div class="even-grid">
	<div class="small-12 large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
	<div class="small-12 large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
</div>



<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">Small Grid</h4>

<div class="even-grid">
	<div class="small-2 column"><span class="wrap1">2</span></div>
	<div class="small-10 column"><span class="wrap1">10</span></div>
</div>
<div class="even-grid">
	<div class="small-3 column"><span class="wrap1">3</span></div>
	<div class="small-9 column"><span class="wrap1">9</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">Medium Grid</h4>

<div class="even-grid">
	<div class="medium-2 column"><span class="wrap1 show-all hide-medium">full</span><span class="wrap1 hide-all show-medium">2</span></div>
	<div class="medium-10 column"><span class="wrap1 show-all hide-medium">full</span><span class="wrap1 hide-all show-medium">10</span></div>
</div>
<div class="even-grid">
	<div class="medium-3 column"><span class="wrap1 show-all hide-medium">full</span><span class="wrap1 hide-all show-medium">3</span></div>
	<div class="medium-9 column"><span class="wrap1 show-all hide-medium">full</span><span class="wrap1 hide-all show-medium">9</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">Large Grid</h4>

<div class="even-grid">
	<div class="large-2 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">2</span></div>
	<div class="large-10 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">10</span></div>
</div>
<div class="even-grid">
	<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
	<div class="large-9 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">9</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><em class="em">Xlarge Grid</em></h4>

<div class="even-grid">
	<div class="xlarge-2 column"><span class="wrap1 show-all hide-xlarge">full</span><span class="wrap1 hide-all show-xlarge">2</span></div>
	<div class="xlarge-10 column"><span class="wrap1 show-all hide-xlarge">full</span><span class="wrap1 hide-all show-xlarge">10</span></div>
</div>
<div class="even-grid">
	<div class="xlarge-3 column"><span class="wrap1 show-all hide-xlarge">full</span><span class="wrap1 hide-all show-xlarge">3</span></div>
	<div class="xlarge-9 column"><span class="wrap1 show-all hide-xlarge">full</span><span class="wrap1 hide-all show-xlarge">9</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Advanced</h3>

<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><b class="em0">small-12 medium-6 large-4 xlarge-3 column</b></h4>

<div class="even-grid">
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[01]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[02]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[03]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[04]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[05]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[06]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[07]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[08]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[09]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[10]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[11]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 xlarge-3 column">
		<div class="wrap1">
			<span class="show-all">[12]</span>
			<span class="show-all hide-medium">12</span>
			<span class="hide-all show-medium hide-large">6</span>
			<span class="hide-all show-large hide-xlarge">4</span>
			<span class="hide-all show-xlarge">3</span>
		</div>
	</div>
</div>



<hr /><!-- ◇◆◇◆◇◆◇◆  -->
<h3 class="hb1 h3">Nested</h3>


<!-- <hr /> --><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><em class="em">.even-grid > .column &nbsp; .even-grid > .column</em></h4>

<p>
	갭(padding 값)이 % 이면 내포 깊이에 따라  부모의 width 에 상대적이므로 간격이 달라진다.<br />
	<!-- 내포 컬럼에서도 항상 같은 값을 유지하려면.. border-box 값을 사용하여야 하며, [IE8+] 호환되므로 차세대에 갱신할 때 고려한다.<br /> -->
	<!-- 하지만, 실무에서는 이런 이슈로 괴롭히는 콘텐츠가 거의 없었다.<br /> -->
</p>

<!-- contentsBlock -->
<div style="background:#579;">
<!-- even-grid -->
<div class="even-grid">
	<div class="small-8 column"><span class="wrap1">8</span>
		<div class="even-grid">
			<div class="small-8 column"><span class="wrap1">8 Nested</span>
				<div class="even-grid">
					<div class="small-8 column"><span class="wrap1">8 Nested Again</span></div>
					<div class="small-4 column"><span class="wrap1">4</span></div>
				</div>
			</div>
			<div class="small-4 column"><span class="wrap1">4</span></div>
		</div>
	</div>
	<div class="small-4 column"><span class="wrap1">4</span></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->

<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">내포 코드 형태에 따른 렌더링 비교</h4>


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5"><b class="em0">행열행열</b> 내포 .even-grid > .column > .even-grid > .column</h5>

<p><del>자식 .even-grid 와 .column 의 상하 여백은 0 으로 렌더링 된다.</del> ( 20181105~ 기존 상하 갭 유지되게 수정함! )<br />
	부모 .column 은 정의된대로 padding-top 과 padding-bottom 값을 가진다.<br />
</p>

<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid" style="background:#fb3;">
	<div class="column">
		<div class="even-grid" style="background:#c80;">
			<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
			<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
			<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
			<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
			<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="small-6 large-2 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">2</span></div>
			<div class="small-6 large-8 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">8</span></div>
			<div class="small-12 large-2 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">2</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="small-3 column"><span class="wrap1">3</span></div>
			<div class="small-9 column"><span class="wrap1">9</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="large-4 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">4</span></div>
			<div class="large-8 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">8</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="small-6 large-5 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">5</span></div>
			<div class="small-6 large-7 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">7</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
			<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
		</div>
	</div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5"><b class="em0">행행열</b> 내포 .even-grid > .even-grid > .column</h5>

<p>자식 .even-grid 와 .column 의 상하 여백은 0 으로 렌더링 된다.<br />
</p>

<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid" style="background:#fb3;">
	<div class="even-grid" style="background:#c80;">
		<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
		<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
		<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
		<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
		<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="small-6 large-2 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">2</span></div>
		<div class="small-6 large-8 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">8</span></div>
		<div class="small-12 large-2 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">2</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="small-3 column"><span class="wrap1">3</span></div>
		<div class="small-9 column"><span class="wrap1">9</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="large-4 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">4</span></div>
		<div class="large-8 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">8</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="small-6 large-5 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">5</span></div>
		<div class="small-6 large-7 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">7</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
		<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
	</div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Vertical Gap <small class="">(.even-grid 상하 간격 조정하기)</small></h3>


<!-- <hr /> --><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">class="even-grid vgap0"</h4>


<h5 class="hb1 h5"><b class="em0">행열행열</b> <span class="fwn">.even-grid &gt; .column &gt; .even-grid &gt; .column</span></h5>

<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid vgap0" style="background:#fb3;">
	<div class="column">
		<div class="even-grid" style="background:#c80;">
			<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
			<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
			<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
			<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
			<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="small-6 large-2 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">2</span></div>
			<div class="small-6 large-8 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">8</span></div>
			<div class="small-12 large-2 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">2</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="small-3 column"><span class="wrap1">3</span></div>
			<div class="small-9 column"><span class="wrap1">9</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="large-4 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">4</span></div>
			<div class="large-8 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">8</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="small-6 large-5 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">5</span></div>
			<div class="small-6 large-7 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">7</span></div>
		</div>
		<div class="even-grid" style="background:#c80;">
			<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
			<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
		</div>
	</div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<h5 class="hb1 h5"><b class="em0">행행열</b> <span class="fwn">.even-grid &gt; .even-grid &gt; .column</span></h5>

<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid vgap0" style="background:#fb3;">
	<div class="even-grid" style="background:#c80;">
		<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
		<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
		<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
		<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
		<div class="large-3 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">3</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="small-6 large-2 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">2</span></div>
		<div class="small-6 large-8 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">8</span></div>
		<div class="small-12 large-2 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">2</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="small-3 column"><span class="wrap1">3</span></div>
		<div class="small-9 column"><span class="wrap1">9</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="large-4 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">4</span></div>
		<div class="large-8 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">8</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="small-6 large-5 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">5</span></div>
		<div class="small-6 large-7 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">7</span></div>
	</div>
	<div class="even-grid" style="background:#c80;">
		<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
		<div class="large-6 column"><span class="wrap1 show-all hide-large">full</span><span class="wrap1 hide-all show-large">6</span></div>
	</div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<h5 class="hb1 h5"><b class="em0">행열</b> <span class="fwn">.even-grid &gt; .column</span></h5>

<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid vgap0" style="background:#fb3;">
	<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
	<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
	<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<p>2줄 이상 표현될 경우 맨위 맨아래 여백은 줄간의 1/2 크기이다.</p>


<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid vgap0" style="background:#fb3;">
	<div class="small-6 column"><span class="wrap1">6</span></div>
	<div class="small-6 column"><span class="wrap1">6</span></div>
	<div class="small-6 column"><span class="wrap1">6</span></div>
	<div class="small-6 column"><span class="wrap1">6</span></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<hr /><!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">class="even-grid vgap00"</h4>


<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid vgap00" style="background:#fb3;">
	<div class="small-2 large-4 column"><span class="wrap1 show-all hide-large">2</span><span class="wrap1 hide-all show-large">4</span></div>
	<div class="small-4 large-4 column"><span class="wrap1">4</span></div>
	<div class="small-6 large-4 column"><span class="wrap1 show-all hide-large">6</span><span class="wrap1 hide-all show-large">4</span></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<p><em class="em3">줄간격이 없으므로 2줄 이상 표현될 경우는 적당하지 않다.</em></p>


<!-- contentsBlock -->
<div style="background:#579;" class="clearfix">
<!-- even-grid -->
<div class="even-grid vgap00" style="background:#fb3;">
	<div class="small-6 column"><span class="wrap1">6</span></div>
	<div class="small-6 column"><span class="wrap1">6</span></div>
	<div class="small-6 column"><span class="wrap1">6</span></div>
	<div class="small-6 column"><span class="wrap1">6</span></div>
</div>
<!-- /even-grid -->
</div>
<!-- /contentsBlock -->


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Offsets</h3>

<p>그리드 스타일에 .large-offset-1{margin-left:8.333%;} 형태의 스타일을 정의하지 않았음.
	필요하면 <code class="em2">&lt;div class="large-3 column hide-all show-large"&gt;&lt;/div&gt;</code> 등을 추가하여 만들 수 있다.<br />
	단, 그리드 컬럼 래퍼는 <b class="em0 ls0">class="even-grid float-left"</b> 이어야 한다.
</p>

<h4 class="hb1 h4">large-n column hide-all show-large</h4>

<div class="even-grid float-left">
	<div class="large-1 column"><span class="wrap1">1</span></div>
	<div class="large-11 column"><span class="wrap1">11</span></div>
</div>
<div class="even-grid float-left">
	<div class="large-1 column"><span class="wrap1">1</span></div>
	<div class="large-1 column hide-all show-large"></div>
	<div class="large-10 column"><span class="wrap1">10, offset 1</span></div>
</div>
<div class="even-grid float-left">
	<div class="large-1 column"><span class="wrap1">1</span></div>
	<div class="large-2 column hide-all show-large"></div>
	<div class="large-9 column"><span class="wrap1">9, offset 2</span></div>
</div>
<div class="even-grid float-left">
	<div class="large-1 column"><span class="wrap1">1</span></div>
	<div class="large-3 column hide-all show-large"></div>
	<div class="large-8  column"><span class="wrap1">8, offset 3</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Incomplete Rows</h3>

<p>그리드 스타일에 .end{float:right;} 형태의 스타일을 정의하지 않았음.
	필요하면 <code class="em2">.hide-all, .show-large</code> 등을 이용하여 만든다.<br />
	단, 그리드 컬럼 래퍼는 <b class="em0 ls0">class="even-grid float-left"</b> 이어야 한다.
</p>

<h4 class="hb1 h4">medium-3 column hide-all show-medium</h4>

<div class="even-grid float-left">
	<div class="medium-3 column"><span class="wrap1">3</span></div>
	<div class="medium-3 column"><span class="wrap1">3</span></div>
	<div class="medium-3 column hide-all show-medium"></div>
	<div class="medium-3 column"><span class="wrap1">3, end</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Collapse/Uncollapse Rows</h3>

<p><em class="em1">이거까지 하려면.. 스타일이 복잡해지므로.. 보류!</em></p>
<p>그리드 스타일에 <code class="em">.medium-collapse, .large-uncollapse</code> 등의 스타일을 정의하지 않았음.
	필요하면 스타일을 추가하여 만든다.<br />
</p>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">even-grid medium-collapse large-uncollapse</h4>

<p>
.even-grid 요소에 <em class="em">medium-</em>uncollapse <em class="em">large-</em>collapse 클래스가 있다면,<br />
.column 요소에 대응하는 <em class="em">medium-</em>6 <em class="em">large-</em>6 클래스가 있어야 바르게 동작합니다.<br />
</p>

<style type="text/css">/*<![CDATA[*/
@media all and (min-width:640px){
	.even-grid.medium-collapse{margin:0;}
	.even-grid.medium-collapse>.column{padding:0;}
	.even-grid.float-left.medium-collapse>.column{float:left;margin:0;padding:0;}
}
@media all and (min-width:1000px){
	.even-grid.large-uncollapse{margin:1% -1%;}
	.even-grid.large-uncollapse>.column{margin:0 -.25em 0 0;padding:1%;}
	.even-grid.float-left.large-uncollapse{margin:1% -1%;}
	.even-grid.float-left.large-uncollapse>.column{margin:0;padding:1%;}
}
/*]]>*/</style>

<div class="even-grid medium-collapse large-uncollapse">
	<div class="small-6 medium-6 large-6 column">
		<div class="wrap1">
			<div class="hide-all show-medium hide-large">On a medium screen, I have no gutters!</div>
			<div class="hide-all show-large">On a large screen, I have gutters!</div>
		</div>
	</div>
	<div class="small-6 medium-6 large-6 column">
		<div class="wrap1">
			<div class="hide-all show-medium hide-large">On a medium screen, I have no gutters!</div>
			<div class="hide-all show-large">On a large screen, I have gutters!</div>
		</div>
	</div>
	<div class="small-6 medium-6 large-6 column">
		<div class="wrap1">
			<div class="hide-all show-medium hide-large">On a medium screen, I have no gutters!</div>
			<div class="hide-all show-large">On a large screen, I have gutters!</div>
		</div>
	</div>
	<div class="small-6 medium-6 large-6 column">
		<div class="wrap1">
			<div class="hide-all show-medium hide-large">On a medium screen, I have no gutters!</div>
			<div class="hide-all show-large">On a large screen, I have gutters!</div>
		</div>
	</div>
</div>


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Centered column</h3>

<!-- <p>저브 파운데이션은 .column 이 display:block; 이므로 .column 에 margin-left:auto;margin-right:auto; 스타일을 줘서 중앙 정렬시킨다.
여기서의 .column 은 display:inline-block; 이므로 행에 text-align:center; 속성을 부여한다.</p> -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">even-grid text-align-center-small text-align-left-large</h4>

<div class="even-grid text-align-center-small">
	<div class="small-3 column"><span class="wrap1">3, center-small</span></div>
</div>
<div class="even-grid text-align-center-large">
	<div class="small-6 column"><span class="wrap1">6, center-large</span></div>
</div>
<div class="even-grid text-align-center-small text-align-left-large">
	<div class="small-9 column"><span class="wrap1">9, center-small, left-large</span></div>
</div>
<div class="even-grid text-align-center-small">
	<div class="small-11 column"><span class="wrap1">11, center-small</span></div>
</div>


<hr /><!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3">Source Ordering</h3>


<p><em class="em1">이거까지 하려면.. 스타일이 복잡해지므로.. 보류!</em></p>
<p>그리드 스타일에 <code class="em">.large-push-4, .large-pull-8</code> 등의 스타일을 정의하지 않았음.
	필요하면 스타일을 추가하여 만든다.<br />
</p>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">"large-8 large-push-4 column" "large-4 large-pull-8 column"</h4>

<p>left 값이 이용된다.</p>

<style type="text/css">/*<![CDATA[*/
.even-grid>.small-push-2{left:16.666%;}
.even-grid>.small-push-7{left:58.333%;}
.even-grid>.small-pull-5{left:-41.666%;}
.even-grid>.small-pull-10{left:-83.333%;}
@media all and (min-width:640px){
	.even-grid>.medium-push-5{left:41.666%;}
	.even-grid>.medium-push-6{left:50%;}
	.even-grid>.medium-pull-6{left:-50%;}
	.even-grid>.medium-pull-7{left:-58.333%;}
}
@media all and (min-width:1000px){
	.even-grid>.large-push-3{left:25%;}
	.even-grid>.large-push-4{left:33.333%;}
	.even-grid>.large-pull-8{left:-66.666%;}
	.even-grid>.large-pull-9{left:-75%;}
}
/*]]>*/</style>

<div class="even-grid">
	<div class="small-10 small-push-2 column"><span class="wrap1">10</span></div>
	<div class="small-2 small-pull-10 column"><span class="wrap1">2, last</span></div>
</div>
<div class="even-grid">
	<div class="large-9 large-push-3 column"><span class="wrap1">9</span></div>
	<div class="large-3 large-pull-9 column"><span class="wrap1">3, last</span></div>
</div>
<div class="even-grid">
	<div class="large-8 large-push-4 column"><span class="wrap1">8</span></div>
	<div class="large-4 large-pull-8 column"><span class="wrap1">4, last</span></div>
</div>
<div class="even-grid">
	<div class="small-5 small-push-7 medium-7 medium-push-5 column"><span class="wrap1">7</span></div>
	<div class="small-7 small-pull-5 medium-5 medium-pull-7 column"><span class="wrap1">5, last</span></div>
</div>
<div class="even-grid">
	<div class="medium-6 medium-push-6 column"><span class="wrap1">6</span></div>
	<div class="medium-6 medium-pull-6 column"><span class="wrap1">6, last</span></div>
</div>


</div>
<!-- /본문영역 -->





<br />
<hr class="dotb" /><!-- ◇◆◇◆◇◆◇◆◇◆ -->
<p lang="en"><small class="fwn"><strong>History</strong>
: 20170413~
20200608.
20171105.
20170628.
20170626.
20170623.
20170414.
</small></p>
<hr class="dotb" /><!-- ◇◆◇◆◇◆◇◆◇◆ -->





</div>
<!-- /width1s2 -->
</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php //include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>