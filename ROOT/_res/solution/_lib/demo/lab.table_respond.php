<!DOCTYPE html>
<?php
/**
 * ~20211007 | @m | 가져오기
 * 20211007 | @m | 
 * 20220223 | @m | connect.php 추가
 */

include "../../share/inc/connect.php"; // 접속경로
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="Table Responsive Sample"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>


<style>/*<![CDATA[*/
	/* ◇◆ _Demo Page_ ◇◆◇◆◇ */
	h2.demo{display:block;
		margin:2em 0;padding:.75em .875em;
		border-radius:2px;
		border-left:.5em solid #357;
		background:#579;
		color:#fff;
		font-weight:600;
		font-size:1em;
		letter-spacing:0;
		box-shadow: inset 0 1px 0 0 rgba(0,0,0, .1),
			0 2px 0 0 rgba(0,0,0, .05);
	}
/*]]>*/</style>


</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<h2 class="hb1 h2">Table Responsive Sample (표 반응형 샘플)</h2>


<h3 class="hb1 h3">표 (()) 목록 :: 표 (()) 정의목록</h3>
<p class="dpib">
	<em class="em">))) 스타일 버림 ( .small-is-block 는 보존 ). 필요하면 재개발</em>
</p>


<table class="t3 w100 ttpdtb1em ttpdlr2pct thcv0 fsxd lhD ttvam ttwa-small-only">
	<caption>
		<strong class="h1 blind">★표제목필수</strong>
	</caption>
	<thead>
	<tr>
	<th scope="col">제목</th>
	<th scope="col">마크업</th>
	<th scope="col">샘플 / 방법</th>
	<th scope="col">비고</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<th scope="row"><b class="em7">정의목록</b> (()) 표 <em class="em">작성</em> 형태로</th>
	<td>.dl2table1 dl</td>
	<td>
		))) <a href="<?=$commonPath?>/__root_/_lib/_tp/tp4/tp4info1release1view1.jsp" class="a1">_사전정보공표_상세</a><br />
		.dt1 )) float:left; width:20%;<br />
		.dd1 )) float:left; width:30%;<br />
	</td>
	<td>base.css</td>
	</tr>
		<tr>
	<th scope="row"><b class="em4">표</b> (()) 블록 <em class="em">작성</em> 형태로</th>
	<td>table.small-is-block</td>
	<td>
		))) <a href="../tp1/tp1goodstore1write1.jsp">_착한가게 신청 프로그램</a><br />
		tr )) display:block; overflow:hidden;<br />
		th )) clear:both; float:left;<br />
		td )) float:left;<br />
	</td>
	<td>base.css</td>
	</tr>
	<tr>
	<th scope="row"><b class="em4">표</b> (()) 표 <em class="em">목록</em> 컬럼 일부만 보여주기</th>
	<td>table.tt1hide-small-only</td>
	<td>
		))) <a href="../tp/tp1bbs1list2table1.jsp" class="a1">_BBS1 리스트2표1</a>	<br />
		class="tt1hide-small-only tt3hide-small-only"<br />
		th, td )) class="hide-small-only"<br />
		th, td )) class="hide-small display-table-cell-medium"<br />
	</td>
	<td>base.css</td>
	</tr>
	<tr>
	<th scope="row"><b class="em4">표</b> (()) 블록, 인라인블록 <em class="em">목록</em> 형태로<br /> (<em class="em">thead 비표시</em>)</th>
	<td>table.table2block1</td>
	<td>
		))) <a href="<?=$commonPath?>/__root_/_lib/_tp/tp16/tp16list1ebook1.jsp">리스트_E-BOOK</a><br />
		thead )) display:none;
		tr )) display:block;<br />
		th )) display:block;<br />
		td )) display:block;<br />
	</td>
	<td>base.css</td>
	</tr>
	<tr>
	<th scope="row"><b class="em4">표</b> (()) 블록 <em class="em">목록</em> 형태로<br /> (컬럼 정렬)</th>
	<td>.table-to-list1 table</td>
	<td>
		))) <a href="<?=$commonPath?>/__root_/_lib/_tp/tp3/tp3investment_district1list1.jsp" class="a1">_추천투자지구</a><br />
		tr )) display:block; position:relative;<br />
		th )) display:block; position:absolute;<br />
		td )) display:block; float:left;<br />
	</td>
	<td>lib2.css</td>
	</tr>
	<tr>
	<th scope="row"><b class="em4">표</b> (()) 블록, 인라인블록 <em class="em">목록</em> 형태로<br /> (제목 블록 나머지 인라인)</th>
	<td>.list2table2 table</td>
	<td>
		))) <a href="<?=$commonPath?>/__root_/_lib/_tp/tp16/tp16bbs1list2table2.jsp" class="a1">질문과답변(민원게시판)</a><br />
		tr )) display:block;<br />
		th )) display:inline-block;<br />
		td )) display:inline-block;<br />
	</td>
	<td>lib2.css</td>
	</tr>
	</tbody>
</table>


<h3 class="hb1 h3">표 (()) 가로스크롤</h3>


<!-- scroll-x-lt-large -->
<div class="scroll-x-lt-large">
<div style="min-width:710px;">

	<a tabindex="0" class="blind onshow hide-large bg-info fsd">
		키보드 화살표 <!-- 상(↑)·하(↓)· -->좌(←)·우(→) 키로 스크롤 가능
	</a>

	<table class="t3 w100 tttac ttvam lhD">
		<caption>
			<strong class="h1">★표제목</strong>
			<span class="summary1 blind">: ★표요약,구조,탐색방법</span>
		</caption>
		<thead>
		<tr>
		<th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th>
		<th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th>
		<th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목</th><th scope="col">열제목끝</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<th scope="row">행제목</th><td>셀내용</td><td>셀내용</td><td>셀내용</td><td>셀내용</td>
		<th scope="row">행제목</th><td>셀내용</td><td>셀내용</td><td>셀내용</td><td>셀내용</td>
		<th scope="row">행제목</th><td>셀내용</td><td>셀내용</td><td>셀내용</td><td>셀내용끝</td>
		</tr>
		</tbody>
	</table>

</div>
</div>
<!-- /scroll-x-lt-large -->





</div>
<!-- /width1s2 -->
</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php //include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>