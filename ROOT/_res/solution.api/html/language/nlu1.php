<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221108 | @m | 요구반영. 결함개선. 고도화.
 * 20221201 | @m | 
 * 20221226 | @m | 
 * 20230104 | @m | 
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
<title>자연어 이해 (JS-NLU) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/nlu1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/language/nlu1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- form -->
<form action="?#★" onsubmit="return doSubmit_myForm(this);">


<!-- cp2set1 -->
<div class="cp2set1">
	<div class="tg1">
		<p class="t1">
			변환하고 싶은 언어를 선택하세요.
		</p>
	</div>
	<div class="cont">
		<label class="item">
			<input type="radio" name="lang" value="kor" checked data-text="내가 너희들에게 어떻게 해 주기를 원하느냐?">
			<span class="t1">한국어</span>
		</label>
		<label class="item">
			<input type="radio" name="lang" value="eng" data-text="The greatest glory in living lies not in never falling, but in rising every time we fall.">
			<span class="t1">영어</span>
		</label>
	</div>
</div>
<!-- /cp2set1 -->


<!-- cp2text1input1 -->
<div class="cp2text1input1">
	<div class="tg1">
		<p class="t1">
			아래는 예시 문장입니다. <span class="dpib">문장을 직접 입력해주세요.</span>
		</p>
	</div>
	<textarea rows="5" cols="80" class="textarea" maxlength="200" placeholder="문장을 직접 입력해주세요." title="문장 입력">내가 너희들에게 어떻게 해 주기를 원하느냐?</textarea>
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


	/** ◇◆ 언어 샘플 선택 시 텍스트박스 입력. 20230104. @m.
	 */
	(function(){
		var $my = $('.cp2set1'), // 언어 샘플 래퍼
			$m = $('input[type="radio"]', $my), // 선택 항목
			$textarea = $('.cp2text1input1 .textarea'); // 텍스트 입력 영역

		// 항목 선택
		$m.on('change', function(){
			// 텍스트 입력 영역에 값 넣고
			$textarea.val( $(this).data('text') );
			// keyup 트리거하여 문자수 재계산
			$textarea.triggerHandler('keyup');
			// 20230104. keyup 으로 샘플 선택 취소된거 재선택
			//$('input[name="sample"]', $(this)).prop('checked', true);
		});
	})();


	/** ◇◆ 폼전송체크. 20230104. @m.
	 * 옵션에 맞지 않는 텍스트 입력시 오류메시지 표출 기능
	 */
	function doSubmit_myForm(my){
		var $my = $(my),
			$radio = $('input[name="lang"]', $my),
			$textarea = $('.textarea', $my);

		var re_kor = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/,
			re_eng = /[a-zA-Z]/;

		var testStr = $textarea.val(), // 입력 영역 문자열
			radioVal = $radio.filter(':checked').val(); // 라디오 선택값

		//console.log( radioVal, re_kor.test(testStr), re_eng.test(testStr) );

		// 입력 없으면
		if( !$textarea.val() ){
			alert("문장을 입력해주세요.");
			$textarea.focus();
			return false;
		}

		// 입력 틀리면 (한국어 선택 영문 입력  || 영어 선택 한글 입력)
		if( ( radioVal == 'kor' && re_eng.test(testStr) ) || ( radioVal == 'eng' && re_kor.test(testStr) ) ){
			alert("요청한 값이 올바르지 않습니다. 다시 입력해주세요.");
			$textarea.focus();
			return false;
		}
	}


/*]]>*/</script>


<!-- cp2fg1 -->
<div class="cp2fg1">
	<button type="submit" class="button submit type1"><span class="t1">결과보기</span></button>
</div>
<!-- /cp2fg1 -->


</form>
<!-- /form -->


</div>
<!-- /cp2view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>