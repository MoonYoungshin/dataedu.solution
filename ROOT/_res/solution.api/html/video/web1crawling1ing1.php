<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221109 | @m | 요구반영. 결함개선. 고도화.
 * 20221114 | @m | 
 * 20221201 | @m | 
 * 20221212 | @m | 
 * 20221222 | @m | 진행바
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
<title>영상정보수집 (JS-Ghost) - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/web1crawling1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/web1crawling1_inc1.php"; ?>
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
			영상 정보를 수집 중입니다.<br>
			잠시만 기다려주세요.<br>
		</p>
	</div>
	<div class="f1">
		<i class="ic1 indy ing video1ing1"></i>
		<!-- cp2progress1 -->
		<div class="cp2progress1">
			<div class="bg1">	</div>
			<div class="gg1">
				<div class="t1">
					<!-- 영상 정보 수집 중 -->
				</div>
				<div class="g1">
					<div class="t2">
						<span class="t2t1">0</span><span class="t2t2">%</span>
					</div>
				</div>
			</div>
		</div>
		<!-- /cp2progress1 -->
	</div>
</div>
</div>
<!-- /cp2jumbotron1 -->


</div>
<!-- /cp2view1 -->


<script>/*<![CDATA[*/
	$(function(){
	
		/** ◇◆ 진행바. 20221222. @m.
		 */
		(function(){
			var $my = $('.cp2progress1'),
				$gg = $('.gg1', $my), // 그래프그룹
				$g = $('.g1', $my), // 그래프
				$t = $('.t2t1', $my); // 글

			// 초기 호출
			init();
			$my.addClass('on'); // 활성 
			doProgress(); // 진행

			// 초기화 동작
			function init(){
				sessionStorage.removeItem('total_url');
				$my.removeClass('on');
				$g.css({
					width: 0
				});
			}

			// 진행 동작
			function doProgress(msec){
				var msec = msec || 20000; // 개당 수집 시간 || 기본 20초
				var urlNum = 	sessionStorage.getItem('total_url') || 1; // 수집할 URL 수 || 기본 1개
				var time = msec * urlNum; // 총시간
				// 그래프 그리기
				$g.animate({
						width: '100%'
					}, time, 'linear', function() {
						//init();
						//location.href = "web1crawling1ok1.php" // 수집 완료 페이지로 이동
				});
				// 카운팅 0~100%
				$({rate: 0}).animate({rate: 100},{
					duration: time,
					easing: 'linear',
					progress: function(){
						var now = this.rate;
						$t.text( Math.floor(now) ); // 값카운트
					}
				});
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