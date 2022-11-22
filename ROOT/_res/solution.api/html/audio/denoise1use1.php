<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221121 | @m | 요구반영. 결함개선. 고도화.
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
<title>음성정제 (JS-Denoise) - 활용사례 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/denoise1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/denoise1_inc1.php"; ?>
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
				<strong class="t2">화상 서비스</strong>
			</div>
			<div class="w2">
				<p class="t3">
					시끄러운 장소에서도 화상 서비스(면접/서비스)를 깨끗한 음질로 소통할 수 있도록 합니다.  
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 02</small>
				<strong class="t2">음성 파일</strong>
			</div>
			<div class="w2">
				<p class="t3">
					강연 또는 통화 등의 음성파일에서 필요한 음성만을 깨끗하게 관리할 수 있습니다.
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