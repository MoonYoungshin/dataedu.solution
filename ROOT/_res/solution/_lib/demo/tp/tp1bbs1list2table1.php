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
$pageTitle="리스트2 테이블1. 폭좁은 화면은 목록표 일부만 보여준다."; ?>
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





<h1 class="hb1 h1">리스트2 테이블1. 폭좁은 화면은 목록표 일부만 보여준다.</h1>


<!-- infomenu1 -->
<div class="infomenu1">

<!-- search1select1 -->
<div class="search1select1">
	<form id="f1s1s1" action="?#★">
	<fieldset><legend class="blind">게시물 검색</legend>
		<select id="f1s1s1select1" title="선택옵션1" class="select1">
			<option value="">제목+내용</option>
			<option value="">작성자</option>
			<option value="">제목</option>
			<option value="">내용</option>
		</select>
		<input type="text" id="f1s1s1text1" value="" title="검색어" class="text1" />
		<button type="submit" class="button submit search"><i class="ic1"></i><span class="t1">검색</span></button>
	</fieldset>
	</form>
</div>
<!-- /search1select1 -->

<div class="left">
	<div class="info1">
			총 <b class="em">9999</b>건의 자료가 있습니다.
		<span class="dpib">(<b class="em">1</b>/999 페이지)</span>
	</div>
</div>
<div class="right">
	<!-- 필터메뉴 -->
</div>

</div>
<!-- /infomenu1 -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">목록표 기본</h4>


<!-- list2table1 -->
<div class="list2table1">
	<table class="t1 w100 tttac ttvam fsxd lhD">
		<caption>
			<strong class="h1 blind">★○○ 게시물 목록</strong>
			<span class="summary1 blind">: 번호, 제목, 작성자, 작성일, 첨부, 조회</span>
		</caption>
		<thead>
		<tr>
		<th scope="col" style="width:auto;">번호</th>
		<th scope="col" style="width:50%;">제목</th>
		<th scope="col" style="width:4em;">작성자</th>
		<th scope="col" style="width:6em;">작성일</th>
		<th scope="col" style="width:auto;">첨부</th>
		<th scope="col" style="width:auto;">조회</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>10000</td>
		<td class="tal"><a href="?#★">여기는 제목이 좌정렬되니 class="tal" 추가하세요. <i class="ic1 new">새 글</i></a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.doc"><img src="<?=$sitePath?>/img/board/icon/ic16_doc.png" width="16" height="16" alt="doc 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9999</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십 <i class="ic1 new">새 글</i></a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.gif"><img src="<?=$sitePath?>/img/board/icon/ic16_gif.png" width="16" height="16" alt="gif 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9998</td>
		<td class="tal"><i class="ic1 reply"><i>└</i><b class="t1">[답변]</b></i> <a href="?#★">답변글은 이렇게 구분하지여..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.html"><img src="<?=$sitePath?>/img/board/icon/ic16_html.png" width="16" height="16" alt="html 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9997</td>
		<td class="tal">&nbsp;&nbsp;<i class="ic1 reply"><i>└</i><b class="t1">[답변]</b></i> <a href="?#★">2차 답변글은 요렇게 들여쓰기를 하는구나!</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.hwp"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" width="16" height="16" alt="hwp 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9996</td>
		<td class="tal"><a href="?#★">확장자별 아이콘은 10개 + 범용 1개 + 노파일 1개 준비..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.jpg"><img src="<?=$sitePath?>/img/board/icon/ic16_jpg.png" width="16" height="16" alt="jpg 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9995</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.pdf"><img src="<?=$sitePath?>/img/board/icon/ic16_pdf.png" width="16" height="16" alt="pdf 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9994</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.ppt"><img src="<?=$sitePath?>/img/board/icon/ic16_ppt.png" width="16" height="16" alt="ppt 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9993</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.txt"><img src="<?=$sitePath?>/img/board/icon/ic16_txt.png" width="16" height="16" alt="txt 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9992</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td><a href="filename.xls"><img src="<?=$sitePath?>/img/board/icon/ic16_xls.png" width="16" height="16" alt="xls 파일 첨부" /></a></td>
		<td>9999</td>
		</tr>
		<tr>
		<td>9991</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td>
			<a href="filename.zip"><img src="<?=$sitePath?>/img/board/icon/ic16_zip.png" width="16" height="16" alt="zip 파일 첨부" /></a>
			<a href="filename.zip"><img src="<?=$sitePath?>/img/board/icon/ic16_file.png" width="16" height="16" alt="파일 첨부" /></a>
			<a href="filename.odf"><img src="<?=$sitePath?>/img/board/icon/ic16_file.png" width="16" height="16" alt="파일 첨부" /></a>
		</td>
		<td>9999</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /list2table1 -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">작은폭 화면은 목록표 일부만 보여주기</h4>


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5">감추려는 th, td 에 <em class="em4 ls0">class="hide-small display-table-cell-medium"</em> 추가</h5>


<!-- list2table1 -->
<div class="list2table1">
	<table class="t1 w100 tttac ttvam fsxd lhD">
		<caption>
			<strong class="h1 blind">★○○ 게시물 목록</strong>
			<span class="summary1 blind">: 번호, 제목, 작성자, 작성일, 첨부, 조회</span>
		</caption>
		<thead>
		<tr>
		<th scope="col" style="width:auto;" class="hide-small display-table-cell-medium">번호</th>
		<th scope="col" style="width:50%;">제목</th>
		<th scope="col" style="width:4em;">작성자</th>
		<th scope="col" style="width:6em;">작성일</th>
		<th scope="col" style="width:auto;" class="hide-small display-table-cell-medium">첨부</th>
		<th scope="col" style="width:auto;" class="hide-small display-table-cell-medium">조회</th>
		</tr>
		</thead>
		<tbody>
		<tr class="row1">
		<td class="hide-small display-table-cell-medium">10000</td>
		<td class="tal"><a href="?#★"><i class="ic1 new">새 글</i> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td class="hide-small display-table-cell-medium"><a href="filename.odf"><img src="<?=$sitePath?>/img/board/icon/ic16_file.png" width="16" height="16" alt="odf 파일 첨부" /></a></td>
		<td class="hide-small display-table-cell-medium">9999</td>
		</tr>
		<tr class="row2">
		<td class="hide-small display-table-cell-medium">9999</td>
		<td class="tal"><a href="?#★"><i class="ic1 reply"><i>└</i><b class="t1">[답변]</b></i> <i class="ic1 new">새 글</i> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td class="hide-small display-table-cell-medium"><a href="filename.odf"><img src="<?=$sitePath?>/img/board/icon/ic16_file.png" width="16" height="16" alt="odf 파일 첨부" /></a></td>
		<td class="hide-small display-table-cell-medium">9999</td>
		</tr>
		<tr>
		<td class="hide-small display-table-cell-medium">9998</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td class="hide-small display-table-cell-medium"></td>
		<td class="hide-small display-table-cell-medium">9999</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /list2table1 -->


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5">감추려는 th, td 에 <em class="em4 ls0">class="hide-small-only"</em> 추가</h5>


<!-- list2table1 -->
<div class="list2table1">
	<table class="t1 w100 tttac tt2tal ttvam fsxd lhD">
		<caption>
			<strong class="h1 blind">학습동아리 등록현황 목록</strong>
			<span class="summary1 blind">: 번호, 동아리명, 소속, 분야, 대표명</span>
		</caption>
		<thead>
		<tr>
		<th scope="col" class="hide-small-only">번호</th>
		<th scope="col">동아리명</th>
		<th scope="col" class="hide-small-only">소속</th>
		<th scope="col" class="hide-small-only">분야</th>
		<th scope="col">대표명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td class="hide-small-only">122</td>
		<td><a href="?#★">행복진주 경남에-토</a></td>
		<td class="hide-small-only">사)한국에스페란토협회 경남지부</td>
		<td class="hide-small-only">외국어</td>
		<td>류진숙</td>
		</tr>
		<tr>
		<td class="hide-small-only">121</td>
		<td><a href="?#★" target="_blank" rel="noopener" title="새 창" class="a1">이하라 요가</a></td>
		<td class="hide-small-only">원척추밸런스</td>
		<td class="hide-small-only">생활/체육</td>
		<td>유정선</td>
		</tr>
		<tr>
		<td class="hide-small-only">120</td>
		<td><a href="?#★" target="_blank" rel="noopener" title="새 창" class="a1">남강색소폰앙상블리베</a></td>
		<td class="hide-small-only">남강색소폰앙상블리베</td>
		<td class="hide-small-only">미술/음악</td>
		<td>성종기</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /list2table1 -->


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5">감추려는 th, td 순번들에 해당하는 class 를  table 에 추가 (예: <em class="em4 ls0">class="tt1hide-small-only tt3hide-small-only"</em> )</h5>


<p class="fsd">
	<em class="em">간편한 이 방법을 사용하세요!</em><br />
	<!-- 표셀 폭을 지정하세요!<br /> -->
</p>


<!-- list2table1 -->
<div class="list2table1">
	<table class="t1 w100 tttac tt2tal ttvam fsxd lhD tt1hide-small-only tt3hide-small-only">
		<caption>
			<strong class="h1 blind">학습동아리 등록현황 목록</strong>
			<span class="summary1 blind">: 번호, 동아리명, 소속, 분야, 대표명</span>
		</caption>
		<thead>
		<tr>
		<th scope="col">번호</th>
		<th scope="col">동아리명</th>
		<th scope="col">소속</th>
		<th scope="col">분야</th>
		<th scope="col">대표명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>122</td>
		<td><a href="?#★">행복진주 경남에-토</a></td>
		<td>사)한국에스페란토협회 경남지부</td>
		<td>외국어</td>
		<td>류진숙</td>
		</tr>
		<tr>
		<td>121</td>
		<td><a href="?#★" target="_blank" rel="noopener" title="새 창" class="a1">이하라 요가</a></td>
		<td>원척추밸런스</td>
		<td>생활/체육</td>
		<td>유정선</td>
		</tr>
		<tr>
		<td>120</td>
		<td><a href="?#★" target="_blank" rel="noopener" title="새 창" class="a1">남강색소폰앙상블리베</a></td>
		<td>남강색소폰앙상블리베</td>
		<td>미술/음악</td>
		<td>성종기</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /list2table1 -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">1줄 말줄임…</h4>


<p class="fsd">
	<em class="em">아래 코드처럼 table 요소에 ellipsis 클래스 추가하세요.</em><br />
	표셀 폭을 지정하세요!<br />
	긴글 있는 셀이 2개 이상이면 이 방법을 권장하지 않는다.<br />
</p>


<!-- list2table1 -->
<div class="list2table1">
	<table class="t1 w100 tttac ttvam fsxd lhD ellipsis">
		<caption>
			<strong class="h1 blind">★○○ 게시물 목록</strong>
			<span class="summary1 blind">: 번호, 제목, 작성자, 작성일, 첨부, 조회</span>
		</caption>
		<thead>
		<tr>
		<th scope="col" style="width:auto;" class="hide-small-only">번호</th>
		<th scope="col" style="width:50%;">제목</th>
		<th scope="col" style="width:4em;">작성자</th>
		<th scope="col" style="width:6em;">작성일</th>
		<th scope="col" style="width:auto;" class="hide-small-only">첨부</th>
		<th scope="col" style="width:auto;" class="hide-small-only">조회</th>
		</tr>
		</thead>
		<tbody>
		<tr class="row1">
		<td class="hide-small-only">10000</td>
		<td class="tal"><a href="?#★"><i class="ic1 new">새 글</i> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td class="hide-small-only"><a href="filename.odf"><img src="<?=$sitePath?>/img/board/icon/ic16_file.png" width="16" height="16" alt="odf 파일 첨부" /></a></td>
		<td class="hide-small-only">9999</td>
		</tr>
		<tr class="row2">
		<td class="hide-small-only">9999</td>
		<td class="tal"><a href="?#★"><i class="ic1 reply"><i>└</i><b class="t1">[답변]</b></i> <i class="ic1 new">새 글</i> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td class="hide-small-only"><a href="filename.odf"><img src="<?=$sitePath?>/img/board/icon/ic16_file.png" width="16" height="16" alt="odf 파일 첨부" /></a></td>
		<td class="hide-small-only">9999</td>
		</tr>
		<tr>
		<td class="hide-small-only">9998</td>
		<td class="tal"><a href="?#★">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙..</a></td>
		<td>작성자</td>
		<td>2016.09.23</td>
		<td class="hide-small-only"></td>
		<td class="hide-small-only">9999</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /list2table1 -->


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

	<p class="left">
		<a href="?" onclick="history.go(-1); return false;" class="button default">이전</a>
	</p>
	<p class="right">
		<a href="?" class="button">글작성</a>
	</p>

</div>
<!-- /infomenu1 -->


<?php //include "./tp1bbs1_foot_inc.php"?>





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