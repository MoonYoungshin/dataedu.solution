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
<title>이미지 텍스트인식 (OCR) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/ocr1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/ocr1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set1 -->
<div class="cp2set1">
	<div class="hg1">
		<p class="t1">
			어느 위치의 자막을 인식할지 설정하세요.
		</p>
	</div>
	<div class="cont">
		<div class="item">
			<label for="★1radio1e1" class="label">
				<input type="radio" name="★1radio1" id="★1radio1e1">
				<span class="t1">배경자막</span>
			</label>
		</div>
		<div class="item">
			<label for="★1radio1e2" class="label">
				<input type="radio" name="★1radio1" id="★1radio1e2">
				<span class="t1">하단자막</span>
			</label>
		</div>
	</div>
</div>
<!-- /cp2set1 -->


<!-- cp2set2 -->
<div class="cp2set2">
	<div class="cont">
		<div class="item">
			<label for="★1radio2e1" class="label">
				<input type="radio" name="★1radio2" id="★1radio2e1">
				<span class="t1">샘플 테스트</span>
			</label>
			<!-- cp2sample1img1 -->
			<div class="cp2sample1img1">
				<div class="w1">
					<div class="w1w1">
						<img src="//dolearn.ai/_res/@m/_img.ex/w1280a1/w1280a1101.jpg" alt="★1대체텍스트필수" class="p1">
					</div>
				</div>
			</div>
			<!-- /cp2sample1img1 -->
		</div>
		<div class="item">
			<label for="★1radio2e2" class="label">
				<input type="radio" name="★1radio2" id="★1radio2e2">
				<span class="t1">내 파일 테스트</span>
			</label>
			<!-- cp2my1img1 -->
			<div class="cp2my1img1">
				<div class="w1">
					<div class="w1w1">
						<div class="w1file">
							<input type="file" id="★1file0" class="file">
							<b class="b1 button type1"><span class="t1">이미지 업로드</span><i class="ic1 upload"></i></b>
						</div>
						<div class="tg1">
							* 지원하는 언어: 한글(특수문자 제외)<br>
							* 지원가능 파일 확장자 : .jpg, .png<br>
							* 이미지 파일 용량은 5MB 이하만 가능합니다.<br>
						</div>
					</div>
					<!-- 업로드 이미지 ))
					<div class="w1w1">
						<img src="//dolearn.ai/_res/@m/_img.ex/w1280a1/w1280a1102.jpg" alt="★1대체텍스트필수" class="p1">
					</div> -->
				</div>
			</div>
			<!-- /cp2my1img1 -->
		</div>
	</div>
	<div class="btns">
		<a href="?#★" class="b1 button submit type1"><span class="t1">결과보기</span></a>
	</div>
</div>
<!-- /cp2set2 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/
	/** ◇◆ 이미지선택 라디오. 20221107. @m.
	 */
	(function(){
		var $my = $('.cp2set2'), // 래퍼
			item = '.item', // 항목
			radio = 'input[type="radio"]'; // 라디오
			p1 = '.p1'; // 샘플이미지

		// 라디오 콘트롤 클릭하면
		$my.on('click', radio, function(){
			$my.find(item).removeClass('on');
			$(this).closest(item).addClass('on');
		});

	})();
/*]]>*/</script>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>