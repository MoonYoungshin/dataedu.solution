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
$pageTitle="게시물 내용에 동영상 내장하기"; ?>
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





<!-- bbs1view1 -->
<div class="bbs1view1">
<h1 class="h1">게시물 내용에 동영상 내장하기 <em class="em">실무 코드 샘플</em></h1>
<!-- info1 -->
<div class="info1">
<dl class="dl1">
<dt class="dt1">작성일</dt>
<dd class="dd1">2016.06.03 10:00:00</dd>
<dt class="dt1">작성자</dt>
<dd class="dd1">문영신</dd>
<dt class="dt1 show">조회수 :</dt><!-- ☆ .dt1 보이려면 show 추가 -->
<dd class="dd1">22</dd>
</dl>
</div>
<!-- /info1 -->
<!-- substance -->
<div class="substance">


<p class="pd1em-rv bg-danger em0">동영상 서비스 운영 경로로 맞추세요.</p>


<!-- ◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆ -->
<h4 class="hb1 h4">
	<b class="em4">이거 사용하세요!</b><br />
	HTML5 Video <small class="fwn">[IE9+]</small> mp4
</h4>


<!-- ★(개발Hint!)
용법) <param name="flashvars" value="skin=[SKIN_SWF_FILE]&amp;thumbnail=[THUMBNAIL_IMAGE_FILE]&amp;video=[VIDEO_FILE]"/>
사례) <param name="flashvars" value="skin=/data/flash/f4player/skins/mySkin.swf&amp;thumbnail=/data/flash/f4player/thumbnail.jpg&amp;video=/data/video/ex.mp4" />
-->


<!-- video1wrap1 -->
<div class="video1wrap1">

<!-- flex1wrap1 -->
<div class="flex1wrap1">
<!-- video [IE9+표준] -->
<video controls="controls" poster="/_res/@m/_img.ex/brothers-457237_1280.jpg"
	src="http://content.jwplatform.com/videos/HkauGhRi-640.mp4">
	<div class="alternativeContent">
		<p>Your browser does not support the video element.</p>
	</div>
</video>
<!-- /video -->
</div>
<!-- /flex1wrap1 -->

<!-- <div class="panel1">
	<strong class="h1">[★동영상원본제목] 미디어 형식별</strong>
	<ul class="bu">
	<li><a href="http://content.jwplatform.com/videos/HkauGhRi-640.mp4" target="_blank">★원본파일명.mp4 (★동영상원본파일크기MB)</a></li>
	<li><a href="../../data/video/★원본파일명.wmv" target="_blank">★원본파일명.wmv (★동영상원본파일크기MB)</a></li>
	</ul>
</div> -->

<!-- caption1 -->
<div class="caption1" title="원고">
	<a tabindex="0" class="blind onshow">여기 초점을 받으면 키보드 화살표 상(↑)·하(↓) 키로 스크롤 할 수 있습니다.</a>

	<!-- <p><a href="../../data/video/★원본파일명Transcript.html">원고 다운로드(★원고파일크기KB)</a></p> -->

	<strong class="h1">(자막 제공) 멀티미디어 콘텐츠에는 자막, 원고 또는 수화를 제공해야 한다.</strong><br />
	<br />
	<strong class="h1">준수 기준</strong><br />
	영상, 음성 등 멀티미디어 콘텐츠를 동등하게 인식할 수 있는 자막, 원고 또는 수화를 제공한 경우 준수한 것으로 인정<br />
	<br />
	<strong class="h1">오류 유형</strong><br />
	2-1 ○ 멀티미디어 콘텐츠에 자막, 원고, 수화 중 하나 이상의 대체 수단을 제공하지 않은 경우<br />
	2-2 ○ 멀티미디어 콘텐츠에 대한 대체 수단의 내용을 불충분 또는 적절하지 않게 제공한 경우<br />
	2-3 ○ 사용자가 등록한 멀티미디어 콘텐츠에 대해 관리자가 대체수단 등록을 유도하는 안내 또는 대체수단 입력 기능을 제공하지 않은 경우<br />
	<br />
	<strong class="h1">세부설명</strong><br />
	• 멀티미디어 콘텐츠 상의 텍스트에 대한 동등한 음성 또는 원고를 제공하지 않은 경우 준수하지 않은 것으로 인정<br />
	• 음성이 없는 동영상의 경우도 대체 수단을 반드시 제공해야 준수한 것으로 인정<br />
	• 멀티미디어 콘텐츠에 대한 대체수단 제공방식이 적절하지 않은 경우 준수하지 않은 것으로 인정<br />
	• 파일로 제공되는 영상, 음성 콘텐츠도 평가 대상에 포함<br />
	　(단, 파일로 제공되는 영상, 음성의 자막은 파일로 제공한 경우도 준수한 것으로 인정)<br />
	• 원고는 페이지 내에서 보여지도록 제공해야 함<br />
	<br />

</div>
<!-- /caption1 -->

</div>
<!-- /video1wrap1 -->


<!-- ◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆ -->
<h4 class="hb1 h4">
	<b class="em">이거 사용하지 마세요!</b><br />
	Flash Player <em class="em">(object 요소 이용)</em> <small class="fwn">[IE7,8]</small>
	+ HTML5 Video <small class="fwn">[IE9+]</small> mp4
</h4>


<!-- ★(개발Hint!)
용법) <param name="flashvars" value="skin=[SKIN_SWF_FILE]&amp;thumbnail=[THUMBNAIL_IMAGE_FILE]&amp;video=[VIDEO_FILE]"/>
사례) <param name="flashvars" value="skin=/data/flash/f4player/skins/mySkin.swf&amp;thumbnail=/data/flash/f4player/thumbnail.jpg&amp;video=/data/video/ex.mp4" />
-->


<!-- video1wrap1 -->
<div class="video1wrap1">

<!-- flex1wrap1 -->
<div class="flex1wrap1">
<!--[if lte IE 8]>
<div class="flex1wrap1fix1">
	<object type="application/x-shockwave-flash" data="../../data/flash/f4player/player.swf?v1.3.5" width="480" height="270" title="동영상[MP4]" class="f4Player">
	<param name="movie" value="../../data/flash/f4player/player.swf?v1.3.5" />
	<param name="quality" value="high" />
	<param name="menu" value="false" />
	<param name="scale" value="noscale" />
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="swlivevonnect" value="true" />
	<param name="cachebusting" value="false" />
	<param name="flashvars" value="skin=../../data/flash/f4player/skins/mySkin.swf&amp;video=http://content.jwplatform.com/videos/HkauGhRi-640.mp4&amp;thumbnail=/_res/@m/_img.ex/brothers-457237_1280.jpg" />
		<div class="alternativeContent">
			<a href="http://get.adobe.com/flashplayer/">어도비 플래시 플레이어 다운로드</a>
			<a href="http://www.adobe.com/go/flashplayer/">Download it from Adobe.</a>
			<a href="http://gokercebeci.com/dev/f4player" title="flv player">flv player</a>
		</div>
	</object>
</div>
<![endif]-->
<!-- video [IE9+표준] -->
<video controls="controls" poster="/_res/@m/_img.ex/brothers-457237_1280.jpg"
	src="http://content.jwplatform.com/videos/HkauGhRi-640.mp4">
	<div class="alternativeContent panel1">
		<!-- <p>Your browser does not support the video element.</p> -->
		<strong class="h1">[★동영상원본제목] 미디어 형식별</strong>
		<ul class="bu">
		<li><a href="../../data/video/★동영상원본파일명.mp4" target="_blank">★동영상원본파일명.mp4 다운로드(★동영상원본파일크기MB)</a></li>
		<!-- <li><a href="../../data/video/★동영상원본파일명.wmv" target="_blank">★동영상원본파일명.wmv 다운로드(★동영상원본파일크기MB)</a></li> -->
		</ul>
		<strong class="h1">플레이어 다운로드</strong>
		<ul class="bu">
		<li><a href="https://www.microsoft.com/korea/windows/windowsmedia/">윈도우 미디어 플레이어</a></li>
		<li><a href="http://www.apple.com/quicktime/download/">퀵 타임 플레이어</a></li>
		</ul>
	</div>
</video>
<!-- /video -->
</div>
<!-- /flex1wrap1 -->

<!-- caption1 -->
<div class="caption1" title="원고">
	<a tabindex="0" class="blind onshow">여기 초점을 받으면 키보드 화살표 상(↑)·하(↓) 키로 스크롤 할 수 있습니다.</a>

	<!-- <p><a href="../../data/video/★원본파일명Transcript.html">원고 다운로드(★원고파일크기KB)</a></p> -->

	<strong class="h1">(자막 제공) 멀티미디어 콘텐츠에는 자막, 원고 또는 수화를 제공해야 한다.</strong><br />
	<br />
	<strong class="h1">준수 기준</strong><br />
	영상, 음성 등 멀티미디어 콘텐츠를 동등하게 인식할 수 있는 자막, 원고 또는 수화를 제공한 경우 준수한 것으로 인정<br />
	<br />
	<strong class="h1">오류 유형</strong><br />
	2-1 ○ 멀티미디어 콘텐츠에 자막, 원고, 수화 중 하나 이상의 대체 수단을 제공하지 않은 경우<br />
	2-2 ○ 멀티미디어 콘텐츠에 대한 대체 수단의 내용을 불충분 또는 적절하지 않게 제공한 경우<br />
	2-3 ○ 사용자가 등록한 멀티미디어 콘텐츠에 대해 관리자가 대체수단 등록을 유도하는 안내 또는 대체수단 입력 기능을 제공하지 않은 경우<br />
	<br />
	<strong class="h1">세부설명</strong><br />
	• 멀티미디어 콘텐츠 상의 텍스트에 대한 동등한 음성 또는 원고를 제공하지 않은 경우 준수하지 않은 것으로 인정<br />
	• 음성이 없는 동영상의 경우도 대체 수단을 반드시 제공해야 준수한 것으로 인정<br />
	• 멀티미디어 콘텐츠에 대한 대체수단 제공방식이 적절하지 않은 경우 준수하지 않은 것으로 인정<br />
	• 파일로 제공되는 영상, 음성 콘텐츠도 평가 대상에 포함<br />
	　(단, 파일로 제공되는 영상, 음성의 자막은 파일로 제공한 경우도 준수한 것으로 인정)<br />
	• 원고는 페이지 내에서 보여지도록 제공해야 함<br />
	<br />

</div>
<!-- /caption1 -->

</div>
<!-- /video1wrap1 -->


<!-- ◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆ -->
<h4 class="hb1 h4">
	<b class="em">이거 사용하지 마세요!</b><br />
	Flash Player <em class="em">(embed 요소 이용)</em>	<small class="fwn">[IE7,8]</small>
	+ HTML5 Video <small class="fwn">[IE9+]</small> mp4
</h4>

<p class="fsL em">동영상 등 내장(embed) 콘텐츠는 대체콘텐츠가 필요하므로, embed 요소 대신 object  요소 사용을 권장합니다.</p>

<p>2015년 모바일 웹사이트에서 잠시 사용한 아래 코드는 더이상 사용하지 마세요.<br />
HTML5 에서 embed 요소는 표준이지만, noembed 요소는 표준이 아닙니다.<br />
조건주석문 안에 들어 있어 유효성 검사기에서 오류로 검출되지 않을 뿐입니다.<br />
비표준이지만 대부분의 브라우저에서 문제없이 작동하기는 합니다. (플러그인 없는 상황은 점검안함)<br />
</p>

<pre>
<code class="xmp pd20px-rv">
&lt;!--[if lt IE 9]&gt;
	&lt;embed /&gt;
	&lt;noembed&gt;&lt;/noembed&gt;
&lt;![endif]--&gt;
</code>
</pre>
아래와 같은 코드도 사용하지 마세요.
<pre>
<code class="xmp pd20px-rv">
&lt;embed&gt;
	&lt;noembed&gt;
	&lt;/noembed&gt;
&lt;/embed&gt;</code>
</pre>


<h5 class="hb1 h5">
	<b class="em">이거 사용하지 마세요!</b><br />
	Flash Player (embed 요소 이용 (noembed 요소 없다 (대체콘텐츠 없다))
	+  HTML5 Video mp4
</h4>


<!-- video1wrap1 -->
<div class="video1wrap1">

<!-- flex1wrap1 -->
<div class="flex1wrap1">
<!--[if lte IE 8]>
<div class="flex1wrap1fix1">
	<embed type="application/x-shockwave-flash" src="../../data/flash/f4player/player.swf?v1.3.5" width="480" height="270" title="동영상[MP4]" class="f4Player"
		flashvars="skin=../../data/flash/f4player/skins/mySkin.swf&amp;video=http://content.jwplatform.com/videos/HkauGhRi-640.mp4&amp;thumbnail=/_res/@m/_img.ex/brothers-457237_1280.jpg"
		allowscriptaccess="always"
		allowfullscreen="true"
	/>
</div>
<![endif]-->
<!-- video [IE9+표준] -->
<video controls="controls" poster="/_res/@m/_img.ex/brothers-457237_1280.jpg">
	<source src="http://content.jwplatform.com/videos/HkauGhRi-640.mp4" type="video/mp4" />
	<div class="alternativeContent">
		<p>Your browser does not support the video element.</p>
	</div>
</video>
<!-- /video -->
</div>
<!-- /flex1wrap1 -->

<!-- <div class="panel1">
	<strong class="h1">[★동영상원본제목] 미디어 형식별</strong>
	<ul class="bu">
	<li><a href="http://content.jwplatform.com/videos/HkauGhRi-640.mp4" target="_blank">★원본파일명.mp4 (★동영상원본파일크기MB)</a></li>
	<li><a href="../../data/video/★원본파일명.wmv" target="_blank">★원본파일명.wmv (★동영상원본파일크기MB)</a></li>
	</ul>
</div> -->

<!-- caption1 -->
<div class="caption1" title="원고">
	<a tabindex="0" class="blind onshow">여기 초점을 받으면 키보드 화살표 상(↑)·하(↓) 키로 스크롤 할 수 있습니다.</a>

	<!-- <p><a href="../../data/video/★원본파일명Transcript.html">원고 다운로드(★원고파일크기KB)</a></p> -->

	<strong class="h1">(자막 제공) 멀티미디어 콘텐츠에는 자막, 원고 또는 수화를 제공해야 한다.</strong><br />
	<br />
	<strong class="h1">준수 기준</strong><br />
	영상, 음성 등 멀티미디어 콘텐츠를 동등하게 인식할 수 있는 자막, 원고 또는 수화를 제공한 경우 준수한 것으로 인정<br />
	<br />
	<strong class="h1">오류 유형</strong><br />
	2-1 ○ 멀티미디어 콘텐츠에 자막, 원고, 수화 중 하나 이상의 대체 수단을 제공하지 않은 경우<br />
	2-2 ○ 멀티미디어 콘텐츠에 대한 대체 수단의 내용을 불충분 또는 적절하지 않게 제공한 경우<br />
	2-3 ○ 사용자가 등록한 멀티미디어 콘텐츠에 대해 관리자가 대체수단 등록을 유도하는 안내 또는 대체수단 입력 기능을 제공하지 않은 경우<br />
	<br />
	<strong class="h1">세부설명</strong><br />
	• 멀티미디어 콘텐츠 상의 텍스트에 대한 동등한 음성 또는 원고를 제공하지 않은 경우 준수하지 않은 것으로 인정<br />
	• 음성이 없는 동영상의 경우도 대체 수단을 반드시 제공해야 준수한 것으로 인정<br />
	• 멀티미디어 콘텐츠에 대한 대체수단 제공방식이 적절하지 않은 경우 준수하지 않은 것으로 인정<br />
	• 파일로 제공되는 영상, 음성 콘텐츠도 평가 대상에 포함<br />
	　(단, 파일로 제공되는 영상, 음성의 자막은 파일로 제공한 경우도 준수한 것으로 인정)<br />
	• 원고는 페이지 내에서 보여지도록 제공해야 함<br />
	<br />

</div>
<!-- /caption1 -->

</div>
<!-- /video1wrap1 -->





</div>
<!-- /substance -->
</div>
<!-- /bbs1view1 -->





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