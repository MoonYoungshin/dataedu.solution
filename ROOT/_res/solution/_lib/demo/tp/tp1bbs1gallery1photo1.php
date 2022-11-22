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
$pageTitle="갤러리 사진"; ?>
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





<h1 class="hb1 h1">갤러리 사진</h1>


<!-- infomenu1 -->
<div class="infomenu1">

	<!-- search1select1 -->
	<div class="search1select1">
		<form id="f1s1s1" action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select id="f1s1s1select1" title="검색종류" class="select1">
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

</div>

</div>
<!-- /infomenu1 -->


<!-- gallery1photo1 -->
<div class="gallery1photo1 fixed-ratio fit">
	<ul class="even-grid evenmix-234 gap25pct mgt15px mgb15px">
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1002.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">관리자</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1003.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<!-- <img src="<?=$commonPath?>/img/lib/noimage.png" alt="이미지 없음" /> -->
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1005.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1006.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1007.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1008.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1009.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1010.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1011.jpg" alt="★대체텍스트필수" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	<li class="column"><a href="?#★" class="a1">
		<span class="f1"><span class="f1p1">
			<img src="/_res/@m/_img.ex/w320a1/w320a1011.jpg" alt="★대체텍스트필수" class="opct" />
		</span></span>
		<span class="text1">
			<strong class="t1">제목입니다륙칠팔구십</strong>
			<span class="wrap1t2">
				<span class="t2">2019.08.30</span>
				<span class="t2">조회 : 9999</span>
			</span>
		</span>
	</a></li>
	</ul>
</div>
<!-- /gallery1photo1 -->


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