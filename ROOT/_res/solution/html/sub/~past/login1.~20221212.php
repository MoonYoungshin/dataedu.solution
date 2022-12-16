<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221104 | @m | 요구반영. 결함개선. 고도화..
 */

include "../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="데이터에듀">
<meta name="keywords" content="데이터에듀 솔루션 API">
<meta name="description" content="데이터에듀 솔루션 API">
<title>로그인 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- cp1hg1 -->
<div class="cp1hg1">
	<h2 class="logo">LOGO</h2>
</div>
<!-- /cp1hg1 -->


<!-- cp1login1 cp1write1 -->
<div class="cp1login1 cp1write1">

	<!-- form -->
	<form action="?#★">
		<fieldset>
			<legend class="blind"><strong class="h1">로그인</strong></legend>
			<input type="text" value="" placeholder="이메일" title="이메일" class="w100">
			<input type="password" value="" placeholder="비밀번호" title="비밀번호" class="w100">
			<button type="submit" class="button submit block">로그인</button>
	</fieldset>
	</form>
	<!-- /form -->

	<div class="mns1">
		<a href="?#★" class="a1">회원가입하기</a>
		<a href="?#★" class="a1">비밀번호 찾기</a>
	</div>

	<!-- cp1sns1  -->
	<div class="cp1sns1">
		<span class="tt1">SNS계정으로 간편 로그인/회원가입</span>
		<a href="?#★" target="_blank" rel="noopener" title="새 창" class="b2 google"><span class="b2t1">구글 로그인창 이동</span></a>
		<a href="?#★" target="_blank" rel="noopener" title="새 창" class="b2 kakaotalk"><span class="b2t1">카톡 로그인창 이동</span></a>
		<!-- <a href="?#★" target="_blank" rel="noopener" title="새 창" class="b2 naver"><span class="b2t1">네이버 로그인창 이동</span></a> -->
	</div>
	<!-- /cp1sns1 -->

</div>
<!-- /cp1login1 cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>