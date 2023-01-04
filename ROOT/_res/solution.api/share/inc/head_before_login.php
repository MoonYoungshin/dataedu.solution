<?php
/**
 * Include
 * 20221026 | @m | 최초작성
 * 20221031 | @m | 요구반영. 결함개선. 고도화.
 * 20221101 | @m | 
 * 20221111 | @m | 
 * 20221114 | @m | 
 * 20221122 | @m | 
 * 20221202 | @m | 
 * 20221212 | @m | 
 * 20230104 | @m | 
 */
?>
<!-- #head -->
<header id="head" class="init">
<!-- container -->
<div class="container clearfix">


	<!-- head_s1 -->
	<div id="head_s1">
	<!-- container -->
	<div class="container clearfix">


		<h1 id="logo">
			<a href="/" title="시작페이지 바로가기"><img src="<?=$sitePath?>/img/inc/logo1@2x.png" alt="DATAEDU.AI"></a>
		</h1>


		<!-- gn2 -->
		<nav id="gn2">
			<a href="?#★" class="a1"><span class="t1">문의하기</span> <i class="ic1"></i></a>
		</nav>
		<!-- /gn2 -->


		<!-- gn4 -->
		<nav id="gn4">
			<a href="?#★" class="a1"><span class="t1">로그인</span></a>
		</nav>
		<!-- /gn4 -->


	</div>
	<!-- /container -->
	</div>
	<!-- /head_s1 -->
	<!-- head_s2 -->
	<div id="head_s2">
	<!-- container -->
	<div class="container clearfix">


		<!-- tnb1 [JS] -->
		<nav id="tnb1">
			<h3 class="blind">주 메뉴</h3>
			<strong class="h1"><a href="#tnb1c" class="b1 toggle"><i class="ic1"></i> <span class="t1 blind">주 메뉴</span> <span class="blind">여닫기</span></a></strong>
			<!-- tnb1c -->
			<div id="tnb1c"><div class="bg"></div>
			<!-- cont -->
			<div class="cont"><div class="bg"></div>
				<a href="#tnb1c" class="b2 close"><i class="ic1"></i> <span class="t1 blind">주 메뉴</span> <span class="blind">닫기</span></a>
				<!-- d1 -->
				<div class="d1">
					<ul>
						<li class="m1">
							<a><span class="t1">Audio API</span></a>
							<div class="d2">
								<strong class="tt1">Audio API</strong>
								<ul>
									<!-- <li class="m0 submain"><a href="?#★"><span class="t1">서브메인</span></a></li> -->
									<li class="m1"><a href="?#★"><span class="t1">음성합성 (JS-TTS)</span></a></li>
									<li class="m2"><a href="?#★"><span class="t1">음성인식 (JS-STT)</span></a></li>
									<li class="m3"><a href="?#★"><span class="t1">음성정제 (JS-Denoise)</span></a></li>
									<li class="m4"><a href="?#★"><span class="t1">음향합성 (JS-Noiser)</span></a></li>
								</ul>
							</div>
						</li>
						<li class="m2">
							<a><span class="t1">Vision API</span></a>
							<div class="d2">
								<strong class="tt1">Vision API</strong>
								<ul>
									<!-- <li class="m0 submain"><a href="?#★"><span class="t1">서브메인</span></a></li> -->
									<li class="m1"><a href="?#★"><span class="t1">이미지 텍스트인식 (JS-OCR)</span></a></li>
									<li class="m2"><a href="?#★"><span class="t1">얼굴인식 (JS-Face)</span></a></li>
									<li class="m3"><a href="?#★"><span class="t1">얼굴 모자이크 (JS-Face Blur)</span></a></li>
									<li class="m4"><a href="?#★"><span class="t1">의상 정보 인식 (JS-Clothes)</span></a></li>
									<li class="m5"><a href="?#★"><span class="t1">로고 인식 (JS-Logo)</span></a></li>
									<li class="m6"><a href="?#★"><span class="t1">제품 인식 (JS-Product)</span></a></li>
									<li class="m7"><a href="?#★"><span class="t1">AI 화가 (JS-TTI)</span></a></li>
								</ul>
							</div>
						</li>
						<li class="m3">
							<a><span class="t1">Language API</span></a>
							<div class="d2">
								<strong class="tt1">Language API</strong>
								<ul>
									<!-- <li class="m0 submain"><a href="?#★"><span class="t1">서브메인</span></a></li> -->
									<li class="m1"><a href="?#★"><span class="t1">문장교정 (JS-Corrector)</span></a></li>
									<li class="m2"><a href="?#★"><span class="t1">한글발음화 (JS-Trans)</span></a></li>
									<li class="m3"><a href="?#★"><span class="t1">자연어 이해 (JS-NLU)</span></a></li>
									<li class="m4"><a href="?#★"><span class="t1">AI 질의응답 (JS-MRC)</span></a></li>
								</ul>
							</div>
						</li>
						<li class="m4">
							<a><span class="t1">Education API</span></a>
							<div class="d2">
								<strong class="tt1">Education API</strong>
								<ul>
									<!-- <li class="m0 submain"><a href="?#★"><span class="t1">서브메인</span></a></li> -->
									<li class="m1"><a href="?#★"><span class="t1">단어 말하기 (JS-Wrdspk)</span></a></li>
									<li class="m2"><a href="?#★"><span class="t1">구문 말하기 (JS-Strspk)</span></a></li>
									<li class="m3"><a href="?#★"><span class="t1">문장 말하기 (JS-Stcspk)</span></a></li>
									<li class="m4"><a href="?#★"><span class="t1">질문 답하기 (JS-Qnaspk)</span></a></li>
								</ul>
							</div>
						</li>
						<li class="m5">
							<a><span class="t1">Video API</span></a>
							<div class="d2">
								<strong class="tt1">Video API</strong>
								<ul>
									<!-- <li class="m0 submain"><a href="?#★"><span class="t1">서브메인</span></a></li> -->
									<li class="m1"><a href="?#★"><span class="t1">사람인식 (JS-Human)</span></a></li>
									<li class="m2"><a href="?#★"><span class="t1">트래킹 (JS-Tracking)</span></a></li>
									<li class="m4"><a href="?#★"><span class="t1">구간재생 (JS-Section)</span></a></li>
									<li class="m5"><a href="?#★"><span class="t1">영상내용검색 (JS-Search)</span></a></li>
									<li class="m6"><a href="?#★"><span class="t1">영상정보수집 (JS-Ghost)</span></a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!-- /d1 -->
				<a href="#tnb1c" class="b2 close"><i class="ic1"></i> <span class="t1 blind">주 메뉴</span> <span class="blind">닫기</span></a>
			</div>
			<!-- /cont -->
			</div>
			<!-- /tnb1c -->
		</nav>
		<!-- /tnb1 -->


	</div>
	<!-- /container -->
	</div>
	<!-- /head_s2 -->


</div>
<!-- /container -->
</header>
<!-- /#head -->