<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221108 | @m | 요구반영. 결함개선. 고도화.
 * 20221125 | @m | 
 * 20221201 | @m | 
 * 20221227 | @m | 
 * 20230103 | @m | 
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
<title>AI 화가 (JS-TTI) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/tti1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/tti1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2img1set1 -->
<div class="cp2img1set1">
	<div class="tg1">
		<p class="t1">
			샘플을 선택해보세요.
		</p>
	</div>
	<div class="cont">
		<!-- cp2gallery1 -->
		<div class="cp2gallery1">
			<div class="even-grid">
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="Keanu Reeves portrait photo of a asia old warrior chief, tribal panther make up, blue on red, side profile, looking away, serious eyes, 50mm portrait photography, hard rim lighting photography–beta –ar 2:3 –beta –upbeta –beta –upbeta –beta –upbeta">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/3.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="a young blonde female jedi with hair standing still looking at the sunset concept art by anime, realistic painting, high definition, concept art, portait image, path tracing, serene landscape, high quality, highly detailed, 8K, soft colors, warm colors, turbulent sea, high coherence, anatomically correct, hyperrealistic, concept art, defined face, five fingers, symmetrical">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/2022_11-95.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="portrait">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/2022_11-109.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="Cute and adorable ferret wizard, wearing coat and suit, steampunk, lantern, anthromorphic, Jean paptiste monge, oil painting">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/24.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="A digital illustration of a steampunk library with clockwork machines, 4k, detailed, trending in artstation, fantasy vivid colors">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/14.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="A digital illustration of building named dataedu corporation, 4k, detailed, trending in artstation, cyberpunk colors">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/35.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="A art piece of Japan, 4k, detailed, cyberpunk color, trending on artstation HQ">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/55.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
				<label class="column item">
					<span class="a1">
						<input type="radio" name="sample" value="A digital illustration of sportscar, 4k, detailed, Ferrari, trending in artstation">
						<span class="f1">
							<img src="<?=$sitePath?>/img/ex_tti/20.jpg" alt="AI 화가 샘플1" class="p1">
						</span>
					</span>
				</label>
			</div>
		</div>
		<!-- /cp2gallery1 -->
	</div>
</div>
<!-- /cp2img1set1 -->


<!-- cp2text1input1 -->
<div class="cp2text1input1">
	<div class="tg1">
		<p class="t1">
			문장을 직접 입력해보세요.
		</p>
	</div>
	<textarea rows="5" cols="80" class="textarea" maxlength="400" placeholder="Enter your prompt" title="문장 입력"></textarea>
	<div class="tg2">
		<span class="textarea-count">
			<span class="t1"><!-- 0/400 --></span><span class="t2">자</span>
		</span>
	</div>
</div>
<!-- /cp2text1input1 -->


<script>/*<![CDATA[*/


	/** ◇◆ 최대 몇자 이내로 입력 가능. 20221108. 20221227. @m.
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

			$('input[name="sample"]').prop('checked', false); // 20221227. 샘플 문장 선택 취소

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


	/** ◇◆ 샘플 선택 시 텍스트박스 입력. 20230103. @m.
	 */
	(function(){
		var $my = $('.cp2img1set1'), // 샘플 래퍼
			$m = $('.item', $my), // 샘플 항목
			$textarea = $('.cp2text1input1 .textarea'); // 텍스트 입력 영역

		// 항목 클릭
		$m.on('click', function(){
			$textarea.val( $('input[type="radio"]', this).val() );
		});

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