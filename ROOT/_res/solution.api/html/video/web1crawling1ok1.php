<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221109 | @m | 요구반영. 결함개선. 고도화.
 * 20221201 | @m | 
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
<title>영상정보수집 (V-Ghost) - 엔진체험 | 데이터에듀 API</title>

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


<!-- cp2cnb1 -->
<div class="cp2cnb1" id="cp2cnb1">
	<ul>
		<li><a href="#cp2vghost1"><span class="t1">영상 01 [Playlist]  이 팝송 너도 알지? 브루노 마스 명곡 노래 모음 가사 | Bruno Mars best songs playlist</span></a></li>
		<!-- <li><a href="#cp2vghost1"><span class="t1">영상02 /S3CtC2Tp4Xk/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상03 /Kgl7NzxCCus/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상04 /444444444444일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십일이삼사오륙칠팔구십/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상05 /555555555555/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상06 /666666666666/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상07 /777777777777/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상08 /888888888888/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상09 /999999999999/</span></a></li>
		<li><a href="#cp2vghost1"><span class="t1">영상10 /000000000000/</span></a></li> -->
	</ul>
</div>
<!-- /cp2cnb1 -->


<!-- cp2vghost1 -->
<div class="cp2vghost1" id="cp2vghost1">
	<h4 class="h1">영상01</h4>
	<div class="result">
		<div class="column">
			<div class="gg1">
				<h5 class="tt1">[ 영상 정보 ]</h5>
				<!-- cp2info1 -->
				<div class="cp2info1">
					<ul class="dl1">
						<li class="di1 url">
							<span class="dt1">영상주소</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 title">
							<span class="dt1">영상제목</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 date">
							<span class="dt1">영상날짜</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 like">
							<span class="dt1">영상 좋아요</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 channel-name">
							<span class="dt1">영상채널명</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 channel-url">
							<span class="dt1">영상채널 URL</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 videotag">
							<span class="dt1">영상태그</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 hashtag">
							<span class="dt1">해시태그</span>
							<div class="dd1">
								-
							</div>
						</li>
						<li class="di1 description">
							<span class="dt1">영상설명</span>
							<div class="dd1">
								-
							</div>
						</li>
					</ul>
				</div>
				<!-- /cp2info1 -->
			</div>
		</div>
		<div class="column">
			<div class="gg1">
				<h5 class="tt1">[ 영상 댓글 ]</h5>
				<!-- cp2reply1 -->
				<div class="cp2reply1 fscroll1-xy">
					<!-- <ul class="dl1">
						<li class="di1">
							<span class="dt1">작성자</span>
							<div class="dd1">
								-
							</div>
							<span class="dt1">좋아요</span>
							<div class="dd1">
								-
							</div>
							<span class="dt1">댓글</span>
							<div class="dd1">
								-
							</div>
						</li>
					</ul> -->
				</div>
				<!-- /cp2reply1 -->
			</div>
		</div>
	</div>
</div>
<!-- /cp2vghost1 -->


<script>/*<![CDATA[*/
$(function(){


	/** ◇◆ 메뉴 클릭하면 JSON 데이터 가져오기. 20220817. @m.
	 */
	(function(){
		var $m = $('#cp2cnb1 li'), // 메뉴 항목
			$c = $('#cp2vghost1'), // 컨텐츠 래퍼
			$c1 = $('.cp2info1', $c), // 영상 정보 래퍼
			$c2 = $('.cp2reply1', $c); // 영상 댓글 래퍼


		// 바로가기 클릭
		$m.on('click', function(e){
			e.preventDefault();
			if( $(this).is('.on') ) return false;

			$m.removeClass('on');
			$(this).addClass('on');

			$c.attr({'data-area': $(this).parent().index() }); // 순번값

			$('.h1', $c).text( $('.t1', this).text() ); // 영상 제목

			getData1( $(this) ); // 영상 정보 가져오기 호출
			getData2( $(this) ); // 영상 댓글 가져오기 호출

		});

		// 초기화
		$m.eq(0).triggerHandler('click'); // 첫째 선택


		// 영상 정보 가져오기
		function getData1( $m ){

			var idx = $m.index(); // 인덱스

			// getJSON
			$.getJSON('./web1crawling1.json', function(data) {

				var html_desc = '', // 영상설명
					html_videotag = '', // 영상태그
					html_hashtag = ''; // 해시태그
				
				// 가공
				for(key in data[idx].description){
					html_desc += data[idx].description[key] + '<br />';
				}
				for(key in data[idx].tag.videotag){
					if( key != 0 ){
						html_videotag += ', ';
					}
					html_videotag += data[idx].tag.videotag[key];
				}
				for(key in data[idx].tag.hashtag){
					if( key != 0 ){
						html_hashtag += ', ';
					}
					html_hashtag += data[idx].tag.hashtag[key];
				}

				// 갱신
				$('.url .dd1', $c1).text( data[idx].url ); // 영상주소
				$('.title .dd1', $c1).text( data[idx].title ); // 영상제목
				$('.date .dd1', $c1).text( data[idx].date ); // 영상날짜
				$('.like .dd1', $c1).text( data[idx].like ); // 영상 좋아요
				$('.channel-name .dd1', $c1).text( data[idx].channel.name ); // 영상채널명
				$('.channel-url .dd1', $c1).text( data[idx].channel.url ); // 영상채널 URL
				$('.videotag .dd1', $c1).text( html_videotag ); // 영상태그
				$('.hashtag .dd1', $c1).text( html_hashtag ); // 해시태그 
				$('.description .dd1', $c1).html( html_desc ); // 영상설명

			});
		};

		// 영상 댓글 가져오기
		function getData2( $m ){

			var idx = $m.index(); // 인덱스

			$.getJSON('./web1crawling1.json', function(data) {
				
				var dataTotal = data[idx].comment.length,
					html_list = ''; // 영상 댓글 목록 태그

				makeHTML( dataTotal );

				// 영상 댓글 목록 생성
				function makeHTML(dataTotal){
					//console.log( dataTotal );
					if( !!dataTotal ){
						$c2.html('<ul class="dl1" />');
						for( var i = 0; i < dataTotal; i++ ){
							html_list += '<li class="di1">';
							html_list += '	<span class="dt1">작성자</span>';
							html_list += '	<div class="dd1">';
							html_list += '		' + data[idx].comment[i]['작성자'];
							html_list += '	</div>';
							html_list += '	<span class="dt1">좋아요</span>';
							html_list += '	<div class="dd1">';
							html_list += '		' + data[idx].comment[i]['좋아요'];
							html_list += '	</div>';
							html_list += '	<span class="dt1">댓글</span>';
							html_list += '	<div class="dd1">';
							html_list += '		' + data[idx].comment[i]['댓글'];
							html_list += '	</div>';
							html_list += '</li>';
						}
						$('.dl1', $c2).html( html_list );
					}else{ // 데이터 없으면
						$c2.html( '<p>등록된 내용이 없습니다.</p>' );
					}
				}
			});
		};

	})();


});
/*]]>*/</script>


<!-- cp2fg1 -->
<div class="cp2fg1">
	<a href="web1crawling1.php" class="button type1"><span class="t1">처음으로</span></a>
	<a href="?#★" class="button type1"><span class="t1">다운로드</span><i class="ic1 download"></i></a>
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