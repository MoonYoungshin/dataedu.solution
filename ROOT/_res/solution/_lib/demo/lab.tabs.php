<!DOCTYPE html>
<?php
/**
 * 20220223 | @m | connect.php 추가
 */

include "../../share/inc/connect.php"; // 접속경로
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="Tabs"; ?>
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





<h1 class="hb1 h1">Tabs</h1>


<hr class="line1t" /><!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->


<h2 class="hb1 h2">tabs1</h2>


<!-- tabs1 -->
<div id="tabs1" class="tabs1">
	<ul class="even-grid evenmix-24 float-left collapse">
	<li class="m1 column"><a href="#tabs1pane1"><span class="t1">상세소개</span><i class="ic1"></i></a></li>
	<li class="m2 column"><a href="#tabs1pane2"><span class="t1">주요생산품목</span><i class="ic1"></i></a></li>
	<li class="m3 column"><a href="#tabs1pane3"><span class="t1">향후채용계획</span><i class="ic1"></i></a></li>
	</ul>
</div>
<!-- /tabs1 -->


<!-- tabs1cont -->
<div id="tabs1cont" class="tabs1cont">
<!-- tabs1pane -->
<div id="tabs1pane1" class="tabs1pane">


	<h3 class="hb1 h4">상세소개</h3>


</div>
<!-- /tabs1pane -->
<!-- tabs1pane -->
<div id="tabs1pane2" class="tabs1pane">


	<h3 class="hb1 h4">주요생산품목</h3>


	<!-- scroll1wrap1all1 : {setDesktop: true} -->
	<div class="scroll1wrap1all1">
	<!-- scroll1cont -->
	<div class="scroll1cont">
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
	<!-- /scroll1cont -->
	</div>
	<!-- /scroll1wrap1all1 -->



</div>
<!-- /tabs1pane -->
<!-- tabs1pane -->
<div id="tabs1pane3" class="tabs1pane">


	<h3 class="hb1 h4">향후채용계획</h3>


</div>
<!-- /tabs1pane -->
</div>
<!-- /tabs1cont -->
<script>/*<![CDATA[*/
	// 20180921.
	makeShow('#tabs1', '#tabs1pane1');
	makeActive('#tabs1', '.m1');

	// 20200115. 탭 클릭 반응형 스크롤 결함해결
	$('#tabs1 a').on('click', function(){
		$(window).triggerHandler('resize');
	});

/*]]>*/</script>





<hr class="dott" /><!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->


<h2 class="hb1 h2">tabs2</h2>


<!-- tabs2 -->
<div id="tabs2" class="tabs2">
	<ul class="even-grid evenmix-24 float-left collapse">
	<li class="m1 column"><a href="#tabs2pane1"><span class="t1">상세소개</span><i class="ic1"></i></a></li>
	<li class="m2 column"><a href="#tabs2pane2"><span class="t1">주요생산품목</span><i class="ic1"></i></a></li>
	<li class="m3 column"><a href="#tabs2pane3"><span class="t1">향후채용계획</span><i class="ic1"></i></a></li>
	</ul>
</div>
<!-- /tabs2 -->


<!-- tabs2cont -->
<div id="tabs2cont" class="tabs2cont">
<!-- tabs2pane -->
<div id="tabs2pane1" class="tabs2pane">


	<h3 class="hb1 h4">상세소개</h3>


</div>
<!-- /tabs2pane -->
<!-- tabs2pane -->
<div id="tabs2pane2" class="tabs2pane">


	<h3 class="hb1 h4">주요생산품목</h3>


</div>
<!-- /tabs2pane -->
<!-- tabs2pane -->
<div id="tabs2pane3" class="tabs2pane">


	<h3 class="hb1 h4">향후채용계획</h3>


</div>
<!-- /tabs2pane -->
</div>
<!-- /tabs2cont -->
<script>/*<![CDATA[*/
	// 20180921.
	makeShow('#tabs2', '#tabs2pane1');
	makeActive('#tabs2', '.m1');
/*]]>*/</script>


<hr class="dott" /><!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->


<h2 class="hb1 h2">tabs3</h2>


<!-- tabs3 -->
<div id="tabs3" class="tabs3">
	<ul class="even-grid evenmix-24 float-left collapse">
	<li class="m1 column"><a href="#tabs3pane1"><span class="t1">상세소개</span><i class="ic1"></i></a></li>
	<li class="m2 column"><a href="#tabs3pane2"><span class="t1">주요생산품목</span><i class="ic1"></i></a></li>
	<li class="m3 column"><a href="#tabs3pane3"><span class="t1">향후채용계획</span><i class="ic1"></i></a></li>
	</ul>
</div>
<!-- /tabs3 -->


<!-- tabs3cont -->
<div id="tabs3cont" class="tabs3cont">
<!-- tabs3pane -->
<div id="tabs3pane1" class="tabs3pane">


	<h3 class="hb1 h4">상세소개</h3>


</div>
<!-- /tabs3pane -->
<!-- tabs3pane -->
<div id="tabs3pane2" class="tabs3pane">


	<h3 class="hb1 h4">주요생산품목</h3>


</div>
<!-- /tabs3pane -->
<!-- tabs3pane -->
<div id="tabs3pane3" class="tabs3pane">


	<h3 class="hb1 h4">향후채용계획</h3>


</div>
<!-- /tabs3pane -->
</div>
<!-- /tabs3cont -->
<script>/*<![CDATA[*/
	// 20180921.
	makeShow('#tabs3', '#tabs3pane1');
	makeActive('#tabs3', '.m1');
/*]]>*/</script>


<hr class="dott" /><!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->


<h2 class="hb1 h2">tabs4</h2>


<!-- tabs4 -->
<div id="tabs4" class="tabs4">
	<ul>
	<li class="m1 column"><a href="#tabs4pane1"><span class="t1">상세소개</span><i class="ic1"></i></a></li>
	<li class="m2 column"><a href="#tabs4pane2"><span class="t1">주요생산품목</span><i class="ic1"></i></a></li>
	<li class="m3 column"><a href="#tabs4pane3"><span class="t1">향후채용계획</span><i class="ic1"></i></a></li>
	</ul>
</div>
<!-- /tabs4 -->


<!-- tabs4cont -->
<div id="tabs4cont" class="tabs4cont">
<!-- tabs4pane -->
<div id="tabs4pane1" class="tabs4pane">


	<h3 class="hb1 h4">상세소개</h3>


</div>
<!-- /tabs4pane -->
<!-- tabs4pane -->
<div id="tabs4pane2" class="tabs4pane">


	<h3 class="hb1 h4">주요생산품목</h3>


</div>
<!-- /tabs4pane -->
<!-- tabs4pane -->
<div id="tabs4pane3" class="tabs4pane">


	<h3 class="hb1 h4">향후채용계획</h3>


</div>
<!-- /tabs4pane -->
</div>
<!-- /tabs4cont -->
<script>/*<![CDATA[*/
	// 20180921.
	makeShow('#tabs4', '#tabs4pane1');
	makeActive('#tabs4', '.m1');
/*]]>*/</script>


<hr class="dott" /><!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->





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