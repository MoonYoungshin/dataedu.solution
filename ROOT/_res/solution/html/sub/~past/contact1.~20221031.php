<!DOCTYPE html>
<?php
/**
 * SubPage Template
 * 20221026 | @m | 최초작성
 * 20221028 | @m | 요구반영. 결함개선. 고도화.
 */

include "../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<meta charset="utf-8" />
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


<!-- cp1write1 -->
<div class="cp1write1">
<!-- cp1contact1 -->
<div class="cp1contact1">
	<div class="wrap1">
		<div class="w1">

			<div class="item">
				<span class="label">회사명 / 이름 / 직함 <em class="required" title="필수항목">*</em></span>
				<input type="text" value="" placeholder="(주)쇼핑닷컴 / 홍길동 / 팀장" title="회사명 / 이름 / 직함" class="w100" />
			</div>

			<div class="item">
				<span class="label">전화번호 <em class="required" title="필수항목">*</em></span>
				<input type="text" value="" placeholder="010-1234-5678" title="전화번호" class="w100" />
			</div>

			<div class="item">
				<span class="label">이메일 주소 <em class="required" title="필수항목">*</em></span>
				<input type="text" value="" placeholder="account@mailserver.com" title="이메일 주소" class="w100" />
			</div>

		</div>
		<div class="w2">

			<div class="item">
				<span class="label">어떻게 데이터에듀.AI를 알게 되셨나요? <em class="required" title="필수항목">*</em></span>
				<select title="유입경로">
					<option value="">선택해 주세요</option>
					<option value="1">★옵션명</option>
					<option value="2">★옵션명</option>
					<option value="3">★옵션명</option>
				</select>
			</div>

			<div class="item">
				<span class="label">문의내용 <em class="required" title="필수항목">*</em></span>
				<textarea rows="5" cols="80" placeholder="문의내용" title="문의내용" class="w100"></textarea>
			</div>

			<p>
				아래 링크를 눌러 내용을 주의 깊게 읽으세요.<br />
				체크박스를 선택하면, 다음 항목을 모두 읽고 동의한 것으로 간주합니다.<br />
			</p>

			<!-- cp1v2fcontrol1 -->
			<div class="cp1v2fcontrol1 type2">
				<div>
					<label class="item">
						<input type="checkbox" name="★s0ck1e" value="">
						<span class="t1"><em class="em1">(필수)</em> 소개서, 뉴스레터 등 그루비 정보 수신에 동의합니다.</span>
					</label>
				</div>
				<div>
					<label class="item">
						<input type="checkbox" name="★s0ck1e" value="">
						<span class="t1"><em class="em1">(필수) 개인정보 수집 및 이용</em>에 동의합니다.</span>
					</label>
				</div>
			</div>
			<!-- /cp1v2fcontrol1 -->

			<button type="submit" class="button submit">신청하기</button>

		</div>
	</div>
</div>
<!-- /cp1contact1 -->
</div>
<!-- /cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>