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
$pageTitle="비밀번호 확인"; ?>
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





<h1 class="hb1 h1">비밀번호 확인</h1>


<!-- password1 -->
<div class="password1">
	<!-- form -->
	<form id="f1" action="?#★">
	<fieldset>
		<legend class="blind">비밀번호</legend>
		<strong class="h1"><em class="em5">비밀번호</em> 확인</strong>
		<p class="t1">
			작성하실 때 입력하신 <span class="nowrap">비밀번호를 입력해주세요.</span>
		</p>
		<div class="wrap1">
			<input type="password" id="f1e0" value="" title="비밀번호" />
			<button type="submit" class="button submit">확인하기</button>
		</div>
		<p class="btns">
			<a href="?" onclick="history.go(-1); return false;" class="button default goback">이전페이지</a>
		</p>
	</fieldset>
	</form>
	<!-- /form -->
</div>
<!-- /password1 -->





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