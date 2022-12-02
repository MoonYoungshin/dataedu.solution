<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221109 | @m | 요구반영. 결함개선. 고도화.
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
<title>AI 질의응답 (JS-MRC) - 엔진체험 | 데이터에듀 API</title>

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
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2result1text2 -->
<div class="cp2result1text2">
	<div class="w1">
		<strong class="tt1">분석결과</strong>
		<div class="cont">
			데이터에듀가 ‘2022 한국소비자만족지수 1위’ 교육(빅데이터AI교육) 부문을 3년 연속 수상했다. 한국소비자만족지수 1위는 소비자가 각 분야별 상품과 서비스의 만족도를 직접 평가하고, 추천하여 미래지향적인 기업을 발굴·시상하고자 제정됐다. 
			데이터에듀는 부산에 위치한 빅데이터, AI솔루션 전문 업체로, 2014년 빅데이터 자격증 강의 전문 사이트를 시작으로, 온·오프라인 강의와 함께 
			<em class="em">데이터분석 준전문가(ADsP), 데이터분석 전문가(ADP), 빅데이터 분석기사 등 자격증 교재</em>를 출판하는 빅데이터교육 전문 회사로 성장·진화하고 있다.
		</div>
	</div>
</div>
<!-- /cp2result1text2 -->


<!-- cp2result1text2 -->
<div class="cp2result1text2 type2">
	<div class="w1">
		<strong class="tt1">질문</strong>
		<div class="cont">
			데이터에듀는 어떤 자격증 교재를 출판하나요?
		</div>
	</div>
</div>
<!-- /cp2result1text2 -->


<!-- cp2result1text2 -->
<div class="cp2result1text2 type2">
	<div class="w1">
		<strong class="tt1">결과</strong>
		<div class="cont">
			<strong class="b">데이터분석 준전문가(ADsP), 데이터분석 전문가(ADP), 빅데이터 분석기사 등 자격증 교재</strong>
		</div>
	</div>
</div>
<!-- /cp2result1text2 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<a href="mrc1.php" class="button type1"><span class="t1">처음으로</span></a>
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