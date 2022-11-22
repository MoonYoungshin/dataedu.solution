<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221109 | @m | 요구반영. 결함개선. 고도화.
 */

include "../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="데이터에듀">
<meta name="keywords" content="데이터에듀 솔루션 API">
<meta name="description" content="데이터에듀 솔루션 API">
<title>자연어 이해 - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/nlu1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/nlu1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2before1after1 -->
<div class="cp2before1after1">
	<div class="w1 before">
		<div class="cont">
			The greatest glory in living lies not in never falling, but in rising every time we fall.
		</div>
	</div>
</div>
<!-- /cp2before1after1 -->


<!-- cp2result1table1 -->
<div class="cp2result1table1">
	<div class="w1">
		<strong class="tt1">분석결과</strong>
		<div class="cont fscroll1-xy" tabindex="0">
			<div class="w1table">
				<table class="table">
					<caption>
						<strong class="h1 blind">분석결과</strong>
						<span class="summary1 blind">: 분석결과, 품사, 표제어</span>
					</caption>
					<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">The</th>
						<th scope="col">greatest</th>
						<th scope="col">glory</th>
						<th scope="col">in</th>
						<th scope="col">living</th>
						<th scope="col">lies</th>
						<th scope="col">not</th>
						<th scope="col">in</th>
						<th scope="col">never</th>
						<th scope="col">falling</th>
						<th scope="col">but</th>
						<th scope="col">in</th>
						<th scope="col">rising</th>
						<th scope="col">every</th>
						<th scope="col">time</th>
						<th scope="col">we</th>
						<th scope="col">fall</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row"><em class="em1">품사</em></th>
						<td>DT</td>
						<td>JJS</td>
						<td>JJ</td>
						<td>IN</td>
						<td>VBG</td>
						<td>VBZ</td>
						<td>RB</td>
						<td>IN</td>
						<td>RB</td>
						<td>JJS</td>
						<td>JJS</td>
						<td>JJS</td>
						<td>JJS</td>
						<td>JJS</td>
						<td>JJS</td>
						<td>JJS</td>
						<td>VBZ</td>
					</tr>
					<tr>
						<th scope="row"><em class="em2">표제어</em></th>
						<td>the</td>
						<td>great</td>
						<td>glory</td>
						<td>in</td>
						<td>live</td>
						<td>lie</td>
						<td>not</td>
						<td>in</td>
						<td>never</td>
						<td>falling</td>
						<td>but</td>
						<td>in</td>
						<td>rising</td>
						<td>every</td>
						<td>time</td>
						<td>we</td>
						<td>fall</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /cp2result1table1 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<a href="nlu1.php" class="button type1"><span class="t1">처음으로</span></a>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>