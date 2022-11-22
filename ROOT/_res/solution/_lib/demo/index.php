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
$pageTitle="Demo CSS Styles"; ?>
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

	/* ◇◆ Added ◇◆ */
	html.noLocalhost .hide-noLocalhost{ /* 20180119 */
		display:none !important;
	}
	.next-all-hide ~ *{ /* 20190308 */
		display:none !important;
	}

/*]]>*/</style>

<script>/*<![CDATA[*/
	/** ◇◆ localhost 구분. 20180119. 20180124. MoonYoungshin.
	 */
	(function(){
		var host1pathname1 = location.host;
		//console.log(/localhost/i.test(host1pathname1));
		if( /localhost/i.test(host1pathname1) || /192.168.0.96/i.test(host1pathname1) ) {
			$('html').addClass('Localhost');
		}else{
			$('html').addClass('noLocalhost');
		}
	})();
/*]]>*/</script>


</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->
<h1 class="hb1 h1">CSS Component (Sample Demo)</h1>

<!-- ((( http://localhost:9460/_res/ctc/_lib/ -->


<ol class="bo">
<li><a href="./base_css.html">Base Styles</a> <em class="em9">(with base.css)</em></li>
<li>
	<!-- <a href="./">Demo CSS Styles</a> <em class="em9">(with base.css, lib.css)</em><br /> -->
	<a href="#DemoCSS" class="mj-smooth1scroll1">Demo CSS Styles</a> <em class="em9">(with base.css, lib.css)</em><br />
</li>
<li><a href="./embed.php">Embed (Video, Audio) Styles</a> <em class="em9">(~ lib.css)</em></li>
<li>
	<a href="./grid12.php">Grid12</a> <em class="em9">(~ base.css)</em><br />
	<a href="./grid_best_practice.php">Grid Best Practice</a>
</li>
<li><a href="./box1panel1.php">Box Panel</a> <em class="em9">(~ lib.css)</em></li>
<li><a href="./demo1etc1.php">Demo ETC</a> <em class="em9">(~ lib.css)</em></li>
<li><a href="./layout_best_practice.php">Layout Best Practice</a></li>
<li><a href="./lab.tabs.php">Tabs</a> <em class="em9">(~ lib1cp1.css)</em></li>
<li><a href="./lab.table_respond.php">표 반응형 샘플</a></li>
<li class="hide-noLocalhost"><a href="./lab.pick1font1.php" target="_blank" rel="noopener" title="새 창">글꼴 샘플 선택</a></li>
<li class="hide-noLocalhost"><a href="./lab.pick1color1.php" target="_blank" rel="noopener" title="새 창">색상 샘플 선택</a></li>
<li class="hide-noLocalhost"><a href="./cheat_sheet.php" target="_blank" rel="noopener" title="새 창">Cheat Sheet</a> (ToDo)</li>
</ol>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3" id="Component">Component</h3>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4" id="BodyContents">Body Contents</h4>
<!-- <p>N/A</p> -->


<!-- ◇◆◇◆ -->
<h5 class="hb1 h5">본문콘텐츠 템플릿 (샘플.기본)<br />
	<small>((20210518 (( 20151204. <em class="em4">화면설계 없었음</em>. 최근 템플릿 고도화.</small><br />
	<small class="em0">
		./tp/tp1*.php (기본) <em class="em9">(with base.css, lib.css, lib1cp1.css)</em><br />
	</small>
</h5>

<ol class="bo">
<li>$<a href="./tp/tp1bbs1list1.php">_BBS1 리스트1</a> (분류2.검색선택1~.정렬메뉴.그림1.글3.아이콘1.쪽.버튼) (<em class="em">쪽매김.접근성보완</em>) <!-- ~20201203 --></li>
<li><a href="./tp/tp1bbs1list2table1.php">_BBS1 리스트2표1</a> (목록표.폭좁은화면일부감춤) <!-- ~20160923 --></li>
<li>
	$<a href="./tp/tp1bbs1gallery1photo1.php">_BBS1 갤러리1사진1</a> (갤러리.검색선택1.그림1.글2종.쪽.버튼)<br />
	| $<a href="./tp/tp1bbs1gallery1photo1a1.php">~.높이가변</a> 
</li>
<li>$<a href="./tp/tp1bbs1gallery1video1.php">_BBS1 갤러리1영상1</a> (갤러리.검색선택1.그림1.글2종.플레이.쪽.버튼)</li>
<li>$<a href="./tp/tp1bbs1view1.php">_BBS1 상세뷰1</a> (글제목.정보1.첨부바로보기.내용.그림뷰갤러리1.영상뷰1.답변)<br />
	| <a href="./tp/_tp1bbs1view1(+.sns1like1+.sns1comment1).php">_BBS1 상세뷰1+SNS공유+소셜댓글</a> (글제목.정보1.첨부바로보기.내용.그림뷰갤러리1.답변글)
</li>
<li>
	<a href="./tp/tp1bbs1view2.php">_BBS1 상세뷰2</a> (그림뷰갤러리1.정보1(제목.표.정의목록)) - 특산물..<br />
	| <a href="./tp/tp1bbs1view2a1.php">_BBS1 상세뷰2. 버튼추가.이미지먼저</a> (원화보기.다운로드)<br />
	| <a href="./tp/tp1bbs1view2tabs1.php">_BBS1 상세뷰2. 탭패널</a> (공연안내,공연일정)<br />
</li>
<li>$<a href="./tp/tp1bbs1write1.php">_BBS1 글작성1</a> (표tr1th1td1..개인정보수집동의)</li>
<li><a href="./tp/tp1bbs1pw1.php">_BBS1 비밀번호확인1</a> (그림.글2.버튼2.blue)</li>
<li>$<a href="./tp/tp1bbs1login2choice1.php">_BBS1 본인인증선택1</a> (글패널.휴대폰·공공아이핀인증.로그인)</li>
<li>$<a href="./tp/tp1popup1zipcode2.php" target="_blank" onclick="window.open(this.href,'','location=0,directories=0,resizable=1,status=0,toolbar=0,menubar=0,scrollbars=1,width=480,height=640,left=' + ((screen.availWidth-480)/2) + ',top=' + ((screen.availHeight-640)/2) + ''); return false;" title="새 창"><em class="em4">_우편번호검색</em></a>  (팝업창.도로명|지번)</li>
<li><a href="./tp/tp1reservation1.php"><b class="em4-5">_캘린더</b>_시간별예약현황달력</a> (월.이전다음.범례.표(시간별현황.클릭).모바일UX일별여닫기(단체관람신청현황목록))</li>
<li><a href="./tp/_tp1handbook1list1.php">_민원안내 목록</a> (메뉴.검색옵션2.결과.표목록.쪽)</li>
<li><a href="./tp/_tp1handbook1view1.php">_민원안내 상세</a> (표,버튼,첨부) Task) 절차추가?</li>
<li><a href="./tp/_tp1list1table1.php">_의약업소안내 목록</a> (버튼.표.소재지지도링크.상세없음)</li>
</ol>


<?php include "./inc_demo.html"; ?>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>