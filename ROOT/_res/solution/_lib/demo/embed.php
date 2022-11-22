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
$pageTitle="EMBED"; ?>
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





<!-- 
/*! Style Demo Code. v.20160602~.20190130. 20200420 | by MoonYoungshin[myshin@naver.com] | MIT License
 * Note) 
 * Task) 
 */ -->
<hr /><!-- ◇◆◇◆◇◆ ◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆ -->
<h2 class="demo" id="EMBED">EMBED</h2>


<h3>Embed Video</h3>


<p class="fsXL em1">실무 코드 샘플 ))) <a href="embed_in_bbs.jsp">embed_in_bbs.jsp</a></p>


<h4 class="hb1 h4" id="HTML5_Video">HTML5 Video</h4>

<!-- box1 -->
<div class="box1">
<strong class="h1">※Reference※</strong>
<ul class="bu">
<!-- <li><a href="http://www.html5forum.or.kr/front/knowhow/sample.jsp?seq=34&amp;bmode=detail&amp;spage=1" target="_blank" rel="noopener" title="새 창">HTML 5 video Tags 설명</a></li> -->
<li><a href="https://en.wikipedia.org/wiki/HTML5_video#Browser_support" target="_blank" rel="noopener" title="새 창">동영상 코덱 브라우저별 지원 내용</a></li>
<li>Flash Player (<a href="http://gokercebeci.com/dev/f4player" target="_blank">f4Player</a> (무료))</li>
</ul>
</div>
<!-- /box1 -->


<br />
<hr /><!-- ◇◆◇◆◇◆ ◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆ -->
<h3>[IE9+]</h3>


<h4 class="hb1 h4">
	<a href="http://www.w3schools.com/html/html5_video.asp" target="_blank" rel="noopener" title="새 창">HTML5 Video</a>
	<small class="fwn">[IE9+]</small> mp4
</h4>

<!-- panel1 -->
<div class="panel1 clearfix">
<strong class="h1">★(개발Hint!)</strong>
<div class="contentsBlock clearfix ofh">
<pre class="mg0">
<code class="ls0"><b class="em0">(용법)</b> &lt;param name="flashvars" value="<b class="em0">skin=</b>[SKIN_SWF_FILE]&amp;<b class="em0">thumbnail=</b>[THUMBNAIL_IMAGE_FILE]&amp;<b class="em0">video=</b>[VIDEO_FILE]"/&gt;
<b class="em0">(사례)</b> &lt;param name="flashvars" value="skin=/data/flash/f4player/skins/mySkin.swf&amp;thumbnail=/data/flash/f4player/thumbnail.jpg&amp;video=/data/video/ex.mp4" /&gt;
</code>
</pre>
<p>※ 특수문자 Name Code(Number Code) 형태로 사용.<br />
))) &amp; (ampersand) 와 &lt; (less-than sign) 은 &amp;amp; 와 &amp;lt; 로 사용해야 한다.<br />
))) 20160603. <a href="https://validator.w3.org" target="_blank" rel="noopener" title="새 창">validator.w3.org</a> 에서
ampersand 를 & 로만 코딩한 코드로 유효성 검사를 해보니.. 오류로 검출되지 않았다.<br />
</p>
</div>
</div>
<!-- /panel1 -->




<!-- video1wrap1 -->
<div class="video1wrap1">

<!-- flex1wrap1 -->
<div class="flex1wrap1">
<!-- video [IE9+표준] -->
<video src="http://content.jwplatform.com/videos/HkauGhRi-640.mp4" controls="controls">
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


<h4 class="hb1 h4">
	<a href="http://www.w3schools.com/tags/tag_audio.asp" target="_blank" rel="noopener" title="새 창">HTML5 Audio</a>
	<small class="fwn">[IE9+]</small> mp3
</h4>

<!-- audio1wrap1 -->
<div class="audio1wrap1">

<!-- audio [IE9+표준] -->
<audio src="/_res/@m/_audio/2018NationalAnthem1-4(Chorus).mp3" preload="auto" controls="controls" class="w100">
	<div class="alternativeContent">
		<p>Your browser does not support the audio element.</p>
	</div>
</audio>
<!-- /audio -->

<!-- <div class="panel1">
	<strong class="h1">[★오디오원본제목] 미디어 형식별</strong>
	<ul class="bu">
	<li><a href="/_res/@m/_audio/2018NationalAnthem1-4(Chorus).mp3" target="_blank">★원본파일명.mp3 (★원본파일크기MB)</a></li>
	<li><a href="../../data/audio/★원본파일명.ogg" target="_blank">★원본파일명.ogg (★원본파일크기MB)</a></li>
	</ul>
</div> -->

<!-- caption1 -->
<div class="caption1" title="원고">
	<a tabindex="0" class="blind onshow">여기 초점을 받으면 키보드 화살표 상(↑)·하(↓) 키로 스크롤 할 수 있습니다.</a>

	<!-- <p><a href="../../data/video/★원본파일명Transcript.html">원고 다운로드(★원고파일크기KB)</a></p> -->
	<!-- 아래는 샘플 가사이므로 오디오와 다를 수 있음. 실무에서는 적절한 원고를 제공해야 한다  -->

	<strong class="h1">2018 애국가 1-4절(합창)</strong><br />
	<br />
	1절<br />
	동해물과 백두산이 마르고 닳도록<br />
	하느님이 보우하사 우리나라 만세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />
	2절<br />
	남산위에 저 소나무 철갑을 두른 듯<br />
	바람서리 불변함을 우리 기상일세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />
	3절<br />
	가을 하늘 공활한데 높고 구름 없이<br />
	밝은 달은 우리 가슴 일편단심일세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />
	4절<br />
	이 기상과 이 맘으로 충성을 다하여<br />
	괴로우나 즐거우나 나라 사랑하세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />

</div>
<!-- /caption1 -->

</div>
<!-- /audio1wrap1 -->


<br />
<hr /><!-- ◇◆◇◆◇◆ ◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆ -->
<h3>
	[~IE8]고려한거
	:: <b class="em">[IE]bug) video 요소를 지원하는 경우에도  화면에 보이지 않는 대체콘텐츠로 초점이 적용(탭키가 이동)된다!</b>
	))) 사용말자!
</h3>


<h4 class="hb1 h4">Flash Player <small class="fwn">[IE7,8]</small> + <a href="http://www.w3schools.com/html/html5_video.asp" target="_blank" rel="noopener" title="새 창">HTML5 Video</a> <small class="fwn">[IE9+]</small> mp4</h4>

<!-- panel1 -->
<div class="panel1 clearfix">
<strong class="h1">★(개발Hint!)</strong>
<div class="contentsBlock clearfix ofh">
<pre class="mg0">
<code class="ls0"><b class="em0">(용법)</b> &lt;param name="flashvars" value="<b class="em0">skin=</b>[SKIN_SWF_FILE]&amp;<b class="em0">thumbnail=</b>[THUMBNAIL_IMAGE_FILE]&amp;<b class="em0">video=</b>[VIDEO_FILE]"/&gt;
<b class="em0">(사례)</b> &lt;param name="flashvars" value="skin=/data/flash/f4player/skins/mySkin.swf&amp;thumbnail=/data/flash/f4player/thumbnail.jpg&amp;video=/data/video/ex.mp4" /&gt;
</code>
</pre>
<p>※ 특수문자 Name Code(Number Code) 형태로 사용.<br />
))) &amp; (ampersand) 와 &lt; (less-than sign) 은 &amp;amp; 와 &amp;lt; 로 사용해야 한다.<br />
))) 20160603. <a href="https://validator.w3.org" target="_blank" rel="noopener" title="새 창">validator.w3.org</a> 에서
ampersand 를 & 로만 코딩한 코드로 유효성 검사를 해보니.. 오류로 검출되지 않았다.<br />
</p>
</div>
</div>
<!-- /panel1 -->




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
	<param name="flashvars" value="skin=../../data/flash/f4player/skins/mySkin.swf&amp;thumbnail=../../data/flash/f4player/thumbnail.png&amp;video=http://content.jwplatform.com/videos/HkauGhRi-640.mp4" />
		<div class="alternativeContent">
		<a href="http://www.adobe.com/go/flashplayer/">Download it from Adobe.</a>
		<a href="http://gokercebeci.com/dev/f4player" title="flv player">flv player</a>
		</div>
	</object>
</div>
<![endif]-->
<!-- video [IE9+표준] -->
<video src="http://content.jwplatform.com/videos/HkauGhRi-640.mp4" controls="controls">
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


<h4 class="hb1 h4">
	<a href="http://www.w3schools.com/tags/tag_embed.asp" target="_blank" rel="noopener" title="새 창">Embed</a> <small class="fwn">[IE7,8]</small>
	+ <a href="http://www.w3schools.com/tags/tag_audio.asp" target="_blank" rel="noopener" title="새 창">HTML5 Audio</a> <small class="fwn">[IE9+]</small> mp3
</h4>

<!-- audio1wrap1 -->
<div class="audio1wrap1">

<!--[if lte IE 8]>
<embed src="/_res/@m/_audio/2018NationalAnthem1-4(Chorus).mp3" autostart="false" style="width:100%;height:45px;border:1px solid #ddd;border-top:0;" />
<![endif]-->
<!-- audio [IE9+표준] -->
<audio src="/_res/@m/_audio/2018NationalAnthem1-4(Chorus).mp3" preload="auto" controls="controls" class="w100">
	<div class="alternativeContent panel1">
		<!-- <p>Your browser does not support the audio element.</p> -->
		<strong class="h1">[★원본제목] 미디어 형식별</strong>
		<ul class="bu">
		<li><a href="../../data/audio/★원본파일명.mp3" target="_blank">★원본파일명.mp3 다운로드(★원본파일크기MB)</a></li>
		<!-- <li><a href="../../data/audio/★원본파일명.ogg" target="_blank">★원본파일명.ogg 다운로드(★원본파일크기MB)</a></li> -->
		</ul>
		<strong class="h1">플레이어 다운로드</strong>
		<ul class="bu">
		<li><a href="https://www.microsoft.com/ko-kr/download/windows-media-player-details.aspx">윈도우 미디어 플레이어</a></li>
		<li><a href="http://www.apple.com/quicktime/download/">퀵 타임 플레이어</a></li>
		</ul>
	</div>
</audio>
<!-- /audio -->

<!-- caption1 -->
<div class="caption1" title="원고">
	<a tabindex="0" class="blind onshow">여기 초점을 받으면 키보드 화살표 상(↑)·하(↓) 키로 스크롤 할 수 있습니다.</a>

	<!-- <p><a href="../../data/video/★원본파일명Transcript.html">원고 다운로드(★원고파일크기KB)</a></p> -->
	<!-- 아래는 샘플 가사이므로 오디오와 다를 수 있음. 실무에서는 적절한 원고를 제공해야 한다  -->

	<strong class="h1">2018 애국가 1-4절(합창)</strong><br />
	<br />
	1절<br />
	동해물과 백두산이 마르고 닳도록<br />
	하느님이 보우하사 우리나라 만세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />
	2절<br />
	남산위에 저 소나무 철갑을 두른 듯<br />
	바람서리 불변함을 우리 기상일세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />
	3절<br />
	가을 하늘 공활한데 높고 구름 없이<br />
	밝은 달은 우리 가슴 일편단심일세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />
	4절<br />
	이 기상과 이 맘으로 충성을 다하여<br />
	괴로우나 즐거우나 나라 사랑하세.<br />
	무궁화 삼천리 화려강산<br />
	대한 사람, 대한으로 길이 보전하세.<br />
	<br />

</div>
<!-- /caption1 -->

</div>
<!-- /audio1wrap1 -->


<hr /><!-- ◇◆◇◆◇◆ ◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆ -->





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