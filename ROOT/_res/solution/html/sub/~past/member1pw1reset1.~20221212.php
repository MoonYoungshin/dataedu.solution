<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221104 | @m | 요구반영. 결함개선. 고도화.
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
<title>비밀번호 재설정 | 데이터에듀 API</title>

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
	<h3 class="h1">비밀번호 재설정</h3>
</div>
<!-- /cp1hg1 -->


<!-- cp1pw1reset1 cp1write1 -->
<div class="cp1pw1reset1 cp1write1">

	<!-- form -->
	<form action="?#★">
		<fieldset>
			<legend class="blind"><strong class="h1">비밀번호 재설정</strong></legend>
			<div class="item">
				<span class="label">비밀번호</span>
				<input type="password" value="" placeholder="비밀번호" title="비밀번호" class="w100">
			</div>
			<div class="item">
				<span class="label">비밀번호 확인</span>
				<input type="password" value="" placeholder="비밀번호 확인" title="비밀번호 확인" class="w100 ic1check1">
			</div>
			<button type="submit" class="button submit block">변경 완료하기</button>
	</fieldset>
	</form>
	<!-- /form -->

</div>
<!-- /cp1pw1reset1 cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>