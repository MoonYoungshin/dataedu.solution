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
$pageTitle="Box Panel"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<h1 class="hb1 h1">Box Panel</h1>


<div class="panel1">
	<ol class="bo mg0">
	<li><a href="#Box" class="mj-smooth1scroll1">Box</a></li>
	<li><a href="#Panel" class="mj-smooth1scroll1">Panel</a></li>
	</ol>
</div>


<!-- ◇◆◇◆◇◆◇◆◇◆ -->
<h2 class="hb1 h2" id="Box">Box</h2>


<div class="box0">
	.box0 { padding: 0; border-width: 1px; }
</div>
<br />
<div class="box1">
	.box1
</div>
<br />
<div class="box2">
	.box2
</div>
<br />
<div class="box3">
	.box3
</div>
<br />
<div class="box4">
	.box4
</div>
<br />
<div class="box5">
	.box2
</div>
<br />
<div class="box6">
	.box6
</div>
<br />
<div class="box7">
	.box7
</div>
<br />
<div class="box8">
	.box8
</div>
<br />
<div class="box0">
	<div class="box4">
		 .box0 > .box4
	</div>
</div>
<br />
<div class="box4 pd0 mgl-4px mgr-4px">
	<div class="box1">
		 .box4.pd0.mgl-4px.mgr-4px > .box1
	</div>
</div>

<!-- ◇◆◇◆◇◆◇◆◇◆ -->
<h2 class="hb1 h2" id="Panel">Panel</h2>


<!-- ◇◆◇◆◇◆◇◆ -->
<h3 class="hb1 h3"><a href="#demo1panel1" class="toggle★">패널 박스</a></h3>


<!-- ◇◆ demo1panel1 -->
<div id="demo1panel1">


<!-- panel1 -->
<div class="panel1 pd30px-rv clearfix">
	<p class="mgtb0">
		간혹 박스안에 내용을 넣을 필요가 있습니다. 이런 상황을 위해 <code class="em5">.panel0</code> ~ <code class="em5">.panel5</code> 또는 <code class="em5">.panel10</code> 을 사용해보세요.<br />
		<code class="em2">[class*='panel']</code> 은 기본적으로 조금의 내용을 포함하기 위해 약간의 테두리와 패딩을 가지고 있습니다.<br />
		자식 요소가 float 속성을 가지면 패널 박스에 <code class="em3">.clearfix</code> 를 추가하세요.<br />
	</p>
	<p>
		자식 요소가 <code class="em2">p</code> 태그 등이어서 상하 마진 있으면 <code class="em">class="mgt0 mgb0"</code> 또는 <code class="em">class="mgtb0"</code> 를 이용하여 여백을 조정하세요.
	</p>
	<p class="mgb0">
		박스 내용이 2줄 이상이거나 문단, 목록 등을 포함하면 여백을 조정할 필요가 있습니다.<br />
		박스 패딩을 픽셀값 <code class="em5">.pd20px</code> ~ <code class="em5">.pd40px-rv</code> 또는 퍼센트값
		<code class="em5">.pd2pct</code> ~ <code class="em5">.pd4pct-rv</code> 을 알맞게 사용하세요.<br />
	</p>
</div>
<!-- /panel1 -->


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">padding</h4>


<div class="panel1 pd20px-rv">
	class="panel1 pd20px-rv" 를 적용한 박스 내부 여백과 내용을 확인하세요.
</div>

<div class="panel1 pd30px-rv">
	class="panel1 pd30px-rv" 를 적용한 박스 내부 여백과 내용을 확인하세요.
</div>

<div class="panel1 pd40px-rv">
	class="panel1 pd40px-rv" 를 적용한 박스 내부 여백과 내용을 확인하세요.
</div>

<div class="panel1 pd2pct-rv">
	class="panel1 pd2pct-rv" 를 적용한 박스 내부 여백과 내용을 확인하세요.
</div>

<div class="panel1 pd3pct-rv">
	class="panel1 pd3pct-rv" 를 적용한 박스 내부 여백과 내용을 확인하세요.
</div>

<div class="panel1 pd4pct-rv">
	class="panel1 pd4pct-rv" 를 적용한 박스 내부 여백과 내용을 확인하세요.
</div>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">border</h4>


<div class="panel0">
	.panel0
</div>

<div class="panel1">
	.panel1
</div>

<div class="panel2">
	.panel2
</div>

<div class="panel3">
	.panel3
</div>

<div class="panel4">
	.panel4
</div>

<div class="panel5">
	.panel5
</div>

<div class="panel00">
	.panel00
</div>

<div class="panel10">
	.panel10
</div>

<div class="panel201">
	.panel201
</div>

<div class="panel50">
	.panel50
</div>

<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">장식</h4>

<div class="panel">
	<strong class="h1">.panel > .h1</strong>
</div>

<div class="panel">
	<strong class="h1">.panel > .h1 + div</strong>
	<div class="body1 fsd">
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>

<div class="panel callout">
	.panel.callout
</div>

<div class="panel callout">
	<strong class="h1">.panel.callout > .h1</strong>
</div>

<div class="panel callout">
	<strong class="h1">.panel.callout > .h1 + div</strong>
	<div class="body1 fsd">
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>

<div class="panel inset">
	.panel.inset
</div>

<div class="panel">
	<strong class="h1 gradient">.panel > .h1.gradient + div</strong>
	<div class="body1 fsd">
		일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
	</div>
</div>

<div class="panel shadow">
	.panel.shadow
</div>

<div class="panel shadow3inset">
	.panel.shadow3inset
</div>

<div class="panel border1inset">
	.panel.border1inset
</div>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">다중톤</h4>

<div class="panel3 hue2">
	.panel3.hue2
</div>

<div class="panel4 hue3">
	.panel4.hue3
</div>

<div class="panel hue2a1">
	.panel.hue2a1
</div>

<div class="panel hue2a2">
	.panel.hue2a2
</div>

<div class="panel201 hue2a3">
	.panel201.hue2a3
</div>

<div class="panel hue2a4">
	.panel.hue2a4
</div>

<div class="panel hue1a1">
	.panel.hue1a1
</div>

<div class="panel hue4">
	.panel.hue4
</div>


<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">패턴</h4>

<div class="panel slash50">
	.panel.slash50
</div>

<div class="panel slash5">
	<div>
		.panel.slash5
	</div>
</div>

<div class="panel slash6">
	<div>
		.panel.slash6
	</div>
</div>


</div>
<!-- /◇◆ demo1panel1 -->



<!-- ◇◆◇◆◇◆ -->
<h4 class="hb1 h4">패널 디자인 ( .panel > .deco1 + .body1 )</h4>


<!-- panel3 -->
<div class="panel3 hue2 clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel3 hue2 deco1</strong>
		<p>
			<strong class="fsXL lhD"><em class="em5">패널 테두리선 색상 투톤. 장식1 본문1.</em> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</strong>
		</p>
		<p class="fss">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		</p>
	</div>
</div>
<!-- /panel3 -->


<!-- panel1 -->
<div class="panel1 hue2a1 clearfix">
	<i class="deco1 deco1bulb1"></i>
	<div class="body1">
		<strong>panel1 hue2a1 deco1</strong>
		<p>
			<strong class="fsXL lhD"><em class="em5">패널 테두리선 색상 투톤. 장식1 본문1.</em> 일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십</strong>
		</p>
		<p class="fss">
			일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십
		</p>
	</div>
</div>
<!-- /panel1 -->


<!-- panel1 -->
<div class="panel1 hue2a2 clearfix">
	<i class="deco1 deco1quotation1"></i>
	<div class="body1">
		<strong>panel1 hue2a2 deco1</strong>
		<p>
			<strong class="fsL lhD">이미지와 텍스트</strong>
		</p>
		<p class="fsD">	
		우리 삶을 지배하는 다양한 법칙. 우리가 잘 알고 있는 법칙은 어떤 게 있을까.. 안 좋은 일이 연속으로 일어나는 머피의 법칙, 그리고 어떤 대형사고가 일어나기 전에는 작은 일이 연속으로 일어난다는 하인리히 법칙, 반도체메모리 용량이 1년마다 두배씩 늘어난다는 황의 법칙은 우리가 잘 알고 있는 법칙이라고 할 수 있다.
		</p>
	</div>
</div>
<!-- /panel1 -->


<!-- panel0 -->
<div class="panel0 hue1a1 clearfix">
	<i class="deco1 deco1menu1"></i>
	<div class="body1">
		<strong>panel0 hue1a1 deco1</strong>
		<p>
			<strong class="fsXL lhD em">이미지와 텍스트</strong>
		</p>
		<p class="fsm">
			우리 삶을 지배하는 다양한 법칙. 우리가 잘 알고 있는 법칙은 어떤 게 있을까.. 안 좋은 일이 연속으로 일어나는 머피의 법칙, 그리고 어떤 대형사고가 일어나기 전에는 작은 일이 연속으로 일어난다는 하인리히 법칙, 반도체메모리 용량이 1년마다 두배씩 늘어난다는 황의 법칙은 우리가 잘 알고 있는 법칙이라고 할 수 있다.
		</p>
	</div>
</div>
<!-- /panel0 -->


<!-- panel201 -->
<div class="panel201 hue2a3 clearfix">
	<i class="deco1 deco1facility1 mgl20px"></i>
	<div class="body1">
		<strong>panel201 hue2a3 deco1</strong>
		<p>
			<strong class="fsXL lhD">이미지와 텍스트</strong>
		</p>
		<p class="fsD">
			우리 삶을 지배하는 다양한 법칙. 우리가 잘 알고 있는 법칙은 어떤 게 있을까.. 안 좋은 일이 연속으로 일어나는 머피의 법칙, 그리고 어떤 대형사고가 일어나기 전에는 작은 일이 연속으로 일어난다는 하인리히 법칙, 반도체메모리 용량이 1년마다 두배씩 늘어난다는 황의 법칙은 우리가 잘 알고 있는 법칙이라고 할 수 있다.
		</p>
	</div>
</div>
<!-- /panel201 -->


<!-- panel0 -->
<div class="panel0 hue1a1 bgc-v1 clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel0 hue1a1 bgc-v1 deco1</strong>
		<p>
			<strong class="fwn fsXL lhD em0">이미지와 텍스트</strong>
		</p>
		<p class="fsxd">
			우리 삶을 지배하는 다양한 법칙. 우리가 잘 알고 있는 법칙은 어떤 게 있을까.. 안 좋은 일이 연속으로 일어나는 머피의 법칙, 그리고 어떤 대형사고가 일어나기 전에는 작은 일이 연속으로 일어난다는 하인리히 법칙, 반도체메모리 용량이 1년마다 두배씩 늘어난다는 황의 법칙은 우리가 잘 알고 있는 법칙이라고 할 수 있다.
		</p>
	</div>
</div>
<!-- /panel0 -->


<!-- panel4 -->
<div class="panel4 hue3 bgcf clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel4 hue3 deco1</strong>
		<p>
			<strong class="cv0 fwn fsL lhD">어디서나 민원처리제</strong>
		</p>
		<p class="fsd">
			민원인이 소관 행정기관을 가지 않고서도 어디서나 가까운 다른 행정기관에서 민원서류를 신청하고 원하는 행정기관에서 교부 받을 수 있는 제도입니다.
		</p>
	</div>
</div>
<!-- /panel4 -->


<!-- panel1 -->
<div class="panel1 slash5 clearfix">
	<div class="body1">
		<strong>panel1 slash5</strong>
		<div class="cv2">민원인이 행정기관을 직접 방문하지 않고 해당 민원 서류를 받고자 하는 교부기관에 전화로 신청하여 교부받을 수 있습니다.</div>
		<div><em class="em">(※ 신청인의 신분 확인이 필요한 민원은 제외)</em></div>
	</div>
</div>
<!-- /panel1 -->


<!-- panel1 -->
<div class="panel1 slash5 clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel1 slash5 deco1</strong>
		<p class="fsd">
			처리하고자 하는 업무에 대한 처리절차 및 전반사항을 알려주며 민원서식을 제공합니다.<br />
			아래의 부서선택에서 부서를 선택하시고 업무명을 입력하신 후 검색버튼을 눌러주세요.<br />
			<em>[바로가기]를 클릭하셔서 민원24사이트 우측 상단부의 '신청서'란에서 민원신청서식을 다운받으시기 바랍니다.</em>
		</p>
	</div>
</div>
<!-- /panel1 -->


<!-- panel1 -->
<div class="panel1 hue4 clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel1 hue4 deco1</strong>
		<p>
			<strong class="fwn fsXL lhD em0">이미지와 텍스트</strong>
		</p>
		<p class="fsxd">
			우리 삶을 지배하는 다양한 법칙. 우리가 잘 알고 있는 법칙은 어떤 게 있을까.. 안 좋은 일이 연속으로 일어나는 머피의 법칙, 그리고 어떤 대형사고가 일어나기 전에는 작은 일이 연속으로 일어난다는 하인리히 법칙, 반도체메모리 용량이 1년마다 두배씩 늘어난다는 황의 법칙은 우리가 잘 알고 있는 법칙이라고 할 수 있다.
		</p>
	</div>
</div>
<!-- /panel1 -->


<!-- panel1 -->
<div class="panel1 slash6 bdct clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel1 slash6 bdct deco1</strong>
		<p>
			관심정보를 설정하시면 <b class="em">'메인페이지 &gt; 교육강좌 빠른검색 &gt; [관심강좌보기]'</b>를 통해 원하시는 교육강좌를 빠르게 확인하실 수 <span class="dpib">있습니다.</span>
		</p>
	</div>
</div>
<!-- /panel1 -->


<!-- panel1 -->
<div class="panel1 hue2a4 clearfix">
	<i class="deco1"></i>
	<div class="body1">
		<strong>panel1 hue2a4 deco1</strong>
		<ul class="bu mgt0 mgb0">
		<li>10인 이상 '단체예약'만 가능합니다.</li>
		<li>예약시간은 10:00 ~ 12:00 입니다.</li>
		<li>이용요금은 <em class="em5">[이용요금]</em> 에서 확인 가능하며, 현장결제 입니다.</li>
		</ul>
		</div>
</div>
<!-- /panel1 -->


<!-- panel0 -->
<div class="panel0 pdt30px pdb30px bgc-v2 clearfix">
	<i class="deco1"></i>
	<div class="body1 lh15">
		<strong class="cv2 fsXL">평생학습 전문인력 DB구축 지원신청서(학습동아리)</strong>
		<p class="cv7 fsxd">
			<strong>panel0 pdt30px pdb30px bgc-v2 deco1</strong>
			평생학습동아리 등록신청서를 신청일로 부터 10일이내에 제출하셔야만 학습동아리로 승인처리 되며,
			<span class="dpib">10일 경과시 미승인처리되어 삭제될 수 있습니다.</span>
		</p>
		<a href="?" class="button hollow t1ic1b1"><b class="t1">신청서 다운로드</b> <i class="ic1 download"></i></a>
	</div>
</div>
<!-- /panel0 -->


<!-- ◇◆◇◆◇◆◇◆◇◆◇◆ -->





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