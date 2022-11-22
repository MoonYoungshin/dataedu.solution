<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221108 | @m | 
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
<title>음성합성 (JS-TTS) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/tts1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/tts1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2voice1select1 -->
<div class="cp2voice1select1">
	<div class="item">
		<input type="radio" name="★1radio1" id="★1radio1e1">
		<label for="★1radio1e1" class="label"><span class="t1 blind">성인 여성</span></label>
		<div class="w1">
			<div class="tg1">
				<i class="ic1 female"></i>
				<span class="t1">성인 여성</span>
			</div>
			<select title="보이스 선택" class="select">
				<option value="">보이스 선택</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
			</select>
		</div>
	</div>
	<div class="item">
		<input type="radio" name="★1radio1" id="★1radio1e2">
		<label for="★1radio1e2" class="label"><span class="t1 blind">성인 남성</span></label>
		<div class="w1">
			<div class="tg1">
				<i class="ic1 male"></i>
				<span class="t1">성인 남성</span>
			</div>
			<select title="보이스 선택" class="select">
				<option value="">보이스 선택</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
				<option value="">★옵션명</option>
			</select>
		</div>
	</div>
</div>
<!-- /cp2voice1select1 -->

<script>/*<![CDATA[*/
	/** ◇◆ select 선택하면 radio 선택 . 20221102. @m.
	 */
	(function(){
		var $my = $('.cp2voice1select1'), // 래퍼
			item = '.item', // 항목
			select = '.select'; // 선택 목록
			radio = 'input[type="radio"]'; // 라디오

		// 선택 목록 클릭하면
		$my.on('click', select, function(){
			$(this).closest(item).find(radio).trigger('click');
		});

	})();
/*]]>*/</script>


<!-- cp2text1input1 -->
<div class="cp2text1input1">
	<div class="tg1">
		<p class="t1">
			아래는 예시 문장입니다. <span class="dpib">문장을 직접 입력해주세요.</span>
		</p>
	</div>
	<textarea rows="5" cols="80" class="textarea" maxlength="200" placeholder="200자 이내로 텍스트를 입력하세요." title=" 문장 입력">옛날 옛적에 마음씨 착한 나무꾼 돌쇠가 살고 있었어요. 돌쇠는 언제나 일찍 일어나 부모님께 드릴 아침을 준비하는 효자였어요.</textarea>
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