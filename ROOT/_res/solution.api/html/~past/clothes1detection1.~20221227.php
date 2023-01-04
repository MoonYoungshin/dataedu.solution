<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221121 | @m | 요구반영. 결함개선. 고도화.
 * 20221201 | @m | 
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
<title>의상 정보 인식 (JS-Clothes) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/clothes1detection1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/vision/clothes1detection1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set2 -->
<div class="cp2set2">
	<div class="cont">
		<div class="item">
			<label class="label">
				<input type="radio" name="★1radio2" checked>
				<span class="t1">샘플 테스트</span>
			</label>
			<!-- cp2sample1img1 -->
			<div class="cp2sample1img1">
				<div class="w1">
					<div class="w1w1">
						<img src="//dolearn.ai/_res/@m/_img.ex/brothers-457237_1280.jpg" alt="★1대체텍스트필수" class="p1">
					</div>
				</div>
			</div>
			<!-- /cp2sample1img1 -->
		</div>
		<div class="item">
			<label class="label">
				<input type="radio" name="★1radio2">
				<span class="t1">내 파일 테스트</span>
			</label>
			<!-- cp2my1img1 -->
			<div class="cp2my1img1">
				<div class="w1">
					<div class="w1w1">
						<div class="w1file">
							<input type="file" class="file" id="upload-img">
							<button class="b1 button type1"><span class="t1">이미지 업로드</span><i class="ic1 upload"></i></button>
						</div>
						<div class="tg1">
							* 지원가능 파일 확장자 : .jpg, .png<br>
							* 이미지 파일 용량은 5MB 이하만 가능합니다.<br>
						</div>
					</div>
					<div class="w1w1 preview">
						<img src="/_res/solution/img/lib/b.png" alt="업로드 이미지" class="p1" id="preview-img">
					</div>
				</div>
			</div>
			<!-- /cp2my1img1 -->
		</div>
	</div>
</div>
<!-- /cp2set2 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<button type="submit" class="button submit type1"><span class="t1">결과보기</span></button>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/


	/** ◇◆ 이미지선택 라디오. 20221108. @m.
	 */
	(function(){
		var $my = $('.cp2set2'), // 래퍼
			item = '.item', // 항목
			radio = 'input[type="radio"]'; // 라디오

		// 라디오 콘트롤 클릭하면
		$my.on('click', radio, function(){
			$my.find(item).removeClass('on');
			$(this).closest(item).addClass('on');
		});

	})();


	/** ◇◆ 첨부파일 이미지 미리보기. 20221110. @m.
	 */
	(function(){
		
		var $file = $('input[type="file"]#upload-img'), // 첨부파일 이미지 업로드
			$img = $('img#preview-img'), // 미리보기 이미지
			preview = '.preview'; // 미리보기 래퍼

		// 파일 선택하면
		$file.on('change', function(e) {
			var file = e.target.files[0];
			var reader = new FileReader(); 
			if( !isImageFile(file) ){
				alert('지원 가능 파일 확장자(jpg, png)가 아닙니다.');
				return false;
			}
			if( isOverSize(file) ){
				alert('이미지 파일 용량은 5MB 이하만 가능합니다.');
				return false;
			}
			// 파일 읽기 성공하면
			reader.addEventListener('load', function(e) {
				$img.attr('src', e.target.result);
				$img.closest(preview).addClass('on'); // 미리보기 래퍼 활성
			});
			reader.readAsDataURL(file);
		});

		// 확장자 제한
		function isImageFile(file) {
			var ext = file.name.split('.').pop().toLowerCase(); // 확장자 추출
			//return ($.inArray(ext, ['jpg', 'jpeg', 'gif', 'png']) === -1) ? false : true;
			return ($.inArray(ext, ['jpg', 'png']) === -1) ? false : true;
		}

		// 파일 용량 제한
		function isOverSize(file) {
			var maxSize = 1024 * 1024 * 5; // 최대 5MB 
			return (file.size > maxSize) ? true : false;
		}

	})();


/*]]>*/</script>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>