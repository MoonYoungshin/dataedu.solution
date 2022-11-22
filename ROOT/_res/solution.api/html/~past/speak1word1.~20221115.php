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

	<!-- 이동 -->
	<div class="nav">
		<a href="?#★" class="b1">STEP 01</a>
		<a href="?#★" class="b1">STEP 02</a>
		<a href="?#★" class="b1">STEP 03</a>
	</div>

	<!-- 문제 -->
	<div class="text1q1">
		<div class="t1">
			Bear
		</div>
	</div>

	<!-- 문제음 -->
	<audio class="audio1q1">
		<source src="/_res/learn/data//mp3/entrance.mp3" type="audio/mpeg">
	</audio>

	<!-- 문제제어 -->
	<div class="btns3">
		<button type="button" class="b1q1play1">문제 듣기</button>
	</div>

	<!-- cp2record1 -->
	<div class="cp2record1">
		<button class="b1" id="btn-record-sw">
			<i class="bg1"></i>
			<i class="ic1"></i>
			<span class="t1">녹음시작/완료</span>
		</button>
		<audio class="audio" id="audio-e1" controls>녹음된 소리를 재생할 audio 엘리먼트</audio>
	</div>
	<!-- /cp2record1 -->

	<div class="tg1">
		버튼을 눌러 마이크를 활성화하고, 발음하세요.
		말하기가 끝나면 버튼을 누르세요.
	</div>

</div>
<!-- /cp2speak1 -->


</div>
<!-- /cp2view1 -->



<!-- cp2learn3 -->
<div class="cp2learn3">

	<!-- 지시글 -->
	<div class="cp2direction1">
		<div class="t1">
			단어를 듣고 발음해보세요.
		</div>
	</div>

	<!-- 이동 -->
	<div class="cp2nav1">
		<!-- <a href="Process_Frame2.php" class="b1 next">다음 프레임으로 이동</a> -->
		<!-- <a href="Frame4_pop1.php" class="b1 next">다음 프레임으로 이동</a> -->
		<a href="#layer1popup1" class="b1 next toggle">다음 프레임으로 이동</a>
	</div>


	<script>/*<![CDATA[*/
		$(function(){
			// 레이어팝업 바로 확인
			//$('[href="#layer1popup1"]').first().triggerHandler('click');
		});
	/*]]>*/</script>

	<!-- (레이어팝업) -->
	<!-- layer1popup1 -->
<div id="layer1popup1">

	<!-- cp2popup1 -->
	<!-- <div class="cp2popup1 amazing1"> -->
	<div class="cp2popup1"><!-- amazing1 | excelent1 | goodjob1 | tryagain1 | tryagain2 | keepitup1 -->
		<div class="cont">
			<div class="f1">Amazing!</div><!-- Amazing! | Excelent! | Good Job! | Try Again | Keep It Up! -->
			<div class="t1">
				<span class="t1t1">0</span><span class="t1t2">점</span>
				<a id="retrybutton" href="" class="b1">Re-try</a>
			</div>
		</div>
		<!-- <a href="?#★" class="b2">DAILY SCORE 보기</a> -->
		<a href="" class="a1"><span class="blind">이동</span></a>
	</div>
	<!-- /cp2popup1 -->

</div>
<!-- /layer1popup1 -->

	<!-- 지시음 -->
	<audio class="audio1d1">
		<source src="/_res/learn/data/mp3/10_Ch1.bone.mp3" type="audio/mpeg">
	</audio>

	<!-- 지시제어 -->
	<div class="cp2direction1btns1">
		<button type="button" class="b1d1play1">지시 듣기 <!-- Play --></button>
	</div>

	<!-- 문제(사진) -->
	<div class="photo1q1">
		<div class="p1">
			<img src="/_res/learn/img/L0100Phonics/x1p001.jpg" alt="★대체텍스트필수" />
		</div>
	</div>

	<!-- 문제(단어) -->
	<div class="text1q1">
		<div class="t1">
			<em class="em">T</em>oothpaste
		</div>
	</div>

	<!-- 캐릭터(모션) -->
	<div class="character1">
		<!-- <div class="p1">
		</div> -->
		<div class="p1a1">
			<!-- 귀기울여 듣는 캐릭터 -->
		</div>
	</div>

	<!-- cp2record1 (말하기녹음) -->
	<div class="cp2record1">
		<div class="tg1"><!-- (툴팁) -->
			<div class="t1">
				큰 소리로 말해보세요!
			</div>
		</div>
		<button type="button" class="b1record1">
			<span class="blind">녹음</span>
		</button>
		<div class="recording" title="녹음중">
			<i class="e1"></i><i class="e1"></i><i class="e1"></i><i class="e1"></i>
			<div class="wait">
				<i class="e1"></i><i class="e1"></i><i class="e1"></i>
				<span class="blind">녹음대기</span>
			</div>
			<div class="recognize">
				<i class="e1"></i><i class="e1"></i><i class="e1"></i>
				<span class="blind">녹음인식</span>
			</div>
			<div class="analyze">
				<i class="e1"></i><i class="e1"></i><i class="e1"></i>
				<span class="blind">녹음분석</span>
			</div>
			<div class="progress" title="타임바" data-msec="2000">
				<div class="g1">
					<div class="g1b1"></div>
				</div>
			</div>
		</div>
		<div class="done">
			<span class="blind">녹음완료</span>
		</div>
	</div>
	<!-- /cp2record1 -->

	<!-- cp2score1 -->
	<div class="cp2score1">
		<!-- cp2chart1circle1 -->
		<div class="cp2chart1circle1 s1">
			<span class="t1"><span class="t1t1" data-num="66">66</span><!-- <span class="t1t2">점</span> --></span>
			<svg class="chart" viewBox="0 0 220 220">
				<circle class="bg" cx="110" cy="110" r="100"></circle>
				<circle class="fg" cx="110" cy="110" r="100"></circle>
			</svg>
		</div>
		<!-- /cp2chart1circle1 -->
		<button type="button" class="b1retry1">
			<span class="t1">Re-try (<span class="t1t2">2</span>)</span>
		</button>
	</div>
	<!-- /cp2score1 -->


</div>
<!-- /cp2learn3 -->


<script>/*<![CDATA[*/
	$(function(){


		// 20210623. 컨테이너에 맞게 텍스트 크기를 조정하고 글꼴 크기를 가능한 한 크게 만듭니다.
		(function(){
			function update() {
				setTimeout(function(){
					textFit($('.text1q1 .t1')[0]);
				}, 100);
			}
			update();
			$(window).on('resize', function(){
				update();
			});
		})();


		/** ◇◆ 단어 발음 제어. 20210628.~20210809. 20210818. @m.
		 * 로딩 1초 뒤 지시음성 재생..
		 * 호환성
		  [CR][FF][IE11] ))OK
		  [Android)SI.Chrome.Daum.Naver] ))OK
		  [iOS)Safari] ))OK
		 * 20210709 (( 20210701. coRetry() 재시도 관련 | done2() 툴팁과 녹음버튼.. 고도화
		 * 20210712. 녹음 타임바 러닝타임을 분석완료까지
 		 * 20210809. 말하기가 끝나면 클릭! 추가
 		 * 20210809. 듣기 음성이 종료되고, 녹음버튼 활성화
 		 * 20210818. 녹음중 몇 번째 멈추는건지 분기
		 */
		(function(){

			var $nav1 = $('.cp2nav1'), // 내비(이동)
				$audio1d1 = $('.audio1d1'), // 지시음
				$b1d1play1 = $('.b1d1play1'), // 지시 듣기 (autoplay 안될 때 대비)

				$character1 = $('.character1'), // 캐릭터
				$tg1 = $('.tg1'), // 글(툴팁)그룹
				$b1record1 = $('.b1record1'), // 녹음버튼
				$recording = $('.recording'), // 녹음중
				$wait = $('.wait'), // 녹음대기
				$recognize = $('.recognize'), // 녹음인식
				$analyze = $('.analyze'), // 녹음분석
				$progress = $('.progress'), // 타임바 래퍼
				$bar = $('.progress .g1b1'), // 타임바
				$done = $('.done'), // 녹음완료
				$score1 = $('.cp2score1'), // 점수
				$b1retry1 = $('.b1retry1'), // 재시도버튼

				n = null, // $b1retry1.find('.t1t2').text(값) 에 정의해서 사용. 20210701

				audio1d1 = $audio1d1[0];

			// 초기화
			audio1d1.autoplay = true;
			audio1d1.playsinline = true;
			//audio1d1.muted = true;
			audio1d1.pause();

			$tg1._v0 = $tg1.find('.t1').text(); // 툴팁 기본값 저장. 20210701

			$tg1.hide();
			//$character1.hide();

			// 로딩 1초 뒤 지시음성 재생
			//$(window).on('load', function(e){ // 이거하면 재방문 시 재생 안될 수 있다.
				var timer;
				clearTimeout(timer);
				timer = setTimeout(function(){
					//audio1d1.play();
					var promise = audio1d1.play();
					if (promise !== undefined) {

						//promise.then(_ => { // 자동 재생(O)
						//	audio1d1.play();
						//}).catch(error => { // 자동 재생(X)
						//	$b1d1play1.addClass('active').addClass('one');
						//});

						// ES5 // [IE]bugFix) then 지원 안하나, 콘솔 에러는 없다.
						promise.then(function(result) {
							// 지시음 재생
							audio1d1.play();
						}, function(error) {
							$b1d1play1.addClass('active').addClass('one');
						});

					}else{ // [IE]
						// 지시음 재생
						audio1d1.play();
					}

				}, 1000); // 지시음성 재생 후 지연시간 보다 짧게..
			//});


			// 지시 듣기
			$b1d1play1.on('click', function(){
				audio1d1.play();
				$(this).removeClass('active');
			});

			// 녹음버튼 오버
			$b1record1.on('mouseover focusin', function(){
				$tg1.fadeIn();
			});

			// 20210809. 듣기 음성이 종료되고, 녹음버튼 활성화
			$b1record1.css({
				cursor: 'not-allowed'
			});
			$audio1d1.on('ended', function(){ // 지시음성 끝나면
				$b1record1.css({
					cursor: 'pointer'
				});
			});

			// 녹음버튼 클릭. 20210809
			$b1record1.on('click', function(){
				if( $b1record1.css('cursor') != 'not-allowed' ){
					coRetry();
				}
			});

			// 재시도 클릭. 20210701
			$b1retry1.on('click', function(){
				coRetry();
			});

			// 녹음 동작
			function record(){
				$b1record1.hide();
				$done.hide();
				$score1.fadeOut();
				$character1.fadeIn().addClass('on');
				$tg1.fadeIn();
				//$tg1.fadeIn().find('.t1').text( $tg1._v0 ); // 20210701
				$tg1.fadeIn().find('.t1').text('말하기가 끝나면 클릭!'); // 20210809
				$recording.show().attr({title: '녹음중'}); // 20210712
				//$wait.show();
				$bar.css({
					width: '0'
				}).show();
				$recognize.show();  // 녹음인식
				var msec = $progress.data('msec');
				$bar.animate({
					width: '100%'
				}, msec + 3000, 'linear', function(){ // 녹음시간 + 분석시간 (☆)
				});
				timer = setTimeout(function(){ // 20210809
					$wait.hide();
					$recognize.hide();
					$analyze.show();
					$recording.show().attr({title: '분석중'}); // 20210712
					timer = setTimeout(function(){ // 20210809
						done();
					}, 3000); // 분석시간 (☆)
				}, msec); // 녹음시간
			}

			// 재시도 관련. 20210701
			function coRetry(){
				//console.log(n);
				if( n === null ){ // 최초
					n = parseInt( $b1retry1.find('.t1t2').text() );
					record();
				}else{ // 재시도
					n = parseInt( $b1retry1.find('.t1t2').text() );
					if(n >= 1){
						record();
						n--;
						$b1retry1.find('.t1t2').text(n);
					}
					if(n < 1){
						$b1retry1.off().css({
							cursor: 'default'
						});
					}
				}
			}

			// 분석 끝나면 호출
			function done(){
				$analyze.hide();
				$recording.hide().attr({title: ''}); // 20210712
				$bar.hide();
				$done.show();
				setTimeout(function(){
					$character1.fadeOut().removeClass('on');
					$score1.fadeIn();
					animateChart(); // 원 그래프 애니메이션 호출
					$nav1.addClass('active').addClass('one'); 	// 내비(이동) 보이기

					done2(); // 20210701
				}, 1000); // 지연시간
			}

			// 툴팁과 녹음버튼.. 고도화. 20210809
			function done2(){
                console.log('done2');
				//$tg1.find('.t1').text('정답 확인 후 재녹음 불가!');
				//$tg1.fadeIn();
				//setTimeout(function(){
				//	if( $done.is(':visible') ){
				//		$tg1.hide();
				//	}
						$tg1.find('.t1').text($tg1._v0);
				//}, 3000); // 지연시간
				if( n <= 0 ){
					$done.show();
					$b1record1.hide();
				}else{
					$done.hide();
					$b1record1.show();
				}
			}

			// 녹음중(+분석중) 클릭. 20210809. 20210818
			$recording.on('click', function(){
				// 진행바 즉시 완료 후 이후 진행
				$bar.stop().animate({
					width: '100%'
				}, 200, 'linear', function(){
					clearTimeout(timer); // 녹음 동작 record() 내부 타이머 중단
					done();
				});
				// 몇 번째 멈추는건지 분기. 20210818
				if( n == 2 ){
					console.log('첫번째');
				}else if( n == 1 ){
					console.log('두번째. Retry1번');
				}else if( n == 0 ){
					console.log('세번째. Retry2번');
				}
			});


			/** ◇◆ SVG. 원 그래프 애니메이션. 20210622. @m.
			 */
			//(function(){
				var $my = $('.cp2chart1circle1');
				var myOST = $my.offset().top - $(window).height() + $my.height();

				// 바로 호출
				//animateChart();

				// 애니메이션
				function animateChart(){
					$my.each(function(){
						var $item = $(this);
						var $title = $('.t1t1', $item);
						var $circle = $('circle.fg', $item);
						var targetNum = $title.attr('data-num');

						$({rate: 0}).animate({rate: targetNum},{
							duration: 1500,
							progress: function(){
								var now = this.rate;
								var amount = 628 - ( 628 * now / 100 );
								$title.text( Math.floor(now) ); // 값카운트
								$circle.css({strokeDashoffset: amount}); // 선그리기
							}
						});
					});
				}
			//})();


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