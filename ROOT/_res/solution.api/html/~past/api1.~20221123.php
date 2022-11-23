<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221122 | @m | 요구반영. 결함개선. 고도화.
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
<title>체험하기 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_head -->
<div id="body_head" class="init">
<!-- container -->
<div class="container clearfix">


<!-- path1 -->
<!-- <div id="path1">
	<div class="breadcrumb clearfix">
		<strong class="blind">현재페이지 경로:</strong>
		<span class="cont">
			<a class="a1"><i class="t1">Audio API</i></a>
			<i class="sep">&gt;</i>
			<a class="a1"><i class="t1">음성합성 (TTS)</i></a>
		</span>
	</div>
</div> -->
<!-- /path1 -->


<!-- user1 -->
<div id="user1">
	<span class="t1">test01234@naver.com</span>
</div>
<!-- /user1 -->


</div>
<!-- /container -->
</div>
<!-- /#body_head -->
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<h3 class="blind">API 체험하기</h3>

<!-- cp2tabs2 -->
<div id="cp2tabs2" class="cp2tabs2">
	<ul>
		<li class="m1"><a href="#cp2tabs2pane1"><span class="t1">추천</span></a></li>
		<li class="m2"><a href="#cp2tabs2pane2"><span class="t1">Audio</span></a></li>
		<li class="m3"><a href="#cp2tabs2pane3"><span class="t1">Vision</span></a></li>
		<li class="m4"><a href="#cp2tabs2pane4"><span class="t1">Language</span></a></li>
		<li class="m5"><a href="#cp2tabs2pane5"><span class="t1">Education</span></a></li>
		<li class="m6"><a href="#cp2tabs2pane6"><span class="t1">Video</span></a></li>
	</ul>
</div>
<!-- /cp2tabs2 -->

<!-- cp2tabs2cont -->
<div id="cp2tabs2cont" class="cp2tabs2cont">
<!-- cp2tabs2pane -->
<div id="cp2tabs2pane1" class="cp2tabs2pane">
<h4 class="blind">추천</h4>

	<!-- cp2card1 -->
	<div class="cp2card1">
	<div class="wrap1">
		<ul class="mns">
			<li class="m tts">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">음성 합성(JS-TTS)</strong>
					<div class="t2">
						실제 그 사람의 목소리 그대로 자연스럽게, 최고의 음질과 실시간 합성 속도를 제공 합니다.
						최대 네줄까지가 적당한 것 같습니다.
					</div>
				</a>
			</li>
			<li class="m @@@">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">@@@</strong>
					<div class="t2">
						@@@
					</div>
				</a>
			</li>
		</ul>
	</div>
	</div>
	<!-- /cp2card1 -->

</div>
<!-- /cp2tabs2pane -->
<!-- cp2tabs2pane -->
<div id="cp2tabs2pane2" class="cp2tabs2pane">
<h4 class="blind">Audio</h4>


Audio 내용?


</div>
<!-- /cp2tabs2pane -->
<!-- cp2tabs2pane -->
<div id="cp2tabs2pane3" class="cp2tabs2pane">
<h4 class="blind">Vision</h4>


Vision 내용?


</div>
<!-- /cp2tabs2pane -->
<!-- cp2tabs2pane -->
<div id="cp2tabs2pane4" class="cp2tabs2pane">
<h4 class="blind">Language</h4>


Language 내용?


</div>
<!-- /cp2tabs2pane -->
<!-- cp2tabs2pane -->
<div id="cp2tabs2pane5" class="cp2tabs2pane">
<h4 class="blind">Education</h4>


Education 내용?


</div>
<!-- /cp2tabs2pane -->
<!-- cp2tabs2pane -->
<div id="cp2tabs2pane6" class="cp2tabs2pane">
<h4 class="blind">Video</h4>


Video 내용?


</div>
<!-- /cp2tabs2pane -->
</div>
<!-- /cp2tabs2cont -->

<script>/*<![CDATA[*/
	makeShow('#cp2tabs2', '#cp2tabs2pane1');
	makeActive('#cp2tabs2', '.m1');
/*]]>*/</script>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>