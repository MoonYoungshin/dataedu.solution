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
$pageTitle="게시판 상세뷰2"; ?>
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





<h1 class="hb1 h1">게시판 상세뷰2</h1>


<!-- view1pic1info1 -->
<div class="view1pic1info1">

	<!-- texts -->
	<div class="texts">
		<h1 class="h1">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		</h1>
		<!-- info1 -->
		<div class="info1">

			<table class="t3">
				<caption>
					<strong class="h1 blind">상세 내용</strong>
					<span class="summary1 blind">: 기업명, 제품명, 소재지, 전화번호, 팩스번호, 홈페이지</span>
				</caption>
				<col style="width:6em;" /><col />
				<tbody>
				<tr>
				<th scope="row">기업명</th>
				<td>일이삼사오륙칠팔구십</td>
				</tr>
				<tr>
				<th scope="row">제품명</th>
				<td>일이삼사오륙칠팔구십</td>
				</tr>
				<tr>
				<th scope="row">소재지</th>
				<td>일이삼사오륙칠팔구십</td>
				</tr>
				<tr>
				<th scope="row">전화번호</th>
				<td>000-0000-0000</td>
				</tr>
				<tr>
				<th scope="row">팩스번호</th>
				<td>000-0000-0000</td>
				</tr>
				<tr>
				<th scope="row">홈페이지</th>
				<td><a href="//homepage.com/" target="_blank" rel="noopener" title="새 창">//homepage.com/</a></td>
				</tr>
				</tbody>
			</table>

			<dl class="b0">
				<dt><b class="fsL em0">특징</b></dt>
				<dd>
					<ul class="bu">
					<li>청정산간지역으로 사과재배의 최적지입니다.</li>
					<li>기온의 일교차가 커서 색깔이 좋고, 당도가 높습니다.</li>
					<li>사질양토에서 재배되어 육질이 좋고 과즙이 많습니다.</li>
					<li>유기물 사용량이 많아 저장성이 높고 향기가 좋습니다.</li>
					</ul>
				</dd>
				<dt><b class="fsL em0">구입처</b></dt>
				<dd>
					<ul class="bu">
					<li>우리사과원예농업협동조합 000-0000-0000</li>
					<li>우리사과원예농업협동조합 000-0000-0000</li>
					</ul>
				</dd>
			</dl>

		</div>
		<!-- /info1 -->

	</div>
	<!-- /texts -->

	<!-- pic1gallery1 -->
	<div class="pic1gallery1">
		<div class="figure pt1">
			<p class="p1"><img src="/_res/@m/_img.ex/w1280a1/w1280a1101.jpg" alt="★대체텍스트1" /></p>
			<div class="figcaption">
				<p class="t1">★대체텍스트1</p>
			</div>
			<div class="mControl">
				<button type="button" class="b prev" title="이전 보기"><i class="ic">이전</i></button>
				<button type="button" class="b next" title="다음 보기"><i class="ic">다음</i></button>
			</div>
		</div>
		<!-- ★개발참고) 모바일 위해 섬네일은 따로 만드는 것이 좋겠다. -->
		<div class="mNum">
			<ul>
			<li class="m"><a href="/_res/@m/_img.ex/w1280a1/w1280a1101.jpg"><span class="f1"><img src="/_res/@m/_img.ex/w320a1/w320a1101.jpg" alt="★대체텍스트1" /></span></a></li>
			<li class="m"><a href="/_res/@m/_img.ex/w1280a1/w1280a1102.jpg"><span class="f1"><img src="/_res/@m/_img.ex/w320a1/w320a1102.jpg" alt="★대체텍스트2" /></span></a></li>
			<li class="m"><a href="/_res/@m/_img.ex/w1280a1/w1280a1103.jpg"><span class="f1"><img src="/_res/@m/_img.ex/w320a1/w320a1103.jpg" alt="★대체텍스트3" /></span></a></li>
			<li class="m"><a href="/_res/@m/_img.ex/w1280a1/w1280a1104.jpg"><span class="f1"><img src="/_res/@m/_img.ex/w320a1/w320a1104.jpg" alt="★대체텍스트4" /></span></a></li>
			<li><a><span class="f1"></span></a></li>
			<li><a><span class="f1"></span></a></li>
			</ul>
		</div>
	</div>
	<!-- /pic1gallery1 -->
	<script>/*<![CDATA[*/
		jQchangePic3('click', '.pic1gallery1', '.m', 1, '.pt1');
	/*]]>*/</script>

</div>
<!-- /view1pic1info1 -->


<!-- infomenu1 -->
<div class="infomenu1">
	<div class="left">
		<a href="?" class="button prev default"><span class="t1">이전</span></a>
		<a href="?" class="button next default"><span class="t1">다음</span></a>
	</div>
	<div class="right">
		<a href="?" class="button secondary">수정</a>
		<a href="?" class="button secondary">삭제</a>
		<a href="?" class="button medium">목록</a>
	</div>
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