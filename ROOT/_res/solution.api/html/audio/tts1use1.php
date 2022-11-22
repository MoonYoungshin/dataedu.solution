<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221108 | @m | 
 * 20221121 | @m | 
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
<title>음성합성 (JS-TTS) - 활용사례 | 데이터에듀 API</title>

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
	$('.cp2tabs1 .m2').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">활용사례</h3>


<!-- cp2use1 -->
<div class="cp2use1">
	<ul class="lst1">
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 01</small>
				<strong class="t2">오디오북</strong>
			</div>
			<div class="w2">
				<p class="t3">
					시각장애인 또는 난독증을 가진 사람이 책의 내용을 이해할 수 있도록 음성서비스를 제공할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 02</small>
				<strong class="t2">고객센터</strong>
			</div>
			<div class="w2">
				<p class="t3">
					기존의 고객관리 데이터를 기반으로 AI 상담사가 대화 및 응대를 할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 03</small>
				<strong class="t2">내비게이션</strong>
			</div>
			<div class="w2">
				<p class="t3">
					교통정보 및 길안내 등의 다양한 텍스트 콘텐츠를 활용하여 음성안내 서비스를제공할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 04</small>
				<strong class="t2">안내방송</strong>
			</div>
			<div class="w2">
				<p class="t3">
					아파트 및 공공기관 등에서 안내가 필요할 경우, 원하는 문장을 실제처럼 자연스러운 음성서비스로 제공할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 05</small>
				<strong class="t2">교육용 음성 파일</strong>
			</div>
			<div class="w2">
				<p class="t3">
					아직 글을 읽지 못하는 아이들을 대상으로 한 교육용 콘텐츠를 음성서비스로 제공할 수 있습니다.
				</p>
			</div>
		</li>
	</ul>
</div>
<!-- /cp2use1 -->


</div>
<!-- /cp2view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>