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
$pageTitle="Layout Best Practice"; ?>
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





<h1 class="hb1 h1">Layout Best Practice</h1>


<div class="panel1">
	<ol class="bo mg0">
	<li><a href="#PhotoTexts" class="mj-smooth1scroll1">Photo + Texts</a></li>
	<li><a href="#ScrollTable" class="mj-smooth1scroll1">Scroll Table</a></li>
	</ol>
</div>


<h2 class="hb1 h2" id="PhotoTexts">Photo + Texts</h2>


<div class="ofh">
	<div class="fl" style="width:30%;margin:0 4% 4% 0;">
		<img src="/_res/@m/_img.ex/brothers-457237_1280.jpg" alt="★대체텍스트필수" />
	</div>
	<div class="ofh">
		<p class="mgt0">21세기는 과학의 시대다. 현대 과학은 다른 학문을 지배하며 끊임없이 정답을 추구한다. 하지만 철학은 정답에 대한 의심에서 시작한다. 정답을 확신하는 사람은 질문하지 않지만, 의심하는 사람은 끊임없이 묻는다. 삶의 의미를 찾기 위해 올바른 질문을 제기하는 것이 철학이며, 과학의 시대에 철학의 쓸모는 바로 여기서 비롯된다. 정답을 찾는 데 익숙한 공대생에게 스스로 의심하고 질문하는 방법을 가르치고 있는 철학자 이진우 교수. 포스텍 학생들은 그의 철학 강의를 곤혹스럽지만 최고의 지적 희열을 안겨주는 명강의라고 이야기한다. 이진우 교수의 포스텍 철학 강의를 바탕으로 집필한 이 책은 마르크스, 니체, 프로이트, 하이데거, 비트겐슈타인, 호르크하이머, 아도르노, 사르트르, 베냐민, 포퍼, 아렌트 등 정답의 시대를 성찰한 ‘의심의 학파’ 11인이 무엇을 의심하고 어떻게 질문을 던졌는지 살펴본다. 모두가 정답이라고 확신한 것을 의심했던 현대철학자들의 사상은 과학의 시대를 살고 있는 우리에게 인간과 삶의 의미를 곱씹는 계기를 마련해줄 것이다.</p>
		<p>21세기는 과학의 시대다. 현대 과학은 다른 학문을 지배하며 끊임없이 정답을 추구한다. 하지만 철학은 정답에 대한 의심에서 시작한다. 정답을 확신하는 사람은 질문하지 않지만, 의심하는 사람은 끊임없이 묻는다. 삶의 의미를 찾기 위해 올바른 질문을 제기하는 것이 철학이며, 과학의 시대에 철학의 쓸모는 바로 여기서 비롯된다. 정답을 찾는 데 익숙한 공대생에게 스스로 의심하고 질문하는 방법을 가르치고 있는 철학자 이진우 교수. 포스텍 학생들은 그의 철학 강의를 곤혹스럽지만 최고의 지적 희열을 안겨주는 명강의라고 이야기한다. 이진우 교수의 포스텍 철학 강의를 바탕으로 집필한 이 책은 마르크스, 니체, 프로이트, 하이데거, 비트겐슈타인, 호르크하이머, 아도르노, 사르트르, 베냐민, 포퍼, 아렌트 등 정답의 시대를 성찰한 ‘의심의 학파’ 11인이 무엇을 의심하고 어떻게 질문을 던졌는지 살펴본다. 모두가 정답이라고 확신한 것을 의심했던 현대철학자들의 사상은 과학의 시대를 살고 있는 우리에게 인간과 삶의 의미를 곱씹는 계기를 마련해줄 것이다.</p>
	</div>
</div>


<h3 class="hb1 h3"><a href="#demo1img1text1" class="toggle★">이미지와 텍스트</a></h3>


<!-- ◇◆ demo1img1text1 -->
<div id="demo1img1text1">


<p>우리 삶을 지배하는 다양한 법칙. 우리가 잘 알고 있는 법칙은 어떤 게 있을까.. 안 좋은 일이 연속으로 일어나는 머피의 법칙, 그리고 어떤 대형사고가 일어나기 전에는 작은 일이 연속으로 일어난다는 하인리히 법칙, 반도체메모리 용량이 1년마다 두배씩 늘어난다는 황의 법칙은 우리가 잘 알고 있는 법칙이라고 할 수 있다.</p>

<p><img src="/_res/@m/_img.ex/panoramic-624239_1280.jpg" alt="★대체텍스트필수" /></p>
<p><img src="/_res/@m/_img.ex/w320/daffodils-684225_320.jpg" alt="★대체텍스트필수" class="block-center" /></p>

<ul class="bu">
<li>일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</li>
<li>일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</li>
<li><strong class="h1">90대 90 법칙</strong> :<br />
	컴퓨터 프로그래밍에 쓰이는 법칙으로 프로그래밍의 90%를 개발하는데 정해진 프로젝트 소요시간 90%의 시간이 걸린다면 나머지 10%를 해결하는 데 90%의 시간이 더 걸린다는 의미로 쓰이며 그 10%는 프로그래밍을 하는 데 있어서 다양한 오류나 버그 발생 그리고 유지보수가 해당이 되며 그로 인하여 프로젝트가 지연되는 원인이 되기도 한다.
</li>
</ul>

<h4 class="hb1 h4">이미지 float right margin ( .frm )</h4>

<p><img src="/_res/@m/_img.ex/daffodils-684225_640.jpg" alt="★대체텍스트필수" class="frm mgt01875em" style="width:33.333%;" /></p>

<dl class="bu">
<dt>90대 90 법칙 :</dt>
<dd>컴퓨터 프로그래밍에 쓰이는 법칙으로 프로그래밍의 90%를 개발하는데 정해진 프로젝트 소요시간 90%의 시간이 걸린다면 나머지 10%를 해결하는 데 90%의 시간이 더 걸린다는 의미로 쓰이며 그 10%는 프로그래밍을 하는 데 있어서 다양한 오류나 버그 발생 그리고 유지보수가 해당이 되며 그로 인하여 프로젝트가 지연되는 원인이 되기도 한다.</dd>
<dt>하인리히 법칙 :</dt>
<dd>세월호나 삼풍백화점, 대구지하철 사건과 같은 큰 대형재난이 발생할 때면 항상 단골로 나오는 법칙이며 하나의 큰 대형 사고가 생길 때 300가지의 사소한 재난이 먼저 생기고 29가지의 중형 재난이 생긴다는 의미이며 대형사고가 나기 전에 사소한 재난에 대해 미리미리 대처할 수 있어야 대형사고 예방을 할 수 있다는 의미로 쓰인다.</dd>
<dt>KISS 법칙 :</dt>
<dd>영어로 Keep is Simple, Stupid (바보야, 간단히 설명해)라는 뜻으로 미국인과의 미팅에서 미국인들이 작은 종이에 적어놓은 것을 우연히 발견해 찾아낸 법칙이며, 이 법칙은 록히드 기술자가 만든 법칙이다. 제트기가 고장이 날 시 일반 장비로서 빨리 수리할 수 있도록 제트기가 설계되어야 한다는 것에 착안하였으며 전쟁이나 군사 훈련 시 생길 수 있는 제트기 고장에 대해 신속하게 고장 수리를 할 수 있도록 하게 되었다.</dd>
<dt>인지 부조화 법칙 :</dt>
<dd>사람들은 어떤 문제에 대해서 누구나 자신이 좋아하는 데로 생각을 한다. 즉 자기에게 유리한 생각을 하며 담배 피우는 사람들이 흔히 하는 인지 부조화를 대표적인 경우로 생각할 수 있으며 담배 피우는 사람도 장수 할 수 있다는 생각을 흡연자라면 누구나 가지고 있다는 것이다.</dd>
<dt>지딘메디슨 법칙 :</dt>
<dd>외국계 자산회사인 지딘메디슨이 찾아낸 법칙으로 기업체에 투자하는 일을 하면서 찾아낸 법칙이다. 사장이 자신의 고생담을 오랫동안 이야기하거나 사장실이 회사의 사무실에 비해 큰 경우 그리고 유명인과의 교제에 대해서 자랑하기를 좋아하는 사장이 있는 기업은 비전이 없으며 투자를 피하는 것이 좋다.</dd>
</dl>


<h4 class="hb1 h4">이미지 float left margin ( .flm ) <em class="fwn">.fix1</em></h4>

<p><img src="/_res/@m/_img.ex/daffodils-684225_640.jpg" alt="★대체텍스트필수" class="flm mgt01875em" style="width:33.333%;" /></p>

<dl class="bu fix1">
<dt>90대 90 법칙 :</dt>
<dd>컴퓨터 프로그래밍에 쓰이는 법칙으로 프로그래밍의 90%를 개발하는데 정해진 프로젝트 소요시간 90%의 시간이 걸린다면 나머지 10%를 해결하는 데 90%의 시간이 더 걸린다는 의미로 쓰이며 그 10%는 프로그래밍을 하는 데 있어서 다양한 오류나 버그 발생 그리고 유지보수가 해당이 되며 그로 인하여 프로젝트가 지연되는 원인이 되기도 한다.</dd>
<dt>하인리히 법칙 :</dt>
<dd>세월호나 삼풍백화점, 대구지하철 사건과 같은 큰 대형재난이 발생할 때면 항상 단골로 나오는 법칙이며 하나의 큰 대형 사고가 생길 때 300가지의 사소한 재난이 먼저 생기고 29가지의 중형 재난이 생긴다는 의미이며 대형사고가 나기 전에 사소한 재난에 대해 미리미리 대처할 수 있어야 대형사고 예방을 할 수 있다는 의미로 쓰인다.</dd>
<dt>KISS 법칙 :</dt>
<dd>영어로 Keep is Simple, Stupid (바보야, 간단히 설명해)라는 뜻으로 미국인과의 미팅에서 미국인들이 작은 종이에 적어놓은 것을 우연히 발견해 찾아낸 법칙이며, 이 법칙은 록히드 기술자가 만든 법칙이다. 제트기가 고장이 날 시 일반 장비로서 빨리 수리할 수 있도록 제트기가 설계되어야 한다는 것에 착안하였으며 전쟁이나 군사 훈련 시 생길 수 있는 제트기 고장에 대해 신속하게 고장 수리를 할 수 있도록 하게 되었다.</dd>
</dl>

<h4 class="hb1 h4">이미지 float left margin ( .flm ) <em class="fwn">.fix1 .fix1 … </em></h4>

<p><img src="/_res/@m/_img.ex/daffodils-684225_640.jpg" alt="★대체텍스트필수" class="flm mgt01875em" style="width:33.333%;" /></p>

<dl class="bu">
<dt class="fix1">90대 90 법칙 :</dt>
<dd class="fix1">컴퓨터 프로그래밍에 쓰이는 법칙으로 프로그래밍의 90%를 개발하는데 정해진 프로젝트 소요시간 90%의 시간이 걸린다면 나머지 10%를 해결하는 데 90%의 시간이 더 걸린다는 의미로 쓰이며 그 10%는 프로그래밍을 하는 데 있어서 다양한 오류나 버그 발생 그리고 유지보수가 해당이 되며 그로 인하여 프로젝트가 지연되는 원인이 되기도 한다.</dd>
<dt class="fix1">하인리히 법칙 :</dt>
<dd class="fix1">세월호나 삼풍백화점, 대구지하철 사건과 같은 큰 대형재난이 발생할 때면 항상 단골로 나오는 법칙이며 하나의 큰 대형 사고가 생길 때 300가지의 사소한 재난이 먼저 생기고 29가지의 중형 재난이 생긴다는 의미이며 대형사고가 나기 전에 사소한 재난에 대해 미리미리 대처할 수 있어야 대형사고 예방을 할 수 있다는 의미로 쓰인다.</dd>
<dt class="fix1">KISS 법칙 :</dt>
<dd class="fix1">영어로 Keep is Simple, Stupid (바보야, 간단히 설명해)라는 뜻으로 미국인과의 미팅에서 미국인들이 작은 종이에 적어놓은 것을 우연히 발견해 찾아낸 법칙이며, 이 법칙은 록히드 기술자가 만든 법칙이다. 제트기가 고장이 날 시 일반 장비로서 빨리 수리할 수 있도록 제트기가 설계되어야 한다는 것에 착안하였으며 전쟁이나 군사 훈련 시 생길 수 있는 제트기 고장에 대해 신속하게 고장 수리를 할 수 있도록 하게 되었다.</dd>
</dl>

<p><img src="/_res/@m/_img.ex/daffodils-684225_640.jpg" alt="★대체텍스트필수" class="flm mgt01875em" style="width:33.333%;" /></p>

<dl class="bu">
<dt class="fix1">90대 90 법칙 :</dt>
<dd>컴퓨터 프로그래밍에 쓰이는 법칙으로 프로그래밍의 90%를 개발하는데 정해진 프로젝트 소요시간 90%의 시간이 걸린다면 나머지 10%를 해결하는 데 90%의 시간이 더 걸린다는 의미로 쓰이며 그 10%는 프로그래밍을 하는 데 있어서 다양한 오류나 버그 발생 그리고 유지보수가 해당이 되며 그로 인하여 프로젝트가 지연되는 원인이 되기도 한다.</dd>
<dt class="fix1">하인리히 법칙 :</dt>
<dd>세월호나 삼풍백화점, 대구지하철 사건과 같은 큰 대형재난이 발생할 때면 항상 단골로 나오는 법칙이며 하나의 큰 대형 사고가 생길 때 300가지의 사소한 재난이 먼저 생기고 29가지의 중형 재난이 생긴다는 의미이며 대형사고가 나기 전에 사소한 재난에 대해 미리미리 대처할 수 있어야 대형사고 예방을 할 수 있다는 의미로 쓰인다.</dd>
<dt class="fix1">KISS 법칙 :</dt>
<dd>영어로 Keep is Simple, Stupid (바보야, 간단히 설명해)라는 뜻으로 미국인과의 미팅에서 미국인들이 작은 종이에 적어놓은 것을 우연히 발견해 찾아낸 법칙이며, 이 법칙은 록히드 기술자가 만든 법칙이다. 제트기가 고장이 날 시 일반 장비로서 빨리 수리할 수 있도록 제트기가 설계되어야 한다는 것에 착안하였으며 전쟁이나 군사 훈련 시 생길 수 있는 제트기 고장에 대해 신속하게 고장 수리를 할 수 있도록 하게 되었다.</dd>
</dl>


</div>
<!-- /◇◆ demo1img1text1 -->


<h2 class="hb1 h2" id="ScrollTable">Scroll Table</h2>

<p>
	.mj-alert1 추가하면 가로 스크롤 발생 알림
</p>

<!-- scroll-x-lt-large -->
<div class="scroll-x-lt-large mj-alert1">
<div style="min-width:710px;">

	<a tabindex="0" class="blind onshow hide-large bg-info fsd">
		키보드 화살표 <!-- 상(↑)·하(↓)· -->좌(←)·우(→) 키로 스크롤 가능
	</a>
	<table class="t3 w100 tttac ttvam lhD fsxd">
		<caption class="pd0">
			<strong class="h1 blind">예약현황 목록</strong>
			<span class="summary1 blind">: No.순번, 시설구분, 시설명, 대여물품명, 신청자명, 대여기간, 예약현황, 예약확인</span>
		</caption>
		<thead class="ttpdtb1em">
		<tr>
		<th scope="col">No.<span class="blind">순번</span></th>
		<th scope="col">시설<span class="dpib">구분</span></th>
		<th scope="col">시설<span class="dpib">명</span></th>
		<th scope="col">대여<span class="dpib">물품명</span></th>
		<th scope="col">신청자<span class="dpib">명</span></th>
		<th scope="col">대여<span class="dpib">기간</span></th>
		<th scope="col">예약<span class="dpib">현황</span></th>
		<th scope="col">예약<span class="dpib">확인</span></th>
		</tr>
		</thead>
		<tbody class="ttbgcf">
		<tr>
		<th scope="row">1</th>
		<td>장난감은행</td>
		<td>지점명</td>
		<td>대여물품명</td>
		<td>홍길동</td>
		<td>2020/06/03 ~ 2020/06/17</td>
		<td>예약확정</td>
		<td>
			<a href="#★" class="button cp31b1 s2">예약확인</a><br />
		</td>
		</tr>
		<tr>
		<th scope="row">2</th>
		<td>장난감은행</td>
		<td>지점명</td>
		<td>대여물품명</td>
		<td>홍길동</td>
		<td>2020/06/03 ~ 2020/06/17</td>
		<td>예약취소</td>
		<td>
			<a href="#★" class="button cp31b1 s2">취소확인</a><br />
		</td>
		</tr>
		<tr>
		<th scope="row">3</th>
		<td>장난감은행</td>
		<td>지점명</td>
		<td>대여물품명</td>
		<td>홍길동</td>
		<td>2020/06/03 ~ 2020/06/17</td>
		<td>예약확정</td>
		<td>
			<a href="#★" class="button cp31b1 s2">예약확인</a><br />
		</td>
		</tr>

		</tbody>
	</table>

</div>
</div>
<!-- /scroll-x-lt-large -->





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