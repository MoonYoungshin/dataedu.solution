<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221123 | @m | 요구반영. 결함개선. 고도화.
 * 20221212 | @m | 
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
			<li class="m c1c1">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">음성 합성 (JS-TTS)</strong>
					<div class="t2">
						실제 그 사람의 목소리 그대로 자연스럽게, 최고의 음질과 실시간 합성 속도를 제공 합니다.
						최대 네줄까지가 적당한 것 같습니다.
					</div>
				</a>
			</li>
			<li class="m c1c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">음성 인식 (JS-STT)</strong>
					<div class="t2">
						실제 그 사람의 목소리 그대로 자연스럽게, 최고의 음질과  실시간 합성 속도를 제공 합니다.
					</div>
				</a>
			</li>
			<li class="m c2c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">얼굴 인식 (JS-Face)</strong>
					<div class="t2">
						이미지에 있는 얼굴의 위치를 인식하고, 추출합니다. 
					</div>
				</a>
			</li>
			<li class="m c2c3">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">얼굴 모자이크 ( JS-Face Blur)</strong>
					<div class="t2">
						이미지에 있는 얼굴의 위치를 인식하고, 해당 위치를 모자이크 처리합니다.
					</div>
				</a>
			</li>
			<li class="m c3c4">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">AI 질의응답 (JS-MRC)</strong>
					<div class="t2">
						원하는 지문안에서 질문에 알맞은 답을 찾아드립니다.
						전문지식 없이 이해하기 어려운 문서에서 쉽게 정보를 찾아보세요.
					</div>
				</a>
			</li>
			<li class="m c3c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">한글발음화 (JS-Trans)</strong>
					<div class="t2">
						영어 단어나 문장을 한글 발음으로 변환해드립니다.
						영어발음 특성에 가장 적합한 외래어의 형태로 변환됩니다.
					</div>
				</a>
			</li>
			<li class="m c4c3">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">문장 말하기</strong>
					<div class="t2">
						간단한 문장의 순서를 맞추고, 발음하는 것을 평가합니다.
						문법 이해도와 발화 기준으로 점수가 측정됩니다. 
					</div>
				</a>
			</li>
			<li class="m c4c4">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">질문 답하기</strong>
					<div class="t2">
						질문 문장을 듣고 작문을 하여 발음하는 것을 평가합니다.
						회화 능력 정도에 따라 점수가 측정됩니다. 
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


	<!-- cp2card1 -->
	<div class="cp2card1">
	<div class="wrap1">
		<ul class="mns">
			<li class="m c1c1">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">음성 합성(JS-TTS)</strong>
					<div class="t2">
						실제 그 사람의 목소리 그대로 자연스럽게, 최고의 음질과 실시간 합성 속도를 제공 합니다.
						최대 네줄까지가 적당한 것 같습니다.
					</div>
				</a>
			</li>
			<li class="m c1c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">음성 인식(JS-STT)</strong>
					<div class="t2">
						실제 그 사람의 목소리 그대로 자연스럽게, 최고의 음질과  실시간 합성 속도를 제공 합니다.
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
<div id="cp2tabs2pane3" class="cp2tabs2pane">
<h4 class="blind">Vision</h4>


	<!-- cp2card1 -->
	<div class="cp2card1">
	<div class="wrap1">
		<ul class="mns">
			<li class="m c2c1">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">이미지 텍스트 인식(JS-OCR)</strong>
					<div class="t2">
						이미지 속 글자가 있는 위치를 찾아내고 원하는 정보를 추출합니다.
						선택적 자막 인식 서비스를 경험해보세요.
					</div>
				</a>
			</li>
			<li class="m c2c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">얼굴 인식(JS-Face)</strong>
					<div class="t2">
						이미지에 있는 얼굴의 위치를 인식하고, 추출합니다. 
					</div>
				</a>
			</li>
			<li class="m c2c3">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">얼굴 모자이크( JS-Face Blur)</strong>
					<div class="t2">
						이미지에 있는 얼굴의 위치를 인식하고, 해당 위치를 모자이크 처리합니다.
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
<div id="cp2tabs2pane4" class="cp2tabs2pane">
<h4 class="blind">Language</h4>


	<!-- cp2card1 -->
	<div class="cp2card1">
	<div class="wrap1">
		<ul class="mns">
			<li class="m c3c4">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">AI 질의응답(JS-MRC)</strong>
					<div class="t2">
						원하는 지문안에서 질문에 알맞은 답을 찾아드립니다.
						전문지식 없이 이해하기 어려운 문서에서 쉽게 정보를 찾아보세요.
					</div>
				</a>
			</li>
			<li class="m c3c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">한글발음화(JS-Trans)</strong>
					<div class="t2">
						영어 단어나 문장을 한글 발음으로 변환해드립니다.
						영어발음 특성에 가장 적합한 외래어의 형태로 변환됩니다.
					</div>
				</a>
			</li>
			<li class="m c3c3">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">자연어 이해 (JS-자연어이해 )</strong>
					<div class="t2">
						문장의 표현을 기계(컴퓨터)가 이해할 수 있는 표현으로 변환합니다.
						품사와 표제어로 구분하여 결과를 보여드립니다.
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
<div id="cp2tabs2pane5" class="cp2tabs2pane">
<h4 class="blind">Education</h4>


	<!-- cp2card1 -->
	<div class="cp2card1">
	<div class="wrap1">
		<ul class="mns">
			<li class="m c4c1">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">단어 말하기</strong>
					<div class="t2">
						짧은 단어 단위의 음성데이터를 기반으로 발음을 평가합니다.
						자음, 모음의 정확도와 유창성을 기준으로 점수화 합니다.
					</div>
				</a>
			</li>
			<li class="m c4c2">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">구문 말하기</strong>
					<div class="t2">
						단어의 조합으로 이루어진 구문의 음성데이터를 기반으로 발음을 평가합니다.
						어절 단위의 발화 정도에 따라 점수화 합니다.
					</div>
				</a>
			</li>
			<li class="m c4c3">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">문장 말하기</strong>
					<div class="t2">
						간단한 문장의 순서를 맞추고, 발음하는 것을 평가합니다.
						문법 이해도와 발화 기준으로 점수가 측정됩니다. 
					</div>
				</a>
			</li>
			<li class="m c4c4">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">질문 답하기</strong>
					<div class="t2">
						질문 문장을 듣고 작문을 하여 발음하는 것을 평가합니다.
						회화 능력 정도에 따라 점수가 측정됩니다. 
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
<div id="cp2tabs2pane6" class="cp2tabs2pane">
<h4 class="blind">Video</h4>


	<!-- cp2card1 -->
	<div class="cp2card1">
	<div class="wrap1">
		<ul class="mns">
			<li class="m c5c5">
				<a href="?#★" class="a1">
					<i class="ic1"></i>
					<strong class="t1">영상정보수집(JS-Ghost)</strong>
					<div class="t2">
						유튜브 영상의 정보를 한눈에 조회해볼 수 있습니다.
						영상 주소를 입력하고, 수집 대상을 선택해보세요.
					</div>
				</a>
			</li>
		</ul>
	</div>
	</div>
	<!-- /cp2card1 -->


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