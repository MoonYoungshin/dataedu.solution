<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221209 | @m | 요구반영. 결함개선. 고도화.
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
<title>API 사용정보 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body class="type2">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- cp1hg1 -->
<div class="cp1hg1">
	<h2 class="h1">API 사용정보</h2>
</div>
<!-- /cp1hg1 -->


<!-- cp1view1 -->
<div class="cp1view1">


<!-- cp1api1use1 -->
<div class="cp1api1use1">
	<div class="di1">
		<div class="dt1">
			<h3 class="hb2 h3">API ID,Key</h3>
		</div>
		<div class="dd1">
			<span class="t1">ID</span>
			<span class="t2">dolearn5ga3eea6d1f0c6</span>
		</div>
		<div class="dd1">
			<span class="t1">KEY</span>
			<span class="t2">08cae58dd38043b4a8fc1caa010f3c84</span>
		</div>
	</div>
</div>
<!-- /cp1api1use1 -->


<!-- cp1use1chart1 -->
<div class="cp1use1chart1">
	<div class="di1">
		<div class="dt1">
			<h3 class="hb2 h3">API 전체 사용량</h3>
		</div>
		<div class="dd1">
			<span class="t1">서비스 기간 : </span>
			<span class="t2">YYYY.MM.DD - YYYY.MM.DD ( 00 일 )</span>
		</div>
	</div>
	<div class="chart">
		차트

		총 사용량
		80%

		Audio API
		Vision API
		Language API
		Education API
		Video API
	</div>
</div>
<!-- /cp1use1chart1 -->


<!-- cp1use1table1 -->
<div class="cp1use1table1">

	<h3 class="hb2 h3">API 서비스별 사용량</h3>

	<table class="t1 w100 ttpdtb1em ttpdlr2pct thcv0 fsxd lhD tttac tt2tal ttvam ttwa-small-only">
		<caption>
			<strong class="h1 blind">API 서비스별 사용량</strong>
			<span class="summary1 blind">: 분류사용, 서비스, 사용한 양 / 제공량, 사용비율</span>
		</caption>
		<thead>
		<tr>
		<th scope="col">분류사용</th>
		<th scope="col">서비스</th>
		<th scope="col">사용한 양 / 제공량</th>
		<th scope="col">사용비율</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>Audio API</td>
		<td>음성합성</td>
		<td>3  /  100</td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Audio API</td>
		<td>음성인식</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Vision API</td>
		<td>이미지 텍스트 인식</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Vision API</td>
		<td>얼굴 인식</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Vision API</td>
		<td>얼굴 모자이크</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td>문장교정</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td>한글발음화</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td>자연어 이해</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td>AI 독해</td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		</tbody>
	</table>

</div>
<!-- /cp1use1table1 -->


<!-- infomenu1 -->
<div class="infomenu1">

	<!-- pagination -->
	<div class="pagination" title="페이지 수 매기기">
		<span class="control">
			<!-- <span class="m first"><a title="처음 페이지"><i class="ic">처음</i></a></span> -->
			<span class="m prev"><a title="이전 페이지"><i class="ic">이전</i></a></span>
		</span>
		<span class="pages">
			<span class="m on"><a title="현재 1 페이지">1</a></span>
			<span class="m"><a href="?" title="2 페이지">2</a></span>
			<!-- <span class="m"><a href="?" title="3 페이지">3</a></span>
			<span class="m"><a href="?" title="4 페이지">4</a></span>
			<span class="m"><a href="?" title="5 페이지">5</a></span>
			<span class="m"><a href="?" title="6 페이지">6</a></span>
			<span class="m"><a href="?" title="7 페이지">7</a></span>
			<span class="m"><a href="?" title="8 페이지">8</a></span>
			<span class="m"><a href="?" title="9 페이지">9</a></span>
			<span class="m"><a href="?" title="10 페이지">10</a></span> -->
		</span>
		<span class="control">
			<span class="m next"><a href="?" title="다음 페이지"><i class="ic">다음</i></a></span>
			<!-- <span class="m last"><a href="?" title="마지막 페이지"><i class="ic">마지막</i></a></span> -->
		</span>
	</div>
	<!-- /pagination -->

</div>
<!-- /infomenu1 -->


</div>
<!-- /cp1view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>