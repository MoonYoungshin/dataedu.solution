<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221108 | @m | 
 * 20221123 | @m | 
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
<title>음성정제 (JS-Denoise) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/denoise1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/denoise1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


		<!-- cp2set3 -->
		<div class="cp2set3">
			<h4 class="h1">샘플 테스트</h4>
			<div class="cont">
				<div class="item">
					<label class="label">
						<input type="radio" name="★1radio1">
						<span class="t1">샘플A</span>
					</label>
					<!-- cp2player1 -->
					<div class="cp2player1">
						<div class="w1">
							<audio class="audio" preload="auto" onended="audioEnded($(this))">
								<source src="/_res/solution.api/data/mp3/entrance.mp3" type="audio/wav">
								<p>Alas, your browser doesn't support html5 audio.</p>
							</audio>
							<div class="slider">
									<i class="elapsed"></i>
							</div>
							<div class="time">
								<span class="current">0:00</span>
								<i class="sep">/</i>
								<span class="total">0:05</span>
							</div>
							<div class="controls">
								<button type="button" class="play"></button>
								<button type="button" class="pause"></button>
							</div>
						</div>
					</div>
					<!-- /cp2player1 -->
				</div>
			</div>
		</div>
		<!-- /cp2set3 -->


		<div class="item">
			<label class="label">
				<input type="radio" name="★1radio1">
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
							* 지원하는 언어: 한글(특수문자 제외)<br>
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