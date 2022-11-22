<!DOCTYPE html>
<?php
/**
 * 20220223 | @m | connect.php 추가
 */

include "../../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="게시판 상세뷰2 응용"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>
</head>
<body class="<?=$bodyClass?>">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<h1 class="hb1 h1">게시판 상세뷰2 응용</h1>


<!-- view1pic1info1 -->
<div class="view1pic1info1">

<!-- texts -->
<div class="texts">
	<h1 class="h1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</h1>
	<!-- info1 -->
	<div class="info1">
		<table class="t3 ttvam">
			<caption>
				<strong class="h1 blind">상세 내용</strong>
				<span class="summary1 blind">: 날짜, 시간, 장소, 입장료, 문의</span>
			</caption>
			<col style="width:7em;" /><col />
			<tbody>
			<tr>
			<th scope="row">날짜</th>
			<td>2016.01.13 ~ 2016.01.22</td>
			</tr>
			<tr>
			<th scope="row">시간</th>
			<td>오후 7시 30분 (19:30~21:00)</td>
			</tr>
			<tr>
			<th scope="row">장소</th>
			<td>대공연장</td>
			</tr>
			<tr>
			<th scope="row">입장료</th>
			<td>일반(정상가): 10,000원 (예술가족 30% 할인) / 학생·청소년: 5,000원</td>
			</tr>
			<tr>
			<th scope="row">문의</th>
			<td>000-0000-0000</td>
			</tr>
			</tbody>
		</table>
	</div>
	<!-- /info1 -->
</div>
<!-- /texts -->

<!-- pic1gallery1 -->
<div class="pic1gallery1">
	<div class="figure pt1">
		<p class="p1"><img src="http://movie.phinf.naver.net/20151229_126/14513737252567fehq_JPEG/movie_image.jpg" alt="★대체텍스트1" /></p>
	</div>
</div>
<!-- /pic1gallery1 -->

</div>
<!-- /view1pic1info1 -->


<!-- infomenu1 -->
<div class="infomenu1">
	<!-- <div class="left">
		<a href="?" class="button prev"><i class="ic1"></i> <span class="t1">이전</span></a>
		<a href="?" class="button next"><i class="ic1"></i> <span class="t1">다음</span></a>
	</div> -->
	<div class="center">
		<a href="?" class="button secondary large">목록</a>
	</div>
</div>
<!-- /infomenu1 -->





</div>
<!-- /width1s2 -->
</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>