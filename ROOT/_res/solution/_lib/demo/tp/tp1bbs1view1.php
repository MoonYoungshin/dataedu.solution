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
$pageTitle="_BBS1 상세뷰1"; ?>
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





<h1 class="hb1 h1">_BBS1 상세뷰1</h1>


<!-- bbs1view1 -->
<div class="bbs1view1">

	<h1 class="h1">
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</h1>

	<!-- info1 -->
	<div class="info1">
		<dl class="dl1">
			<dt class="dt1">작성일</dt>
			<dd class="dd1">2020.12.04 09:33:22</dd>
			<dt class="dt1">작성자</dt>
			<dd class="dd1">기획조정실 홍보담당</dd>
			<dt class="dt1">공개 여부</dt>
			<dd class="dd1"><em class="em1">비공개</em></dd>
			<dt class="dt1 show">출처 :</dt><!-- ☆ 글 보이려면 show 추가 -->
			<dd class="dd1">우주달빛뉴스</dd>
			<dt class="dt1">처리</dt>
			<dd class="dd1"><em class="em4">완료</em></dd>
			<dt class="dt1 show">조회 :</dt>
			<dd class="dd1">9999</dd>
		</dl>
	</div>
	<!-- /info1 -->

	<!-- attach1 -->
	<div class="attach1">
		<ul>
		<li>
			<a href="?#★" onclick="return confirm('파일의 용량이 483.6 KB 입니다. 다운로드 받으시겠습니까?');" target="_blank" rel="noopener" title="realfilename1.zip 다운로드 [새 창]" class="b1 download"><i class="ic1"></i> 다운로드</a>
			<a href="realfilename1.zip" onclick="return confirm('파일의 용량이 483.6 KB 입니다. 다운로드 받으시겠습니까?');" class="filename">realfilename1.zip (483.6 KB)</a>
		</li>
		<li>
			<a href="?#★" target="_blank" rel="noopener" title="realfilename1.pdf 다운로드 [새 창]" class="b1 download"><i class="ic1"></i> 다운로드</a>
			<a href="?#★" target="_blank" rel="noopener" title="realfilename1.pdf 바로보기 [새 창]" class="b1 quickview"><i class="ic1"></i> 바로보기</a>
			<a href="realfilename1.pdf" class="filename">realfilename1.pdf (483.6 KB)</a>
		</li>
		<li>
			<a href="?#★" target="_blank" rel="noopener" title="일이삼사오륙칠팔구십일이삼사오륙칠팔구십.hwp 바로보기 [새 창]" class="b1 quickview"><i class="ic1"></i> 바로보기</a>
			<a href="일이삼사오륙칠팔구십일이삼사오륙칠팔구십.hwp" class="filename">일이삼사오륙칠팔구십일이삼사오륙칠팔구십.hwp (483.6 KB)</a>
		</li>
		<li><!-- ★변환중…이면 href 속성 제거 -->
			<a class="b1 quickview"><i class="ic1"></i> <span class="blind">바로보기</span> 변환중…</a>
			<a href="AbcdeFghijKlmnoPqrstUvwxyZ.hwp" class="filename">AbcdeFghijKlmnoPqrstUvwxyZ.hwp (483.6 KB)</a>
		</li>
		</ul>
	</div>
	<!-- /attach1 -->

	<!-- substance -->
	<div class="substance">


		<!-- ★ 항상 사진1장 있으면 -->
		<div class="figure1 tac">
			<img src="/_res/@m/_img.ex/baby-501630_320.jpg" alt="★대체텍스트필수" class="block-center" />
			<div class="figcaption">항상 사진1장 있으면.. 사진설명 필요하면 넣고 없으면 말고</div>
		</div>

		<br /><br />

		<!-- pic1gallery1 ★ 사진1 또는 2장이상 있으면 -->
		<div class="pic1gallery1">
			<div class="figure pt1">
				<p class="p1"><img src="/_res/@m/_img.ex/house-773527_1280.jpg" alt="★대체텍스트필수" /></p>
				<div class="figcaption">
					<p class="t1">★대체텍스트필수</p>
				</div>
				<div class="mControl">
					<button type="button" class="b prev" title="이전 보기"><i class="ic">이전</i></button>
					<button type="button" class="b next" title="다음 보기"><i class="ic">다음</i></button>
				</div>
			</div>
			<!-- ★개발참고) 모바일 위해 섬네일은 따로 만드는 것이 좋겠다. -->
			<div class="mNum">
				<ul class="even-6">
				<li class="m"><a href="/_res/@m/_img.ex/house-773527_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/house-773527_1280.jpg" alt="사진1 또는 2장이상 있으면.. 대체텍스트1대체텍스트1대체텍스트1대체텍스트1대체텍스트1대체텍스트1대체텍스트1대체텍스트1대체텍스트1대체텍스트1" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/museum-777998_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/museum-777998_1280.jpg" alt="이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/shutters-669296_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/shutters-669296_1280.jpg" alt="삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/little-girls-walking-773024_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/little-girls-walking-773024_1280.jpg" alt="사오륙칠팔구십일이삼" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/bike-602012_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/bike-602012_1280.jpg" alt="오륙칠팔구십일이삼사" /></span></a></li>
				<!-- <li><a><span class="f1"></span></a></li> --><!-- 이거 섬네일 사이에 있으면 이전 다음 기능 결함 -->
				<li class="m"><a href="/_res/@m/_img.ex/beach-801808_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/beach-801808_1280.jpg" alt="beach-801808_1280" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/church-781998_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/church-781998_1280.jpg" alt="church-781998_1280" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/dandelion-793275_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/dandelion-793275_1280.jpg" alt="dandelion-793275_1280" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/dinant-832508_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/dinant-832508_1280.jpg" alt="dinant-832508_1280" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/dog-72333_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/dog-72333_1280.jpg" alt="dog-72333_1280" /></span></a></li>
				<li class="m"><a href="/_res/@m/_img.ex/beautiful-71493_1280.jpg"><span class="f1"><img src="/_res/@m/_img.ex/beautiful-71493_1280.jpg" alt="beautiful-71493_1280" /></span></a></li>
				<li><a><span class="f1"></span></a></li>
				</ul>
			</div>
		</div>
		<!-- /pic1gallery1 -->
		<script>/*<![CDATA[*/
			jQchangePic3('click', '.pic1gallery1', '.m', 1, '.pt1');
		/*]]>*/</script>


		★게시글 샘플입니다. 일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
		<br />

		<table class="t3 w100 tttal ttvam">
			<caption class="blind">
				<strong class="h1">★표제목샘플</strong>
				<span class="summary1 blind">: 표열제목1, 표열제목2, 표열제목3</span>
			</caption>
			<col style="width:7em;" /><col /><col />
			<thead>
			<tr>
			<th scope="col">표열제목1</th>
			<th scope="col">표열제목2</th>
			<th scope="col">표열제목3</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<th scope="row">표행제목1</th>
			<td>표내용1x1</td>
			<td>표내용1x2</td>
			</tr>
			<tr>
			<th scope="row">표행제목2</th>
			<td>표내용2x1</td>
			<td>표내용2x2</td>
			</tr>
			</tbody>
		</table>
		<br />

		<a href="?#★" target="_blank" rel="noopener" title="새 창">★링크 샘플입니다.</a><br />
		<br />


		<!-- ★☆ 20161209. <iframe></iframe> 안에 텍스트나 태그 오니 W3C 유효성 오류 검출됨!
			<iframe title="동영상: ★동영상게시물제목" src="//www.youtube.com/embed/qVtioW7h62w" allowfullscreen="allowfullscreen">
				동영상: <a href="//www.youtube.com/embed/qVtioW7h62w">★동영상게시물제목</a>
			</iframe>
		 -->

		<!-- flex1wrap1 --><!-- @개발. ★동영상게시물제목. 바르게 넣는다. [FF]RWD! Please visit online!! -->
		<div class="flex1wrap1">
			<iframe title="동영상: ★동영상게시물제목" src="//www.youtube.com/embed/qVtioW7h62w" allowfullscreen="allowfullscreen"></iframe>
		</div>
		<!-- /flex1wrap1 -->
		<!-- caption1 -->
		<div class="caption1" title="동영상 대본 원고">
			<a tabindex="0" class="blind onshow">여기 초점을 받으면 키보드 화살표 상(↑)·하(↓) 키로 대본 스크롤을 할 수 있습니다.</a>

			<strong>★진짜동영상제목 있으면 넣고 없으면 말고</strong><br />
			<br />
			★진짜동영상대본. 하나도 누락하지 말고 모두 기입하세요!!<br />
			<br />
			키보드 운용해보세요. 대본이 길어 여기 스크롤이 생기면.. [Tab]키와 [Shift]+[Tab]키 조작으로 스크롤 영역 또는 영역 안 요소가 초점을 받을 수 있어야 키보드 화살표 상(↑)·하(↓) 키로 대본 스크롤을 할 수 있습니다.<br />
			<br />
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
			<br />
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
			<br />
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
			<br />
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
			<br />

		</div>
		<!-- /caption1 -->


	</div>
	<!-- /substance -->

</div>
<!-- /bbs1view1 -->


<!-- bbs1view1.reply1 -->
<div class="bbs1view1 reply1">

	<h1 class="h1"><i class="ib1"><i class="ic1"></i> [답변]</i> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</h1>

	<!-- info1 -->
	<div class="info1">
		<dl class="dl1">
			<dt class="dt1">작성일</dt>
			<dd class="dd1">2015.11.03</dd>
			<dt class="dt1">작성자</dt>
			<dd class="dd1">해양수산과</dd>
		</dl>
	</div>
	<!-- /info1 -->

	<!-- substance -->
	<div class="substance">

		일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십<br />
		<br />
		일이삼사오륙칠팔구십<br />

	</div>
	<!-- /substance -->

</div>
<!-- /bbs1view1.reply1 -->


<!-- infomenu1 -->
<div class="infomenu1">
	<div class="left">
		<a href="?" class="button prev secondary"><span class="t1">이전</span></a>
		<a href="?" class="button next secondary"><span class="t1">다음</span></a>
	</div>
	<div class="right">
		<a href="?" class="button default">수정</a>
		<a href="?" class="button default">삭제</a>
		<a href="?" class="button medium">목록</a>
	</div>
</div>
<!-- /infomenu1 -->


<!-- bbs1prev1next1 -->
<div class="bbs1prev1next1">
	<ul class="dl1">
		<li class="di prev">
			<span class="dt">이전 게시물</span>
			<p class="dd">등록된 게시물이 없습니다.</p>
		</li>
		<li class="di next">
			<a href="?#★">
				<span class="dt">다음 게시물</span>
				<p class="dd">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</p>
			</a>
		</li>
	</ul>
</div>
<!-- /bbs1prev1next1 -->


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