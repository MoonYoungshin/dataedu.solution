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
$pageTitle="민원안내 목록"; ?>
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





<h1 class="hb1 h1">민원안내 목록</h1>


<div id="cnb2" class="cnb2 mj-menu-even-width mj-menu2dropdown">
	<ul>
	<li class="m1"><a href="#?"><span class="t1">보건/위생</span><i class="ic1"></i></a></li>
	<li class="m2"><a href="#?"><span class="t1">교통/관광</span><i class="ic1"></i></a></li>
	<li class="m3"><a href="#?"><span class="t1">도로/건설</span><i class="ic1"></i></a></li>
	<li class="m4"><a href="#?"><span class="t1">지적/부동산</span><i class="ic1"></i></a></li>
	<li class="m5"><a href="#?"><span class="t1">지방세/세무</span><i class="ic1"></i></a></li>
	<li class="m6"><a href="#?"><span class="t1">산업/경제</span><i class="ic1"></i></a></li>
	<li class="m7"><a href="#?"><span class="t1">정보화/민방위</span><i class="ic1"></i></a></li>
	<li class="m8"><a href="#?"><span class="t1">도시/건축</span><i class="ic1"></i></a></li>
	<li class="m9"><a href="#?"><span class="t1">여성/청소년/아동</span><i class="ic1"></i></a></li>
	<li class="m10"><a href="#?"><span class="t1">사회보장/장애인/노인</span><i class="ic1"></i></a></li>
	<li class="m11"><a href="#?"><span class="t1">보건/의료</span><i class="ic1"></i></a></li>
	<li class="m12"><a href="#?"><span class="t1">문화/체육</span><i class="ic1"></i></a></li>
	<li class="m13"><a href="#?"><span class="t1">농축산/산림</span><i class="ic1"></i></a></li>
	<li class="m14"><a href="#?"><span class="t1">해양/위생</span><i class="ic1"></i></a></li>
	<li class="m15"><a href="#?"><span class="t1">읍면/민원</span><i class="ic1"></i></a></li>
	</ul>
</div>
<script>/*<![CDATA[*/
	makeActive('#cnb2', '.m'+3); // 클릭활성
	makeEvenWidthMenus(); // 자동균등폭
	makeMenu2Dropdown(); // Even Width Menus ))) Dropdown Menu
/*]]>*/</script>


<!-- infomenu1 -->
<div class="infomenu1">
	<!-- search1select2 -->
	<div class="search1select2">
		<form id="f1s1s2" action="?">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select id="f1s1s2select1" title="부서선택" class="select1">
				<option value="">부서선택</option>
			</select>
			<select id="f1s1s2select2" title="선택옵션2" class="select2">
				<option value="">민원명</option>
				<option value="">민원내용</option>
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
		<strong class="blind">민원사무편람 게시물 목록</strong>
		<span class="summary1 blind">: 번호, 민원명, 관련부서, 서식</span>
	</caption>
	<thead>
	<tr>
	<th scope="col">번호</th>
	<th scope="col">민원명</th>
	<th scope="col">관련부서</th>
	<th scope="col">서식</th>
	</tr>
	</thead>
	<tbody class="thtal tdtac ttvam">
	<tr>
	<td>10000</td>
	<th scope="row"><a href="?#★">공중업 영업신고(숙박,이용,미용,목욕,세탁)</a></th>
	<td>보건소</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9999</td>
	<th scope="row"><a href="?#★">개발행위허가</a></th>
	<td>생태도시과</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9998</td>
	<th scope="row"><a href="?#★">개발행위준공검사</a></th>
	<td>생태도시과</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9997</td>
	<th scope="row"><a href="?#★">대기배출시설 설치허가·신고</a></th>
	<td>환경수도과</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9996</td>
	<th scope="row"><a href="?#★">공중 영업자 지위승계신고(숙박,이용,미용,목욕,세탁)</a></th>
	<td>보건소</td>
	<td>
		<a href="filename1.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a>
		<a href="filename2.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a>
		<a href="filename3.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a>
	</td>
	</tr>
	<tr>
	<td>9995</td>
	<th scope="row"><a href="?#★">대기배출시설 변경허가(변경신고) 신청서</a></th>
	<td>환경수도과</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9994</td>
	<th scope="row"><a href="?#★">공중 영업신고사항변경신고(숙박,이용,미용,목욕,세탁)</a></th>
	<td>보건소</td>
	<td>
		<a href="filename1.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a>
		<a href="filename2.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a>
	</td>
	</tr>
	<tr>
	<td>9993</td>
	<th scope="row"><a href="?#★">공중 영업 폐업신고(숙박,이용,미용,목욕,세탁)</a></th>
	<td>보건소</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9992</td>
	<th scope="row"><a href="?#★">유흥주점, 단란주점 영업허가 신청</a></th>
	<td>보건소</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
	</tr>
	<tr>
	<td>9991</td>
	<th scope="row"><a href="?#★">유흥주점, 단란주점 허가사항변경신고</a></th>
	<td>보건소</td>
	<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
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

	<p class="right">
		<a href="?" class="button">글쓰기</a>
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