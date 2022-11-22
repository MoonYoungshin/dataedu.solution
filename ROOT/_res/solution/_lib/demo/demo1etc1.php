<!DOCTYPE html>
<?php
/**
 * ~20211007 | @m | 가져오기
 * 20211007 | @m | 
 * 20211129 | @m | 
 * 20220223 | @m | connect.php 추가
 */

include "../../share/inc/connect.php"; // 접속경로
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="Demo ETC"; ?>
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





<h1 class="hb1 h1">Demo ETC</h1>


<div id="cnb1" class="cnb1 bu0 mj-menu-even-width">
	<ul class="ls0">
	<li class="m1"><a href="#base" class="mj-smooth1scroll1">base.css</a></li>
	<li class="m2"><a href="#lib" class="mj-smooth1scroll1">lib.css</a></li>
	<li class="m3"><a href="#lib1cp1" class="mj-smooth1scroll1">lib1cp1.css</a></li>
	</ul>
</div>
<script>/*<![CDATA[*/
	//addOnNav(); // 현재활성(1~4차)
	makeActive('.cnb1', ''); // 클릭활성 makeActive('.cnb1', '.m1');
	makeEvenWidthMenus(); // 자동균등폭
	makeMenu2Dropdown(); // Even Width Menus ))) Dropdown Menu
/*]]>*/</script>


<div id="cnb2" class="cnb2 bu0 mj-menu-even-width">
	<ul class="ls0">
	<li class="m1"><a href="#ime-mode" class="mj-smooth1scroll1">입력방법 .ime-mode-</a></li>
	<li class="m2"><a href="#scroll" class="mj-smooth1scroll1">스크롤 .scroll</a></li>
	<li class="m3"><a href="#object-fit" class="mj-smooth1scroll1">개체 맞춤 object-fit</a></li>
	<li class="m4"><a href="#wwbw_wbka" class="mj-smooth1scroll1">단어 개행 유지 .wwbw.wbka</a></li>
	<li class="m5"><a href="#ellipsis" class="mj-smooth1scroll1">말줄임 ellipsis</a></li>
	<li class="m6"><a href="#box-shadow_linear-gradient" class="mj-smooth1scroll1">박스 장식 box-shadow linear-gradient</a></li>
	<li class="m7"><a href="#wrap1map1" class="mj-smooth1scroll1">맵래퍼 .wrap1map1</a></li>
	<li class="m8"><a href="#switch" class="mj-smooth1scroll1">스위치 .switch</a></li>
	<li class="m9"><a href="#mj-menu-even-width" class="mj-smooth1scroll1">자동균등폭메뉴 .mj-menu-even-width</a></li>
	<li class="m10"><a href="#flex1wrap1" class="mj-smooth1scroll1">유연한 래퍼 .flex1wrap1</a></li>
	<li class="m11"><a href="#HybridRow" class="mj-smooth1scroll1">복합배치 .hybrid1row1 …</a></li>
	<li class="m12"><a href="#ResponsiveTable" class="mj-smooth1scroll1">반응형 표</a></li>
	</ul>
</div>
<script>/*<![CDATA[*/
	makeActive('#cnb2', '');
	makeEvenWidthMenus();
	makeMenu2Dropdown();
/*]]>*/</script>


<div id="cnb2a2" class="cnb2 bu0 mj-menu-even-width">
	<ul class="ls0">
	<li class="m1"><a href="#ListMargin" class="mj-smooth1scroll1">목록마진변이 .ttmg0 .dfn</a></li>
	<li class="m2"><a href="#DfnListBulletInline" class="mj-smooth1scroll1">정의목록.불릿.인라인 .fixed1auto1.dtw4em</a></li>
	<li class="m3"><a href="#BulletIconList" class="mj-smooth1scroll1">불릿아이콘목록 .bi1</a></li>
	<li class="m4"><a href="#ListLine" class="mj-smooth1scroll1">목록라인 .bu.lst1ic1line1</a></li>
	<li class="m5"><a href="#Line" class="mj-smooth1scroll1">라인 .bdt1px …</a></li>
	<li class="m6"><a href="#ChildMargin" class="mj-smooth1scroll1">자식마진 .fc-mgt0 .lc-mgb0</a></li>
	<li class="m7"><a href="#MenuGroup" class="mj-smooth1scroll1">메뉴그룹 .menu-group1</a></li>
	<li class="m8"><a href="#Separator" class="mj-smooth1scroll1">분리기호 .sep .sep1 .sep1dot2</a></li>
	<li class="m9"><a href="#DatePicker" class="mj-smooth1scroll1">달력날짜선택기 &lt;input type="text" class="date" /&gt;</a></li>
	<li class="m10"><a href="#mAlert" class="mj-smooth1scroll1">알림 .m-alert1</a></li>
	<li class="m11"><a href="#ViewLargerImage" class="mj-smooth1scroll1">이미지 크게 보기 .mj-view-larger</a></li>
	<!-- <li class="m12"><a href="#★★" class="mj-smooth1scroll1">★★</a></li> -->
	</ul>
</div>
<script>/*<![CDATA[*/
	makeActive('#cnb2a2', '');
	makeEvenWidthMenus();
	makeMenu2Dropdown();
/*]]>*/</script>


<div id="cnb2a3" class="cnb2 bu0 mj-menu-even-width">
	<ul class="ls0">
	<li class="m1"><a href="#PublicIcon" class="mj-smooth1scroll1">공용 아이콘</a></li>
	<li class="m2"><a href="#Jumbotron" class="mj-smooth1scroll1">대형 전광판</a></li>
	<li class="m2"><a href="#InfoMenuSearchAsk" class="mj-smooth1scroll1">정보 메뉴 조회</a></li>
	<li class="m12"><a href="#★★" class="mj-smooth1scroll1">★★</a></li>
	</ul>
</div>
<script>/*<![CDATA[*/
	makeActive('#cnb2a3', '');
	makeEvenWidthMenus();
	makeMenu2Dropdown();
/*]]>*/</script>



<!-- ◇◆◇◆◇◆◇◆◇◆ -->
<h2 class="demo" id="base">base.css</h2>



<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ime-mode">입력방법 <code class="em2">.ime-mode-</code> [IE]OK(only)</h3>

<div class="item">
	<label for="★1ime-mode1" class="w9em">.ime-mode-auto</label>
	<input type="text" id="★1ime-mode1" value="" placeholder="한/영 선택된 문자 입력" class="ime-mode-auto" />
</div>
<div class="item">
	<label for="★1ime-mode2" class="w9em">.ime-mode-active</label>
	<input type="text" id="★1ime-mode2" value="" placeholder="한글 기본 입력" class="ime-mode-active"  />
</div>
<div class="item">
	<label for="★1ime-mode3" class="w9em">.ime-mode-inactive</label>
	<input type="text" id="★1ime-mode3" value="" placeholder="영문 기본 입력" class="ime-mode-inactive"  />
</div>
<div class="item">
	<label for="★1ime-mode4" class="w9em">.ime-mode-disabled</label>
	<input type="text" id="★1ime-mode4" value="" placeholder="영문만 입력 가능" class="ime-mode-disabled"  />
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="scroll">스크롤 <code class="em2">.scroll .scroll-x .scroll-y</code></h3>


<div class="scroll" style="display:inline-block !important;width:33%;height:200px;background:#eee;">
	<div style="width:110%;height:110%;background:#ee0;">
		.scroll
	</div>
</div>

<div class="scroll-x" style="display:inline-block !important;width:33%;height:200px;background:#eee;">
	<div style="width:110%;height:110%;background:#ee0;">
		.scroll-x
	</div>
</div>

<div class="scroll-y" style="display:inline-block !important;width:33%;height:200px;background:#eee;">
	<div style="width:110%;height:110%;background:#ee0;">
		.scroll-y
	</div>
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="object-fit">개체 맞춤 <code class="em2">html.object-fit .ofct .ofcv .offl .ofnn .ofsd</code> [CR][FF][EG](O) [IE](X)</h3>


<p>
	[JS] CSS object-fit 지원하는 UA 는 html.object-fit , 지원안되면 html.no-object-fit 선언한다.<br />
	공통적으로 {width:100% !important;height:100% !important;} 속성 선언!
</p>

<div class="fl mg5px">
	.ofct { object-fit: contain; }
	<div class="bd1px bgce" style="width:280px;height:280px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="ofct" />
	</div>
</div>

<div class="fl mg5px">
	.ofcv { object-fit: cover; }
	<div class="bd1px bgce" style="width:280px;height:280px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="ofcv" />
	</div>
</div>

<div class="fl mg5px">
	.offl { object-fit: fill; }
	<div class="bd1px bgce" style="width:280px;height:280px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="offl" />
	</div>
</div>

<div class="fl mg5px">
	.ofnn { object-fit: none; }
	<div class="bd1px bgce" style="width:280px;height:280px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="ofnn" />
	</div>
</div>

<div class="fl mg5px">
	.ofsd { object-fit: scale-down; }
	<div class="bd1px bgce" style="width:280px;height:280px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="ofsd" />
	</div>
</div>


<div class="brclear clearfix"></div>
<p>
	img 요소가 래퍼 보다 작을 때 contain 과 scale-down 차이점을 아래에서 확인할 수 있다.
</p>


<div class="fl mg5px">
	.ofct { object-fit: contain; }
	<div class="bd1px bgce" style="width:380px;height:380px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="ofct" />
	</div>
</div>

<div class="fl mg5px">
	.ofsd { object-fit: scale-down; }
	<div class="bd1px bgce" style="width:380px;height:380px;">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" class="ofsd" />
	</div>
</div>


<div class="brclear clearfix"></div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="wwbw_wbka">단어 개행 유지 <code class="em2">class="wwbw wbka"</code> ( word-wrap:break-word; word-break:keep-all; )</h3>


<p>
	기본 스타일에서는 한글 단어 사이가 잘린다.
</p>

<textarea rows="5" cols="80" title="word-wrap: normal; word-break: normal;">
죽는 날까지 하늘을 우러러 한점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지, 그리고 나한테 주어진 길을 걸어가야겠다. 오늘밤에도 별이 바람에 스치운다.
</textarea>

<p>
	class="wwbw wbka" ))) 단어길이가 폭보다 길면 개행하고, 한 줄보다 짧으면 단어 자르지 않고 공백을 개행한다.
</p>

<textarea rows="5" cols="80" class="wwbw wbka" title="word-wrap:break-word; word-break:keep-all;">
죽는 날까지 하늘을 우러러 한점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지, 그리고 나한테 주어진 길을 걸어가야겠다. 오늘밤에도 별이 바람에 스치운다.
</textarea>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ellipsis">말줄임 <code class="em2">.ellipsis1 .ellipsis2</code></h3>


<p class="ellipsis1">
	.ellipsis1 죽는 날까지 하늘을 우러러 한점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지, 그리고 나한테 주어진 길을 걸어가야겠다. 오늘밤에도 별이 바람에 스치운다.
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
</p>

<p class="ellipsis2">
	.ellipsis2 죽는 날까지 하늘을 우러러 한점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지, 그리고 나한테 주어진 길을 걸어가야겠다. 오늘밤에도 별이 바람에 스치운다.
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
</p>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="box-shadow_linear-gradient">박스 장식 <code class="em3">box-shadow | linear-gradient</code></h3>


<div class="box1 bsd1">
	.bsd1
</div>

<br />

<div class="box1 bsd2">
	.bsd2
</div>

<br />

<div class="box1 bsd1in1">
	.bsd1in1
</div>

<br />

<div class="box1 lgdD">
	.lgdD
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="wrap1map1">맵래퍼 <code class="em2">.wrap1map1</code></h3>


<!-- wrap1map1 -->
<div class="wrap1map1">
	<div class="map">
		<!-- ★여기 맵API 오시오 -->
	</div>
</div>
<!-- /wrap1map1 -->


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="switch">스위치 <code class="em2">.switch</code></h3>


<a href="#★?" class="switch">
	<span class="sw-off"><i class="ic1">O</i> <span class="t1">스위치 켜기</span> <small class="fss">(class="sw-off" 상태 보임)</small></span>
	<span class="sw-on"><i class="ic1">X</i> <span class="t1">스위치 끄기</span> <small class="fss">(class="sw-on" 상태 보임)</small></span>
</a>
<script>/*<![CDATA[*/
	/** ◇◆ 부모활성토글 | 20201127. MoonYoungShin.
	 */
	MJS = window.MJS || {};
	(MJS.activeToggle1 = function(s){
		var $my = $(s);
		$my.on('click', function(e){
			e.preventDefault();
			if( $(this).parent().is('.on') ){
				$(this).removeClass('on').parent().removeClass('on');
			}else{
				$my.removeClass('on').parent().removeClass('on');
				$(this).addClass('on').parent().addClass('on');
			}
		});
	})('a.switch'); // 여기 데모에는 부모활성 동작은 관계없다.
/*]]>*/</script>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="mj-menu-even-width">자동균등폭메뉴 <code class="em2">.mj-menu-even-width</code> > ul > li > a</h3>


<p>
	.mj-menu-even-width > ul > li > a 형태의 메뉴에만 사용가능!!<br />
	a 요소 없이 단순 목록 등에 사용하려면.. JS 재개발 해야 합니다.<br />
</p>

<div class="mj-menu-even-width clearfix">
	<ul class="bu">
		<li class="bgce"><a class="dpb">List Item 일이삼사오륙칠팔구십</a></li>
		<li class="bgce"><a class="dpb">List Item</a></li>
		<li class="bgce"><a class="dpb">List Item</a></li>
		<li class="bgce"><a class="dpb">List Item</a></li>
		<li class="bgce"><a class="dpb">List Item</a></li>
		<li class="bgce"><a class="dpb">List Item</a></li>
	</ul>
</div>
<script>/*<![CDATA[*/
	makeEvenWidthMenus(18); // 자동균등폭
/*]]>*/</script>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="flex1wrap1">유연한 래퍼 <code class="em2">.flex1wrap1</code></h3>
<p>
	<em class="em">))) .flex1wrap1 스타일 버림. 필요 시 스타일 재정의.</em><br />
	<em class="em">))) object-fit 등 다른 CSS 활용바람</em><br />
</p>

<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">
		<div class="flex1wrap1">
				.flex1wrap1
		</div>
	</div>
	<div class="column">
		<div class="flex1wrap1 wmv1pdt">
			<div class="flex1wrap1fix1">
				<div class="alternativeContent">
					.flex1wrap1.wmv1pdt
				</div>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="flex1wrap1 youtube">
			<div class="flex1wrap1fix1">
				<div class="alternativeContent">
					.flex1wrap1.youtube
				</div>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="flex1wrap1 vimeo">
			.flex1wrap1.vimeo
		</div>
	</div>
	<div class="column">
		<div class="flex1wrap1 widescreen">
			.flex1wrap1.widescreen
		</div>
	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">flex1wrap1 &gt; div.flex1cont1 (, iframe, object, embed, video, img)</h4>


<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">

		<strong class="h1">div.flex1cont1</strong>
		<div class="flex1wrap1">
			<div class="flex1cont1" style="background:#bde;"></div>
		</div>

	</div>
	<div class="column">

		<strong class="h1">iframe</strong>
		<div class="flex1wrap1">
			<iframe title="빈프레임" style="background:#ee0;"></iframe>
		</div>

	</div>
	<div class="column">

		<strong class="h1">object</strong>
		<div class="flex1wrap1">
			<object type="application/x-shockwave-flash" data="../../data/flash/f4player/player.swf?v1.3.5" style="background:#ee0;"></object>
		</div>

	</div>
	<div class="column">

		<strong class="h1">embed</strong>
		<div class="flex1wrap1">
			<embed style="background:#ee0;" />
		</div>

	</div>
	<div class="column">

		<strong class="h1">video</strong>
		<div class="flex1wrap1">
			<video style="background:#ee0;"></video>
		</div>

	</div>
	<!-- <div class="column">

		<strong class="h1">img (no src :: HTML invalid)</strong>
		<div class="flex1wrap1">
			<img  alt="★대체텍스트필수" style="background:#ee0;" />
		</div>

	</div> -->
	<div class="column">

		<strong class="h1">img src="b.png"</strong>
		<div class="flex1wrap1">
			<img src="../../img/lib/b.png" alt="★대체텍스트필수" style="background:#ee0;" />
		</div>

	</div>
	<div class="column">

		<strong class="h1">.flex1wrap1fix1 &gt; img</strong>
		<div class="flex1wrap1">
			<div class="flex1wrap1fix1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4" id="ratio4by3">Aspect Ratio</h4>


<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">

		<strong class="h1">default (16:9)</strong>
		<div class="flex1wrap1">
		</div>

	</div>
	<div class="column">

		<strong class="h1">2:1</strong>
		<div class="flex1wrap1 ratio2by1">
		</div>

	</div>
	<div class="column">

		<strong class="h1">16:9</strong>
		<div class="flex1wrap1 ratio16by9">
		</div>

	</div>
	<div class="column">

		<strong class="h1">16:10</strong>
		<div class="flex1wrap1 ratio16by10">
		</div>

	</div>
	<div class="column">

		<strong class="h1">3:2</strong>
		<div class="flex1wrap1 ratio3by2">
		</div>

	</div>
	<div class="column">

		<strong class="h1">4:3</strong>
		<div class="flex1wrap1 ratio4by3">
		</div>

	</div>
	<div class="column">

		<strong class="h1">16:13</strong>
		<div class="flex1wrap1 ratio16by13">
		</div>

	</div>
	<div class="column">

		<strong class="h1">1:1</strong>
		<div class="flex1wrap1 ratio1by1">
		</div>

	</div>
	<div class="column">

		<strong class="h1">7:10</strong>
		<div class="flex1wrap1 ratio7by10">
		</div>

	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">flex1wrap1 &gt; .f1p1 &gt; img</h4>


<p>
	이미지를 보여줄 때 크게 2가지를 생각해보자.
	대표 또는 큰(원본) 이미지 상세보기와 섬네일 갤러리 형태가 있다.<br />
	상세보기에서는 당연히 이미지 잘림이 없이 모두 보여야 할테고..<br />
	섬네일은 원본 이미지 링크 역할이므로.. 잘려도 상관없다고 본다. (틀에 꽉차야 한다.)
</p>


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5"><code class="em2">.tall</code> 키큰이미지용 ☆ 여백(무) 잘림(하) 왜곡(폭큰이미지)</h5>

<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">

		<strong class="fsd">.flex1wrap1<em class="em">.tall</em> &gt; .f1p1 &gt; img</strong>
		<div class="flex1wrap1 tall">
			<span class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</span>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio2by1 img</strong> <small class="em1">잘림</small>
		<div class="flex1wrap1 tall ratio2by1">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio16by9 img</strong> <small class="em1">잘림</small>
		<div class="flex1wrap1 tall ratio16by9">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio16by10 img</strong> <small class="em1">잘림</small>
		<div class="flex1wrap1 tall ratio16by10">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio3by2 img</strong>
		<div class="flex1wrap1 tall ratio3by2">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio4by3 img</strong> <small class="em1">왜곡</small>
		<div class="flex1wrap1 tall ratio4by3">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio1by1 img</strong> <small class="em1">왜곡</small>
		<div class="flex1wrap1 tall ratio1by1">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5"><code class="em2">.wide</code> 폭큰이미지용 ☆ 여백(무) 잘림(좌우) 왜곡(키큰이미지)</h5>


<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">

		<strong class="fsd">.flex1wrap1<em class="em">.wide</em> &gt; .f1p1 &gt; img</strong>
		<div class="flex1wrap1 wide">
			<span class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</span>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio2by1 img</strong> <small class="em1">왜곡</small>
		<div class="flex1wrap1 wide ratio2by1">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio16by9 img</strong> <small class="em1">왜곡</small>
		<div class="flex1wrap1 wide ratio16by9">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio16by10 img</strong> <small class="em1">왜곡</small>
		<div class="flex1wrap1 wide ratio16by10">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio3by2 img</strong>
		<div class="flex1wrap1 wide ratio3by2">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio4by3 img</strong> <small class="em1">잘림</small>
		<div class="flex1wrap1 wide ratio4by3">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio1by1 img</strong> <small class="em1">잘림</small>
		<div class="flex1wrap1 wide ratio1by1">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
</div>
<!-- /even-grid -->


<br />
<!-- ◇◆◇◆ -->
<h5 class="hb1 h5"><code class="em2">.fit</code> 풀프레임(가로세로중앙정렬) ☆ 여백(무) 잘림(상하좌우) 왜곡(없다) <code class="em">{object-fit:cover;}</code></h5>

<p>
	[~IE11] object-fit 속성 지원 안함 ))) .flex1wrap1.tall 과 동일하게 동작.
</p>

<!-- even-grid -->
<div class="even-grid evenmix-1234">
	<div class="column">

		<strong class="fsd">.flex1wrap1<em class="em">.fit</em> &gt; .f1p1 &gt; img</strong>
		<div class="flex1wrap1 fit">
			<span class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</span>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio2by1 img</strong>
		<div class="flex1wrap1 fit ratio2by1">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio16by9 img</strong>
		<div class="flex1wrap1 fit ratio16by9">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio16by10 img</strong>
		<div class="flex1wrap1 fit ratio16by10">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio3by2 img</strong>
		<div class="flex1wrap1 fit ratio3by2">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio4by3 img</strong>
		<div class="flex1wrap1 fit ratio4by3">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
	<div class="column">

		<strong class="fsd">.ratio1by1 img</strong>
		<div class="flex1wrap1 fit ratio1by1">
			<div class="f1p1">
				<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
			</div>
		</div>

	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4" id="Video">Video (HTML5 video) youtube vimeo</h4>


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5" id="block-center">class="block-center" style="max-width:640px;"</h5>


<div class="block-center" style="max-width:640px;">

	<div class="flex1wrap1">
		<video src="http://content.jwplatform.com/videos/HkauGhRi-640.mp4" controls="controls">
			<div class="AlternativeContent">
				<strong class="h1">[★동영상원본제목] 미디어 형식별 동영상</strong>
				<ul>
					<li><a href="/data/video/★동영상원본파일명.mp4" target="_blank">★동영상원본파일명.mp4 다운로드(★동영상원본파일크기MB)</a></li>
				</ul>
				<strong class="h1">동영상 플레이어 다운로드</strong>
				<ul>
					<li><a href="https://www.microsoft.com/korea/windows/windowsmedia/">윈도우 미디어 플레이어</a></li>
					<li><a href="http://www.apple.com/quicktime/download/">퀵 타임 무비 플레이어</a></li>
				</ul>
			</div>
		</video>
	</div>
	
	<br />

	<div class="flex1wrap1">
		<iframe src="http://www.youtube.com/embed/aiBt44rrslw" allowfullscreen="allowfullscreen" title="유튜브 샘플"></iframe>
	</div>
	
	<br />
	
	<div class="flex1wrap1">
		<iframe src="http://player.vimeo.com/video/60122989" allowfullscreen="allowfullscreen" title="비메오 샘플"></iframe>
	</div>

</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="HybridRow">복합배치 .hybrid1row1 …</h3>
<p class="dpib">
	<em class="em">))) 스타일 버림. display:flex; 이용바람</em>
</p>

<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><em class="em2">.hybrid1row1</em> ((장식1글..) .column1(가변or고정) .column2(가변) 세로정렬)</h4>

<p>
	.column2 padding 값은 적용 시 콘텐츠에 맞게 선언하여 사용~
</p>


<div class="hybrid1row1" style="background:#eee;">
	<div class="column1">
		<i class="deco"></i>
	</div>
	<div class="column2 text-align-center-small-only">
		일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid1row1" style="background:#eee;">
	<div class="column1">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
	</div>
	<div class="column2 pdl20px padding-0-small-only">
		일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid1row1" style="background:#eee;">
	<div class="column1">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" />
	</div>
	<div class="column2 pdl20px padding-0-small-only">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><em class="em2">.hybrid2row1</em> ((불릿1글..) .column1(고정) .column2(가변))</h4>


<div class="hybrid2row1" style="background:#eee;">
	<div class="column1">
		<i class="ic1"></i>
	</div>
	<div class="column2">
		일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid2row1" style="background:#eee;">
	<div class="column1">
		<i class="ic1"></i>
	</div>
	<div class="column2">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><em class="em2">.hybrid3row1</em> ((다용도) .column1(고정) .column2(가변))</h4>


<div class="hybrid3row1" style="background:#eee;">
	<div class="column1">
		<i class="deco" style="display:block;width:80px;">
			<img src="<?=$commonPath?>/img/lib/ic160deco1bulb1.png" alt="" />
		</i>
	</div>
	<div class="column2">
		일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid3row1" style="background:#eee;">
	<div class="column1">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" style="max-width:none;width:80px;" />
	</div>
	<div class="column2">
		일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid3row1" style="background:#eee;">
	<div class="column1">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" style="max-width:none;width:80px;" />
	</div>
	<div class="column2">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid3row1" style="background:#eee;">
	<div class="column1" style="padding:.25em .5em 0 0;">
		<i class="ic1" style="display:block;width:20px;">
			<img src="<?=$commonPath?>/img/lib/ic40a5c2exclamation1.png" alt="" />
		</i>
	</div>
	<div class="column2" style="vertical-align:top;">
		일이삼사오륙칠팔구십
	</div>
</div>

<br />

<div class="hybrid3row1" style="background:#eee;">
	<div class="column1" style="padding:.25em .5em 0 0;">
		<i class="ic1" style="display:block;width:20px;">
			<img src="<?=$commonPath?>/img/lib/ic40a5c2exclamation1.png" alt="" />
		</i>
	</div>
	<div class="column2" style="vertical-align:top;">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><em class="em2">.hybrid3row2</em> ((다용도) .column1(가변) .column2(고정))</h4>


<div class="hybrid3row2" style="background:#eee;">
	<div class="column1">
		일이삼사오륙칠팔구십
	</div>
	<div class="column2">
		<i class="deco" style="display:block;width:80px;">
			<img src="<?=$commonPath?>/img/lib/ic160deco1bulb1.png" alt="" />
		</i>
	</div>
</div>

<br />

<div class="hybrid3row2" style="background:#eee;">
	<div class="column1">
		일이삼사오륙칠팔구십
	</div>
	<div class="column2">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" style="max-width:none;width:80px;" />
	</div>
</div>

<br />

<div class="hybrid3row2" style="background:#eee;">
	<div class="column1" style="text-align:justify;">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
	<div class="column2">
		<img src="/_res/@m/_img.ex/w320a1/w320a1001.jpg" alt="★대체텍스트필수" style="max-width:none;width:80px;" />
	</div>
</div>

<br />

<div class="hybrid3row2" style="background:#eee;">
	<div class="column1" style="vertical-align:top;">
		일이삼사오륙칠팔구십
	</div>
	<div class="column2" style="padding:.25em .5em 0 0;">
		<i class="ic1" style="display:block;width:20px;">
			<img src="<?=$commonPath?>/img/lib/ic40a5c2exclamation1.png" alt="" />
		</i>
	</div>
</div>

<br />

<div class="hybrid3row2" style="background:#eee;">
	<div class="column1" style="vertical-align:top;">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
	<div class="column2" style="padding:.25em .5em 0 0;">
		<i class="ic1" style="display:block;width:20px;">
			<img src="<?=$commonPath?>/img/lib/ic40a5c2exclamation1.png" alt="" />
		</i>
	</div>
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ResponsiveTable">반응형 표</h3>
<p class="dpib">
	<em class="em">))) 스타일 버림. 필요하면 CSS 재정의</em><br />
	<em class="em">))) .small-is-block 는 남겨둠</em><br />
</p>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><code class="em2">.dl2table1</code> dl</h4>


<!-- dl2table1 -->
<div class="dl2table1">
	<strong class="h1">공개목록명 : <b class="em4">제설함 배치현황</b></strong>
	<dl>
	<dt class="dt1 first-cell">대분류</dt>
	<dd class="dd1">공공질서 및 안전&nbsp;</dd>
	<dt class="dt1">중분류</dt>
	<dd class="dd1">재난방재및민방위&nbsp;</dd>
	<dt class="dt1">소분류</dt>
	<dd class="dd1">&nbsp;</dd>
	<dt class="dt1">관련기능</dt>
	<dd class="dd1">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십&nbsp;</dd>
	<dt class="dt2">공개범위</dt>
	<dd class="dd2">&nbsp;</dd>
	<dt class="dt2">공표부서</dt>
	<dd class="dd2">도로과&nbsp;</dd>
	<dt class="dt1">공표주기</dt>
	<dd class="dd1">매년&nbsp;</dd>
	<dt class="dt1">공표시기</dt>
	<dd class="dd1">1월&nbsp;</dd>
	<dt class="dt1">담당자</dt>
	<dd class="dd1">&nbsp;</dd>
	<dt class="dt1">공표방법</dt>
	<dd class="dd1">홈페이지&nbsp;</dd>
	</dl>
</div>
<!-- /dl2table1 -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">table<code class="em2">.small-is-block</code></h4>


<!-- writeform1 -->
<table class="writeform1 t3 ttpdtb0375em ttpdlr2pct thtac small-is-block">
	<caption>
		<strong class="h1 blind">연구자 정보 작성폼</strong>
		<span class="summary1 blind">성명, 소속, 전화번호, 이메일</span>
	</caption>
	<col class="w6em width9em-medium" /><col /><col class="w6em width9em-medium" /><col />
	<tbody>
	<tr>
	<th scope="row"><label for="★1★2★1">성명</label></th>
	<td><input type="text" id="★1★2★1" value="" class="w100" /></td>
	<th scope="row"><label for="★1★2★2">소속</label></th>
	<td><input type="text" id="★1★2★2" value="" class="w100" /></td>
	</tr>
	<tr>
	<th scope="row"><label for="★1★2★3">전화번호</label></th>
	<td><input type="text" id="★1★2★3" value="" class="w100" /></td>
	<th scope="row"><label for="★1★2★4">이메일</label></th>
	<td><input type="text" id="★1★2★4" value="" class="w100" /></td>
	</tr>
	</tbody>
</table>
<!-- /writeform1 -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">table<code class="em2">.table2block1</code></h4>


<!-- table2block1 -->
<table class="t3 w100 lhD table2block1">
<caption>
	<strong class="blind">우리시 공보 목록</strong>
	<span class="summary1 blind">: ★표요약,구조,탐색방법</span>
</caption>
<col /><col /><col style="width:220px;" />
<thead>
<tr>
<th scope="col">번호</th>
<th scope="col">제목</th>
<th scope="col">메뉴</th>
</tr>
</thead>
<tbody class="thtal tdtac ttvam ttbgcf">
<tr>
<td>9999</td>
<th scope="row">우주시 공보 제464호</th>
<td>
	<div class="ebook1btns">
		<a href="?#★" target="_blank" title="바로보기 [새 창]" class="b1 quickview"><i class="ic1"></i> 바로보기</a>
		<a href="?#★" target="_blank" title="다운로드 [새 창]" class="b1 download"><i class="ic1"></i> 다운로드</a>
	</div>
</td>
</tr>
<tr>
<td>9998</td>
<th scope="row">일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</th>
<td>
	<div class="ebook1btns">
		<a class="b1 quickview"><i class="ic1"></i> <span class="blind">바로보기</span> 변환중…</a>
		<a href="?#★" target="_blank" title="다운로드 [새 창]" class="b1 download"><i class="ic1"></i> 다운로드</a>
	</div>
</td>
</tr>
<tr>
<td>9997</td>
<th scope="row">일이삼사오륙칠팔구십</th>
<td>
	<div class="ebook1btns">
		<a href="?#★" target="_blank" title="바로보기 [새 창]" class="b1 quickview"><i class="ic1"></i> 바로보기</a>
		<a href="?#★" target="_blank" title="다운로드 [새 창]" class="b1 download"><i class="ic1"></i> 다운로드</a>
	</div>
</td>
</tr>
</tbody>
</table>
<!-- /table2block1 -->


<p>
	))) <a href="./lab.table_respond.jsp">표 반응형 샘플 더 보기</a>
</p>


<!-- ◇◆◇◆◇◆◇◆◇◆ -->
<h2 class="demo" id="lib">lib.css</h2>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ListMargin">목록마진변이 <code class="em2">.ttmg0 .dfn</code></h3>


<!-- even-grid -->
<div class="even-grid evenmix-13 vgap0">
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">ul.bu</h4>
		<div style="background:#eee;overflow:hidden;">
			<ul class="bu">
			<li>매월 셋째주 월요일 9시부터 다음 달 체험 예약 가능</li>
			<li>예약구분 : 오전(10:00~12:00), 오후(14:00~16:00)</li>
			<li>예약인원 : 1회당 단체는 10인 이상 예약가능<br />
				(60명 한도)<br />
				※ 개인은 전화예약가능
			</li>
			<li>사전예약 : 체험희망일로부터 7일 전까지 예약<br />
				※ 예약 변경 시에는 체험일 2일 전까지 예약 취소해주시기 바랍니다.
			</li>
			<li>휴관일 : 민방위교육기간, 주말 및 공휴일</li>
			</ul>

		</div>
	</div>
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">ul.bu.mgtb0.ttmg0</h4>
		<div style="background:#eee;overflow:hidden;">
			<ul class="bu mgtb0 ttmg0">
			<li>매월 셋째주 월요일 9시부터 다음 달 체험 예약 가능</li>
			<li>예약구분 : 오전(10:00~12:00), 오후(14:00~16:00)</li>
			<li>예약인원 : 1회당 단체는 10인 이상 예약가능<br />
				(60명 한도)<br />
				※ 개인은 전화예약가능
			</li>
			<li>사전예약 : 체험희망일로부터 7일 전까지 예약<br />
				※ 예약 변경 시에는 체험일 2일 전까지 예약 취소해주시기 바랍니다.
			</li>
			<li>휴관일 : 민방위교육기간, 주말 및 공휴일</li>
			</ul>

		</div>
	</div>
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">ul.bu.dfn</h4>
		<div style="background:#eee;overflow:hidden;">
			<ul class="bu dfn">
			<li>매월 셋째주 월요일 9시부터 다음 달 체험 예약 가능</li>
			<li>예약구분 : 오전(10:00~12:00), 오후(14:00~16:00)</li>
			<li>예약인원 : 1회당 단체는 10인 이상 예약가능<br />
				(60명 한도)<br />
				※ 개인은 전화예약가능
			</li>
			<li>사전예약 : 체험희망일로부터 7일 전까지 예약<br />
				※ 예약 변경 시에는 체험일 2일 전까지 예약 취소해주시기 바랍니다.
			</li>
			<li>휴관일 : 민방위교육기간, 주말 및 공휴일</li>
			</ul>

		</div>
	</div>
</div>
<!-- /even-grid -->


<!-- even-grid -->
<div class="even-grid evenmix-13 vgap0">
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">ul.bu.lhD</h4>
		<div style="background:#eee;overflow:hidden;">
			<ul class="bu lhD">
			<li>매월 셋째주 월요일 9시부터 다음 달 체험 예약 가능</li>
			<li>예약구분 : 오전(10:00~12:00), 오후(14:00~16:00)</li>
			<li>예약인원 : 1회당 단체는 10인 이상 예약가능<br />
				(60명 한도)<br />
				※ 개인은 전화예약가능
			</li>
			<li>사전예약 : 체험희망일로부터 7일 전까지 예약<br />
				※ 예약 변경 시에는 체험일 2일 전까지 예약 취소해주시기 바랍니다.
			</li>
			<li>휴관일 : 민방위교육기간, 주말 및 공휴일</li>
			</ul>

		</div>
	</div>
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">ul.bu.lhD.mgtb0.ttmg0</h4>
		<div style="background:#eee;overflow:hidden;">
			<ul class="bu lhD mgtb0 ttmg0">
			<li>매월 셋째주 월요일 9시부터 다음 달 체험 예약 가능</li>
			<li>예약구분 : 오전(10:00~12:00), 오후(14:00~16:00)</li>
			<li>예약인원 : 1회당 단체는 10인 이상 예약가능<br />
				(60명 한도)<br />
				※ 개인은 전화예약가능
			</li>
			<li>사전예약 : 체험희망일로부터 7일 전까지 예약<br />
				※ 예약 변경 시에는 체험일 2일 전까지 예약 취소해주시기 바랍니다.
			</li>
			<li>휴관일 : 민방위교육기간, 주말 및 공휴일</li>
			</ul>

		</div>
	</div>
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">ul.bu.lhD.dfn</h4>
		<div style="background:#eee;overflow:hidden;">
			<ul class="bu lhD dfn">
			<li>매월 셋째주 월요일 9시부터 다음 달 체험 예약 가능</li>
			<li>예약구분 : 오전(10:00~12:00), 오후(14:00~16:00)</li>
			<li>예약인원 : 1회당 단체는 10인 이상 예약가능<br />
				(60명 한도)<br />
				※ 개인은 전화예약가능
			</li>
			<li>사전예약 : 체험희망일로부터 7일 전까지 예약<br />
				※ 예약 변경 시에는 체험일 2일 전까지 예약 취소해주시기 바랍니다.
			</li>
			<li>휴관일 : 민방위교육기간, 주말 및 공휴일</li>
			</ul>

		</div>
	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="DfnListBulletInline">정의목록.불릿.인라인 <code class="em2">dl.bu.fixed1auto1.dtw4em</code></h3>


<!-- even-grid -->
<div class="even-grid evenmix-12 vgap0">
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">dl.bu.fixed1auto1.dtw4em</h4>
		<dl class="bu fixed1auto1 dtw4em">
			<dt>닉네임</dt>
			<dd>일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</dd>
			<dt>탑승인원</dt>
			<dd>승무원 2명, 주객실 2열 29석, 27석(조리실 장착시)</dd>
			<dt>개발사</dt>
			<dd>BAe (British Aerospace)</dd>
		</dl>
	</div>
	<div class="column">
		<!-- ◇◆◇◆◇◆ -->
		<!-- ◇◆◇◆◇◆ -->
		<h4 class="hb1 h4 mgt0">dl.bu.fixed1auto1.dtw4em.lhD</h4>
		<dl class="bu fixed1auto1 dtw4em lhD">
			<dt>닉네임</dt>
			<dd>일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</dd>
			<dt>탑승인원</dt>
			<dd>승무원 2명, 주객실 2열 29석, 27석(조리실 장착시)</dd>
			<dt>개발사</dt>
			<dd>BAe (British Aerospace)</dd>
		</dl>
	</div>
</div>
<!-- /even-grid -->


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="BulletIconList">불릿아이콘목록 <code class="em2">ul.bi1</code></h3>


<ul class="bi1 mgt075em mgb0">
<li class="li1">관광객요청코스를 선택하셨을 경우 입력하세요!</li>
</ul>

<ul class="bi1">
<li class="li1">결제는 10일 내에 입금해주시기 바랍니다.</li>
<li class="li1">수강료 환불규정은 다음과 같습니다.</li>
<li class="li1">
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
</li>
</ul>

<ul class="bi1">
<li class="li1"><strong class="em0">기관 관리자 관리</strong>
	<ul class="bu mgl-15em">
	<li>CMS 관리자 권한 부여</li>
	</ul>
</li>
<li class="li1"><strong class="em0">기관별 연구원(회원) 관리</strong>
	<ul class="bu mgl-15em">
	<li>회원정보 필터링 : 소속기관, 이름, 상태로 필터링 가능하게 구축</li>
	<li>회원관리 : 분류(회원), 소속기관(텍스트), 소속부서(텍스트), 이름(텍스트), 휴대폰번호(숫자), 이메일(텍스트), 첨부파일, 상태(사용가능/사용불가능)</li>
	<li>필터값 인쇄기능</li>
	</ul>
</li>
<li class="li1"><strong class="em0">자문업체 (회원) 관리</strong>
	<ul class="bu mgl-15em">
	<li>업체관리 : 분류(자문업체), 업체명(텍스트), 소속부서(텍스트), 이름(텍스트), 휴대폰번호(숫자), 이메일(텍스트), 첨부파일, 상태(사용가능/사용불가능)</li>
	</ul>
</li>
</ul>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ListLine">목록라인 <code class="em2">ul.bu.lst1ic1line1</code></h3>


<ul class="bu lst1ic1line1">
<li><span class="dpib w4em">기증자</span> <span class="sep">:</span> 김기호</li>
<li><span class="dpib w4em">수량</span> <span class="sep">:</span> 1책</li>
<li><span class="dpib w4em">기증일자</span> <span class="sep">:</span> 2017.11.03</li>
<li><span class="dpib w4em">비고</span> <span class="sep">:</span>
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
</li>
<li><span class="dpib w4em">비고</span> <span class="sep">:</span>
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
</li>
<li><span class="dpib">메모</span> <span class="sep">:</span>
	<div class="pdb025em">
		강원도 양양군 양양읍에 사시는 김기호님의 조부께서 직접 배첩한 척주동해비탁본첩입니다.<br />
		기증에 감사드리며 소중한 자료로 활용하겠습니다.<br />
	</div>
</li>
</ul>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="Line">라인 .bdt1px …</h3>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">div.bdt1px.mgt125em.mgb125em <i class="sep">=</i> hr <i class="sep">=</i> hr.bdt1px</h4>


<div class="bdt1px mgt125em mgb125em"></div>
<hr />
<hr class="bdt1px" />


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4"><span class="vam">hr.bdsds</span> <i class="sep1 vam">|</i> <span class="vam">hr.bdsdt.dbcc</span></h4>


<hr class="bdsds" />
<hr class="bdsdt bdcc" />


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ChildMargin">자식마진 <code class="em2">.fc-mgt0 .lc-mgb0</code></h3>


<div style="background:#eee;overflow:hidden;">
<p>문단 div &gt; p</p>
</div>

<br />

<div class="fc-mgt0" style="background:#eee;overflow:hidden;">
<p>문단 div.fc-mgt0 &gt; p</p>
</div>

<br />

<div class="lc-mgb0" style="background:#eee;overflow:hidden;">
<p>문단 div.lc-mgb0 &gt; p</p>
</div>

<br />

<div class="fc-mgt0 lc-mgb0" style="background:#eee;overflow:hidden;">
<p>문단 div.fc-mgt0.lc-mgb0 &gt; p</p>
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="MenuGroup">메뉴그룹 <code class="em2">.menu-group1</code></h3>


<div class="menu-group1">
	<a href="#" class="m on">가나다순</a>
	<a href="#" class="m">인기순</a>
	<a href="#" class="m">평점순</a>
</div>

<div class="menu-group1">
	<a href="#" class="m">여러줄이면</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
	<a href="#" class="m">일이삼사오륙칠팔구십</a>
</div>

<script>/*<![CDATA[*/
	$('.menu-group1 .m').on('click', function(e){
		e.preventDefault();
		$(this).addClass('on').siblings().removeClass('on');
	});
/*]]>*/</script>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="Separator">분리기호 <code class="em2">.sep .sep1 .sep1dot2</code></h3>


<div>
	<span>제목</span> <i class="sep">:</i> 
	<span>일이삼사오륙칠팔구십 class="sep"</span>
</div>
<div>
	<span class="vam">제목</span> <i class="sep1">|</i> 
	<span class="vam">일이삼사오륙칠팔구십 class="sep1"</span>
</div>
<div>
	<span class="vam">제목</span> <i class="sep1dot2">|</i> 
	<span class="vam">일이삼사오륙칠팔구십 class="sep1dot2"</span>
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="DatePicker">달력날짜선택기 <code class="em2">&lt;input type="text" class="date" /&gt;</code></h3>


<?php include "inc_datepicker.php"; ?>

<span class="dpib"><input type="text" value="2020.11.30" size="10" title="방문시작일" class="date" /></span>
<span class="vam">~</span>
<span class="dpib"><input type="text" value="2020.11.30" size="10" title="방문종료일" class="date" /></span>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="mAlert">알림</h3>


<div class="m-alert1">(터치) 스크롤 해서 확인하세요! .m-alert1</div>
<div class="panel1 mgt05em">
	콘텐츠
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
</div>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="ViewLargerImage">이미지 크게 보기 자동 생성 <code class="em2">.mj-view-larger</code> [JS]</h3>
<p class="dpib">
	<em class="em">))) JS 버림. 필요하면 재개발</em>
</p>

<p>
	<img src="/_res/@m/_img.ex/koala-630117_1280.jpg" alt="★1대체텍스트필수" class="mj-view-larger" />
	<!-- <a href="/_res/@m/_img.ex/koala-630117_1280.jpg" target="_blank" rel="noopener" title="새 창" class="a-view-larger"><i class="ic1"></i> <span class="t1">이미지 크게 보기</span></a> -->
</p>
<p><img src="/_res/@m/_img.ex/w160/koala-630117_160.jpg" alt="★2대체텍스트필수" class="mj-view-larger" /></p>
<p><img src="/_res/@m/_img.ex/w320/koala-630117_320.jpg" alt="★3대체텍스트필수" class="mj-view-larger" /></p>



<!-- ◇◆◇◆◇◆◇◆◇◆ -->
<h2 class="demo" id="lib1cp1">lib1cp1.css</h2>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="PublicIcon">공용 아이콘</h3>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4" id="PublicIcon">독립 아이콘</h4>


<i class="ic1 indy"></i>
<i class="ic1 indy ic20info1"></i>
<i class="ic1 indy ic20info2"></i>
<i class="ic1 indy ic80bulb1"></i>
<i class="ic1 indy ic20plus1"></i>
<i class="ic1 indy ic20download1"></i>
<i class="ic1 indy aircraft1"></i>
<i class="ic1 indy aircraft1 size30px"></i>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4" id="PublicIcon">버튼 아이콘</h4>


<a href="?#★" class="button t1ic1"><span class="t1">검색</span> <i class="ic1 search"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">내려받기</span> <i class="ic1 download"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">동영상</span> <i class="ic1 video"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">도움말</span> <i class="ic1 help"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">추가</span> <i class="ic1 add"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">목록</span> <i class="ic1 list"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">새로고침</span> <i class="ic1 reload"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">이전</span> <i class="ic1 prev"></i></a>
<a href="?#★" class="button t1ic1"><span class="t1">다음</span> <i class="ic1 next"></i></a>
<a href="?#★" class="button small t1ic1"><span class="t1">바로가기</span> <i class="ic1 size10px"></i></a>

<br />

<a href="?#★" class="button default t1ic1"><span class="t1">검색</span> <i class="ic1 search"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">내려받기</span> <i class="ic1 download"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">동영상</span> <i class="ic1 video"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">도움말</span> <i class="ic1 help"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">추가</span> <i class="ic1 add"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">목록</span> <i class="ic1 list"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">새로고침</span> <i class="ic1 reload"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">이전</span> <i class="ic1 prev"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">다음</span> <i class="ic1 next"></i></a>
<a href="?#★" class="button default small t1ic1"><span class="t1">바로가기</span> <i class="ic1 size10px"></i></a>

<br />

<a href="?#★" class="button default t1ic1"><span class="t1">다운로드3</span> <i class="ic1 download3"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">PDF</span> <i class="ic1 install_pdf"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">HWP</span> <i class="ic1 install_hwp"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">XLS</span> <i class="ic1 install_xls"></i></a>
<a href="?#★" class="button default t1ic1"><span class="t1">바</span> <i class="ic1 bars"></i></a>

<br />


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="Jumbotron">대형 전광판</h3>


<!-- jumbotron1 -->
<div class="jumbotron1">
	<strong class="t1">
		<i class="ic1 indy ic55check1"></i>
		<br class="show-all hide-medium" />
		<span class="dpib vam">회원가입이 <span class="dpib">완료되었습니다.</span></span>
	</strong>
	<p class="t2">
		로그인 후 <span class="dpib">동아리 게시판을 이용해주세요.</span><br />
	</p>
	<p>
		<a href="?#★" class="button large">로그인하기</a>
	</p>
</div>
<!-- /jumbotron1 -->


<!-- jumbotron1 -->
<div class="jumbotron1">
<div class="wrap1">

	<i class="ic1 indy ic120bulb1"></i>
	<div class="tg1">
		<p class="t1">
			모니터링실 <em class="em">이용 신청</em>이 <em class="em">접수</em>되었습니다.
		</p>
		<p class="t2">
			<em class="em">관리자 사용승인</em>이 <em class="em">완료</em>되어야 <em class="em">최종 신청</em>이 <em class="em">완료</em>됩니다.
		</p>
	</div>
	<div class="btns">
		<a href="?#★" class="button large primary">내 신청 확인</a>
	</div>

</div>
</div>
<!-- /jumbotron1 -->


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="InfoMenuSearchAsk">정보 메뉴 검색 조회</h3>


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

	<!-- search1select1 -->
	<div class="search1select1 icbtn">
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

	<!-- search1select2 -->
	<div class="search1select2">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select title="선택옵션1" class="select1">
			<option value="">선택옵션1-1</option>
			</select>
			<select title="선택옵션2" class="select2">
			<option value="">선택옵션2-1</option>
			</select>
			<input type="text" value="" title="검색어" class="text1" />
			<button type="submit" class="button submit search"><i class="ic1"></i><span class="t1">검색</span></button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select2 -->

	<!-- search1select3 -->
	<div class="search1select3">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select title="선택옵션1" class="select1">
			<option value="">선택옵션1-1</option>
			</select>
			<select title="선택옵션2" class="select2">
			<option value="">선택옵션2-1</option>
			</select>
			<select title="선택옵션3" class="select3">
			<option value="">선택옵션3-1</option>
			</select>
			<input type="text" value="" title="검색어" class="text1" />
			<button type="submit" class="button submit search"><i class="ic1"></i><span class="t1">검색</span></button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select3 -->

	<!-- search1select0 -->
	<div class="search1select0">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<input type="text" value="" title="검색어" class="text1" />
			<button type="submit" class="button submit search"><i class="ic1"></i><span class="t1">검색</span></button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select0 -->

	<!-- search1select3 -->
	<div class="search1select3 text0">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select title="선택옵션1" class="select1">
			<option value="">선택옵션1-1</option>
			</select>
			<select title="선택옵션2" class="select2">
			<option value="">선택옵션2-1</option>
			</select>
			<select title="선택옵션3" class="select3">
			<option value="">선택옵션3-1</option>
			</select>
			<button type="submit" class="button submit search width100pct-small display-block-medium">
				<i class="ic1"></i><span class="t1">검색</span>
			</button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select3 -->

	<!-- search1select3 -->
	<div class="search1select3 text0">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select title="선택옵션1" class="select1">
			<option value="">선택옵션1-1</option>
			</select>
			<select title="선택옵션2" class="select2">
			<option value="">선택옵션2-1</option>
			</select>
			<select title="선택옵션3" class="select3">
			<option value="">선택옵션3-1</option>
			</select>
			<select title="선택옵션4" class="select4">
			<option value="">선택옵션4-1</option>
			</select>
			<button type="submit" class="button submit search">
				<i class="ic1"></i><span class="t1">검색</span>
			</button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select3 -->

	<!-- search1select3 -->
	<div class="search1select3 text0">
		<form action="?#★">
		<fieldset><legend class="blind">게시물 검색</legend>
			<select title="선택옵션1" class="select1">
			<option value="">선택옵션1-1</option>
			</select>
			<select title="선택옵션2" class="select2">
			<option value="">선택옵션2-1</option>
			</select>
			<select title="선택옵션3" class="select3">
			<option value="">선택옵션3-1</option>
			</select>
			<select title="선택옵션4" class="select4">
			<option value="">선택옵션4-1</option>
			</select>
			<select title="선택옵션5" class="select5">
			<option value="">선택옵션5-1</option>
			</select>
			<button type="submit" class="button submit search">
				<i class="ic1"></i><span class="t1">검색</span>
			</button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select3 -->

	<!-- search1select0btn2 -->
	<div class="search1select0btn2">
		<form action="?">
		<fieldset><legend class="blind">게시물 검색</legend>
			<input type="text" value="" title="검색어" class="text1" />
			<button type="submit" class="button submit search  ic1t1">
				<i class="ic1 search"></i><span class="t1">주소검색</span>
			</button>
			<button type="button" class="button ic1t1" onclick="confirm('현재 위치 정보를 사용하고자 합니다. 동의하십니까?'); return false;">
				<i class="ic1 here"></i><span class="t1">내 주변 검색</span>
			</button>
		</fieldset>
		</form>
	</div>
	<!-- /search1select0btn2 -->


	<!-- search1select1btn2 -->
	<div class="search1select1btn2 pd20px bgcf4">

		<!-- form -->
		<form action="?#★" class="dpi">
		<!-- <fieldset class="dpi"> ☆ 여기 fieldset 태그 넣으면 배치 결함 발생 -->
			<legend class="blind">게시물 검색</legend>
			<select title="검색종류1" class="select1">
				<option value="">선택옵션1-1</option>
			</select>
			<input type="text" value="" title="검색어" class="text1" />
			<button type="submit" class="button submit search"><span class="t1">검색</span></button>
		<!-- </fieldset> -->
		</form>
		<!-- /form -->

		<a href="#search1detail1" class="button default toggle"><span class="t1">상세검색 <span class="blind">여닫기</span></span></a>

		<div class="brclear clearfix"></div>

		<!-- search1detail1 -->
		<div id="search1detail1" class="search1detail1">

			<!-- form -->
			<form action="?#★">
			<fieldset>
				<legend class="blind">상세검색 검색</legend>

				<ul>
					<li>
						<label for="hmeKrlname">유물명칭</label>
						<input type="text" id="hmeKrlname" name="hmeKrlname" value="" />
					</li>
					<li>
						<label for="hmeRlmaker">작가/제작처</label>
						<input type="text" id="hmeRlmaker" name="hmeRlmaker" value="" />
					</li>
					<li>
						<label for="country1">국적/시대</label>
						<select id="country1" title="국적/시대">
							<option value="">선택해주세요.</option>
						</select>
						<select id="country2" title="상세 국적/시대">
							<option value="">선택해주세요.</option>
						</select>
					</li>
					<li>	
						<label for="material1">재질</label>
						<select id="material1" title="재질">
							<option value="">선택해주세요.</option>
						</select>
						<select id="material2" title="상세 재질">
							<option value="">선택해주세요.</option>
						</select>
					</li>
					<li>
						<label for="kind">지정구분</label>
						<select id="kind" title="지정구분">
							<option value="">선택해주세요.</option>
						</select>
					</li>
					<li>
						<label for="rluse1">용도/기능</label>
						<select id="rluse1" title="용도/기능1"><option value="">선택해주세요.</option></select>
						<select id="rluse2" title="용도/기능2"><option value="">선택해주세요.</option></select>
						<select id="rluse3" title="용도/기능3"><option value="">선택해주세요.</option></select>
					</li>
					<li>
						<label for="yield1">출토지</label>
						<select id="yield1" title="출토지역"><option value="">선택해주세요.</option></select>
						<select id="yield2" title="세부출토지역" ><option value="">선택해주세요.</option></select>
					</li>				
					<li>
						<label for="deco1">문양/장식</label>
						<select id="deco1" title="문양/장식"><option value="">선택해주세요.</option></select>
						<select id="deco2" title="세부 문양/장식"><option value="">선택해주세요.</option></select>
					</li>				
					<li>
						<label for="article">명문/구분</label>
						<select id="article" title="명문/구분"><option value="">선택해주세요</option></select>
					</li>			
					<li>
						<label for="hmeRlroom">전시실</label>
						<select id="hmeRlroom" name="hmeRlroom" title="전시실">
							<option value="" selected="selected">선택해주세요.</option>
							<option value="1">제1전시실</option>
							<option value="2">제2전시실</option>
							<option value="3">제3전시실</option>
							<option value="4">제4전시실</option>
							<option value="5">제5전시실</option>
							<option value="6">제6전시실</option>
							<option value="7">제7전시실</option>
							<option value="S">기획전시실</option>
							<option value="F">야외전시실</option>
							<option value="E">기타</option>
						</select>
					</li>		
					<li>
						<input id="hmeRlpart" name="hmeRlpart" type="hidden" value="" />
						<label for="part1">소장기관</label>
						<select id="part1" title="소장기관"><option value="">선택해주세요.</option></select>
						<select id="part2" title="소장기관2"><option value="">선택해주세요.</option></select>
					</li>
				</ul>

				<div class="infomenu1">
					<div class="tac">
						<button type="submit" class="button submit">검색</button>
						<button type="reset" class="button reset default">취소</button>
					</div>
				</div>

			</fieldset>
			</form>
			<!-- /form -->

		</div>
		<!-- /search1detail1 -->

	</div>
	<!-- /search1select1btn2 -->


	<!-- panel0 -->
	<div class="panel0 bgcf7">
	<!-- even-grid -->
	<div class="even-grid tac vgap00">
		<div class="small-12 large-8 column">
			<!-- search1select1 -->
			<div class="search1select1 icbtn mg0">
				<form action="?#★">
				<fieldset><legend class="blind">게시물 검색</legend>
					<select title="선택옵션1" class="select1">
					<option value="">제목+내용</option>
					</select>
					<input type="text" value="" title="검색어" class="text1" />
					<button type="submit" class="button submit search"><i class="ic1"></i><span class="t1 blind">검색</span></button>
				</fieldset>
				</form>
			</div>
			<!-- /search1select1 -->
		</div>
	</div>
	<!-- /even-grid -->
	</div>
	<!-- /panel0 -->


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


<div class="box1">
	<h3 class="hb1 h3 dpib mg0 mgr1em vam">월별 사용량</h3>
	<div class="ask1control1 fsB8">
		<a href="#?" class="b1 prev"><i class="ic1"></i> <span class="blind">이전 년도 보기</span></a>
		<strong class="h1" title="년">2020</strong>
		<a href="#?" class="b1 next"><i class="ic1"></i> <span class="blind">다음 년도 보기</span></a>
	</div>
</div>





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