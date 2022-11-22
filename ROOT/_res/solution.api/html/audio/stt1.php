<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221108 | @m | 
 * 20221111 | @m | 
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
<title>음성인식 (JS-STT) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/stt1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/stt1_inc1.php"; ?>
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
			녹음 버튼을 클릭하여 텍스트로 변환하고 싶은 문장을 말하세요.<br>
			(또는 음성파일을 업로드 해주세요)<br>
		</p>
	</div>
	<div class="cont">
		<label class="item">
			<input type="radio" name="★1radio1">
			<span class="t1">한국어</span>
		</label>
		<label class="item">
			<input type="radio" name="★1radio1">
			<span class="t1">영어</span>
		</label>
	</div>
</div>
<!-- /cp2set1 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<button class="button type1" id="btn-record"><span class="t1">녹음하기</span></button>
	<!-- cp2b1upload1 -->
	<div class="cp2b1upload1 button type1">
		<input type="file" id="upload-file">
		<button class="button type1"><span class="t1">업로드</span><i class="ic1 upload"></i></button>
	</div>
	<!-- /cp2b1upload1 -->
</div>
<!-- /cp2fg1 -->


<!-- cp2t1 -->
<div class="cp2t1">
	* 지원가능한 파일 확장자 : wav<br>
	* 500KB 이하의 음성 파일을 이용해주세요.<br>
</div>
<!-- /cp2t1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/


	/** ◇◆ 첨부파일 업로드. 20221111. @m.
	 */
	(function(){
		
		var $file1 = $('input[type="file"]#upload-file'); // 첨부파일 업로드

		// 파일 선택하면
		$file1.on('change', function(e) {
			var file = e.target.files[0];
			var reader = new FileReader(); 
			if( !isImageFile(file) ){
				alert('지원 가능 파일 확장자(wav)가 아닙니다.');
				return false;
			}
			if( isOverSize(file) ){
				alert('파일 용량은 500KB 이하만 가능합니다.');
				return false;
			}
			// 파일 읽기 성공하면
			reader.addEventListener('load', function(e) {
				location.href = 'stt1ing2convert1.php'; // 음성변환 진행
			});
			reader.readAsDataURL(file);
		});

		// 확장자 제한
		function isImageFile(file) {
			var ext = file.name.split('.').pop().toLowerCase(); // 확장자 추출
			//return ($.inArray(ext, ['jpg', 'jpeg', 'gif', 'png']) === -1) ? false : true;
			return ($.inArray(ext, ['wav']) === -1) ? false : true;
		}

		// 파일 용량 제한
		function isOverSize(file) {
			var maxSize = 1024 * 1024 * .5; // 최대 500KB 
			return (file.size > maxSize) ? true : false;
		}

	})();


	/** ◇◆ 마이크연결여부. 20221111. @m.
	 */
	(function(){

		var $btn1 = $('#btn-record'); // 녹음하기 버튼
		
		// 녹음하기 버튼 클릭하면
		$btn1.on('click', function(e) {
			if (navigator.mediaDevices) {
			const constraints = {
				audio: true
			}
			navigator.mediaDevices.getUserMedia(constraints)
				.then(stream => { // 마이크 연결시
					location.href = 'stt1ing1record1.php'; // 음성녹음 진행
				})
				.catch(err => { // 마이크 미연결시
					alert('마이크가 연결되어 있지 않습니다.\n마이크를 연결하시고 다시 시도하여 주시기 바랍니다.');
					console.log('The following error occurred: ' + err)
				})
			}
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