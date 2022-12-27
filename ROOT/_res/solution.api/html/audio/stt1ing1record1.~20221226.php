<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221102 | @m | 요구반영. 결함개선. 고도화.
 * 20221116 | @m | 
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


<!-- cp2jumbotron1 -->
<div class="cp2jumbotron1">
<div class="wrap1">
	<div class="tg1">
		<p class="t1">
			음성을 듣고 있습니다.<br>
			완료버튼을 클릭하고 변환을 시작하세요!<br>
		</p>
	</div>
	<!-- cp2record1 -->
	<div class="cp2record1">
		<button class="b1" id="btn-record-sw">
			<i class="bg1"></i>
			<i class="ic1"></i>
			<span class="t1">녹음시작/완료</span>
		</button>
		<audio class="audio" id="audio-e1" controls>녹음된 소리를 재생할 audio</audio>
	</div>
	<!-- /cp2record1 -->
</div>
</div>
<!-- /cp2jumbotron1 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<button class="button type1" id="btn-done"><span class="t1">완료</span></button>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/

	/** ◇◆ 녹음시작종료. 20221111~20221115. 20221116. @m.
	 * 20221114. 녹음중 애니메이션 CSS 대신 JS 로 수정
	 * 20221116. 오타 수정, 주석 수정
	 */
	(function(){

		//const $b1record1 = document.querySelector('#btn-record-sw'); // 녹음시작/완료 버튼
		//const $audio1 = document.querySelector('#audio-e1');

		var $b1record1 = $('#btn-record-sw'); // 녹음시작/완료 버튼
		var $audio1 = $('#audio-e1'); // 오디오 요소 ( 20221111. 감춰둠)
		var $b1done1 = $('#btn-done'); // 완료 버튼
		var timer; // 타이머
		var msec = 10000; // ☆★ 음성입력 기준 시간 설정

		// 녹음중 상태 변수
		let isRecording = false;

		// MediaRecorder 변수 생성
		let mediaRecorder = null;

		// 녹음 데이터 저장 배열
		const audioArray = [];

		// 녹음시작/완료 버튼 클릭
		$b1record1[0].onclick = async function (event) {
			if(!isRecording){

				// 마이크 mediaStream 생성: Promise를 반환하므로 async/await 사용
				const mediaStream = await navigator.mediaDevices.getUserMedia({audio: true});

				// MediaRecorder 생성
				mediaRecorder = new MediaRecorder(mediaStream);

				// 이벤트핸들러: 녹음 데이터 취득 처리
				mediaRecorder.ondataavailable = (event)=>{
					audioArray.push(event.data); // 오디오 데이터가 취득될 때마다 배열에 담아둔다.
				}

				// 이벤트핸들러: 녹음 종료 처리 & 재생하기
				mediaRecorder.onstop = (event)=>{
						
					// 녹음이 종료되면, 배열에 담긴 오디오 데이터(Blob)들을 합친다: 코덱도 설정해준다.
					const blob = new Blob(audioArray, {'type': 'audio/ogg codecs=opus'});
					audioArray.splice(0); // 기존 오디오 데이터들은 모두 비워 초기화한다.
					
					// Blob 데이터에 접근할 수 있는 주소를 생성한다.
					const blobURL = window.URL.createObjectURL(blob);

					// audio엘리먼트로 재생한다.
					$audio1[0].src = blobURL;
					$audio1[0].play();
					//console.log( $audio1[0].src );

				}

				// 녹음 시작
				mediaRecorder.start();
				isRecording = true;

				//$b1record1.addClass('recording'); // @m
				$('.bg1', $b1record1).css({
					top: '0'
				}).animate({
					top: '-100%'
				}, msec, 'linear', function(){});

			}else{

				// 녹음 종료
				mediaRecorder.stop();
				isRecording = false;

				//$b1record1.removeClass('recording'); // @m
				$('.bg1', $b1record1).stop().animate({
					top: '-100%'
				}, 200, function(){
					location.href = 'stt1ing2convert1.php'; // 음성변환 진행
				});

			}
		}

		// 바로 녹음 시작. @m
		if(!isRecording){ // 녹음중 아니면
			$b1record1.trigger('click'); // 녹음시작
		}
		// 완료 버튼 안누르면 msec 초 후 종료
		msec += 900; // 녹음시간 상계
		clearTimeout(timer);
		timer = setTimeout(function(){
			if(!!isRecording){ // 녹음중
				$b1record1.trigger('click'); // 녹음종료
			}
		}, msec); // 밀리초 지연

		// 완료 버튼 클릭. @m
		$b1done1.on('click', function(){
			if(!!isRecording){ // 녹음중
				$b1record1.trigger('click'); // 녹음종료
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