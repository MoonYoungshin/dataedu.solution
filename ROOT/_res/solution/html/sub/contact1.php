<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221028 | @m | 요구반영. 결함개선. 고도화.
 * 20221104 | @m | 
 * 20221112 | @m | 
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
<title>문의하기 | 데이터에듀 API</title>

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
	<h2 class="h1">문의하기</h2>
	<p class="t1">
		API 제작 의뢰 및 기타 <span class="dpib">문의 양식입니다.</span>
	</p>
</div>
<!-- /cp1hg1 -->


<!-- cp1contact1 cp1write1 -->
<div class="cp1contact1 cp1write1">
	<div class="w1">
		<div class="w1w1">

			<div class="item">
				<span class="label">회사명 / 이름 / 직함 <em class="required" title="필수항목">*</em></span>
				<input type="text" value="" placeholder="(주)쇼핑닷컴 / 홍길동 / 팀장" title="회사명 / 이름 / 직함" class="w100">
			</div>

			<div class="item">
				<span class="label">전화번호 <em class="required" title="필수항목">*</em></span>
				<input type="text" value="" placeholder="010-1234-5678" title="전화번호" class="w100">
			</div>

			<div class="item">
				<span class="label">이메일 주소 <em class="required" title="필수항목">*</em></span>
				<input type="text" value="" placeholder="account@mailserver.com" title="이메일 주소" class="w100">
			</div>

		</div>
		<div class="w1w2">

			<div class="item">
				<span class="label">어떻게 데이터에듀.AI를 알게 되셨나요? <em class="required" title="필수항목">*</em></span>
				<select title="유입경로" class="placeholder w100">
					<option value="">선택해 주세요</option>
					<option value="1">블로그</option>
					<option value="2">지인소개 & 추천</option>
					<option value="3">기타</option>
				</select>
			</div>

			<div class="item">
				<span class="label">문의내용 <em class="required" title="필수항목">*</em></span>
				<textarea rows="5" cols="80" placeholder="문의내용" title="문의내용" class="textarea1 w100"></textarea>
			</div>

		</div>
	</div>
	<div class="w2">

		<div class="btns">
			<button type="submit" class="button submit type1">문의하기</button>
		</div>

	</div>
</div>
<!-- /cp1contact1 cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>