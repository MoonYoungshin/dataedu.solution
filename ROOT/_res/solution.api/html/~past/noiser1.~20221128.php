<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221125 | @m | 요구반영. 결함개선. 고도화.
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
<title>음향합성 (JS-Noiser) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/noiser1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/audio/noiser1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set4 -->
<div class="cp2set4">
	<div class="w1">
		<!-- cp2sound1select1 -->
		<div class="cp2sound1select1">
			<!-- selectmenu1 -->
			<div class="selectmenu1">
				<strong class="title"><a href="#selectmenu1option0" class="a1"><span class="t1">음향효과를 선택하세요.</span><i class="ic1"></i></a></strong>
				<div class="selectmenu1option" id="selectmenu1option0">
					<ul class="options">
						<li class="option">
							<audio class="audio" preload="auto">
								<source src="/_res/solution.api/data/wav/entrance.mp3" type="audio/wav">
								<p>Alas, your browser doesn't support html5 audio.</p>
							</audio>
							<button type="button" class="b1 play"><i class="ic1"></i><span class="t1">Play</span></button>
							<a href="?#★1" class="a1">경적소리</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /selectmenu1 -->
		</div>
		<!-- /cp2sound1select1 -->
	</div>
	<div class="w2">
		<i class="ic1 plus"><i class="ic1"></i><span class="t1">+</span></i>
	</div>
	<div class="w3">

		<!-- cp2set5 -->
		<div class="cp2set5">
			<div class="cont">
				<div class="item">
					<label class="label">
						<input type="radio" name="★1radio1" checked>
						<span class="t1">샘플 테스트</span>
					</label>
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
					<!-- cp2my1file1 -->
					<div class="cp2my1file1">
						<label class="label">
							<input type="radio" name="★1radio1">
							<span class="t1">내 파일 테스트</span>
						</label>
						<div class="w1">
							<div class="w1w1">
								<div class="w1file">
									<input type="file" class="file" id="upload-file">
									<button class="b1 button type1"><span class="t1">파일 업로드</span><i class="ic1 upload"></i></button>
								</div>
								<div class="tg1">
									* 지원가능한 파일 확장자 : wav<br>
									* 500KB 이하의 음성 파일을 이용해주세요.<br>
									<!-- * 파일 용량 5MB 이하<br> -->
									* 음성 길이 30분 이하<br>
								</div>
							</div>
							<div class="w1w1 preview">
								<div id="preview-txt">
									<!-- 업로드 파일명 -->
								</div>
							</div>
						</div>
					</div>
					<!-- /cp2my1file1 -->
				</div>
			</div>
		</div>
		<!-- /cp2set5 -->

	</div>
</div>
<!-- /cp2set4 -->






<!-- cp2fg1 -->
<div class="cp2fg1">
	<button type="submit" class="button submit type1"><span class="t1">결과보기</span></button>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/


	/** ◇◆ 샘플 테스트. 버튼 선택하면 radio 선택. 20221124. @m.
	 */
	(function(){
		var $my = $('.cp2set5'), // 샘플 테스트 래퍼
			item = '.item', // 항목
			b1 = '.b1', // 버튼
			radio = 'input[type="radio"]'; // 라디오
		// 버튼 클릭하면
		$my.on('click', b1, function(){
			$(this).closest(item).find(radio).trigger('click');
		});
	})();


	/** ◇◆ 내 파일 테스트. 인풋파일 선택하면 radio 선택. 20221124. @m.
	 */
	(function(){
		var $my = $('.cp2my1file1'), // 샘플 테스트 래퍼
			file = '.file', // 버튼
			radio = 'input[type="radio"]'; // 라디오

		// 버튼 클릭하면
		$my.on('click', file, function(){
			$my.find(radio).trigger('click');
		});
	})();


	/** ◇◆ 첨부파일 파일명 보기. 20221125. @m.
	 */
	(function(){
		
		var $file = $('input[type="file"]#upload-file'), // 첨부파일 업로드
			$txt = $('#preview-txt'), // 첨부파일명 담을거
			preview = '.preview'; // 미리보기 래퍼

		// 파일 선택하면
		$file.on('change', function(e) {
			var file = e.target.files[0];
			var reader = new FileReader(); 
			if( !isProperExt(file) ){
				alert('지원 가능 파일 확장자(wav)가 아닙니다.');
				return false;
			}
			if( isOverSize(file) ){
				alert('500KB 이하의 음성 파일을 이용해주세요.');
				return false;
			}
			// 파일 읽기 성공하면
			reader.addEventListener('load', function(e) {
				$txt.text(file.name);
				$txt.closest(preview).addClass('on'); // 미리보기 래퍼 활성
			});
			reader.readAsDataURL(file);
		});

		// 확장자 제한
		function isProperExt(file) {
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


/*]]>*/</script>



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