<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221122 | @m | 요구반영. 결함개선. 고도화.
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
<title>영상정보수집 (V-Ghost) - 활용 사례 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/web1crawling1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/web1crawling1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m2').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">활용 사례</h3>


<!-- cp2use1 -->
<div class="cp2use1">
	<ul class="lst1">
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 01</small>
				<strong class="t2">마케팅</strong>
			</div>
			<div class="w2">
				<p class="t3">
					기업의 제품 리뷰 관련 영상 댓글 데이터를 통해 마케팅 방향을 설정하고, 고객과의 커뮤니케이션에 활용할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 02</small>
				<strong class="t2">유튜브 채널 최적화</strong>
			</div>
			<div class="w2">
				<p class="t3">
					인기가 많은 영상 콘텐츠의 특징(제목 형태, 태그, 설명 등)을 파악해 본인 채널의 영상을 최적화 하는데 활용할 수 있습니다.
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