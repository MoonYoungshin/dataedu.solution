<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221201 | @m | 요구반영. 결함개선. 고도화.
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
<title>트래킹 (JS-Tracking) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/motion1tracking1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/motion1tracking1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2set6 -->
<div class="cp2set6 type2">
	<div class="cont">
		<div class="item">
			<!-- cp2player1video1 -->
			<div class="cp2player1video1">
				<div class="w1">
					<video class="video" preload="auto" controls="controls" autoplay="autoplay" playsinline="playsinline">
						<source src="/_res/solution.api/data/mp4/sample01.mp4" type="video/mp4">
						<p>Alas, your browser doesn't support html5 video.</p>
					</video>
					<div class="controls">
						<button type="button" class="b1 play"><i class="ic1"></i><span class="t1">Play</span></button>
					</div>
				</div>
			</div>
			<!-- /cp2player1video1 -->
		</div>
	</div>
</div>
<!-- /cp2set6 -->


<!-- cp2fg1 -->
<div class="cp2fg1">
	<a href="motion1tracking1.php" class="button type1"><span class="t1">처음으로</span></a>
</div>
<!-- /cp2fg1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/
	$(function(){

		/** ◇◆ video 제어 + 자동재생. 20221129. @m.
		 * 
		 */
		(function(){

			var
				my = '.cp2player1video1', // 래퍼
				video = '.video', // 비디오
				b1play = '.b1.play', // 재생 버튼
				timer;
			
			var $my = $(my);

			// 자동 재생
			var video_e0 = $(video, $my)[0];
			video_e0.autoplay = true;
			video_e0.pause();
			video_e0.muted = true;

			//timer = setTimeout(function(){
				//video_e0.play();
				var promise = video_e0.play();
				if (promise !== undefined) {
					// ES5 // [IE]bugFix) then 지원 안하나, 콘솔 에러는 없다.
					promise.then(function(result) {
						//video_e0.play();
						doPlay($(b1play, $my));
					}, function(error) {
						console.log(error);
					});
				}else{ // [IE]
					video_e0.play();
				}
			//}, 1000);

			// 재생 버튼 클릭
			$(b1play, $my).on('click', function(){
				var $this = $(this);
				// 나만 재생
				doPlay($this);
			});

			// 재생 끝나면
			$(video, $my).on('ended', function(){
				var $this = $(this);
				$this.closest(my)
					.removeClass('play pause');
			});

			// 재생 동작
			function doPlay($this){
				$this.closest(my)
					.addClass('play')
					.removeClass('pause');
				var vdo = $this.closest(my).find(video)[0];
				vdo.play();
				vdo.muted = false;
			};

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