<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221125 | @m | 요구반영. 결함개선. 고도화.
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


<!-- cp2set3 type2 -->
<div class="cp2set3 type2">
	<h4 class="blind">진행완료</h4>
	<div class="cont">
		<div class="item">
			<h5 class="tt1">
				<i class="ic1"></i>
				<span class="t1">원본파일</span>
			</h5>
			<!-- cp2player1 -->
			<div class="cp2player1">
				<div class="w1">
					<audio class="audio" preload="auto">
						<source src="/_res/solution.api/data/mp3/entrance.mp3" type="audio/wav">
						<p>Alas, your browser doesn't support html5 audio.</p>
					</audio>
					<div class="progress">
						<i class="bar"></i>
					</div>
					<div class="time">
						<span class="current">00:00</span>
						<i class="sep">/</i>
						<span class="total">00:05</span>
					</div>
					<div class="controls">
						<button type="button" class="b1 play"><i class="ic1"></i><span class="t1">Play</span></button>
						<button type="button" class="b1 pause"><i class="ic1"></i><span class="t1">Pause</span></button>
					</div>
				</div>
			</div>
			<!-- /cp2player1 -->
		</div>
		<div class="item">
			<h5 class="tt1">
				<i class="ic1"></i>
				<span class="t1">음성 정제 파일</span>
			</h5>
			<!-- cp2player1 -->
			<div class="cp2player1">
				<div class="w1">
					<audio class="audio" preload="auto">
						<source src="/_res/solution.api/data/mp3/humming.mp3" type="audio/wav">
						<p>Alas, your browser doesn't support html5 audio.</p>
					</audio>
					<div class="progress">
						<i class="bar"></i>
					</div>
					<div class="time">
						<span class="current">00:00</span>
						<i class="sep">/</i>
						<span class="total">00:05</span>
					</div>
					<div class="controls">
						<button type="button" class="b1 play"><i class="ic1"></i><span class="t1">Play</span></button>
						<button type="button" class="b1 pause"><i class="ic1"></i><span class="t1">Pause</span></button>
					</div>
					<div class="btns">
						<a href="?#★" class="b1 button type1"><span class="t1">다운로드</span><i class="ic1 download"></i></a>
					</div>
				</div>
			</div>
			<!-- /cp2player1 -->
		</div>
	</div>
</div>
<!-- /cp2set3 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<a href="denoise1.php" class="button type1"><span class="t1">처음으로</span></a>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/
	$(function(){

		/** ◇◆ audio 제어. 20221125. @m.
		 * 2개 이상 오디오 제어 가능
		 * 오디오 재생 중 다른 거 재생 버튼 클릭하면 모든 거 일시 정지 후 나만 재생
		 */
		(function(){

			var
				my = '.cp2player1', // 래퍼
				audio = '.audio', // 오디오
				b1play = '.b1.play', // 재생 버튼
				b1pause = '.b1.pause', // 일시정지 버튼
				progress_bar = '.progress .bar', // 진행바
				time_curr = '.time .current', // 현재 재생시각
				time_total = '.time .total', // 재생시간(오디오 길이)
				timer;
			
			var $my = $(my);

			doReset() // 초기화 호출

			// 초기화 동작
			function doReset(){
				$(audio, $my).each(function(){
					var au = $(this)[0];
					//au.autoplay = true;
					//au.pause();
					// 재생시간 표시
					au.onloadedmetadata = () => {
						$(au).closest(my).find(time_total).html(doTime(au.duration) + '');
					};
				});
			};

			// 재생 버튼 클릭
			$(b1play, $my).on('click', function(){
				var $this = $(this);
				// 모든 오디오 일시정지
				$(audio, $my).each(function(){
					var $this = $(this);
					doPause($this)
				});
				// 나만 재생
				doPlay($this);
			});

			// 일시정지 버튼 클릭
			$(b1pause, $my).on('click', function(){
				var $this = $(this);
				doPause($this);
			});

			// 재생 끝나면
			$(audio, $my).on('ended', function(){
				var $this = $(this);
				$this.closest(my)
					.find(progress_bar).css({width: '100%'}) // 100% 이전 멈춤 보정
				clearInterval(timer);
				timer = setTimeout(function(){
					$this.closest(my)
						.removeClass('play pause')
						.find(progress_bar).css({width: '0'})
						.end().find(time_curr).html( doTime(0) );
				}, 100); // (( setInterval 값
			});

			// 재생 동작
			function doPlay($this){
				$this.closest(my)
					.addClass('play')
					.removeClass('pause');
				var au = $this.closest(my).find(audio)[0];
				au.play();
				do1(au);
			};

			// 일시정지 동작
			function doPause($this){
				$this.closest(my)
					.addClass('pause');
				var au = $this.closest(my).find(audio)[0];
				au.pause();
				clearInterval(timer);
			};

			// 일정간격 진행바 갱신 호출
			function do1(au){
				clearInterval(timer);
				timer = setInterval(function(){
					if(!au.paused){
						updateProgressBar(au);
					}
				}, 100); // 100ms 하면 짧은 오디오에서 100% 이전 멈춤 유의
			};

			// 진행바 갱신
			function updateProgressBar(au){
				var pct = (au.currentTime / au.duration) * 100;
				$(au).closest(my).find(progress_bar).css({width: pct + '%'}); // 진행바 너비
				$(au).closest(my).find(time_curr).html( doTime(au.currentTime) ); // 진행시각 표시
			}

			// 초를 00:00
			function doTime(sec){
				var min = parseInt((sec%3600)/60);
				var sec = parseInt(sec%60);
				min = (min < 10)? '0'+min: min;
				sec = (sec < 10)? '0'+sec: sec;
				return min + ':' + sec;
			}

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