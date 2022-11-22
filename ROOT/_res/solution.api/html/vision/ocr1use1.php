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
<title>이미지 텍스트인식 (JS-OCR) - 활용 사례 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/ocr1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/ocr1_inc1.php"; ?>
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
				<strong class="t2">문서/인쇄물 파일 판독</strong>
			</div>
			<div class="w2">
				<p class="t3">
					각종 문서/인쇄물 이미지 안의 내용을 판독하여 텍스트로 추출하고 관리할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 02</small>
				<strong class="t2">명함 관리</strong>
			</div>
			<div class="w2">
				<p class="t3">
					명함을 스캔해 이름, 메일, 전화번호 등의 데이터를 인식하여 명함의 정보들을 관리할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 03</small>
				<strong class="t2">영수증 인식</strong>
			</div>
			<div class="w2">
				<p class="t3">
					영수증의 상품 정보 및 금액 등의 데이터를 인식하여 정산 작어에 활용할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 04</small>
				<strong class="t2">신분증 인식</strong>
			</div>
			<div class="w2">
				<p class="t3">
					신분증을 스캔해 이름, 주민번호, 주소 등의 내용을 판독하여 텍스트로 추출하고 관리할 수 있습니다.
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