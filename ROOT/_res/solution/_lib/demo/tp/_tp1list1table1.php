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
$pageTitle="의약업소안내 목록"; ?>
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





<h1 class="hb1 h1">의약업소안내 목록</h1>


<!-- infomenu1 -->
<div class="infomenu1">

	<!-- search1select2 -->
	<div class="search1select2">
		<form id="f1s1s2" action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select id="f1s1s2select1" title="업종선택" class="select1">
				<option value="">업종</option>
				<option value="1">종합병원</option>
				<option value="2">병원</option>
				<option value="3">일반의원</option>
				<option value="4">치과의원</option>
				<option value="5">한의원</option>
				<option value="6">한약방</option>
				<option value="7">안마시술소</option>
				<option value="8">치과기공소</option>
				<option value="9">약국</option>
				<option value="10">안경원</option>
				<option value="11">의료기기</option>
				<option value="12">안전상비의약품</option>
				<option value="13">의약품도매</option>
				<option value="14">산후조리원</option>
				<option value="15">의료기관세탁물처리업체</option>
			</select>
			<select id="f1s1s2select2" title="검색종류" class="select2">
				<option value="name">업소명</option>
				<option value="addr">소재지</option>
				<option value="holiday">당번일</option>
			</select>
			<input type="text" id="f1s1s2text1" value="" title="검색어" class="text1" />
			<button type="submit" class="button submit search"><i class="ic1"></i><span class="t1">검색</span></button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select2 -->

	<div class="info1">
		총 <b class="em">9,999</b>건의 자료가 있습니다.
		(<b class="em">1</b>/999 페이지)
	</div>

</div>
<!-- /infomenu1 -->

<table class="t3 w100 lhD">
	<caption>
		<strong class="blind">의약업소안내 목록</strong>
		<span class="summary1 blind">: 업소명, 분류, 대표자, 소재지, 전화번호</span>
	</caption>
	<!-- <col style="width:20%;" /><col /><col /><col /><col /><col style="width:14%;" /> -->
	<thead>
	<tr>
	<th scope="col">업소명</th>
	<th scope="col">분류</th>
	<th scope="col">대표자</th>
	<th scope="col" colspan="2">소재지</th>
	<th scope="col">전화번호</th>
	</tr>
	</thead>
	<tbody class="tttal ttvam tt3tac tt3nowrap tt6tac ">
	<tr>
	<th scope="row">GS25진주휴먼빌점</th>
	<td>안전상비의약품</td>
	<td>문선정</td>
	<td>진주시 내동면 순환로 425-63</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>055-759-8208</td>
	</tr>
	<tr>
	<th scope="row">GS25진주휴먼빌점</th>
	<td>의료기기</td>
	<td>문선정</td>
	<td>진주시 내동면 순환로 425-61</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td> </td>
	</tr>
	<tr>
	<th scope="row">GS25진주휴먼빌점</th>
	<td>의료기기</td>
	<td>문선정</td>
	<td>진주시 내동면 순환로425-61</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>010-2025-1236</td>
	</tr>
	<tr>
	<th scope="row">GS25진주흥한점</th>
	<td>의료기기</td>
	<td>김동욱</td>
	<td>진주시 평거로139번길11-5.101호 <span class="dpib">(신안동,신한흥한2차아파트상가)</span></td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>010-7168-1939</td>
	</tr>
	<tr>
	<th scope="row">GS25칠암중앙점</th>
	<td>안전상비의약품</td>
	<td>최용호</td>
	<td>진주시 진주대로 920번길</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>055-757-7393</td>
	</tr>
	<tr>
	<th scope="row">GS25칠암중앙점</th>
	<td>의료기기</td>
	<td>최용호</td>
	<td>진주시 진주대로 920번길7(칠암동)</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>055-757-7393</td>
	</tr>
	<tr>
	<th scope="row">GS25평거LH점</th>
	<td>안전상비의약품</td>
	<td>강정애</td>
	<td>진주시 진양호로 145번길 3</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>055-753-2108</td>
	</tr>
	<tr>
	<th scope="row">GS25평거스카이점</th>
	<td>안전상비의약품</td>
	<td>조재덕</td>
	<td>진주시 평거로5(1층)</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>743-8225</td>
	</tr>
	<tr>
	<th scope="row">GS25평거제일점</th>
	<td>안전상비의약품</td>
	<td>김환곤</td>
	<td>진주시 평거로 26번길 13</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>055-741-6313</td>
	</tr>
	<tr>
	<th scope="row">GS25평거중앙점</th>
	<td>안전상비의약품</td>
	<td>김도경</td>
	<td>진주시 진양호로 241</td>
	<td><a href="?#★" class="link1"><i class="ic1 mapmarker"></i><span class="blind">지도</span></a></td>
	<td>055-747-4806</td>
	</tr>
	</tbody>
</table>


<!-- infomenu1 -->
<div class="infomenu1">

	<!-- pagination -->
	<div class="pagination" title="페이지 수 매기기">
		<span class="control">
			<span class="m first"><a title="처음 페이지"><i class="ic">처음</i></a></span>
			<span class="m prev"><a title="이전 페이지"><i class="ic">이전</i></a></span>
		</span>
		<span class="pages">
			<span class="m on"><a title="현재 1 페이지">1</a></span>
			<span class="m"><a href="?" title="2 페이지">2</a></span>
			<span class="m"><a href="?" title="3 페이지">3</a></span>
			<span class="m"><a href="?" title="4 페이지">4</a></span>
			<span class="m"><a href="?" title="5 페이지">5</a></span>
			<span class="m"><a href="?" title="6 페이지">6</a></span>
			<span class="m"><a href="?" title="7 페이지">7</a></span>
			<span class="m"><a href="?" title="8 페이지">8</a></span>
			<span class="m"><a href="?" title="9 페이지">9</a></span>
			<span class="m"><a href="?" title="10 페이지">10</a></span>
		</span>
		<span class="control">
			<span class="m next"><a href="?" title="다음 페이지"><i class="ic">다음</i></a></span>
			<span class="m last"><a href="?" title="마지막 페이지"><i class="ic">마지막</i></a></span>
		</span>
	</div>
	<!-- /pagination -->

	<p class="tar">
		<a href="?" class="button">엑셀로 다운받기</a>
	</p>

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