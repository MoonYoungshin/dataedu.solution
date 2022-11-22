<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221108 | @m | 
 * 20221110 | @m | 
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
<title>음성인식 (JS-STT) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/stt1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/stt1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set1 -->
<div class="cp2set1">
	<div class="tg1">
		<p class="t1">
			녹음 버튼을 클릭하여 텍스트로 변환하고 싶은 문장을 말하세요.<br>
			(또는 음성파일을 업로드 해주세요)<br>
		</p>
	</div>
	<div class="cont">
		<label class="item">
			<input type="radio" name="★1radio1">
			<span class="t1">한국어</span>
		</label>
		<label class="item">
			<input type="radio" name="★1radio1">
			<span class="t1">영어</span>
		</label>
	</div>
</div>
<!-- /cp2set1 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<button class="button type1"><span class="t1">업로드</span><i class="ic1 upload"></i></button>
</div>
<!-- /cp2fg1 -->




<!-- cp1text1 -->
<div class="cp1text1">
* 지원가능한 파일 확장자 : wav<br>
* 500KB 이하의 음성 파일을 이용해주세요.<br>
</div>
<!-- /cp1text1 -->


</div>
<!-- /cp2view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>