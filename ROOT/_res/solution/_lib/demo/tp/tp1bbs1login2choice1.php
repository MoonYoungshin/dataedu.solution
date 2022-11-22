<!DOCTYPE html>
<?php
/**
 * 20220223 | @m | connect.php 추가
 */

include "../../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="본인인증선택"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>
</head>
<body class="<?=$bodyClass?>">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<h1 class="hb1 h1">본인인증선택</h1>


<!-- login2choice1 -->
<div class="login2choice1">


	<!-- panel1 -->
	<div class="panel1">
		공공 아이핀(I-PIN)인증 또는 휴대폰인증, 안심체크V2 중 하나를 선택하여 본인 확인을 하실 수 있습니다.<br />
		휴대폰인증, 안심체크V2를 통하여 본인 확인을 하시는 경우 입력하신 정보와 일치하지 않거나 자료가 없음이라는 메시지가 나오면 콜센터에서 실명확인 후 등록신청을 해주시기 바랍니다.<br />
		<p>
			<a href="https://www.namecheck.co.kr/front/personal/register_howtoonline.jsp?menu_num=1&amp;page_num=0&amp;page_num_1=1" target="_blank" rel="noopener" title="새 창" class="button secondary">
				콜센터 바로가기
			</a>
		</p>
		정상적인 자료 입력 후 에러메시지 출력없이, 본인인증 수단선택 화면이 다시 나온 경우<br />
		<ol class="bo">
		<li>도구 &gt; 인터넷옵션 &gt; 고급 ‘기본값복원’</li>
		<li>도구 &gt; 인터넷옵션 &gt; 보안 > 사용자 지정 수준 ‘낮음’으로 조정</li>
		</ol>
	</div>
	<!-- /panel1 -->


	<!-- preface1 -->
	<div class="preface1">
		<p class="t1"><strong>본 페이지는 실명으로 운영되는 페이지입니다.</strong></p>
		<p class="t2">휴대폰인증 또는 공공 아이핀인증(I-PIN)을 통해 본인 확인이 필요합니다.</p>
	</div>
	<!-- /preface1 -->


	<!-- box1.c1 -->
	<div class="box1 c1">
		<strong class="hb1 h2 mgt0">휴대폰인증</strong>
		<div class="text1">
			<p>휴대전화인증으로 본인 확인을 하실 수 있습니다.</p>
		</div>
		<div class="btns">
			<a href="?#★" target="_blank" rel="noopener" title="새 창" class="button primary">휴대전화 인증하기</a>
		</div>
	</div>
	<!-- /box1.c1 -->

	<!-- box1.c2 -->
	<div class="box1 c2">
	<strong class="hb1 h2 mgt0">공공 아이핀인증 (I-PIN)</strong>
	<div class="text1">
		<p>공공 아이핀(I-PIN)은 인터넷상의 개인식별번호를 의미하며, 대면확인이 어려운 인터넷에서 주민등록번호를 사용하지 않고도 본인임을 확인할 수 있는 수단입니다. </p>
		<p>- 문의 : <a href="tel:02-818-3050"><em>02-818-3050</em></a>  / <a href="tel:02-3279-3422"><em>02-3279-3422</em></a></p>
	</div>
		<div class="btns">
			<a href="?#★" target="_blank" rel="noopener" title="새 창" class="button primary">공공 아이핀(I-PIN)인증</a>
			&nbsp;
			<a href="http://www.g-pin.go.kr/center/pic/sub_01.gpin" target="_blank" rel="noopener" title="새 창" class="button secondary ic1t1"><i class="ic1 help"></i> <span class="t1">공공아이핀이란?</span></a>
		</div>
	</div>
	<!-- /box1.c2 -->


	<!-- infomenu1 -->
	<div class="infomenu1">
		<p class="center">
			<a href="?" onclick="history.go(-1); return false;" class="button default">이전 페이지로 이동</a>
		</p>
	</div>
	<!-- /infomenu1 -->


</div>
<!-- /login2choice1 -->





</div>
<!-- /width1s2 -->
</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>