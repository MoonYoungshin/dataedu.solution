<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221108 | @m | 요구반영. 결함개선. 고도화.
 * 20221201 | @m | 
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
<title>한글발음화 (JS-Trans) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/transliteration1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/transliteration1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set1 -->
<div class="cp2set1">
	<div class="tg1">
		<p class="t1">
			한글로 변환하고 싶은 유형을 선택하세요.
		</p>
	</div>
	<div class="cont">
		<label class="item">
			<input type="radio" name="★1radio1">
			<span class="t1">단어</span>
		</label>
		<label class="item">
			<input type="radio" name="★1radio1">
			<span class="t1">문장</span>
		</label>
	</div>
</div>
<!-- /cp2set1 -->


<!-- cp2text1set1 -->
<div class="cp2text1set1">
	<div class="tg1">
		<p class="t1">
			샘플 단어를 선택해보세요.
		</p>
	</div>
	<div class="cont cp1fcontrol1 mline">
		<label class="item">
			<input type="radio" name="★1radio2">
			<span class="t1">Hakuna Matata</span>
		</label>
		<label class="item">
			<input type="radio" name="★1radio2">
			<span class="t1">Abracadabra</span>
		</label>
	</div>
</div>
<!-- /cp2text1set1 -->


<!-- cp2text1input1 -->
<div class="cp2text1input1">
	<div class="tg1">
		<p class="t1">
			단어를 직접 입력해보세요.
		</p>
	</div>
	<textarea rows="5" cols="80" class="textarea" maxlength="200" placeholder="영어 단어를 직접 입력해주세요." title="단어 입력"></textarea>
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


<script>/*<![CDATA[*/
	/** ◇◆ 유형 선택 라디오. 20221108. @m.
	 */
	(function(){
		var $my = $('.cp2view1'), // 래퍼
			$radio = $('.cp2set1 input[type="radio"]', $my), // 라디오
			$t1 = $('.cp2text1set1 .tg1 .t1', $my), // 
			$t2 = $('.cp2text1input1 .tg1 .t1', $my), // 
			$t3 = $('.cp2text1input1 .textarea', $my); //

		// 단어 클릭
		$radio.eq(0).on('click', function(){
			$t1.text('샘플 단어를 선택해보세요.');
			$t2.text('단어를 직접 입력해보세요.');
			$t3.attr({
				placeholder: '영어 단어를 직접 입력해주세요.',
				title: '단어 입력'
			});
		});
		// 문장 클릭
		$radio.eq(1).on('click', function(){
			$t1.text('샘플 문장을 선택해보세요.');
			$t2.text('문장을 직접 입력해보세요.');
			$t3.attr({
				placeholder: '영어 문장을 직접 입력해주세요.',
				title: '문장 입력'
			});
		});
		$radio.eq(0).trigger('click');
	})();
/*]]>*/</script>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>