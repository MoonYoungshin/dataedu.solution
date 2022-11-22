<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221107 | @m | 요구반영. 결함개선. 고도화
 * 20221110 | @m | 
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
<title>내 프로필 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body class="type2">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- cp1hg1 -->
<div class="cp1hg1">
	<h2 class="h1">내 프로필</h2>
</div>
<!-- /cp1hg1 -->


<!-- cp1my1profile1 cp1write1 -->
<div class="cp1my1profile1 cp1write1">
	<div class="w1">

		<!-- cp1profile1write1 -->
		<div class="cp1profile1write1">
			<div class="f1">
				<input type="file" class="file" id="upload-img">
				<div class="f1p1">
					<img src="/_res/solution/img/lib2/noimg1face1.png" alt="프로필 이미지" id="preview-img">
				</div>
				<button type="button" class="ic1" title="이미지 업로드"><span class="blind">이미지 업로드</span></button>
			</div>
		</div>
		<!-- /cp1profile1write1 -->

		<script>/*<![CDATA[*/
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
						alert('이미지 파일 용량은 2MB 이하만 가능합니다.');
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
					var maxSize = 1024 * 1024 * 2; // 최대 2MB 
					return (file.size > maxSize) ? true : false;
				}

			})();
		/*]]>*/</script>


	</div>
	<div class="w2">

		<div class="item">
			<span class="label form-t1">이메일</span>
			<input type="text" value="Hong@gmail.com" readonly placeholder="account@emailserver.com" title="이메일" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">이름</span>
			<input type="text" value="홍길동" readonly placeholder="이름" title="이름" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">연락처</span>
			<input type="text" value="010–1234–5678" placeholder="연락처" title="연락처" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">회사/소속</span>
			<input type="text" value="데이터에듀" placeholder="회사/소속" title="회사/소속" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">비밀번호 변경</span>
			<div class="dd1">
				<input type="password" value="" placeholder="현재 비밀번호" title="현재 비밀번호" class="w100">
				<input type="password" value="" placeholder="새 비밀번호" title="새 현재 비밀번호" class="w100">
				<input type="password" value="" placeholder="새 비밀번호 확인" title="새 비밀번호 확인" class="w100 ic1check1">
			</div>
		</div>

		<div class="btns">
			<button type="submit" class="button submit block">저장하기</button>
		</div>

	</div>
</div>
<!-- /cp1my1profile1 cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>