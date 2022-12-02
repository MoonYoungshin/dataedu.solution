<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221129 | @m | 요구반영. 결함개선. 고도화.
 * 20221201 | @m | 
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
<title>로고 인식 (V-Logo) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/logo1detection1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/logo1detection1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set2 -->
<div class="cp2set2">
	<div class="cont">
		<div class="item on">
			<!-- cp2sample1img1 -->
			<div class="cp2sample1img1">
				<div class="w1">
					<div class="w1w1">
						<img src="//dolearn.ai/_res/@m/_img.ex/w1280a1/w1280a1101.jpg" alt="★1대체텍스트필수" class="p1">
					</div>
				</div>
			</div>
			<!-- /cp2sample1img1 -->
		</div>
		<div class="item">
			<!-- cp2result1text1 -->
			<div class="cp2result1text1">
				<div class="w1">
					<div class="w1w1">
						<div class="tg1">
							추출된 결과 값이 표출되는 영역
						</div>
						<div class="fg1">
							<a href="?#★" class="b1 button type1"><span class="t1">다운로드</span><i class="ic1 download"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!-- /cp2result1text1 -->
		</div>
	</div>
</div>
<!-- /cp2set2 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<a href="logo1detection1.php" class="button type1"><span class="t1">처음으로</span></a>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>