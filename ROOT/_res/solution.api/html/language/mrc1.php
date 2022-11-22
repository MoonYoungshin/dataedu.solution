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
<title>AI 질의응답 - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/mrc1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/mrc1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2text1input1 -->
<div class="cp2text1input1">
	<div class="tg1">
		<p class="t1">
			아래는 예시 지문입니다. <span class="dpib">지문을 직접 입력해주세요.</span>
		</p>
	</div>
	<textarea rows="5" cols="80" class="textarea" maxlength="200" placeholder="지문을 직접 입력해주세요." title="지문 입력">데이터에듀가 ‘2022 한국소비자만족지수 1위’ 교육(빅데이터AI교육) 부문을 3년 연속 수상했다. 한국소비자만족지수 1위는 소비자가 각 분야별 상품과 서비스의 만족도를 직접 평가하고, 추천하여 미래지향적인 기업을 발굴·시상하고자 제정됐다. 
데이터에듀는 부산에 위치한 빅데이터, AI솔루션 전문 업체로, 2014년 빅데이터 자격증 강의 전문 사이트를 시작으로, 온·오프라인 강의와 함께 데이터분석 준전문가(ADsP), 데이터분석 전문가(ADP), 빅데이터 분석기사 등 자격증 교재를 출판하는 빅데이터교육 전문 회사로 성장·진화하고 있다.</textarea>
	<div class="tg2">
		<span class="textarea-count">
			<span class="t1"><!-- 70/200 --></span><span class="t2">자</span>
		</span>
	</div>
</div>
<!-- /cp2text1input1 -->

<script>/*<![CDATA[*/
	/** ◇◆ 최대 몇자 이내로 입력 가능. 20221108. @m.
	 * 입력 있으면 전송 활성
	 */
	(function(){
		var $my = $('.cp2text1input1'), // 래퍼
			$textarea = $('.textarea', $my), // 텍스트 입력 영역
			$cnt = $('.textarea-count .t1', $my), // 카운터
			mxn = $textarea.attr('maxlength'); // 최대 입력 가능 수

		// 최초 호출
		do1();

		// 텍스트 입력 영역에서 키보드 떼면
		$textarea.on('keyup', function(){
			do1(); // 호출
		});

		// 동작
		function do1(){
			$cnt.html( $textarea.val().length + '/' + mxn );
			// 최대 입력값 넘으면
			if( $textarea.val().length > mxn ){
				$textarea.val( $textarea.val().substring(0, mxn) );
				$cnt.html( mxn +'/' + mxn );
			}
			// 최소 입력 수 이상이면 전송 활성
			if( $textarea.val().length >= 2 ){
				$('~.btns .submit', $textarea).addClass('on');
			}else{
				$('~.btns .submit', $textarea).removeClass('on');
			}
		}
	})();
/*]]>*/</script>


<!-- cp2text1input1 -->
<div class="cp2text1input1">
	<div class="tg1">
		<p class="t1">
			아래는 예시 질문입니다. <span class="dpib">질문을 직접 입력해주세요.</span>
		</p>
	</div>
	<textarea rows="2" cols="80" class="textarea" maxlength="200" placeholder="질문을 직접 입력해주세요." title="질문 입력">데이터에듀는 어떤 자격증 교재를 출판하나요?</textarea>
	<!-- <div class="tg2">
		<span class="textarea-count">
			<span class="t1">0/200</span><span class="t2">자</span>
		</span>
	</div> -->
</div>
<!-- /cp2text1input1 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<button type="submit" class="button submit type1"><span class="t1">결과보기</span></button>
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