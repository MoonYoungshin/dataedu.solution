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
<title>AI 질의응답 (JS-MRC) - 활용 사례 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/mrc1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/mrc1_inc1.php"; ?>
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
				<strong class="t2">검색엔진</strong>
			</div>
			<div class="w2">
				<p class="t3">
					계약서, 논문, 매뉴얼 등의 전문지식 없이 이해하기 어려운 문서에서 원하는 내용을 손쉽게 찾을 수 있는 검색엔진으로 활용할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 02</small>
				<strong class="t2">상담서비스</strong>
			</div>
			<div class="w2">
				<p class="t3">
					고객 상담 매뉴얼 또는 상담 시나리오 이외의 질문이 입력된 경우 AI 질의응답을 활용하여 적절한 답변을 제시할 수 있습니다.
				</p>
			</div>
		</li>
		<li class="li1">
			<div class="w1">
				<small class="t1">CASE 03</small>
				<strong class="t2">트랜잭션 챗봇</strong>
			</div>
			<div class="w2">
				<p class="t3">
					레스토랑, 택배회사, 은행 등 일반적이고 반복적인 질문을 처리하거나 변수가 많지 않은 간단한 질의응답 챗봇으로 활용할 수 있습니다.
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