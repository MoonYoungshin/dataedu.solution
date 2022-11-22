<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221115 | @m | 요구반영. 결함개선. 고도화.
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
<title>단어 말하기 - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/education/speak1word1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/education/speak1word1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2speak1 -->
<div class="cp2speak1">

	<!-- 지시 -->
	<div class="direction">
		단어를 듣고 발음해보세요.
	</div>

	<!-- box -->
	<div class="box">

		<!-- step -->
		<div class="step">
			<a class="a1 step1">STEP 01</a>
			<a class="a1 step2">STEP 02</a>
			<a class="a1 step3">STEP 03</a>
		</div>
		<!-- /step -->

		<!-- cp2question1 -->
		<div class="cp2question1">
			<!-- step1 -->
			<div class="q1 step1">
				<button type="button" class="b1q1play1">문제 듣기</button>
				<audio class="audio1q1">
					<source src="/_res/solution.api/data/mp3/6_Ch1.bear.mp3" type="audio/mpeg">
				</audio>
				<div class="text1q1">
					<div class="t1">Bear</div>
				</div>
			</div>
			<!-- step2 -->
			<div class="q1 step2">
				<button type="button" class="b1q1play1">문제 듣기</button>
				<audio class="audio1q1">
					<source src="/_res/solution.api/data/mp3/7_Ch1.rabbit.mp3" type="audio/mpeg">
				</audio>
				<div class="text1q1">
					<div class="t1">Rabbit</div>
				</div>
			</div>
			<!-- step3 -->
			<div class="q1 step3">
				<button type="button" class="b1q1play1">문제 듣기</button>
				<audio class="audio1q1">
					<source src="/_res/solution.api/data/mp3/8_Ch1.ball.mp3" type="audio/mpeg">
				</audio>
				<div class="text1q1">
					<div class="t1">Ball</div>
				</div>
			</div>
		</div>
		<!-- /cp2question1 -->

	</div>
	<!-- /box -->

	<!-- cp2record2 (말하기녹음) -->
	<div class="cp2record2">
		<div class="w1">
			<div class="tg1">
				<div class="t1">
					버튼을 눌러 마이크를 활성화하고, 발음하세요.
					<!-- 말하기가 끝나면 버튼을 누르세요. -->
				</div>
			</div>
		</div>
		<div class="w2">
			<button class="b1record1" id="btn-record-sw">
				<i class="bg1"></i>
				<i class="ic1"></i>
				<span class="t1">녹음시작/완료</span>
				<!-- 녹음중 (녹음대기 / 녹음인식 / 녹음분석) 상태와 타임바 없음 -->
			</button>
			<audio class="audio" id="audio-e1" controls>녹음된 소리를 재생할 audio 엘리먼트</audio>
		</div>
	</div>
	<!-- /cp2record2 -->

	<!-- score -->
	<div class="score">
		<span class="t1">SCORE</span>
		<span class="t2">95</span>
	</div>
	<!-- /score -->

	<!-- cp2fg1 -->
	<div class="cp2fg1">
		<a href="javascript:void(0)" class="button type1 b1next1"><span class="t1">다음으로</span></a>
	</div>
	<!-- /cp2fg1 -->

</div>
<!-- /cp2speak1 -->


</div>
<!-- /cp2view1 -->



<script>/*<![CDATA[*/
	$(function(){


		/** ◇◆ 문제 듣고 말하기 제어. 20221115. @m.
		 */
		(function(){

			var $my = $('.cp2speak1'), // 래퍼

				$step_item = $('.step .a1', $my), // 스텝 항목
				$q_item = $('.cp2question1 .q1', $my), // 문제 항목

				//$audio1q1 = $('.audio1q1', $my), // 문제
				$b1q1play1 = $('.b1q1play1', $my), // 문제 듣기

				$w1b1t1 = $('.cp2record2', $my), // 녹음버튼 + 도움말 래퍼
				$b1record1 = $('.b1record1', $my), // 녹음버튼
				$t1 = $('.tg1 .t1', $my), // 도움말

				$score = $('.score', $my), // 점수
				$fg1 = $('.cp2fg1', $my), // 푸터 래퍼
				$b1next1 = $('.b1next1', $my), // 다음 버튼

				// JS 객체로 (제어위해)
				//audio1q1 = $audio1q1[0],

				msec =  5000, // 녹음시간 밀리초 ☆★ 음성입력 기준 시간 설정
				timer1, timer2; // 타이머
				n = 1; // step 순번

			// 초기화
			step(); // 스텝 순번 활성
			$t1._v0 = $t1.text(); // 도움말 기본값 저장

			// 문제 듣기 클릭
			$b1q1play1.on('click', function(){
				$(this).siblings('audio')[0].play();
			});

			// 녹음 버튼 클릭
			$b1record1.on('click', function(){
				clearTimeout(timer1);
				clearTimeout(timer2);
				record();
			});

			// 다음 버튼 클릭
			$b1next1.on('click', function(){
				if(n < $step_item.length){
					n++
				}else{
					n = 1;
				}
				step();
			});

			// 녹음중/종료 동작
			function record(){
				console.log( '@@@', $my.data('st'));

				// $my.attr(); $my.data('st'); 혼용하지 말자!
				if( !($my.data('st') == 'recording') ){ // 녹음중 아니면
					$my.data('st', 'recording'); // 녹음중 상태
					$t1.text('말하기가 끝나면 버튼을 누르세요.');
					timer1 = setTimeout(function(){ // 녹음중이면
						analyze(); // 분석중 동작 호출
					}, msec); // 녹음시간
				}else{
					analyze(); // 분석중 동작 호출
				}
			}

			// 분석중 동작
			function analyze(){
				if( !($my.data('st') == 'analyzing') ){
					//console.log(111);
					$my.data('st', 'analyzing'); // 분석중 상태
					$t1.text('~~ 분석중 ~~');
					timer2 = setTimeout(function(){
						done();
					}, 2000); // 분석시간 (☆★)
				}
			}

			// 녹음+분석 끝나면 호출
			function done(){
				$my.data('st', 'done'); // 녹음끝 상태
				setTimeout(function(){
					done2();
				}, 0); // 지연시간
			}

			// 끝 동작 고도화
			function done2(){
				$w1b1t1.hide(); // 녹음 버튼 감춤
				$score.show(); // 점수 보임
				$fg1.show(); // 푸터 래퍼
				// 게이지바 제로 상태로
				$('.bg1', $b1record1).css({
					top: '0'
				})
			}

			// Step 순번 활성 및 요소 초기화
			function step(){
				$step_item.removeClass('on').filter('.step'+n).addClass('on'); // 스텝 활성
				$q_item.removeClass('on').filter('.step'+n).addClass('on'); // 문제 활성
				// 다음으로 버튼
				if( n == $step_item.length ){
					$b1next1.text('처음으로');
				}else{
					$b1next1.text('다음으로');
				}
				$t1.text($t1._v0); // 도움말 기본값으로
				$w1b1t1.show(); // 녹음 버튼 보임
				$score.hide(); // 점수 감춤
				$fg1.hide(); // 푸터 감춤
			}


			/** ◇◆ 녹음시작종료. 20221111. 20221114. 20221115. @m.
			 * 20221114. 녹음중 애니메이션 CSS 대신 JS 로 수정
			 * 20221115. 완료버튼 없음
			 */
			(function(){


				//var $b1record1 = $('#btn-record-sw'); // 녹음시작/완료 버튼 (( 위에서 받아옴
				var $audio1 = $('#audio-e1'); // 오디오 요소 ( 20221111. 감춰둠)
				//var $b1done1 = $('#btn-done'); // 완료 버튼
				var timer; // 타이머
				//var msec = 10000; // ☆★ 음성입력 기준 시간 설정 (( 위에서 받아옴

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
						startRecord(); // 시작 동작 호출
						//console.log('녹음시작', !!isRecording);

					}else{

						// 녹음 종료
						mediaRecorder.stop();
						isRecording = false;
						stopRecord(); // 종료 동작 호출
						//console.log('녹음종료', !!isRecording);

					}
				}

				// 바로 녹음 시작
				//if(!isRecording){ // 녹음중 아니면
				//	$b1record1.trigger('click'); // 녹음시작
				//}

				// 완료 버튼 클릭
				//$b1done1.on('click', function(){
				//	if(!!isRecording){ // 녹음중
				//		$b1record1.trigger('click'); // 녹음종료
				//	}
				//});

				// 녹음 시작 시 동작
				function startRecord(){

					// 게이지바 차오르는 동작
					$('.bg1', $b1record1).css({
						top: '0'
					}).stop().animate({
						top: '-100%'
					}, msec, 'linear', function(){});

					// 완료 버튼 안누르면 msec 초 후 종료
					//msec += 900; // 녹음시간 상계
					clearTimeout(timer);
					timer = setTimeout(function(){
						if(!!isRecording){ // 녹음중
							$b1record1.trigger('click'); // 녹음종료
						}
					}, msec); // 밀리초 지연
			
				}

				// 녹음 종료 시 동작
				function stopRecord(){

					// 게이지바 바로 가득 채움
					$('.bg1', $b1record1).stop().animate({
						top: '-100%'
					}, 200, function(){});
	
				}


			})();


		})();


	});
/*]]>*/</script>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>