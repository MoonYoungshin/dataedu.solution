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
$pageTitle="_BBS1 리스트1"; ?>
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





<h1 class="hb1 h1">_BBS1 리스트1</h1>


<!-- cnb1 -->
<div class="cnb1 mj-menu-even-width mj-menu2dropdown">
	<ul>
	<li class="m1 on"><a href="#?">분류1-1</a></li>
	<li class="m2"><a href="#?">분류1-2</a></li>
	<li class="m3"><a href="#?">분류1-3</a></li>
	<li class="m4"><a href="#?">분류1-4</a></li>
	<li class="m5"><a href="#?">분류1-5</a></li>
	<li class="m6"><a href="#?">분류1-6</a></li>
	<li class="m7"><a href="#?">분류1-7</a></li>
	<li class="m8"><a href="#?">분류1-8</a></li>
	<li class="m9"><a href="#?">분류1-9</a></li>
	<li class="m10"><a href="#?">분류1-10</a></li>
	<li class="m11"><a href="#?">분류1-11</a></li>
	<li class="m12"><a href="#?">분류1-12</a></li>
	</ul>
</div>
<!-- /cnb1 -->
<script>/*<![CDATA[*/
	//addOnNav(); // 현재활성(1~4차)
	makeEvenWidthMenus(); // 자동균등폭
	makeMenu2Dropdown(); // Even Width Menus ))) Dropdown Menu
/*]]>*/</script>


<!-- cnb2 -->
<div class="cnb2 mj-menu-even-width mj-menu2dropdown">
	<ul>
	<li class="m1 on"><a href="#?">분류이일</a></li>
	<li class="m2"><a href="#?">분류이이</a></li>
	<li class="m3"><a href="#?">분류이삼</a></li>
	<li class="m4"><a href="#?">분류이사</a></li>
	<li class="m5"><a href="#?">분류이오</a></li>
	<li class="m6"><a href="#?">분류이륙</a></li>
	<li class="m7"><a href="#?">분류이칠</a></li>
	<li class="m8"><a href="#?">분류이팔</a></li>
	<li class="m9"><a href="#?">분류이구</a></li>
	<li class="m10"><a href="#?">분류이십</a></li>
	<li class="m11"><a href="#?">분류이십일</a></li>
	<li class="m12"><a href="#?">분류이십이</a></li>
	</ul>
</div>
<!-- /cnb2 -->
<script>/*<![CDATA[*/
	//addOnNav(); // 현재활성(1~4차)
	makeEvenWidthMenus(); // 자동균등폭
	makeMenu2Dropdown(); // Even Width Menus ))) Dropdown Menu
/*]]>*/</script>


<!-- panel1 -->
<div class="panel1">
	<em class="em">★샘플입니다.<b class="ls0"> class="panel1"</b></em>
	본 시민참여란은 실명으로 운영하며 비실명, 상업성 홍보, 특정인 비방, 저속한 표현, 반복민원 등 부적합한 내용에 대해서는 관리자가 예고 없이
	삭제할 수 있음을 알려드리며 본란을 통하여 제시한 각종 의견 등에 대하여는 민원사무(민원사무처리에 관한 법률에 근거한)로 접수되지 아니하므로
	민원사무로 처리를 원하실 경우에는 전자민원창구를 이용하시기 바랍니다. 단순 질의나 일반적인 민원사항은 민원상담등으로 옮겨질 수 있습니다.
</div>
<!-- /panel1 -->


<!-- panel1 -->
<div class="panel1 pd20px-rv">
	<em class="em">★샘플입니다.<b class="ls0"> class="panel1 pd20px-rv"</b></em>
	본 시민참여란은 실명으로 운영하며 비실명, 상업성 홍보, 특정인 비방, 저속한 표현, 반복민원 등 부적합한 내용에 대해서는 관리자가 예고 없이
	삭제할 수 있음을 알려드리며 본란을 통하여 제시한 각종 의견 등에 대하여는 민원사무(민원사무처리에 관한 법률에 근거한)로 접수되지 아니하므로
	민원사무로 처리를 원하실 경우에는 전자민원창구를 이용하시기 바랍니다. 단순 질의나 일반적인 민원사항은 민원상담등으로 옮겨질 수 있습니다.
</div>
<!-- /panel1 -->


<div class="bi1">
	<p class="li1">
		<em class="em">★샘플입니다.</em> 등록하신 내용은 접수 후 7일 이내(휴일 제외)에 답변처리 하도록 하겠습니다.
	</p>
</div>

<ul class="bi1">
	<li class="li1">
		))) <a href="../demo/demo1etc1.jsp#InfoMenuSearchAsk"><strong class="em0">정보 메뉴 검색 조회</strong></a> 에서 다양한 코드 샘플을 볼 수 있습니다.
	</li>
</ul>


<!-- infomenu1 -->
<div class="infomenu1">

	<!-- search1select1 -->
	<div class="search1select1">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select title="검색종류" class="select1">
				<option value="">제목+내용</option>
				<option value="">작성자</option>
				<option value="">제목</option>
				<option value="">내용</option>
			</select>
			<input type="text" value="" title="검색어" class="text1" />
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
		<div class="menu-group1">
			<a href="#" class="m m1 on">최신순</a>
			<a href="#" class="m m2">인기순</a>
		</div>
		<script>/*<![CDATA[*/
			$('.menu-group1 .m').on('click', function(){
				$(this).siblings().removeClass('on').end().addClass('on');
				return false;
			});
		/*]]>*/</script>
	</div>

</div>
<!-- /infomenu1 -->


<!-- list1f1t3i1 -->
<div class="list1f1t3i1">
	<ul class="lst1">

	<!-- 게시판목록.일반(기본형) -->
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
					<img src="<?=$sitePath?>/img/board/icon/ic16_file.png" alt="파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" alt="hwp 파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_xls.png" alt="xls 파일 첨부" class="vam" />
				</strong>
				<i class="wrap1t3">
					<span class="t3">2016.01.11</span>
					<span class="t3">주민생활지원실</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>

	<!-- 게시판목록.질문과답변 -->
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
					<img src="<?=$sitePath?>/img/board/icon/ic16_jpg.png" alt="jpg 파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_jpg.png" alt="jpg 파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_jpg.png" alt="jpg 파일 첨부" class="vam" />
				</strong>
				<i class="wrap1t3">
					<span class="t3">2016.01.11</span>
					<span class="t3">홍길동</span>
					<span class="t3">공개</span>
					<span class="t3">처리중(주민생활지원실)</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오</span>
				</strong>
				<i class="wrap1t3">
					<span class="t3">2016.01.11</span>
					<span class="t3">홍길동</span>
					<span class="t3"><em class="em1">비공개</em></span>
					<span class="t3"><em class="em4">처리완료</em></span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>

	<!-- 게시판목록.사진+리스트 -->
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/brothers-457237_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2016.01.11</span>
					<span class="t3">우주달빛뉴스</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/child-542038_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2016.01.11</span>
					<span class="t3">우주달빛뉴스</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2016.01.11</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>

	<!-- 게시판목록.various -->
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/child-785661_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">
						<em class="em2">[Notice]</em>
						일이삼사오륙칠팔구십일이삼사오륙칠팔구십
					</span>
					<i class="ic1 new"><span class="t1">새 글</span></i>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<span class="wrap1ics">
					<img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" alt="hwp 파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_xls.png" alt="xls 파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_jpg.png" alt="jpg 파일 첨부" class="vam" />
					<img src="<?=$sitePath?>/img/board/icon/ic16_file.png" alt="파일 첨부" class="vam" />
				</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">작성자 : 일반공공행정</span>
					<span class="t3"><em class="em1"><!-- 공개/ -->비공개</em></span>
					<span class="t3">출처 : 우주달빛뉴스</span>
					<span class="t3"><span class="blind">처리 : </span><em class="em4">답변완료</em></span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">
						<em class="em2">[알림]</em>
						일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…
					</span>
					<i class="ic1 new"><span class="t1">새 글</span></i>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/church-781998_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/citrus-2272_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/coffee-640647_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="f1"><span class="f1p1"><img src="/_res/@m/_img.ex/w320/dandelion-793275_320.jpg" alt="★대체텍스트필수" /></span></span>
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	<li class="li1"><div class="wrap1">
		<a href="?#★" class="a1">
			<span class="wrap1texts">
				<strong class="t1">
					<span class="t1t1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				</strong>
				<span class="t2">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십…</span>
				<i class="wrap1t3">
					<span class="t3">2015.11.02</span>
					<span class="t3">일반공공행정</span>
					<span class="t3">조회 : 9999</span>
				</i>
			</span>
		</a>
	</div></li>
	</ul>
</div>
<!-- /list1f1t3i1 -->


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