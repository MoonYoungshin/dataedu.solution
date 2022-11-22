<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221108 | @m | 
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
<title>음성합성 (JS-TTS) - 매뉴얼 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/tts1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/tts1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m3').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">매뉴얼</h3>


<!-- cp2manual1 -->
<div class="cp2manual1">

	<h4 class="tt1">API 공통 가이드</h4>
	<div class="tg1">
		<h5 class="tt2">개발 환경 세팅</h5>
		<div class="tg2">
			<ol class="lst1 bo">
				<li>REST API는 HTTP 요청을 보낼 수 있는 환경이라면 어디에서는 이용할 수 있습니다.</li>
				<li>다양한 환경의 웹 서버에서 활용 가능합니다.</li>
			</ol>
		</div>
		<h5 class="tt2">키 발급</h5>
		<div class="tg2">
			<ol class="lst1 bo">
				<li>Dataedu에서 제공되는 API 서비스를 사용하기 위해서는 키를 선지급 받아야합니다.</li>
				<li>데이터AI 플랫폼에서 Business Plan 이상 구독 신청을 하셔야합니다.</li>
				<li>[계정메뉴]에서 본인의 API ID 및 Key를 확인해주세요.</li>
				<li>발급받은 API ID 및 Key를 기억하며 아래 메뉴얼에 맞게 사용합니다.</li>
			</ol>
			<p class="t1">
				※ Dataedu API를 위한 ID와 키는 외부 유출 및 공유를 금합니다.
			</p>
		</div>
	</div>
	<h4 class="tt1">TTS (Text-To-Speech)</h4>
	<p class="t1">
		데이터에듀의 TTS API는 텍스트 문장 또는 파일을 음성으로 변환시켜주는 API 입니다.<br>
		20분 학습만으로도 다양한 모델로 자연스럽게 음성을 합성해주는 데이터에듀만의 API를 경험해보세요.<br>
	</p>
	<p class="t1">
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</p>
	<p class="t1">
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</p>
</div>
<!-- /cp2manual1 -->


</div>
<!-- /cp2use1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>